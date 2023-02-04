<?php

/* 
 * Copyright 2017 nicolesawler.
 *

 */
include_once 'classes/class.matchzodiac.php';

$zodiacFunctions = new ZODIACMATCH();
$zcheck = USER_ZODIAC;          
 

 /*
  * 
  * Compare Preferred Partner Gender vs your gender
  */
       
$userGenderSettings = $love->getUserGenderAndPPG($user_id);

 $userGender = $userGenderSettings['gender'];
 $preferredPartnerGender = $userGenderSettings['partner_gender'];
 $genderMatchingIds = $user_id;
 
 if($userGender == ""){
     $user->error.= "Please update your gender to get matches.<br>";
 }else{
     
     if($preferredPartnerGender == ""){
         //get any gender
        if($resultIds = $love->getNotSpecifiedPPGGenders($user_id)){
            foreach ($resultIds as $personid) 
            {
                $genderMatchingIds .= ", ".$personid['user_id'];
            }
        }else{
            $user->error.="Problem getting none specific gender matches.<br>";
        }
     }else{
        //get specified gender
        if($resultIds = $love->getIdsWithMatchingGenders($userGender,$preferredPartnerGender,$user_id)){
            foreach ($resultIds as $personid) 
            {
                $genderMatchingIds .= ", ".$personid['user_id'];
            }
        }else{
            $user->error.="Problem getting gender matches.<br>";
        }
     }
     
     
     

 }  


        
 /*
  * 
  * Compare Location
  */
if($userLocation = $love->getUserLocations($user_id))   {
    $country = $userLocation['country'];
    $province = $userLocation['province'];
}else{
    $country = "World";
    $province = "World";
}
$worldMatches = $checkConnections = $countryMatches = $provinceMatches = $user_id;

 if($resultIds = $love->getMatchesInLocation($country,$province,$genderMatchingIds,$user_id)){
     foreach ($resultIds as $locationId) 
        {
          /* Country Matches */
          if($locationId['country'] == $country && $locationId['province'] != $province){
              $countryMatches .= ", ".$locationId['user_id'];
          }
           /* Province Matches */
          if($locationId['province'] == $province){
              $provinceMatches .= ", ".$locationId['user_id'];
          }        
          /* World Matches */
          if( $locationId['province'] != $province && $locationId['country'] != $country){
              $worldMatches .= ", ".$locationId['user_id'];
          } 
        }
         
 }else{
     $user->error.="Problem getting matches in location.<br>";
 }
 
  /*
  * 
  * Check if connected
  */
 
//get network ids of active connections and put in array
 // compare array with ids array
 // remove matches
 $net_id=$user_id;
 
 if($networkids = $network->getAllActiveAndRequestedConnectionIds($user_id)){
      foreach ($networkids as $id) 
        {
          $net_id .= ", ".$id['owner_id'];
        }
 }
 
/* put all people in to their own array */   
$netArray = explode(", ", $net_id);
$provinceArray = explode(", ", $provinceMatches);
$countryArray = explode(", ", $countryMatches);
$worldArray = explode(", ", $worldMatches);

/* compare what ids are connections, and strip them from the array */
$provinceMatchesClean = array_diff($provinceArray, $netArray);
$countryMatchesClean = array_diff($countryArray, $netArray);
$worldMatchesClean = array_diff($worldArray, $netArray);

 
  /*
  * 
  * Shuffle arrays of ids for different results on reload
  */
 
 shuffle($provinceMatchesClean);
 shuffle($provinceMatchesClean);
 shuffle($countryMatchesClean);
 shuffle($countryMatchesClean);
 shuffle($worldMatchesClean);
 shuffle($worldMatchesClean);

 
           
 /*
  * 
  * Compare all answers (minus desc and religion) USER ONLY
  */
       
$userLoveProfile = $love->getLoveMatchProfile($user_id);
$userInfoProfile = "";

 foreach ($userLoveProfile as $loveItem) 
        {
          $userInfoProfile .= " ".$loveItem;
          
          if($userLoveProfile['partner_gender']){
              $ppg1 = $userLoveProfile['partner_gender'];
          }
          
          if($userLoveProfile['partner_gender']){
              $gender1 = $userLoveProfile['gender'];
          }

        }
        
       $userInfoProfile = str_replace(" NA", "", $userInfoProfile);

        
 /*
  * 
  * Start getting stuff for users
  */
$provinceoutput = "";
$countryoutput = "";
$worldoutput = "";

 /*
  * 
  * Country People
  */

