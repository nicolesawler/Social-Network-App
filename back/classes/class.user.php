<?php
class USER
{
    /** @var object $pdo Copy of PDO connection */
    private $db;
     /** @var object of the logged in user */
    private $userloggedin;
    /** @var string error msg */
    private $msg;
    public $error;
    /** @var int number of permitted wrong login attempts */
    private $permitedAttempts = 5;

    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
    
    
       
    /**
    * Return the logged in user.
    * @return user array data
    */
    public function getUser()
    {
        return $this->userloggedin;
    }

    
    /**
    * Check if email is already used function
    * @param string $email User email.
    * @return boolean of success.
    */
    public function checkEmail($email)
    {
        $stmt = $this->db->prepare('SELECT user_id FROM users WHERE user_email = ? limit 1');
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function checkUsername($uname)
    {
        $pdo = $this->db;
        $stmt = $pdo->prepare('SELECT user_name FROM users WHERE user_name = ? limit 1');
        $stmt->execute([$uname]);
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }   
    
    
    public function register($fname,$lname,$uname,$umail,$upass,$dob,$zodiac,$day,$month,$year,$age,$under_13)
    {
       try
       {
        
            $hash = $this->hashPass($upass);
            $activation_code = $this->hashPass(date('Y-m-d H:i:s').$umail);
            
            //get users ip
            $ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
            
            $realip = $this->get_ip();
          
           $stmt = $this->db->prepare("INSERT INTO users(user_name, "
                   . "user_email, "
                   . "user_pass, "
                   . "first, last, "
                   . "user_ip, "
                   . "user_ip_x_fwd, "
                   . "confirm_code, "
                   . "user_role,role,"
                   . "birthday, "
                   . "zodiac, "
                   . "birth_month, "
                   . "birth_day, "
                   . "birth_year, "
                   . "age, "
                   . "under_13) "
                   . "VALUES(:uname, :umail, :upass, :fname, :lname, :ip, :ipx,  :confirm_code, 'USER', 'USER', :dob, :zodiac, :month, :day, :year, :age, :under13)");
              
  
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $hash);         
           $stmt->bindparam(":fname", $fname);            
           $stmt->bindparam(":lname", $lname);            
           $stmt->bindparam(":ip", $realip);            
           $stmt->bindparam(":ipx", $ip);            
           $stmt->bindparam(":confirm_code", $activation_code);            
           $stmt->bindparam(":dob", $dob);            
           $stmt->bindparam(":zodiac", $zodiac);            
           $stmt->bindparam(":month", $month);            
           $stmt->bindparam(":day", $day);            
           $stmt->bindparam(":year", $year);            
           $stmt->bindparam(":age", $age);            
           $stmt->bindparam(":under13", $under_13);            
           $stmt->execute(); 
           
           $lastId = $this->db->lastInsertId();
           if($stmt){
               return $lastId; 
           }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    
    
    public function get_ip() {
    $client  = filter_input(INPUT_SERVER, 'HTTP_CLIENT_IP');//@
    $forward = filter_input(INPUT_SERVER, 'HTTP_X_FORWARDED_FOR');//@
    $remote  = filter_input(INPUT_SERVER, 'REMOTE_ADDR');

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
    }
    
    
    
    /**
    * Login function
    * @param string $umail User email.
    * @param string $upass User password.
    * @param string $uname User name.
    *
    * @return bool Returns login success.
    */
    public function login($uname,$umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          
          $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
          
          if($stmt->rowCount() > 0)
          {
              
            if(password_verify($upass,$userInfo['user_pass'])){
                   
                if($userInfo['wrong_logins'] <= $this->permitedAttempts){
                    
                    $this->userloggedin = $userInfo;
                    
                    //sessuib here
                    //session_regenerate_id();
                   if($this->insertInitialSession( session_id() , $userInfo['user_id'] )){
                        $_SESSION['gw_user_id'] = $userInfo['user_id'];
                        $_SESSION['gw_first'] = $userInfo['first'];
                        $_SESSION['gw_last'] = $userInfo['last'];
                        $_SESSION['gw_user_email'] = $userInfo['user_email'];
                        $_SESSION['gw_zodiac'] = $userInfo['zodiac'];
                        $_SESSION['gw_user_name'] = $userInfo['user_name'];
                        $_SESSION['gw_user_role'] = $userInfo['user_role'];
                        $_SESSION['gw_age'] = $userInfo['age'];
                        $_SESSION['gw_birthday'] = $userInfo['birthday'];

                        return true;
                   }else{
                        $this->msg = 'Porblem adding session';
                        return false;   
                   }

                    
                }else{
                    $this->msg = 'This user account is blocked, please contact our support department.';
                    return false;
                }
                
            }else{
                $this->registerWrongLoginAttempt($umail);
                $this->msg = 'Invalid login information or the account is not activated.';
                return false;
            } 
              

          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   /**
    * Check if user is logged in
    * Sets session for user_id *IMPORTANT*
    * @return bool.
    */
   public function is_loggedin()
   {
      if(isset($_SESSION['gw_user_id']))
      {
         return true;
      }
   }
   
    /**
    * Logout the user and remove it from the session.
    *
    * @return true
    */
    public function logout() {
        $_SESSION['gw_user_id'] = null;
        //session_regenerate_id();
        session_destroy();
        unset($_SESSION['gw_user_id']);
        return true;
    }

   
   
   
    public function getid($uname,$umail)
   {
      try
      {
         $stmt = $this->db->prepare("SELECT user_id FROM users WHERE user_name=:uname AND user_email=:umail  ");
         $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
         $IDrow=$stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0)
        {
            return $IDrow;
        }
        else
        {
           return false;
        }
        
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
   }
 
    
 
       
   
     public function getProfileUserInfo($user_name)
   {     
            try
            {
               $stmt = $this->db->prepare("SELECT user_id, user_name, user_email, user_pass, user_created, first, last, birthday, wrong_logins, last_login, zodiac, relationship_status, user_description, user_phone_raw, user_phone, country, birth_month, birth_day, birth_year, age, under_13, gender, city, province,postal "
                       . "FROM users WHERE user_name=:user_name ORDER BY user_id DESC LIMIT 1");
               $stmt->bindparam(":user_name", $user_name);
               $stmt->execute();
               $viewProfile=$stmt->fetch();

              if($stmt->rowCount() > 0)
              {
                  return $viewProfile;
              }
              else
              {
                 return false;
              }

           }
           catch(PDOException $e)
           {
              echo $e->getMessage();
           }
   }
   
   
   
   
   public function getProfileUserById($user_id)
   {     
            try
            {
               $stmt = $this->db->prepare("SELECT user_id, user_name, first, last FROM users WHERE user_id=:user_id ORDER BY user_id DESC LIMIT 1");
               $stmt->bindparam(":user_id", $user_id);
               $stmt->execute();
               $ownerInfo  = $stmt->fetch(PDO::FETCH_ASSOC);

              if($stmt->rowCount() > 0)
              {
                  return $ownerInfo;
              }
              else
              {
                 return false;
              }

           }
           catch(PDOException $e)
           {
              echo $e->getMessage();
           }
   }
   
   
   
   
    
    /**
    * Email the confirmation code function
    * @param string $email User email.
    * @return boolean of success.
    */
    private function sendConfirmationEmail($email){
        $pdo = $this->db;
        $stmt = $pdo->prepare('SELECT confirm_code FROM users WHERE user_email = ? limit 1');
        $stmt->execute([$email]);
        $code = $stmt->fetch();

        $subject = 'Confirm your registration';
        $message = 'Please confirm you registration by pasting this code in the confirmation box: '.$code['confirm_code'];
        $headers = 'X-Mailer: PHP/' . phpversion();

        if(mail($email, $subject, $message, $headers)){
            return true;
        }else{
            return false;
        }
    }

    /**
    * Activate a login by a confirmation code and login function
    * @param string $email User email.
    * @param string $confCode Confirmation code.
    * @return boolean of success.
    */
    public function emailActivation($email,$confCode){
        $pdo = $this->db;
        $stmt = $pdo->prepare('UPDATE users SET confirmed = 1 WHERE user_email = ? and confirm_code = ?');
        $stmt->execute([$email,$confCode]);
        if($stmt->rowCount()>0){
            $stmt = $pdo->prepare('SELECT user_id, first, last, user_email, wrong_logins, user_role FROM users WHERE user_email = ? and confirmed = 1 limit 1');
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            $this->user = $user;
            session_regenerate_id();
            if(!empty($user['email'])){
            	$_SESSION['user']['user_id'] = $user['user_id'];
	            $_SESSION['user']['first'] = $user['first'];
	            $_SESSION['user']['last'] = $user['last'];
	            $_SESSION['user']['user_email'] = $user['user_email'];
	            $_SESSION['user']['user_role'] = $user['user_role'];
	            return true;
            }else{
            	$this->msg = 'Account activitation failed.';
            	return false;
            }            
        }else{
            $this->msg = 'Account activitation failed.';
            return false;
        }
    }

    /**
    * Password change function
    * @param int $id User id.
    * @param string $pass New password.
    * @return boolean of success.
    */
    public function passwordChange($id,$pass){
        $pdo = $this->db;
        if(isset($id) && isset($pass)){
            $stmt = $pdo->prepare('UPDATE users SET user_pass = ? WHERE user_id = ?');
            if($stmt->execute([$id,$this->hashPass($pass)])){
                return true;
            }else{
                $this->msg = 'Password change failed.';
                return false;
            }
        }else{
            $this->msg = 'Provide an ID and a password.';
            return false;
        }
    }

    /**
    * Assign a role function
    * @param int $id User id.
    * @param int $role User role.
    * @return boolean of success.
    */
    public function assignRole($id,$role){
        $pdo = $this->db;
        if(isset($id) && isset($role)){
            $stmt = $pdo->prepare('UPDATE users SET role = ? WHERE user_id = ?'); //user_role?
            if($stmt->execute([$id,$role])){
                return true;
            }else{
                $this->msg = 'Role assign failed.';
                return false;
            }
        }else{
            $this->msg = 'Provide a role for this user.';
            return false;
        }
    }
    
    /**
    * User information change function
    * @param int $id User id.
    * @param string $fname User first name.
    * @param string $lname User last name.
    * @return boolean of success.
    */
    public function userUpdate($id,$fname,$lname){
        $pdo = $this->db;
        if(isset($id) && isset($fname) && isset($lname)){
            $stmt = $pdo->prepare('UPDATE users SET first = ?, last = ? WHERE user_id = ?');
            if($stmt->execute([$id,$fname,$lname])){
                return true;
            }else{
                $this->msg = 'User information change failed.';
                return false;
            }
        }else{
            $this->msg = 'Provide a valid data.';
            return false;
        }
    }

    /**
    * Register a wrong login attempt function
    * @param string $email User email.
    * @return void.
    */
    private function registerWrongLoginAttempt($email){
        $pdo = $this->db;
        $stmt = $pdo->prepare('UPDATE users SET wrong_logins = wrong_logins + 1 WHERE user_email = ?');
        $stmt->execute([$email]);
    }
      
    /**
    * Do basic validation on any input
    * @return value (string).
    */ 
    public function basicValidation($input)
    {
        $input = trim($input);
        $input = strip_tags($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        return $input; 
    } 
    
    /**
    * Redirect to URL
    * @return void.
    */
   public function redirect($url)
   {
       header("Location: $url");
   }
 
    /**
    * Password hash function
    * @param string $password User password.
    * @return string $password Hashed password.
    */
    private function hashPass($pass){
        
        // This will cause crypt to generate a bcrypt hash
        //$salt = '$2y$10$' . mcrypt_create_iv(22);
        //$salted_password = crypt($password, $salt);

        // Generate a password using a random salt
        //password_hash($password, PASSWORD_BCRYPT);

        // Generate a password with a known salt.
        //password_hash($pass, PASSWORD_BCRYPT, array("salt" => $salt));


        return password_hash($pass, PASSWORD_DEFAULT);
    }

    
    /**
    * Print error msg function
    * @return void.
    */
    public function printMsg(){
        print $this->msg;
    }
    public function printError(){
        print $this->error;
    }


   
    public function dateTimeConvert($date)
    {
        $newdate = new DateTime($date);
        return $newdate->format('M d, Y h:ia');
    }
   
    
    
    /**
    * Generate Valid Session id
    *
    * @return string session_id
    */
    
    public function sessionValidID($session_id)
    {
        if (strlen($session_id) > 0) {
	    $session_id = preg_replace("/[^a-z0-9-,]/i", "", $session_id);
	}else{
            // do something if user password not right
            return;
        }
        //return preg_match('/^[-,a-zA-Z0-9]{1,128}$/', $session_id) > 0;
        return $session_id;
    }

    
    
        
    /**
    * Insert Initial Session
    *
    * @return string session_id
    */
    
    public function insertInitialSession($sessionid,$user_id)
    {
        $stmt= $this->db->prepare('INSERT INTO sessions(id,date_updated,user_id) VALUES (:sid,NOW(),:uid)' );
           $stmt->bindparam(":sid", $sessionid);         
           $stmt->bindparam(":uid", $user_id);     
           $stmt->execute();

        if ($stmt) {
           return true;
        } else {
           return false;
        }
    }

    
    

}//class
