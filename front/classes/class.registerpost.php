<?php

/*
 * Copyright 2017 nicolesawler.
 *
 * Description of class
 *
 * @author nicolesawler
 */
class POSTREGISTER {

    public function PostFunction($obj,$validate,$user,$createTables)
    {
        switch ($obj) {
            case 'btn-signup': $result = $this->registerUser($validate,$user,$createTables);
            break;
        
            default:
            break;
        }
         
        return $result;
       
    }//end 
    
    
    
/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
    
    public function registerUser($validate,$user,$createTables){

        $uname = $validate->validate_username($user->basicValidation($_POST['txt_uname']));
        $umail = $validate->validate_email($user->basicValidation($_POST['txt_umail'])); 
        $upass = trim($_POST['txt_upass']); 

        $fname = $validate->validate_names($user->basicValidation($_POST['txt_first'])); 
        $lname = $validate->validate_names($user->basicValidation($_POST['txt_last'])); 
        $day   = $validate->validate_dates($user->basicValidation($_POST['txt_day'])); 
        $month = $validate->validate_month($user->basicValidation($_POST['txt_month'])); 
        $year  = $validate->validate_dates($user->basicValidation($_POST['txt_year'])); 
        $dob   = $validate->convert_birthday($day,$month,$year);
        $zodiac = $validate->find_zodiac($dob);
        $age = $this->getAge($dob) ;
       
        if($age < 13){ $under_13 = 'Y'; }else{ $under_13 = 'N'; }
        
        

       if($fname=="" || $lname=="") {
          $user->error = "Please enter your name."; 
       } 
       else if($uname=="") {
          $user->error = "Username is required."; 
       }
       else if($umail=="") {
          $user->error = "A valid e-mail is required"; 
       }
       else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
          $user->error = 'Sorry, this isn`t a valid email address';
       }
       else if($upass=="") {
         $user->error = "Password is blank.";
       }
       else if(strlen($upass) < 6){
         $user->error = "C'mon, you can surely make a stronger password than that."; 
       }
       else
       {
             if($user->checkUsername($uname)) {
                $user->error = "Sorry username already taken.";
             }
             else if($user->checkEmail($umail)) {
                $user->error = "Sorry email is already registered.";
             }
             else
             {
              if(isset($user->error)){
                
                  return false;
                
                }else{

                    $lastId = $user->register($fname,$lname,$uname,$umail,$upass,$dob,$zodiac,$day,$month,$year,$age,$under_13, session_id());

                    if($createTables->createNewUserFields($lastId)) 
                    {
                        if($user->login($uname,$umail,$upass)) 
                        {
                            return $user->redirect('intro');
                        }else{
                            $user->error =  "Problem logging in";
                            return false;
                        }
                    }else{
                        $user->error =  "Problem creating tables";
                        return false;
                    }

            }



             }
        }


    }
 
/**
* Get user age
* @param date
* @return age
*/   
    
   public function getAge($date){

     $from = new DateTime($date);
     $to   = new DateTime('today');
     return $from->diff($to)->y;
   }  
    
    

}
