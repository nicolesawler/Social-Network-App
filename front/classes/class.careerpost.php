<?php
class POSTCAREER {
    
    
    public function PostFunction($obj,$validate,$career,$user,$user_id)
    {
        switch ($obj) {
            case 'user_pref': $result = $this->user_pref($career,$user_id);
            break;
            case 'btn_career_save': $result = $this->postSave($validate,$career,$user,$user_id);
            break;
      
            default:
            break;
        }
         
        if(isset($error)){
            return $error;
        }else{
            return $result;
        }
       
    }//end 
  
    
    
/**
* Get user love preferences
* @param Required on love page (edit)
* @return array
*/    
private function user_pref($career,$user_id){
    return $career->getCareerProfile($user_id);
}
  
    
/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
private function postSave($validate,$career,$user,$user_id){

	$employment = $validate->basicinput_validate($user->basicValidation($_POST['career_employment']));
		$position = $validate->basicinput_validate($user->basicValidation($_POST['career_position']));
		$category = $validate->category_validate($user->basicValidation($_POST['career_category']));
		$qualified = $validate->qualified_validate($user->basicValidation($_POST['career_qualified']));
		$student = $validate->yesno_validate($user->basicValidation($_POST['career_student']));
		$language = $validate->language_validate($user->basicValidation($_POST['career_language']));
		$country = $validate->country_validate($user->basicValidation($_POST['career_country']));
		$province = $validate->basicinput_validate($user->basicValidation($_POST['career_province']));
		$city = $validate->basicinput_validate($user->basicValidation($_POST['career_city']));

		$payment = $validate->payment_validate($user->basicValidation($_POST['career_payment']));
		$wantwork = $validate->workspace_validate($user->basicValidation($_POST['career_wantwork']));
		$hours = $validate->schedule_validate($user->basicValidation($_POST['career_hours']));
		$type = $validate->worktype_validate($user->basicValidation($_POST['career_type']));
		$benefits = $validate->benefits_validate($user->basicValidation($_POST['career_benefits']));
		$workhours = $validate->weeklyhours_validate($user->basicValidation($_POST['career_workhours']));
		$yearlyincome = $validate->yearlyincome_validate($user->basicValidation($_POST['career_yearlyincome']));
		
		$mostimportant = $validate->important_validate($user->basicValidation($_POST['career_mostimportant']));
		$learn = $validate->learn_validate($user->basicValidation($_POST['career_learn']));
		$wantmost = $validate->want_validate($user->basicValidation($_POST['career_wantmost']));
		$prefercompany = $validate->companysuccess_validate($user->basicValidation($_POST['career_prefercompany']));
		$positionwhere = $validate->position_validate($user->basicValidation($_POST['career_positionwhere']));
		$companytype = $validate->companytype_validate($user->basicValidation($_POST['career_companytype']));
		$manager = $validate->manager_validate($user->basicValidation($_POST['career_manager']));
		
		$skill1 = $validate->basicinput_validate($user->basicValidation($_POST['career_skill1']));
		$skill2 = $validate->basicinput_validate($user->basicValidation($_POST['career_skill2']));
		$skill3 = $validate->basicinput_validate($user->basicValidation($_POST['career_skill3']));
		$skill4 = $validate->basicinput_validate($user->basicValidation($_POST['career_skill4']));
		$skill5 = $validate->basicinput_validate($user->basicValidation($_POST['career_skill5']));
		$summary = $validate->textarea_validate($user->basicValidation($_POST['career_summary']));
		
		$cocc = $validate->basicinput_validate($user->basicValidation($_POST['career_cocc']));
		$ccomp = $validate->basicinput_validate($user->basicValidation($_POST['career_ccomp']));
		$csince = $validate->year_validate($user->basicValidation($_POST['career_csince']));
		$cstatus = $validate->current_status_validate($user->basicValidation($_POST['career_cstatus']));
		$cdesc = $validate->textarea_validate($user->basicValidation($_POST['career_cdesc']));
		
		$exocc1 = $validate->basicinput_validate($user->basicValidation($_POST['career_exocc1']));
		$excomp1 = $validate->basicinput_validate($user->basicValidation($_POST['career_excomp1']));
		$exsince1 = $validate->year_validate($user->basicValidation($_POST['career_exsince1']));
		$exstatus1 = $validate->year_validate($user->basicValidation($_POST['career_exstatus1']));
		$exdesc1 = $validate->textarea_validate($user->basicValidation($_POST['career_exdesc1']));
		
		$exocc2 = $validate->basicinput_validate($user->basicValidation($_POST['career_exocc2']));
		$excomp2 = $validate->basicinput_validate($user->basicValidation($_POST['career_excomp2']));
		$exsince2 = $validate->year_validate($user->basicValidation($_POST['career_exsince2']));
		$exstatus2 = $validate->year_validate($user->basicValidation($_POST['career_exstatus2']));
		$exdesc2 = $validate->textarea_validate($user->basicValidation($_POST['career_exdesc2']));
		
		$edp_school = $validate->basicinput_validate($user->basicValidation($_POST['career_edp_school']));
		$edp_degree = $validate->degree_validate($user->basicValidation($_POST['career_edp_degree']));
		$edp_study = $validate->basicinput_validate($user->basicValidation($_POST['career_edp_study']));
		$edp_years = $validate->yearatschool_validate($user->basicValidation($_POST['career_edp_years']));
		$edp_status = $validate->schoolstatus_validate($user->basicValidation($_POST['career_edp_status']));
		
		$eds_school = $validate->basicinput_validate($user->basicValidation($_POST['career_eds_school']));
		$eds_degree = $validate->degree_validate($user->basicValidation($_POST['career_eds_degree']));
		$eds_study = $validate->basicinput_validate($user->basicValidation($_POST['career_eds_study']));
		$eds_years = $validate->yearatschool_validate($user->basicValidation($_POST['career_eds_years']));
		$edps_status = $validate->schoolstatus_validate($user->basicValidation($_POST['career_edps_status']));
		
		$award1_name = $validate->basicinput_validate($user->basicValidation($_POST['career_award1_name']));
		$award1_year = $validate->year_validate($user->basicValidation($_POST['career_award1_year']));
		$award1_type = $validate->awardtype_validate($user->basicValidation($_POST['career_award1_type']));
		$award2_name = $validate->basicinput_validate($user->basicValidation($_POST['career_award2_name']));
		$award2_year = $validate->year_validate($user->basicValidation($_POST['career_award2_year']));
		$award2_type = $validate->awardtype_validate($user->basicValidation($_POST['career_award2_type']));
		$award3_name = $validate->basicinput_validate($user->basicValidation($_POST['career_award3_name']));
		$award3_year = $validate->year_validate($user->basicValidation($_POST['career_award3_year']));
		$award3_type = $validate->awardtype_validate($user->basicValidation($_POST['career_award3_type']));

		//$allow_resume_download = $validate->basicinput_validate($user->basicValidation($_POST['allow_resume_download']));
		//$allow_pref_views = $validate->basicinput_validate($user->basicValidation($_POST['allow_pref_views']));
	

      try
      {
            if($career->saveProfile(
           $user_id,$employment,$position,$category,$qualified,$student,$language,$country,$province,$city,$cocc,$ccomp,$csince,$cstatus,$cdesc,$exocc1,$excomp1,$exsince1,$exstatus1,$exdesc1,$exocc2,$excomp2,$exsince2,$exstatus2,$exdesc2,$edp_school,$edp_degree,$edp_study,$edp_years,$edp_status,$eds_school,$eds_degree,$eds_study,$eds_years,$edps_status,$award1_name,$award1_type,$award1_year,$award2_name,$award2_type,$award2_year,$award3_name,$award3_type,$award3_year,$skill1,$skill2,$skill3,$skill4,$skill5,$summary,$payment,$wantwork,$hours,$type,$benefits,$workhours,$yearlyincome,$mostimportant,$learn,$wantmost,$prefercompany,$positionwhere,$companytype,$manager
            )) 
            {
	          return $user->redirect('career.php?saved');
              }

     }
     catch(PDOException $e)
     {
        $e->getMessage();
     }



    
    
    
}





}//class