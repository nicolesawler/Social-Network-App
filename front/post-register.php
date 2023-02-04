<?php
/* 
 * Copyright 2017 nicolesawler.
 *
 */
include 'classes/class.registervalidate.php';
$validate = new REGISTERVALIDATE(); 
   
include 'classes/class.registerpost.php';
$postregister = new POSTREGISTER();

if(isset($_POST))
{
 if(isset($_POST['btn-signup'])):
    include 'back/db-user.php'; 
    include 'back/db-create-tables.php';
    

    $postregister->PostFunction('btn-signup',$validate,$user,$createTables);

    if(isset($user->error)) {
        //Repopulate fields if error
        $uname = $validate->validate_username($user->basicValidation($_POST['txt_uname']));
        $umail = $validate->validate_email($user->basicValidation($_POST['txt_umail'])); 

        $fname = $validate->validate_names($user->basicValidation($_POST['txt_first'])); 
        $lname = $validate->validate_names($user->basicValidation($_POST['txt_last'])); 

        $day   = $validate->validate_dates($user->basicValidation($_POST['txt_day'])); 
        $month = $validate->validate_month($user->basicValidation($_POST['txt_month'])); 
        $year  = $validate->validate_dates($user->basicValidation($_POST['txt_year'])); 
        
        

    }
 endif;
}