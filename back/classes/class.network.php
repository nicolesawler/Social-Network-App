<?php

class NETWORK
{	
    	
    private $ndb;
 
    function __construct($NDB_con)
    {
      $this->ndb = $NDB_con;
    }
    
	public function item_validate($input)
	{
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input; 
	} 
        
	public function id_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 11) {
	        $input = "";
	    }
            if (!ctype_digit($input)) {
	        $input = "";
	    }
	return $input; 
	} 
        
        public function type_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 6) {
	        $input = "FRIEND";
	    }
            if (!ctype_alpha($input)) {
	        $input = preg_replace("/[^a-z]/i", "", $input);
	    }
            $options = array("CAREER", "LOVE", "FRIEND");
            if (!in_array($input, $options)) {
                $input = "FRIEND";
            }
	    
	    return $input; 
	} 
        
        
        
       public function getAllActiveConnectionIds($user_id)
        {
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT owner_id FROM network.".$user_id." WHERE user_id = :user_id AND n_status = 'ACTIVE' ORDER BY n_id DESC");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $getConnectionId = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if($stmt->rowCount() > 0)
                {
                    return $getConnectionId;
                }else{
                    return false;
                }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
        
      public function getAllActiveAndRequestedConnectionIds($user_id)
        {
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT owner_id FROM network.".$user_id." WHERE user_id = :user_id AND n_status = 'ACTIVE' AND n_approval = 'REQUESTED' OR n_approval = 'APPROVED' ORDER BY n_id DESC");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $getConnectionId = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if($stmt->rowCount() > 0)
                {
                    return $getConnectionId;
                }else{
                    return false;
                }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
        
        
        public function getConnectionCheckIfExists($owner_id,$user_id)
        {
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT n_id FROM network.".$user_id." WHERE user_id = :user_id AND owner_id = :owner_id AND n_status = 'ACTIVE' ORDER BY n_id DESC LIMIT 1");
                        $stmt->bindparam(":user_id", $user_id);  
                        $stmt->bindparam(":owner_id", $owner_id);  
                       $stmt->execute();
                       $getConnectionId = $stmt->fetch();

                if($stmt->rowCount() > 0)
                {
                    return $getConnectionId['n_id'];
                }else{
                    return false;
                }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
        public function editOldConnectionRemove($owner_id,$user_id,$oldnetId)
        {
           try
            
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$user_id." SET n_approval='CANCELLED', n_status='DELETE', date_removed=NOW(), removed_by=:user_id "
                      . "WHERE n_id = ".$oldnetId." AND user_id = :user_id AND owner_id = :owner_id");
                        $stmt->bindparam(":user_id", $user_id,PDO::PARAM_INT);  
                        $stmt->bindparam(":owner_id", $owner_id,PDO::PARAM_INT);  
                        $stmt->bindparam(":oldnetid", $oldnetId,PDO::PARAM_INT);  
                       $stmt->execute();
                      
                if($stmt)
                {
                     try
                        { 
                           $stmt = $this->ndb->prepare(
                                   "UPDATE network.".$owner_id." SET n_approval='CANCELLED', n_status='DELETE', date_removed=NOW(), removed_by=:user_id "
                                   . "WHERE user_id = :owner_id and owner_id = :user_id "
                                   . "ORDER BY n_id DESC LIMIT 1");
                                     $stmt->bindparam(":user_id", $user_id,PDO::PARAM_INT);  
                                     $stmt->bindparam(":owner_id", $owner_id,PDO::PARAM_INT);  
                                    $stmt->execute();

                             if($stmt)
                             {
                                return true;

                             }else{
                                return false;
                             }

                        }
                        catch(PDOException $e)
                        {
                            echo $e->getMessage();
                        }
                    
                    
                }else{
                    return false;
                }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }      
       
       
       
       
       
       public function addNewConnection($owner_id,$user_id,$type)
        {
           try
           { 
              $stmt = $this->ndb->prepare(
                        "INSERT INTO network.".$user_id." (user_id, owner_id, requested_by, ".strtolower($type)."_id, n_type, n_approval, n_status) "
                      . "VALUES (:user_id, :owner_id, :user_id, :owner_id, :type, 'REQUESTED', 'ACTIVE')"
                      );
                    $stmt->bindparam(":user_id", $user_id,PDO::PARAM_INT);  
                    $stmt->bindparam(":owner_id", $owner_id,PDO::PARAM_INT);  
                    $stmt->bindparam(":type", $type,PDO::PARAM_STR);  
                    $stmt->execute();
                       
                if($stmt)
                {
                         try
                            { 
                               $stmt = $this->ndb->prepare(
                                         "INSERT INTO network.".$owner_id." (user_id, owner_id, requested_by, ".strtolower($type)."_id, n_type, n_approval, n_status) "
                                       . "VALUES (:owner_id, :user_id, :user_id, :user_id, :type, 'REQUESTED', 'ACTIVE')"
                                       );
                                         $stmt->bindparam(":user_id", $user_id,PDO::PARAM_INT);  
                                         $stmt->bindparam(":owner_id", $owner_id,PDO::PARAM_INT);  
                                         $stmt->bindparam(":type", $type,PDO::PARAM_STR);  
                                        $stmt->execute();

                                 if($stmt)
                                 {
                                     return true;

                                 }else{
                                     return false;
                                 }

                            }
                            catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }
                    
                    
                    
                    
                   
                }else{
                    return false;
                }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }    
       
       
       
       
       
       
       
       
//======================================================================
// Connection Requests
//======================================================================

//-----------------------------------------------------
// Sub-Category Smaller Font
//-----------------------------------------------------

       
       
       
       
          
        public function getAllConnectionRequests($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT owner_id, n_type FROM network.".$user_id." WHERE requested_by != :user_id AND n_approval = 'REQUESTED' AND n_status = 'ACTIVE'");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if($stmt->rowCount() > 0)
                        {
                            return $requests;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
            
       
       
          
        public function approveUpdateUserConnection($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$user_id." SET n_approval = 'APPROVED', date_changed=NOW() WHERE n_status = 'ACTIVE' AND owner_id = :owner_id");
                        $stmt->bindparam(":owner_id", $owner_id);  
                       $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
         
       
       
        public function approveUpdateOwnerConnection($user_id,$owner_id)
        {
            
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$owner_id." SET n_approval = 'APPROVED', date_changed=NOW() WHERE n_status = 'ACTIVE' AND owner_id = :user_id");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
           
          
        public function denyUpdateUserConnection($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$user_id." SET n_approval = 'DENIED', n_status = 'DELETE', date_removed=NOW(),removed_by = :user_id "
                      . "WHERE n_status = 'ACTIVE' AND owner_id = :owner_id");
                        $stmt->bindparam(":owner_id", $owner_id);  
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
         
       
       
        public function denyUpdateOwnerConnection($user_id,$owner_id)
        {
            
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$owner_id." SET n_approval = 'DENIED', n_status = 'DELETE', date_removed=NOW(),removed_by = :user_id "
                      . "WHERE n_status = 'ACTIVE' AND owner_id = :user_id");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->bindparam(":owner_id", $owner_id);  
                        $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
               
//======================================================================
// Friends Page
//======================================================================

        public function getMyFriendsCount($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT count(n_id) as 'friendsCount' FROM network.".$user_id." "
                      . "WHERE n_approval = 'APPROVED' "
                      . "AND n_status = 'ACTIVE' "
                      . "AND n_type = 'FRIEND' "
                      . "AND user_id = :user_id");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $friends = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $friends['friendsCount'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
       public function getMyMatchesCount($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT count(n_id) as 'loveCount' FROM network.".$user_id." "
                      . "WHERE n_approval = 'APPROVED' "
                      . "AND n_status = 'ACTIVE' "
                      . "AND n_type = 'LOVE' "
                      . "AND user_id = :user_id");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $loves = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $loves['loveCount'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
         
         public function getMyCareersCount($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT count(n_id) as 'careersCount' FROM network.".$user_id." "
                      . "WHERE n_approval = 'APPROVED' "
                      . "AND n_status = 'ACTIVE' "
                      . "AND n_type = 'CAREER' "
                      . "AND user_id = :user_id");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $careers = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $careers['careersCount'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
            
        public function getMyFriends($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare("SELECT 
          `$user_id`.`owner_id`,
          `$user_id`.`n_type`,
          `users`.`user_id`, 
           `users`.`first`, 
           `users`.`last`, 
          `users`.`user_name`
        FROM network.`$user_id`
        JOIN accounts.users
          ON `$user_id`.`owner_id` = `users`.`user_id`
          
          WHERE `$user_id`.n_approval = 'APPROVED'
                     AND `$user_id`.n_status = 'ACTIVE'
                     AND `$user_id`.n_type = 'FRIEND'
                     ORDER BY date_added DESC LIMIT 1000");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $friends = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if($stmt->rowCount() > 0)
                        {
                            return $friends;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
       
        public function getMyMatches($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare("SELECT 
          `$user_id`.`owner_id`,
          `$user_id`.`n_type`,
          `users`.`user_id`, 
           `users`.`first`, 
           `users`.`last`, 
          `users`.`user_name`
        FROM network.`$user_id`
        JOIN accounts.users
          ON `$user_id`.`owner_id` = `users`.`user_id`
          
          WHERE `$user_id`.n_approval = 'APPROVED'
                     AND `$user_id`.n_status = 'ACTIVE'
                     AND `$user_id`.n_type = 'LOVE'
                     ORDER BY date_added DESC LIMIT 1000");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $loves = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if($stmt->rowCount() > 0)
                        {
                            return $loves;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
             
        public function getMyCareers($user_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare("SELECT 
          `$user_id`.`owner_id`,
          `$user_id`.`n_type`,
          `users`.`user_id`, 
           `users`.`first`, 
           `users`.`last`, 
          `users`.`user_name`
        FROM network.`$user_id`
        JOIN accounts.users
          ON `$user_id`.`owner_id` = `users`.`user_id`
          
          WHERE `$user_id`.n_approval = 'APPROVED'
                     AND `$user_id`.n_status = 'ACTIVE'
                     AND `$user_id`.n_type = 'CAREER'
                     ORDER BY date_added DESC LIMIT 1000");
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $careers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if($stmt->rowCount() > 0)
                        {
                            return $careers;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }  
       
       
       
       
       
        public function removeFromUser($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$user_id." SET n_approval = 'REMOVED', n_status = 'DELETE', date_removed=NOW(),removed_by = :user_id "
                      . "WHERE n_status = 'ACTIVE' AND owner_id = :owner_id");
                        $stmt->bindparam(":owner_id", $owner_id);  
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }   
       
       
       
        public function removeFromOwner($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "UPDATE network.".$owner_id." SET n_approval = 'REMOVED', n_status = 'DELETE', date_removed=NOW(),removed_by = :user_id "
                      . "WHERE n_status = 'ACTIVE' AND owner_id = :user_id");
                        $stmt->bindparam(":owner_id", $owner_id);  
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                  
                        if($stmt)
                        {
                            return true;
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }   
       
           
       
       
       
       
       
       
       
       
//======================================================================
// Check if connected
//======================================================================

       
       
       
        public function checkIfConnected($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT n_type FROM network.".$user_id."  "
                      . "WHERE n_status = 'ACTIVE' AND n_approval = 'APPROVED' AND n_type != ''  AND owner_id = :owner_id ORDER BY n_id DESC LIMIT 1");
                        $stmt->bindparam(":owner_id", $owner_id);  
                       $stmt->execute();
                       $connection = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $connection['n_type'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
       
       
           
        public function checkIfRequested($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT n_type FROM network.".$user_id."  "
                      . "WHERE n_status = 'ACTIVE' AND n_approval = 'REQUESTED' AND n_type != ''  AND owner_id = :owner_id AND requested_by = :user_id ORDER BY n_id DESC LIMIT 1");
                        $stmt->bindparam(":owner_id", $owner_id);  
                        $stmt->bindparam(":user_id", $user_id);  
                       $stmt->execute();
                       $connection = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $connection['n_type'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }
          
       public function checkIfConfirmApproval($user_id,$owner_id)
        {
            
                    
           try
           { 
              $stmt = $this->ndb->prepare(
                      "SELECT n_type FROM network.".$user_id."  "
                      . "WHERE n_status = 'ACTIVE' AND n_approval = 'REQUESTED' AND n_type != ''  AND owner_id = :owner_id AND requested_by = :owner_id ORDER BY n_id DESC LIMIT 1");
                        $stmt->bindparam(":owner_id", $owner_id); 
                       $stmt->execute();
                       $connection = $stmt->fetch();

                        if($stmt->rowCount() > 0)
                        {
                            return $connection['n_type'];
                        }else{
                            return false;
                        }
                
           }
           catch(PDOException $e)
           {
               echo $e->getMessage();
           }
       }   
       
 public function getIdTypeListForStatus($user_id)
    {
       try
       { 
          $stmt = $this->ndb->prepare(
                  "select owner_id,n_type FROM network.".$user_id." WHERE n_status = 'ACTIVE' AND n_approval = 'APPROVED' AND n_type != '' AND user_id = :user_id");
                    $stmt->bindparam(":user_id", $user_id);
		   $stmt->execute();
		   $getNetwork = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getNetwork;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
       
   
   
   
   
   
   
   
       
}