<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

/* User Logged In / Get Network Connections */
include_once '../back/db-user.php';
include_once '../back/db-network.php';
include_once '../back/db-profiles.php';

/* User Profile Viewing  */
include_once '../back/db-view.php';

$profile = filter_input(INPUT_GET, 'profile', FILTER_SANITIZE_STRING);
       
        
        
    if($profile === ""){
        
        $user->redirect('../home');
        
    }else{
        
        $uname = $user->basicValidation($profile);

        if (strlen($uname) < 1 || strlen($uname) > 32) {
                $uname = "";
        }else{
                $uname = preg_replace("/[^a-z0-9-_.]/i", "", $uname);
        }
        if($uname != ""){
            $viewProfile_Id = $viewProfile_First = $viewProfile_Last = $viewProfile_Birthday = $viewProfile_Zodiac = $viewProfile_Desc = "";
 
            try
               {
                   if($viewingProfileUser = $user->getProfileUserInfo($uname)) 
                   {
                         $viewProfile_Id = $viewingProfileUser['user_id'];
                         $viewProfile_First = $viewingProfileUser['first'];
                         $viewProfile_Last = $viewingProfileUser['last'];
                         $viewProfile_Birthday = $viewingProfileUser['birthday'];
                         $viewProfile_Zodiac = $viewingProfileUser['zodiac'];
                         $viewProfile_Desc = $viewingProfileUser['user_description'];
                  }else{
                      echo "no username";
                      $viewProfile_Id = 0;
                  }
              }
              catch(PDOException $e)
              {
                 echo $e->getMessage();
              }
                                  
           
           
        }else{
           $viewProfile_Id = 0;
        }
        //define("USER_PROFILE", "Unknown");
        define("USER_PROFILE_NAME", $uname);
        define("USER_PROFILE_ID", $viewProfile_Id);

    }

if($areyouconnected = $network->checkIfConnected(USER_PROFILE_ID,$user_id)){ 
    $ConnectionType = $areyouconnected;
}elseif(USER_PROFILE_ID === $user_id){
    $ConnectionType = "USERISOWNER";
}else{
    $ConnectionType = "NOTCONNECTED";
}