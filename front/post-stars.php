<?php

/* 
 * Copyright 2017 nicolesawler.
 */

include 'classes/class.starspost.php';
$poststars = new POSTSTARS();

if (!strrpos($_SERVER['REQUEST_URI'], '?')) {
    $urlzodiac = (  USER_ZODIAC != "" ? USER_ZODIAC : "Aries"  );
}else{
    $urlzodiac = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '?') + 1);
}

$getZ = $poststars->PostFunction('get_zodiac',$stars,$user,$user_id,$urlzodiac);

$z_zodiac = $getZ['zt_zodiac'];
$z_date = $getZ['zt_date'];
$z_random = $getZ['zt_random'];
$z_goals = $getZ['zt_goals'];
$z_achieve = $getZ['zt_achieve'];
$z_love = $getZ['zt_love'];
$z_career = $getZ['zt_career'];




/**
* If Posted (save changes to profile)
* @param Posts form params
* @return redirects back to page to clear form on success
*/

if(isset($_POST))
{
    
 if(isset($_POST['btn_stars_zodiac'])):
     echo $poststars->PostFunction('btn_stars_zodiac',$stars,$user,$user_id,'');
 endif;
 
}