for($i=0; $i< count($provinceMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >20 ){
        break;
    }
    //don't allow user logged in to be in list
    if($provinceMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($provinceMatchesClean[$i] != $user_id){
        
        $partnerLoveProfile = $love->getLoveMatchProfile($provinceMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($partnerLoveProfile as $loveItem) 
            {
                if($loveItem != $partnerLoveProfile['zodiac'] || 
                        $loveItem != $partnerLoveProfile['user_id'] || 
                        $loveItem != $partnerLoveProfile['first'] || 
                        $loveItem != $partnerLoveProfile['last'] || 
                        $loveItem != $partnerLoveProfile['user_name']){
                  $matchInfoProfile .= " ".$loveItem;
                }

                if($partnerLoveProfile['zodiac']){
                    $matchZodiac = $partnerLoveProfile['zodiac'];
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
       
       
       $zodiacPercent = $zodiacFunctions->$zcheck($matchZodiac);
      
      $caluclatedMatchPercent = number_format($percent + $zodiacPercent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $partnerLoveProfile['first'] . ' ' . $partnerLoveProfile['last'];
   
       $provinceoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$partnerLoveProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button id="AddMatchLoveButton'.$partnerLoveProfile['user_id'].'" onclick="addConnection('.$user_id.','.$partnerLoveProfile['user_id'].',\'LOVE\');" class="AddMatchButtonSmall">'
               . 'Add Match</button>'
               . '<a href="view/love?profile=' . $partnerLoveProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percent animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 


 /*
  * 
  * Country People
  */

for($i=0; $i< count($countryMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >10 ){
        break;
    }
    //don't allow user logged in to be in list
    if($countryMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($countryMatchesClean[$i] != $user_id){
        
        $partnerLoveProfile = $love->getLoveMatchProfile($countryMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($partnerLoveProfile as $loveItem) 
            {
                if($loveItem != $partnerLoveProfile['zodiac'] || 
                        $loveItem != $partnerLoveProfile['first'] || 
                        $loveItem != $partnerLoveProfile['last'] || 
                        $loveItem != $partnerLoveProfile['user_name']){
                  $matchInfoProfile .= " ".$loveItem;
                }

                if($partnerLoveProfile['zodiac']){
                    $matchZodiac = $partnerLoveProfile['zodiac'];
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
       
       
       $zodiacPercent = $zodiacFunctions->$zcheck($matchZodiac);
      
      $caluclatedMatchPercent = number_format($percent + $zodiacPercent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $partnerLoveProfile['first'] . ' ' . $partnerLoveProfile['last'];
   
       $countryoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$partnerLoveProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button class="AddMatchButtonSmall">Add Match</button>'
               . '<a href="view/love?profile=' . $partnerLoveProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percent animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 



 /*
  * 
  * World People
  */

for($i=0; $i< count($worldMatchesClean); $i++) 
{
    // break to stop showing more
    if($i >10 ){
        break;
    }
    //don't allow user logged in to be in list
    if($worldMatchesClean[$i] == $user_id){
        continue;
    }
    
    if($worldMatchesClean[$i] != $user_id){
        
        $partnerLoveProfile = $love->getLoveMatchProfile($worldMatchesClean[$i]);
        $matchInfoProfile = "";

        foreach ($partnerLoveProfile as $loveItem) 
            {
                if($loveItem != $partnerLoveProfile['zodiac'] || 
                        $loveItem != $partnerLoveProfile['first'] || 
                        $loveItem != $partnerLoveProfile['last'] || 
                        $loveItem != $partnerLoveProfile['user_name']){
                  $matchInfoProfile .= " ".$loveItem;
                }

                if($partnerLoveProfile['zodiac']){
                    $matchZodiac = $partnerLoveProfile['zodiac'];
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
       
       
       $zodiacPercent = $zodiacFunctions->$zcheck($matchZodiac);
      
      $caluclatedMatchPercent = number_format($percent + $zodiacPercent);
      
      //Don't allow percent to be over 99
       if($caluclatedMatchPercent > 99){
           $caluclatedMatchPercent = 99;
       }
              
        /*
        * 
        * output
        */
       $personName = $partnerLoveProfile['first'] . ' ' . $partnerLoveProfile['last'];
   
       $worldoutput .= '<div id="matchbox" class="matchbox">'
               . '<div class="mymatched-photo" title='.$partnerLoveProfile['zodiac'].'>&nbsp;</div>'
               . '<strong> '.$personName.' </strong> '
               . '<br> '
               . '<button class="AddMatchButtonSmall">Add Match</button>'
               . '<a href="view/love?profile=' . $partnerLoveProfile['user_name'] . '" ><button class="ViewButtonSmall">View Profile</button></a>'
               . '<div class="percent animated pulse">'.$caluclatedMatchPercent. '<br><small>% match</small></div>'
               . '</div>';
       
    }
} 

