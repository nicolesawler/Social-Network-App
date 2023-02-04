<?php
class POSTLOVE {
    
    
    public function PostFunction($obj,$validate,$love,$user,$user_id)
    {
        switch ($obj) {
            case 'user_pref': $result = $this->user_pref($love,$user_id);
            break;
            case 'btn_love_save': $result = $this->postSave($validate,$love,$user,$user_id);
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
private function user_pref($love,$user_id){
    return $love->getLoveProfile($user_id);
}
  
    
/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
private function postSave($validate,$love,$user,$user_id){

	$age = $validate->age_validate($validate->option_validate($_POST['love_age']));
	$country_post = $validate->country_validate($validate->option_validate($_POST['love_country']));
	$province = $validate->basicinput_validate($validate->option_validate($_POST['love_province']));
	$city = $validate->basicinput_validate($validate->option_validate($_POST['love_city']));
	
	$gender = $validate->gender_validate($validate->option_validate($_POST['love_gender']));
	$ppg = $validate->gender_validate($validate->option_validate($_POST['love_ppg']));
	$havekids = $validate->havekids_validate($validate->option_validate($_POST['love_havekids']));
	$jobtitle = $validate->basicinput_validate($validate->option_validate($_POST['love_jobtitle']));
	$lookingfor = $validate->lookingfor_validate($validate->option_validate($_POST['love_lookingfor']));
	$sexori = $validate->sexorientation_validate($validate->option_validate($_POST['love_sexori']));
	$seriouslove = $validate->seriouslove_validate($validate->option_validate($_POST['love_seriouslove']));
	$current = $validate->currentstatus_validate($validate->option_validate($_POST['love_current']));
	
	$movie = $validate->moviegenre_validate($validate->option_validate($_POST['love_movie']));
	$music = $validate->musicgenre_validate($validate->option_validate($_POST['love_music']));
	$pets = $validate->petlover_validate($validate->option_validate($_POST['love_pets']));
	$vehicle = $validate->vehicle_validate($validate->option_validate($_POST['love_vehicle']));
	$dress = $validate->dressstyle_validate($validate->option_validate($_POST['love_dress']));
	$lovelang = $validate->lovelanguage_validate($validate->option_validate($_POST['love_lovelang']));
	$firstdate = $validate->firstdate_validate($validate->option_validate($_POST['love_firstdate']));
	$mostimportant = $validate->mostimportant_validate($validate->option_validate($_POST['love_mostimportant']));
	$leader = $validate->basicinput_validate($validate->option_validate($_POST['love_leader']));
	$religion = $validate->basicinput_validate($validate->option_validate($_POST['love_religion']));
	$politics = $validate->basicinput_validate($validate->option_validate($_POST['love_politics']));
	$outin = $validate->outdoorsindoors_validate($validate->option_validate($_POST['love_outin']));
	$vegan = $validate->diet_validate($validate->option_validate($_POST['love_vegan']));
	$hobby = $validate->basicinput_validate($validate->option_validate($_POST['love_hobby']));
	$travel = $validate->basicinput_validate($validate->option_validate($_POST['love_travel']));
	$dreamcareer = $validate->basicinput_validate($validate->option_validate($_POST['love_dreamcareer']));
	
	$u_smoke = $validate->smoke_validate($validate->option_validate($_POST['love_u_smoke']));
	$u_drink = $validate->drink_validate($validate->option_validate($_POST['love_u_drink']));
	$u_drugs = $validate->drugs_validate($validate->option_validate($_POST['love_u_drugs']));
	$u_employed = $validate->employed_validate($validate->option_validate($_POST['love_u_employed']));
	$u_travelwork = $validate->travelwork_validate($validate->option_validate($_POST['love_u_travelwork']));
	$u_salary = $validate->salaryhours_validate($validate->option_validate($_POST['love_u_salary']));
	$u_hourswork = $validate->salaryhours_validate($validate->option_validate($_POST['love_u_hourswork']));
	$u_religious = $validate->religprac_validate($validate->option_validate($_POST['love_u_religious']));
	$u_ethnicity = $validate->ethnicity_validate($validate->option_validate($_POST['love_u_ethnicity']));
	$u_wantkids = $validate->wantkids_validate($validate->option_validate($_POST['love_u_wantkids']));
	$u_body = $validate->bodytype_validate($validate->option_validate($_POST['love_u_body']));
	$u_health = $validate->health_validate($validate->option_validate($_POST['love_u_health']));
	$u_livealone = $validate->yesno_validate($validate->option_validate($_POST['love_u_livealone']));
	$u_hair = $validate->haircolor_validate($validate->option_validate($_POST['love_u_hair']));
	$u_eye = $validate->eyecolor_validate($validate->option_validate($_POST['love_u_eye']));
	$u_height = $validate->height_validate($validate->option_validate($_POST['love_u_height']));
	$u_weight = $validate->weight_validate($validate->option_validate($_POST['love_u_weight']));
	$u_educated = $validate->education_validate($validate->option_validate($_POST['love_u_educated']));
	
	$p_smoke = $validate->smoke_validate($validate->option_validate($_POST['love_p_smoke']));
	$p_drink = $validate->drink_validate($validate->option_validate($_POST['love_p_drink']));
	$p_drugs = $validate->drugs_validate($validate->option_validate($_POST['love_p_drugs']));
	$p_employed = $validate->employed_validate($validate->option_validate($_POST['love_p_employed']));
	$p_travelwork = $validate->travelwork_validate($validate->option_validate($_POST['love_p_travelwork']));
	$p_salary = $validate->salaryhours_validate($validate->option_validate($_POST['love_p_salary']));
	$p_hourswork = $validate->salaryhours_validate($validate->option_validate($_POST['love_p_hourswork']));
	$p_religious = $validate->religprac_validate($validate->option_validate($_POST['love_p_religious']));
	$p_ethnicity = $validate->ethnicity_validate($validate->option_validate($_POST['love_p_ethnicity']));
	$p_wantkids = $validate->wantkids_validate($validate->option_validate($_POST['love_p_wantkids']));
	$p_body = $validate->bodytype_validate($validate->option_validate($_POST['love_p_body']));
	$p_health = $validate->health_validate($validate->option_validate($_POST['love_p_health']));
	$p_livealone = $validate->yesno_validate($validate->option_validate($_POST['love_p_livealone']));
	$p_hair = $validate->haircolor_validate($validate->option_validate($_POST['love_p_hair']));
	$p_eye = $validate->eyecolor_validate($validate->option_validate($_POST['love_p_eye']));
	$p_height = $validate->height_validate($validate->option_validate($_POST['love_p_height']));
	$p_weight = $validate->weight_validate($validate->option_validate($_POST['love_p_weight']));
	$p_educated = $validate->education_validate($validate->option_validate($_POST['love_p_educated']));
	
	$u_desc = $validate->description_validate($validate->option_validate($_POST['love_u_desc']));
	$p_desc = $validate->description_validate($validate->option_validate($_POST['love_p_desc']));
	

      try
      {
            if($love->saveProfile(
            $user_id,$age,$country_post,$province,$city,$gender,$ppg,$havekids,$jobtitle,$lookingfor,$sexori,$seriouslove,$current,
            $movie,$music,$pets,$vehicle,$dress,$lovelang,$firstdate,$mostimportant,
            $leader,$religion,$politics,$outin,$vegan,$hobby,$travel,$dreamcareer,
            $u_smoke,$u_drink,$u_drugs,$u_employed,$u_travelwork,$u_salary,$u_hourswork,$u_religious,$u_ethnicity,$u_wantkids,$u_body,$u_health,$u_livealone,$u_hair,$u_eye,$u_height,$u_weight,$u_educated,
            $p_smoke,$p_drink,$p_drugs,$p_employed,$p_travelwork,$p_salary,$p_hourswork,$p_religious,$p_ethnicity,$p_wantkids,$p_body,$p_health,$p_livealone,$p_hair,$p_eye,$p_height,$p_weight,$p_educated,
            $u_desc,$p_desc
            )) 
            {
	          $user->redirect('love.php?saved');
              }

     }
     catch(PDOException $e)
     {
        $e->getMessage();
     }

    
    
    
}





}//class