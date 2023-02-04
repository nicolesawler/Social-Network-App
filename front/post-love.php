<?php

/* 
 * Copyright 2017 nicolesawler.
 *
*/
include 'classes/class.lovepost.php';
$postlove = new POSTLOVE();

include 'classes/class.lovevalidate.php';
$validate = new LOVEVALIDATE(); 
 
/**
* Get user preferences
* @param Uses user id and love 
* @return array
*/

$userPref = $postlove->PostFunction('user_pref',$validate,$love,$user,$user_id);
 

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
 if(isset($_POST['btn_love_save'])):
     $result = $postlove->PostFunction('btn_love_save',$validate,$love,$user,$user_id);
     if(!$result): $user->printMsg($result); endif;
 endif;
 
}