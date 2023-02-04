<?php

/* 
 * Copyright 2017 nicolesawler.
 *
*/
include 'classes/class.careerpost.php';
$postcareer = new POSTCAREER();

include 'classes/class.careervalidate.php';
$validate = new CAREERVALIDATE(); 
 
/**
* Get user preferences
* @param Uses user id and love 
* @return array
*/

$userPref = $postcareer->PostFunction('user_pref',$validate,$career,$user,$user_id);
 

/**
* If posted saved
* @param Gets from URL
* @return value after ?
* @url ex: love?saved
*/

$s = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '?') + 1);
$saved = ($s=='saved' ? 'savesuccess' : "");



/**
* If Posted (save changes to profile)
* @param Posts form params
* @return redirects back to page to clear form on success
*/

if(isset($_POST))
{
 if(isset($_POST['btn_career_save'])):
     $result = $postcareer->PostFunction('btn_career_save',$validate,$career,$user,$user_id);
     if(!$result): $user->printMsg($result); endif;
 endif;
 
}