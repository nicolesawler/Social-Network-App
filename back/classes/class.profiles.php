<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class PROFILES
{	
	
    private $pdb;
 
    function __construct($PDB_con)
    {
      $this->pdb = $PDB_con;
    }
    
    public function dateTimeConvert($date)
    {
        $newdate = new DateTime($date);
        return $newdate->format('M d, Y');
    }

    public function homeStatusValidate($input)
    {
           if (!ctype_alnum($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
	   }
           return $input;
    }        
   
    public function homeInsert($user_id,$message,$type)
    {

       try
       {
           $stmt = $this->pdb->prepare("INSERT INTO profiles.".$user_id."_status (owner_id, message, type, current_status) "
                   . "VALUES (:id, :message, :type, 'ACTIVE')");           
           $stmt->bindparam(":type", $type);
           $stmt->bindparam(":message", $message);            
           $stmt->bindparam(":id", $user_id);              
           $stmt->execute(); 
           $lastId = $this->pdb->lastInsertId();
           //return $stmt; 
           if($stmt){
               
               
                try
                {
                    $stmt = $this->pdb->prepare("INSERT INTO profiles.all_status (owner_id, owner_status_id, message, type, current_status) "
                            . "VALUES (:id, :laststatusid, :message, :type, 'ACTIVE')");           
                    $stmt->bindparam(":type", $type);
                    $stmt->bindparam(":message", $message);            
                    $stmt->bindparam(":id", $user_id);              
                    $stmt->bindparam(":laststatusid", $lastId);              
                    $stmt->execute(); 

                    return $lastId; 


                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }   
               
               
               
               
           }
           
           
           
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    
   public function getPostedStatus($user_id,$statusId)
    {
       try
       { 
          $stmt = $this->pdb->prepare(
                  "SELECT status_id, owner_id, message, type, date_added,"
                  . "(SELECT first FROM accounts.users WHERE user_id = :owner_id) as firstname,"
                  . "(SELECT last FROM accounts.users WHERE user_id = :owner_id) as lastname,"
                  . "(SELECT user_name FROM accounts.users WHERE user_id = :owner_id) as username"
                  . " FROM  profiles.all_status"
                  . " WHERE owner_status_id = :status_id AND owner_id = :owner_id AND current_status = 'ACTIVE' LIMIT 1");
            $stmt->bindparam(":owner_id", $user_id);  
            $stmt->bindparam(":status_id", $statusId);  
		   $stmt->execute();
		   $getPostedStatus = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getPostedStatus;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   
   
   public function getBoxStatusTitleByType($getPostedType)
   {
       $result = "";
       switch ($getPostedType) {
           case "THOUGHT":
               $result = " had a <b>thought</b>...";
               break;
            case "GOALS":
                $result = " posted a <b>goal</b> update";
                break;
            case "LOVE":
                $result = " posted a <b>love</b> update";
                break;
            case "CAREER":
                $result = " posted a <b>career</b> update";
                break;
            case "GLOGS":
                $result = " posted a <b>glog</b> update";
                break;
            case "STARS":
                $result = " posted to the <b>stars</b>";
                break;
            case "TRIGGER":
                $result = " had a <b>trigger</b>";
                break;

           default:
               $result = " had a <b>thought</b>...";
               break;
       }
       return $result;
   }
   

    public function getTimelineStatuses($ids,$type)
    {
           
           if($type == "CAREER"){
               $sql = "select owner_id, owner_status_id, message, type, date_added from profiles.all_status 
                        where owner_id IN (".$ids.")
                        AND type = 'CAREER' 
                        AND current_status = 'ACTIVE' 
                        ORDER BY date_added DESC
                        LIMIT 50";
           }else if($type == "LOVE"){
               $sql = "select owner_id, owner_status_id, message, type, date_added from profiles.all_status 
                        where owner_id IN (".$ids.")
                        AND type = 'LOVE' 
                        AND current_status = 'ACTIVE' 
                        ORDER BY date_added DESC
                        LIMIT 50"; 
           }else{
               $sql = "select owner_id, owner_status_id, message, type, date_added  from profiles.all_status 
                        where owner_id IN (".$ids.")
                        AND type != 'LOVE' 
                        AND type != 'CAREER' 
                        AND current_status = 'ACTIVE' 
                        ORDER BY date_added DESC
                        LIMIT 50";
           }
           //return $ids;
           //return $sql;
       try
       { 
        $stmt = $this->pdb->prepare($sql);
	$stmt->execute();
	$homeTimelinePostsForType = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $homeTimelinePostsForType;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
 
 
   
   
   
   
   
   
   
   
   
   
   
   /**
* Get count after user clicks encourage on status
* @param user profile is and status id
* @return redirects back to page to clear form on success
*/  
       public function getStatusEncouragesCount($user_id,$statusid)
        {
              try
                { 
             $sql = "SELECT count(adv_id) as 'EncourageCountTotal' FROM profiles.".$user_id."_adv WHERE adv_encourage = 1 AND status_id = :s AND owner_id = :u";
             $stmt = $this->pdb->prepare($sql); 
             $stmt->bindparam(":s", $statusid);                          
             $stmt->bindparam(":u", $user_id);  
             $stmt->execute();
             $encourageCount = $stmt->fetch();

             if($stmt->rowCount() > 0)
            {
                return $encourageCount;
            }else{
                return "error";
            }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   } 
    
   
   
   
}