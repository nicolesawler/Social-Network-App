<?php

/* 
 * Copyright 2017 nicolesawler.
 *

 */



/**
 * match people based on
 * category
 * desired career title
 * similar career prefs
 * location desired (for all)
 * 
 * add | view resume
 */

$userCareerTitle = $userCareerCategory = $userCareerCountry = $userCareerProvince = $userInfoProfile = "";
 /*
  * * Get user resume
  * 
  */
       
if($userCareerProfile = $career->getCareerMatchProfile($user_id))
{

     foreach ($userCareerProfile as $resumeItem) 
     {
              $userInfoProfile .= " ".$resumeItem;

              if($userCareerProfile['e_position_title']){
                  $userCareerTitle = $userCareerProfile['e_position_title'];
              }
              if($userCareerProfile['e_career_category']){
                  $userCareerCategory = $userCareerProfile['e_career_category'];
              }
              if($userCareerProfile['e_country']){
                  $userCareerCountry = $userCareerProfile['e_country'];
              }
              if($userCareerProfile['e_province']){
                  $userCareerProvince = $userCareerProfile['e_province'];
              }

      }
     // echo $userInfoProfile."<br><br>";
    $userInfoProfile = str_replace(" NA", "", $userInfoProfile);
}else{
    $user->error.="Problem getting your resume, so we couldn't get any matches. Try back soon.<br>";
}


 $titleMatchingIds = $categoryMatchingIds = $locationMatchingIds = $user_id;
 
 /*
  * 
  * Get Ids with Title
  */
       


 if($userCareerTitle == ""){
     $user->error.= "Please add your desired position title to match you with people in that field.<br>";
 }else{
       if($resultIds = $career->getMatchingTitleIds($user_id, $userCareerTitle, $userCareerProvince, $userCareerCountry)){
            foreach ($resultIds as $personid) 
            {
                $titleMatchingIds .= ", ".$personid['user_id'];
            }
        }else{
            //$user->error.="Problem getting title matches.<br>";
        }
 }
 
 
  /*
  * 
  * Get Ids with Category
  */
       
  if($userCareerCategory == ""){
     $user->error.= "Please pick a career category to get more matches.<br>";
 }else{
       if($resultIds = $career->getMatchingCategoryIds($user_id, $userCareerCategory, $userCareerProvince, $userCareerCountry)){
            foreach ($resultIds as $personid) 
            {
                $categoryMatchingIds .= ", ".$personid['user_id'];
            }
        }else{
            //$user->error.="Problem getting category matches.<br>";
        }
 }
 
/*
  * 
  * Get Ids in location
  */
       
 
 if($userCareerCountry == "" || $userCareerProvince == ""){
     $user->error.= "Adding a career location will help connect you with people in that area.<br>";
 }else{
       if($resultIds = $career->getMatchingLocationIds($user_id, $userCareerProvince, $userCareerCountry)){
            foreach ($resultIds as $personid) 
            {
                $locationMatchingIds .= ", ".$personid['user_id'];
            }
        }else{
            //$user->error.="Problem getting category matches.<br>";
        }
 }
 
 
 
 
 
 



        

 
 
  /*
  * 
  * Check if connected
  */
 
 $net_id = $user_id;
 
 if($networkids = $network->getAllActiveAndRequestedConnectionIds($user_id)){
      foreach ($networkids as $id) 
        {
          $net_id .= ", ".$id['owner_id'];
        }
 }
 
 /* put all people in to their own array */   
   $netArray = explode(", ", $net_id);
   $titleArray = explode(", ", $titleMatchingIds);
   $categoryArray = explode(", ", $categoryMatchingIds);
   $locationArray = explode(", ", $locationMatchingIds);
   
   /* compare what ids are connections, and strip them from the array */
    $titleMatchesClean = array_diff($titleArray, $netArray);
    $categoryMatchesClean = array_diff($categoryArray, $netArray);
    $locationMatchesClean = array_diff($locationArray, $netArray);
  
 
  /*
  * 
  * Shuffle arrays of ids for different results on reload
  */
 
 shuffle($titleMatchesClean);
 shuffle($categoryMatchesClean);
 shuffle($locationMatchesClean);

 
        
 /*
  * 
  * Start getting stuff for users
  */
$titleoutput = "";
$categoryoutput = "";
$locationoutput = "";

 /*
  * 
  * Title Output and Percent
  */

