<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class GOALS
{	
	
    private $gdb;
 
    function __construct($GDB_con)
    {
      $this->gdb = $GDB_con;
    }
    
    public function dateTimeConvert($date)
    {
        $newdate = new DateTime($date);
        return $newdate->format('M d, Y');
    }
   
    public function saveCategory($user_id,$title,$description,$icon,$type,$private)
    {

       try
       {
           $stmt = $this->gdb->prepare("INSERT INTO goals.".$user_id."_cat(cat_title, cat_description, cat_icon, cat_type, cat_private, status, cat_goals_count,user_id) VALUES(:title, :description, :icon, :type, :private, 'ACTIVE', 0, :id)");
              
           $stmt->bindparam(":title", $title);
           $stmt->bindparam(":description", $description);
           $stmt->bindparam(":icon", $icon);            
           $stmt->bindparam(":type", $type);
           $stmt->bindparam(":private", $private);            
           $stmt->bindparam(":id", $user_id);              
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    
   public function getGoalsCategoryProfile($user_id)
    {
       try
       { 
          $stmt = $this->gdb->prepare(
                  "SELECT cat_id, cat_title, cat_description, cat_icon, cat_private FROM  goals.".$user_id."_cat WHERE user_id = $user_id AND status = 'ACTIVE' ORDER BY cat_id DESC");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getGoalsCategory = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getGoalsCategory;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
    public function deleteCategory($user_id,$status,$catid)
    {

       try
       {
	       
	    $sql = "UPDATE goals.".$user_id."_cat SET 
            status = :status,  
            last_edited = NOW()
            WHERE cat_id = :id AND user_id = ".$user_id;
			$stmt = $this->gdb->prepare($sql);                     
			$stmt->bindParam(':status', $status, PDO::PARAM_STR);
			$stmt->bindParam(':id', $catid, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }


    public function editCategory($cat_id,$user_id)
    {
       try
       { 
        $stmt = $this->gdb->prepare("SELECT cat_id, cat_title, cat_description, cat_icon, cat_type, cat_private FROM goals.".$user_id."_cat WHERE user_id = :user AND cat_id = :catid");
           $stmt->bindparam(":user", $user_id);          
           $stmt->bindparam(":catid", $cat_id);  
           $stmt->execute();
	    $catEdit = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $catEdit;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   
   
       public function saveEditCategory($catIdEdit,$user_id,$title,$description,$icon,$type,$private)
    {

       try
       {
	       
	    $sql = "UPDATE goals.".$user_id."_cat SET 
            cat_title = :title,  
            cat_description = :description,  
            cat_icon = :icon,  
            cat_type = :type,  
            cat_private = :private,  
            last_edited = NOW()
            WHERE cat_id = :id AND user_id = ".$user_id;
			$stmt = $this->gdb->prepare($sql);                     
			$stmt->bindParam(':title', $title, PDO::PARAM_STR);
			$stmt->bindParam(':description', $description, PDO::PARAM_STR);
			$stmt->bindParam(':icon', $icon, PDO::PARAM_STR);
			$stmt->bindParam(':type', $type, PDO::PARAM_STR);
			$stmt->bindParam(':private', $private, PDO::PARAM_STR);
			$stmt->bindParam(':id', $catIdEdit, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
      
   
    public function selectCatIdList($user_id)
    {

       try
       { 
        $stmt = $this->gdb->prepare("SELECT cat_id FROM goals.".$user_id."_cat WHERE user_id = :user");
           $stmt->bindparam(":user", $user_id); 
           $stmt->execute();
	   $catIdList = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $catIdList;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
    }
   
   
    
       
   
    public function getGoalsInCategory($user_id,$cat_id)
    {

       try
       { 
        $stmt = $this->gdb->prepare("SELECT goal_id, goal_title, goal_description, goal_time, goal_private, goal_status, goal_achieved, date_added, due_date, achieved_on FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_status = 'ACTIVE' ORDER BY goal_id DESC");
           $stmt->bindparam(":user", $user_id);          
           $stmt->bindparam(":catid", $cat_id);  
           $stmt->execute();
	    $catEdit = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $catEdit;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
    }
    
    
    
    public function addNewGoal($user_id,$title,$description,$deadline,$private,$cat_id,$due)
    {

    
       try
       {
           $stmt = $this->gdb->prepare("INSERT INTO goals.".$user_id."(goal_title, goal_description, goal_time, goal_private, goal_status, goal_achieved, user_id, cat_id, due_date) VALUES(:title, :description, :deadline, :private, 'ACTIVE', 'N', :id, :catid,  ".$due."  )");
              
           $stmt->bindparam(":title", $title);
           $stmt->bindparam(":description", $description);
           $stmt->bindparam(":deadline", $deadline);            
           $stmt->bindparam(":private", $private);
           $stmt->bindparam(":catid", $cat_id);            
           $stmt->bindparam(":id", $user_id);                          
           $stmt->execute();
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
    }
   
    

        
    public function deleteGoal($user_id,$status,$goalid)
    {

       try
       {
	       
	    $sql = "UPDATE goals.".$user_id." SET 
            goal_status = :status,  
            last_edited = NOW()
            WHERE goal_id = :id AND user_id = ".$user_id;
			$stmt = $this->gdb->prepare($sql);                     
			$stmt->bindParam(':status', $status, PDO::PARAM_STR);
			$stmt->bindParam(':id', $goalid, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
   

        public function editGoal($goal_id,$user_id)
    {
       try
       { 
        $stmt = $this->gdb->prepare("SELECT goal_id,goal_title, goal_description, goal_time, goal_private, goal_status, goal_achieved, due_date FROM goals.".$user_id." WHERE user_id = :user AND goal_id = :goalid");
           $stmt->bindparam(":user", $user_id);          
           $stmt->bindparam(":goalid", $goal_id);  
           $stmt->execute();
	    $catEdit = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $catEdit;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   
    
    public function saveEditGoal($user_id,$goal_id,$title,$description,$deadline,$private,$due)
    {
       try
       {
    
	    $sql = "UPDATE goals.".$user_id." SET 
            goal_title = :title,  
            goal_description = :description,  
            goal_time = :deadline,  
            goal_private = :private, 
            due_date = ".$due.",
            last_edited = NOW()
            WHERE goal_id = :goalid AND user_id = :id";
            $stmt = $this->gdb->prepare($sql);   
                      
           $stmt->bindparam(":id", $user_id);                          
           $stmt->bindparam(":goalid", $goal_id); 
           $stmt->bindparam(":title", $title);
           $stmt->bindparam(":description", $description);
           $stmt->bindparam(":deadline", $deadline);            
           $stmt->bindparam(":private", $private);                          
           $stmt->execute();
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
    }
    
    
    
    public function achievedGoal($user_id,$achieved,$goalid)
    {

       try
       {
	       
	    $sql = "UPDATE goals.".$user_id." SET 
            goal_achieved = :achieved,  
            achieved_on = NOW()
            WHERE goal_id = :id AND user_id = ".$user_id;
			$stmt = $this->gdb->prepare($sql);                     
			$stmt->bindParam(':achieved', $achieved, PDO::PARAM_STR);
			$stmt->bindParam(':id', $goalid, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    
    
    
   public function getGoalsPerCategoryCount($user_id,$catid)
    {
       try
       { 
        $stmt = $this->gdb->prepare("SELECT count(goal_id) as 'TotalGoals' FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_status = 'ACTIVE'");
           $stmt->bindparam(":user", $user_id);          
           $stmt->bindparam(":catid", $catid);  
           $stmt->execute();
	    $getGoalsPerCategoryCount = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getGoalsPerCategoryCount;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   
   
   
    public function getAchievedGoalsPerCategoryCount($user_id,$catid)
    {
       try
       { 
        $stmt = $this->gdb->prepare("SELECT count(goal_id) as 'AchievedGoals' FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_achieved = 'Y' AND goal_status = 'ACTIVE'");
           $stmt->bindparam(":user", $user_id);          
           $stmt->bindparam(":catid", $catid);  
           $stmt->execute();
	    $getGoalsPerCategoryCount = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getGoalsPerCategoryCount;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   } 
    
    

   
   
       public function getGoalEncouragesCount($user_id,$goalid)
        {
              try
                { 
             $sql = "SELECT count(adv_id) as 'EncourageCountTotal' FROM goals.".$user_id."_adv WHERE adv_encourage = 1 AND goal_id = :g AND owner_id = :u";
             $stmt = $this->gdb->prepare($sql); 
             $stmt->bindparam(":g", $goalid);                          
             $stmt->bindparam(":u", $user_id);  
             $stmt->execute();
             $encourageCount = $stmt->fetch();

             if($stmt->rowCount() > 0)
            {
                return $encourageCount;
            }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   } 
    

   
   
   
}