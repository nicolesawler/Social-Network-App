<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class USERFIELDS
{
    private $ldb;
    private $cdb;
    private $gdb;
    private $godb;
    private $pdb;
    private $ndb;

    function __construct($LDB_con,$CDB_con,$GDB_con,$GODB_con,$PDB_con,$NDB_con)
    {
      $this->ldb = $LDB_con;
      $this->cdb = $CDB_con;
      $this->gdb = $GDB_con;
      $this->godb = $GODB_con;
      $this->pdb = $PDB_con;
      $this->ndb = $NDB_con;
      }
 
  /**
   * Add a new message to the chat table
   * 
   * @param Integer $userId The user who sent the message
   * @param String $message The Actual message
   * @return bool|Integer The last inserted id of success and false on faileur
   */
    public function createNewUserFields($user_id)
    {
         if($this->love($user_id) != true){
              $error[] = "Problem with love"; 
         }if($this->career($user_id) != true){
              $error[] = "Problem with career"; 
         }if($this->glogs($user_id) != true){
              $error[] = "Problem with glogs"; 
         }if($this->goals($user_id) != true){
              $error[] = "Problem with goals"; 
         }if($this->goals_advice($user_id) != true){
              $error[] = "Problem with goals advice"; 
         }if($this->goals_category($user_id) != true){
              $error[] = "Problem with goals category"; 
         }if($this->status($user_id) != true){
              $error[] = "Problem with status"; 
         }if($this->statusAdvice($user_id) != true){
              $error[] = "Problem with status advice"; 
         }if($this->network($user_id) != true){
              $error[] = "Problem with network"; 
         }

        if(isset($error)){
            return $error;
        }else{
            return true;
        }
       
    }//end createNewUserFields
    
    
  
 
private function glogs($user_id){

        try
        {
            $stmt = $this->gdb->prepare("CREATE TABLE `".$user_id."` (
                `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `chapter_title` varchar(45) NOT NULL,
                `chapter_blog` text NOT NULL,
                `chapter_type` varchar(15) DEFAULT NULL,
                `chapter_hidden` varchar(1) NOT NULL,
                `glog_id` int(11) NOT NULL,
                `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`chapter_id`)
              ) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8
              ");     
            $stmt->execute();
        if($stmt){
          return true;   
       }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  

}


private function love($user_id){
    
    try
    {
        $stmt = $this->ldb->prepare("INSERT INTO love.user_answers(user_id,date_added) VALUES( :id , NOW() )");
        $stmt->bindparam(":id", $user_id);        
        $stmt->execute(); 
                                  
if($stmt){
   return true;   
}
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }  
           
}




private function career($user_id){

                    try
                   {
                       $stmt = $this->cdb->prepare("INSERT INTO career.user_resumes(user_id,date_created) VALUES( :id , NOW() )");
                       $stmt->bindparam(":id", $user_id);        
                       $stmt->execute(); 
 if($stmt){
   return true;   
}
                   }
                   catch(PDOException $e)
                   {
                       echo $e->getMessage();
                   }  
 
}


private function goals($user_id){

        try
        {
              $stmt = $this->godb->prepare( "CREATE TABLE `".$user_id."` (
                `goal_id` int(11) NOT NULL AUTO_INCREMENT,
                `goal_title` varchar(45) DEFAULT NULL,
                `goal_description` varchar(255) DEFAULT NULL,
                `goal_time` varchar(12) DEFAULT NULL,
                `goal_private` varchar(1) DEFAULT NULL,
                `goal_imagepath` varchar(45) DEFAULT NULL,
                `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
                `goal_achieved` varchar(1) DEFAULT NULL,
                `user_id` int(11) NOT NULL DEFAULT '".$user_id."',
                `cat_id` int(11) NOT NULL,
                `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `due_date` datetime DEFAULT NULL,
                `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `achieved_on` datetime DEFAULT NULL,
                PRIMARY KEY (`goal_id`)
              ) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");     
            $stmt->execute(); 
if($stmt){
   return true;   
}
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        } 
        
}
private function goals_advice($user_id){

        try
        {

                $stmt = $this->godb->prepare( "CREATE TABLE `".$user_id."_adv` (
                `adv_id` int(11) NOT NULL AUTO_INCREMENT,
                `goal_id` varchar(45) DEFAULT NULL,
                `user_id` varchar(45) DEFAULT NULL,
                `owner_id` int(11) NOT NULL,
                `adv_encourage` varchar(45) DEFAULT NULL,
                `adv_comment` varchar(999) DEFAULT NULL,
                `adv_invest` varchar(45) DEFAULT NULL,
                `adv_invest_option` varchar(45) DEFAULT NULL,
                `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `status` varchar(45) DEFAULT NULL,
                PRIMARY KEY (`adv_id`)
              ) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8");     
                $stmt->execute(); 
if($stmt){
   return true;   
}
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  
}
 
private function goals_category($user_id){
        try
        {  
                $stmt = $this->godb->prepare( "CREATE TABLE `".$user_id."_cat` (
                  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
                  `cat_title` varchar(45) DEFAULT NULL,
                  `cat_description` varchar(255) DEFAULT NULL,
                  `cat_icon` varchar(15) DEFAULT NULL,
                  `cat_type` varchar(45) DEFAULT NULL,
                  `cat_private` varchar(1) DEFAULT NULL,
                  `status` varchar(45) DEFAULT NULL,
                  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                  `cat_goals_count` int(11) DEFAULT NULL,
                  `user_id` int(11) NOT NULL,
                  PRIMARY KEY (`cat_id`)
                ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");     
                  $stmt->execute(); 
            if($stmt){
               return true;   
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  
}


private function status($user_id){

        try
        {
            $stmt = $this->pdb->prepare("CREATE TABLE `".$user_id."_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT NULL,
  `current_status` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8
              ");     
            $stmt->execute();
        if($stmt){
          return true;   
       }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  

}



private function statusAdvice($user_id){

        try
        {
            
        
            $stmt = $this->pdb->prepare("CREATE TABLE `".$user_id."_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(1) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_triggered` varchar(1) DEFAULT NULL,
  `adv_triggered_id` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`adv_id`,`status_id`,`user_id`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8
              ");     
            $stmt->execute();
        if($stmt){
          return true;   
       }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  

}


private function network($user_id){

        try
        {
            $stmt = $this->ndb->prepare("CREATE TABLE `".$user_id."` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL COMMENT 'Profile ID',
  `requested_by` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `friend_id` int(11) DEFAULT NULL,
  `love_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `n_type` varchar(45) DEFAULT NULL,
  `n_approval` varchar(45) DEFAULT NULL,
  `n_status` varchar(45) DEFAULT NULL,
  `n_previous_type` varchar(45) DEFAULT NULL,
  `date_changed` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_removed` datetime DEFAULT CURRENT_TIMESTAMP,
  `removed_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_id`,`user_id`,`owner_id`),
  UNIQUE KEY `n_id_UNIQUE` (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8
              ");     
            $stmt->execute();
        if($stmt){
          return true;   
       }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  

}
    
    
}//class USERFIELDS
