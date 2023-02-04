<?php
class CAREER
{	
	
private $cdb;
 
    function __construct($CDB_con)
    {
      $this->cdb = $CDB_con;
    }

    
    public function getCareerProfile($user_id)
    {
       try
       { 
          $stmt = $this->cdb->prepare("SELECT e_status, e_position_title, e_career_category, e_qualified, e_student, e_lang, e_country, e_province, e_city, ex_current_occupation, ex_current_companyname, ex_current_year, ex_current_status, ex_current_desc, ex_1_occupation, ex_1_companyname, ex_1_yearfrom, ex_1_yearto, ex_1_desc, ex_2_occupation, ex_2_companyname, ex_2_yearfrom, ex_2_yearto, ex_2_desc, ed_p_school, ed_p_degree, ed_p_study, ed_p_years, ed_p_status, ed_s_school, ed_s_degree, ed_s_study, ed_s_years, ed_s_status, acc_1_name, acc_1_type, acc_1_year, acc_2_name, acc_2_type, acc_2_year, acc_3_name, acc_3_type, acc_3_year, skills_1, skills_2, skills_3, skills_4, skills_5, summary, emp_payment, emp_work, emp_hours, emp_type, emp_benefits, emp_weeklyhours, emp_yearlyincome, emp_important, emp_learn, emp_want, emp_company, emp_position, emp_ctype, emp_manager, date_created, last_edited FROM  career.user_resumes WHERE user_id = $user_id");
           $stmt->bindparam(":user_id", $user_id);  
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
 
 
 
    public function saveProfile($user_id,$employment,$position,$category,$qualified,$student,$language,$country,$province,$city,$cocc,$ccomp,$csince,$cstatus,$cdesc,$exocc1,$excomp1,$exsince1,$exstatus1,$exdesc1,$exocc2,$excomp2,$exsince2,$exstatus2,$exdesc2,$edp_school,$edp_degree,$edp_study,$edp_years,$edp_status,$eds_school,$eds_degree,$eds_study,$eds_years,$edps_status,$award1_name,$award1_type,$award1_year,$award2_name,$award2_type,$award2_year,$award3_name,$award3_type,$award3_year,$skill1,$skill2,$skill3,$skill4,$skill5,$summary,$payment,$wantwork,$hours,$type,$benefits,$workhours,$yearlyincome,$mostimportant,$learn,$wantmost,$prefercompany,$positionwhere,$companytype,$manager)
    { try
       {
	$sql = "UPDATE career.user_resumes SET  
            
                e_status = :e_status, 
                e_position_title = :e_position_title, 
                e_career_category = :e_career_category, 
                e_qualified = :e_qualified, 
                e_student = :e_student, 
                e_lang = :e_lang, 
                e_country = :e_country, 
                e_province = :e_province, 
                e_city = :e_city, 
                
                ex_current_occupation = :ex_current_occupation, 
                ex_current_companyname = :ex_current_companyname, 
                ex_current_year = :ex_current_year, 
                ex_current_status = :ex_current_status, 
                ex_current_desc = :ex_current_desc, 
                
                ex_1_occupation = :ex_1_occupation, 
                ex_1_companyname = :ex_1_companyname, 
                ex_1_yearfrom = :ex_1_yearfrom, 
                ex_1_yearto = :ex_1_yearto, 
                ex_1_desc = :ex_1_desc, 
                
                ex_2_occupation = :ex_2_occupation, 
                ex_2_companyname = :ex_2_companyname, 
                ex_2_yearfrom = :ex_2_yearfrom, 
                ex_2_yearto = :ex_2_yearto, 
                ex_2_desc = :ex_2_desc, 
                
                ed_p_school = :ed_p_school, 
                ed_p_degree = :ed_p_degree, 
                ed_p_study = :ed_p_study, 
                ed_p_years = :ed_p_years, 
                ed_p_status = :ed_p_status, 
                
                ed_s_school = :ed_s_school, 
                ed_s_degree = :ed_s_degree, 
                ed_s_study = :ed_s_study, 
                ed_s_years = :ed_s_years, 
                ed_s_status = :ed_s_status, 
                
                acc_1_name = :acc_1_name, 
                acc_1_type = :acc_1_type, 
                acc_1_year = :acc_1_year, 
                acc_2_name = :acc_2_name, 
                acc_2_type = :acc_2_type, 
                acc_2_year = :acc_2_year, 
                acc_3_name = :acc_3_name, 
                acc_3_type = :acc_3_type, 
                acc_3_year = :acc_3_year, 
                
                skills_1 = :skills_1, 
                skills_2 = :skills_2, 
                skills_3 = :skills_3, 
                skills_4 = :skills_4, 
                skills_5 = :skills_5, 
                summary = :summary, 
                
                emp_payment = :emp_payment, 
                emp_work = :emp_work, 
                emp_hours = :emp_hours, 
                emp_type = :emp_type, 
                emp_benefits = :emp_benefits, 
                emp_weeklyhours = :emp_weeklyhours, 
                emp_yearlyincome = :emp_yearlyincome, 
                
                emp_important = :emp_important, 
                emp_learn = :emp_learn, 
                emp_want = :emp_want, 
                emp_company = :emp_company, 
                emp_position = :emp_position, 
                emp_ctype = :emp_ctype, 
                emp_manager = :emp_manager, 
                
                last_edited = NOW()
            WHERE user_id = ".$user_id;
			$stmt = $this->cdb->prepare($sql); 
                        
			$stmt->bindParam(':e_status', $employment, PDO::PARAM_STR);       
			$stmt->bindParam(':e_position_title', $position, PDO::PARAM_STR);       
			$stmt->bindParam(':e_career_category', $category, PDO::PARAM_STR);       
			$stmt->bindParam(':e_qualified', $qualified, PDO::PARAM_STR);       
			$stmt->bindParam(':e_student', $student, PDO::PARAM_STR);       
			$stmt->bindParam(':e_lang', $language, PDO::PARAM_STR);       
			$stmt->bindParam(':e_country', $country, PDO::PARAM_STR);       
			$stmt->bindParam(':e_province', $province, PDO::PARAM_STR);       
			$stmt->bindParam(':e_city', $city, PDO::PARAM_STR);   
                        
                        $stmt->bindParam(':ex_current_occupation', $cocc, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_current_companyname', $ccomp, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_current_year', $csince, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_current_status', $cstatus, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_current_desc', $cdesc, PDO::PARAM_STR); 

			$stmt->bindParam(':ex_1_occupation', $exocc1, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_1_companyname', $excomp1, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_1_yearfrom', $exsince1, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_1_yearto', $exstatus1, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_1_desc', $exdesc1, PDO::PARAM_STR);  
                        
			$stmt->bindParam(':ex_2_occupation', $exocc2, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_2_companyname', $excomp2, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_2_yearfrom', $exsince2, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_2_yearto', $exstatus2, PDO::PARAM_STR);  
			$stmt->bindParam(':ex_2_desc', $exdesc2, PDO::PARAM_STR);  
                        
			$stmt->bindParam(':ed_p_school', $edp_school, PDO::PARAM_STR);  
			$stmt->bindParam(':ed_p_degree', $edp_degree, PDO::PARAM_STR);  
			$stmt->bindParam(':ed_p_study', $edp_study, PDO::PARAM_STR);  
			$stmt->bindParam(':ed_p_years', $edp_years, PDO::PARAM_STR);  
			$stmt->bindParam(':ed_p_status', $edp_status, PDO::PARAM_STR);  
                        
			$stmt->bindParam(':ed_s_school', $eds_school, PDO::PARAM_STR);  
			$stmt->bindParam(':ed_s_degree', $eds_degree, PDO::PARAM_STR);
			$stmt->bindParam(':ed_s_study', $eds_study, PDO::PARAM_STR);
			$stmt->bindParam(':ed_s_years', $eds_years, PDO::PARAM_STR);
			$stmt->bindParam(':ed_s_status', $edps_status, PDO::PARAM_STR);
                        
			$stmt->bindParam(':acc_1_name', $award1_name, PDO::PARAM_STR);
			$stmt->bindParam(':acc_1_type', $award1_type, PDO::PARAM_STR);
			$stmt->bindParam(':acc_1_year', $award1_year, PDO::PARAM_STR);
			$stmt->bindParam(':acc_2_name', $award2_name, PDO::PARAM_STR);
			$stmt->bindParam(':acc_2_type', $award2_type, PDO::PARAM_STR);
			$stmt->bindParam(':acc_2_year', $award2_year, PDO::PARAM_STR);
			$stmt->bindParam(':acc_3_name', $award3_name, PDO::PARAM_STR);
			$stmt->bindParam(':acc_3_type', $award3_type, PDO::PARAM_STR);
                        $stmt->bindParam(':acc_3_year', $award3_year, PDO::PARAM_STR);
			
                        $stmt->bindParam(':skills_1', $skill1, PDO::PARAM_STR);  
			$stmt->bindParam(':skills_2', $skill2, PDO::PARAM_STR);  
			$stmt->bindParam(':skills_3', $skill3, PDO::PARAM_STR);  
			$stmt->bindParam(':skills_4', $skill4, PDO::PARAM_STR);  
			$stmt->bindParam(':skills_5', $skill5, PDO::PARAM_STR); 
			$stmt->bindParam(':summary', $summary, PDO::PARAM_STR); 

                        $stmt->bindParam(':emp_payment', $payment, PDO::PARAM_STR);       
			$stmt->bindParam(':emp_work', $wantwork, PDO::PARAM_STR);       
			$stmt->bindParam(':emp_hours', $hours, PDO::PARAM_STR);    
			$stmt->bindParam(':emp_type', $type, PDO::PARAM_STR);    
			$stmt->bindParam(':emp_benefits', $benefits, PDO::PARAM_STR);
			$stmt->bindParam(':emp_weeklyhours', $workhours, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_yearlyincome', $yearlyincome, PDO::PARAM_STR); 
                        
			$stmt->bindParam(':emp_important', $mostimportant, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_learn', $learn, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_want', $wantmost, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_company', $prefercompany, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_position', $positionwhere, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_ctype', $companytype, PDO::PARAM_STR);  
			$stmt->bindParam(':emp_manager', $manager, PDO::PARAM_STR); 

			//$stmt->bindParam(':p_educated', $allow_resume_download, PDO::PARAM_STR);
			//$stmt->bindParam(':u_desc', $allow_pref_views, PDO::PARAM_STR);

			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    


    
    
    /**
    * @description gets user resume for career matches
    * @author nicole sawler
    * @param int
    * @return array
    * 
    */
    
    public function getCareerMatchProfile($user_id)
    {
       try
       { 
          $stmt = $this->cdb->prepare("SELECT "
                  . "user_resumes.career_id, "
                  . "user_resumes.user_id, "
                  . "user_resumes.e_status, "
                  . "user_resumes.e_position_title, "
                  . "user_resumes.e_career_category, "
                  . "user_resumes.e_qualified, "
                  . "user_resumes.e_student, "
                  . "user_resumes.e_lang, "
                  . "user_resumes.e_country, "
                  . "user_resumes.e_province, "
                  . "user_resumes.e_city, "
                  . "user_resumes.ex_current_occupation, "
                  . "user_resumes.ex_current_companyname, "
                  . "user_resumes.ex_current_year, "
                  . "user_resumes.ex_current_status, "
                  . "user_resumes.ex_current_desc, "
//                  . "user_resumes.ex_1_occupation, "
//                  . "user_resumes.ex_1_companyname, "
//                  . "user_resumes.ex_1_yearfrom, "
//                  . "user_resumes.ex_1_yearto, "
//                  . "user_resumes.ex_1_desc, "
//                  . "user_resumes.ex_2_occupation, "
//                  . "user_resumes.ex_2_companyname, "
//                  . "user_resumes.ex_2_yearfrom, "
//                  . "user_resumes.ex_2_yearto, "
//                  . "user_resumes.ex_2_desc, "
//                  . "user_resumes.ed_p_school, "
//                  . "user_resumes.ed_p_degree, "
//                  . "user_resumes.ed_p_study, "
//                  . "user_resumes.ed_p_years, "
//                  . "user_resumes.ed_p_status, "
//                  . "user_resumes.ed_s_school, "
//                  . "user_resumes.ed_s_degree, "
//                  . "user_resumes.ed_s_study, "
//                  . "user_resumes.ed_s_years, "
//                  . "user_resumes.ed_s_status, "
//                  . "user_resumes.acc_1_name, "
//                  . "user_resumes.acc_1_type, "
//                  . "user_resumes.acc_1_year, "
//                  . "user_resumes.acc_2_name, "
//                  . "user_resumes.acc_2_type, "
//                  . "user_resumes.acc_2_year, "
//                  . "user_resumes.acc_3_name, "
//                  . "user_resumes.acc_3_type, "
//                  . "user_resumes.acc_3_year, "
//                  . "user_resumes.skills_1, "
//                  . "user_resumes.skills_2, "
//                  . "user_resumes.skills_3, "
//                  . "user_resumes.skills_4, "
//                  . "user_resumes.skills_5, "
//                  . "user_resumes.summary, "
//                  . "user_resumes.emp_payment, "
//                  . "user_resumes.emp_work, "
//                  . "user_resumes.emp_hours, "
//                  . "user_resumes.emp_type, "
//                  . "user_resumes.emp_benefits, "
//                  . "user_resumes.emp_weeklyhours, "
//                  . "user_resumes.emp_yearlyincome, "
//                  . "user_resumes.emp_important, "
//                  . "user_resumes.emp_learn, "
//                  . "user_resumes.emp_want, "
//                  . "user_resumes.emp_company, "
//                  . "user_resumes.emp_position, "
//                  . "user_resumes.emp_ctype, "
//                  . "user_resumes.emp_manager, "
//                  . "user_resumes.date_created, "
//                  . "user_resumes.last_edited, "    
                  . "users.user_id, users.first, users.last, users.user_name , users.zodiac"
                  . " FROM  career.user_resumes JOIN accounts.users ON user_resumes.user_id = users.user_id "
                  . " WHERE user_resumes.user_id = :user_id");
                   $stmt->bindparam(":user_id", $user_id);  
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
 
    
    
    
    /**
    * @description get all matches like title
    * @author nicole sawler
    * @param int, string, string, string
    * @return array (ints)
    * 
    */
   
    public function getMatchingTitleIds($user_id,$title,$province,$country)
    {
        if($province == "" || $country == ""){
            $sql = "SELECT user_id FROM  career.user_resumes "
                   . "WHERE e_position_title LIKE '%".$title."%' "
                   . "AND user_id != :user_id ORDER BY career_id DESC LIMIT 1000";
        }else{
            $sql = "SELECT user_id FROM  career.user_resumes "
                   . "WHERE e_position_title LIKE '%".$title."%' "
                   . "AND user_id != :user_id "
                   . "AND e_country = :country ORDER BY career_id DESC LIMIT 1000";
        }
       try
       { 
           $stmt = $this->cdb->prepare($sql);
           $stmt->bindparam(":user_id", $user_id);  
	   $stmt->bindparam(":country", $country);  
	   $stmt->execute();
	   $getCareerIds = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getCareerIds;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
    
    
    
   
     
    /**
    * @description get all matches like category
    * @author nicole sawler
    * @param int, string, string, string
    * @return array (ints)
    * 
    */
   
    public function getMatchingCategoryIds($user_id,$category,$province,$country)
    {
        if($country == ""){
            $sql = "SELECT user_id FROM  career.user_resumes "
                   . "WHERE e_career_category = :category "
                   . "AND user_id != :user_id ORDER BY career_id DESC LIMIT 1000";
        }else{
            $sql = "SELECT user_id FROM  career.user_resumes "
                   . "WHERE e_career_category = :category "
                   . "AND user_id != :user_id "
                   . "AND e_province = :province AND e_country = :country ORDER BY career_id DESC LIMIT 1000";
        }
       try
       { 
           $stmt = $this->cdb->prepare($sql);
           $stmt->bindparam(":user_id", $user_id);  
	   $stmt->bindparam(":category", $category);  
	   $stmt->bindparam(":province", $province);  
	   $stmt->bindparam(":country", $country);  
	   $stmt->execute();
	   $getCareerIds = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getCareerIds;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
    
   
   
   
    
    /**
    * @description get all career ids in location
    * @author nicole sawler
    * @param int, string, string
    * @return array (ints)
    * 
    */
   
    public function getMatchingLocationIds($user_id,$province,$country)
    {
        if($province == "" || $country == ""){
            $sql = "SELECT user_id FROM  career.user_resumes "
                   . "WHERE user_id != :user_id ORDER BY career_id DESC LIMIT 1000";
        }else{
            $sql = "SELECT user_id FROM career.user_resumes "
                   . "WHERE user_id != :user_id "
                   . "AND e_province = :province AND e_country = :country ORDER BY career_id DESC LIMIT 1000";
        }
       try
       { 
           $stmt = $this->cdb->prepare($sql);
           $stmt->bindparam(":user_id", $user_id);   
	   $stmt->bindparam(":province", $province);  
	   $stmt->bindparam(":country", $country);  
	   $stmt->execute();
	   $getCareerIds = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getCareerIds;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
    
   
   
   
   
   
   
   
   
   
   /**
    * Get user location for matching, country and province
    * @param user_id
    * @return array row
    * 
    */
    
    public function getUserLocations($user_id)
    {
       try
       { 
          $stmt = $this->cdb->prepare("SELECT e_country,e_province FROM  career.user_resumes WHERE user_id = :user_id");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getCareerProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getCareerProfile;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
    
    
    
    
    
    
    
    
}