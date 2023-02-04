<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class VIEWPROFILE
{
    private $ldb;
    private $cdb;
    private $gdb;
    private $godb;
    private $sdb;
 
    function __construct($LDB_con,$CDB_con,$GDB_con,$GODB_con,$SDB_con)
    {
      $this->ldb = $LDB_con;
      $this->cdb = $CDB_con;
      $this->gdb = $GDB_con;
      $this->godb = $GODB_con;
      $this->sdb = $SDB_con;
    }
 
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
         }

        if(isset($error)){
            return $error;
        }else{
            return true;
        }
       
    }//end createNewUserFields
    
    
  
 
public function getCareerProfile($profile_id)
{
       try
       { 
          $stmt = $this->cdb->prepare("SELECT e_status, e_position_title, e_career_category, e_qualified, e_student, e_lang, e_country, e_province, e_city, ex_current_occupation, ex_current_companyname, ex_current_year, ex_current_status, ex_current_desc, ex_1_occupation, ex_1_companyname, ex_1_yearfrom, ex_1_yearto, ex_1_desc, ex_2_occupation, ex_2_companyname, ex_2_yearfrom, ex_2_yearto, ex_2_desc, ed_p_school, ed_p_degree, ed_p_study, ed_p_years, ed_p_status, ed_s_school, ed_s_degree, ed_s_study, ed_s_years, ed_s_status, acc_1_name, acc_1_type, acc_1_year, acc_2_name, acc_2_type, acc_2_year, acc_3_name, acc_3_type, acc_3_year, skills_1, skills_2, skills_3, skills_4, skills_5, summary, emp_payment, emp_work, emp_hours, emp_type, emp_benefits, emp_weeklyhours, emp_yearlyincome, emp_important, emp_learn, emp_want, emp_company, emp_position, emp_ctype, emp_manager, date_created, last_edited FROM  career.user_resumes WHERE user_id = :profile_id");
           $stmt->bindparam(":profile_id", $profile_id);  
		   $stmt->execute();
		   $getCareerProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getCareerProfile;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
}

public function getLoveProfile($profile_id)
{
       try
       { 
          $stmt = $this->ldb->prepare("SELECT age, country, province, city, gender, partner_gender, have_kids, job_title, looking_for, orientation, serious_love, current, movie_genre, music_genre, pet_lover, car, dress_style, love_language, first_date, most_important, leader, religious_views, political_views, out_in, meat_vegan, hobby,travel_place, dream_career, you_smoke, you_drink, you_drugs, you_employed, you_travel, you_salary, you_hours, you_religious, you_ethnicity, you_wantkids, you_bodytype, you_health, you_livealone, you_hair, you_eye, you_height, you_weight, you_educated, p_smoke, p_drink, p_drugs, p_employed, p_travel, p_salary, p_hours, p_religious, p_ethnicity, p_wantkids, p_bodytype, p_health, p_livealone, p_hair, p_eye, p_height, p_weight, p_educated, you_desc, p_desc, hidden FROM  love.user_answers WHERE user_id = :profile_id");
           $stmt->bindparam(":profile_id", $profile_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
}


public function getGlogProfile($profile_id)
{
       try
       { 
          $stmt = $this->gdb->prepare("SELECT chapter_id, chapter_title, chapter_blog, chapter_type, chapter_hidden, date_created FROM  glogs.".$profile_id." WHERE glog_id = :profile_id AND chapter_hidden = 'N'");
           $stmt->bindparam(":profile_id", $profile_id);  
		   $stmt->execute();
		   $getGlogProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getGlogProfile;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
}



    public function getZodiac($z)
    {
       try
       { 
          $stmt = $this->sdb->prepare("SELECT zt_zodiac, zt_random, zt_goals, zt_achieve, zt_love, zt_career, zt_date FROM stars.zodiac_traits WHERE zt_zodiac = :z");
           $stmt->bindparam(":z", $z);  
		   $stmt->execute();
		   $getZodiacStuff = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getZodiacStuff;
          }
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
          $stmt = $this->godb->prepare(
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

   
       
   
    public function getGoalsInCategory($user_id,$cat_id)
    {

       try
       { 
        $stmt = $this->godb->prepare("SELECT goal_id, goal_title, goal_description, goal_time, goal_private, goal_status, goal_achieved, date_added, due_date, achieved_on FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_status = 'ACTIVE' ORDER BY goal_id DESC");
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
    
     
   public function getGoalsPerCategoryCount($user_id,$catid)
    {
       try
       { 
        $stmt = $this->godb->prepare("SELECT count(goal_id) as 'TotalGoals' FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_status = 'ACTIVE'");
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
        $stmt = $this->godb->prepare("SELECT count(goal_id) as 'AchievedGoals' FROM goals.".$user_id." WHERE user_id = :user AND cat_id = :catid AND goal_achieved = 'Y' AND goal_status = 'ACTIVE'");
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
    
    

   

/**
* Get count after user clicks encourage on status
* @param user profile is and status id
* @return redirects back to page to clear form on success
*/   
       public function getGoalEncouragesCount($user_id,$goalid)
        {
              try
                { 
             $sql = "SELECT count(adv_id) as 'EncourageCountTotal' FROM goals.".$user_id."_adv WHERE adv_encourage = 1 AND goal_id = :g AND owner_id = :u";
             $stmt = $this->godb->prepare($sql); 
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
   
   public function dateTimeConvert($date)
    {
        $newdate = new DateTime($date);
        return $newdate->format('M d, Y');
    }
   
    
}//class USERFIELDS