for($i=0; $i< count($titleMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >20 ){
        break;
    }
    //don't allow user logged in to be in list
    if($titleMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($titleMatchesClean[$i] != $user_id){
        
        $idCareerProfile = $career->getCareerMatchProfile($titleMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($idCareerProfile as $resumeItem) 
            {
                if($resumeItem != $idCareerProfile['zodiac'] || 
                        $resumeItem != $idCareerProfile['user_id'] || 
                        $resumeItem != $idCareerProfile['first'] || 
                        $resumeItem != $idCareerProfile['last'] || 
                        $resumeItem != $idCareerProfile['user_name']){
                  $matchInfoProfile .= " ".$resumeItem;
                }
              
            }
            
            $matchInfoProfile = str_replace(", NA", "", $matchInfoProfile);
                   
        /*
        * 
        * Compare Similarities and get percent
        */

       similar_text($userInfoProfile, $matchInfoProfile, $percent);  
       
       
        /*
        * 
        * Compare Zodiac Compatibility
        */

      $caluclatedMatchPercent = number_format($percent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $idCareerProfile['first'] . ' ' . $idCareerProfile['last'];
   
       $titleoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$idCareerProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button id="AddMatchCareerButton'.$idCareerProfile['user_id'].'" onclick="addConnection('.$user_id.','.$idCareerProfile['user_id'].',\'CAREER\');" class="AddCareerButtonSmall">'
               . 'Add Match</button>'
               . '<a href="view/career?profile=' . $idCareerProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percentC animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 









 /*
  * 
  * Category Output and Percent
  */

for($i=0; $i< count($categoryMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >20 ){
        break;
    }
    //don't allow user logged in to be in list
    if($categoryMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($categoryMatchesClean[$i] != $user_id){
        
        $idCareerProfile = $career->getCareerMatchProfile($categoryMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($idCareerProfile as $resumeItem) 
            {
                if($resumeItem != $idCareerProfile['zodiac'] || 
                        $resumeItem != $idCareerProfile['user_id'] || 
                        $resumeItem != $idCareerProfile['first'] || 
                        $resumeItem != $idCareerProfile['last'] || 
                        $resumeItem != $idCareerProfile['user_name']){
                  $matchInfoProfile .= " ".$resumeItem;
                }
              
            }
            
            $matchInfoProfile = str_replace(", NA", "", $matchInfoProfile);
                   
        /*
        * 
        * Compare Similarities and get percent
        */

       similar_text($userInfoProfile, $matchInfoProfile, $percent);  

      $caluclatedMatchPercent = number_format($percent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $idCareerProfile['first'] . ' ' . $idCareerProfile['last'];
   
       $categoryoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$idCareerProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button id="AddMatchCareerButton'.$idCareerProfile['user_id'].'" onclick="addConnection('.$user_id.','.$idCareerProfile['user_id'].',\'CAREER\');" class="AddCareerButtonSmall">'
               . 'Add Match</button>'
               . '<a href="view/career?profile=' . $idCareerProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percentC animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 







 /*
  * 
  * Category Output and Percent
  */

for($i=0; $i< count($locationMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >10 ){
        break;
    }
    //don't allow user logged in to be in list
    if($locationMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($locationMatchesClean[$i] != $user_id){
        
        $idCareerProfile = $career->getCareerMatchProfile($locationMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($idCareerProfile as $resumeItem) 
            {
                if($resumeItem != $idCareerProfile['zodiac'] || 
                        $resumeItem != $idCareerProfile['user_id'] || 
                        $resumeItem != $idCareerProfile['first'] || 
                        $resumeItem != $idCareerProfile['last'] || 
                        $resumeItem != $idCareerProfile['user_name']){
                  $matchInfoProfile .= " ".$resumeItem;
                }
              
            }
            
            $matchInfoProfile = str_replace(", NA", "", $matchInfoProfile);
                   
        /*
        * 
        * Compare Similarities and get percent
        */

       similar_text($userInfoProfile, $matchInfoProfile, $percent);  

      $caluclatedMatchPercent = number_format($percent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $idCareerProfile['first'] . ' ' . $idCareerProfile['last'];
   
       $locationoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$idCareerProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button id="AddMatchCareerButton'.$idCareerProfile['user_id'].'" onclick="addConnection('.$user_id.','.$idCareerProfile['user_id'].',\'CAREER\');" class="AddCareerButtonSmall">'
               . 'Add Match</button>'
               . '<a href="view/career?profile=' . $idCareerProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percentC animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 

