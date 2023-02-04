<?php

/*
 * Copyright 2017 nicolesawler.
 *
 */


/**
 * Description of post-home
 *
 * @author nicolesawler
 */

$loveids = "'".$user_id."'";
$careerids = "'".$user_id."'";
$friendids = "'".$user_id."'";


///goes in class then this will call another 
try
{
    if($people = $network->getIdTypeListForStatus($user_id))
    {
        foreach ($people as $pe => $person) 
        {
           //$p[] = array($person['user_id'],$person['n_type']);
           
           if($person['n_type'] == "LOVE"){
               $loveids .= ",".$person['owner_id'];
           }elseif($person['n_type'] == "CAREER"){
               $careerids .= ",".$person['owner_id'];
           }else{
               $friendids .= ",".$person['owner_id'];
           }
           
        }
    }else{
        //$user->error.="You have no friends to show updates of.<br>";
    }
}
    catch(PDOException $e)
{
   echo $e->getMessage();
}



if(isset($_POST))
{
    
 include 'classes/class.homevalidate.php';
 $validate = new HOMEVALIDATE(); 
 
 include 'classes/class.homepost.php';
 $posthome = new POSTHOME();
 
 if(isset($_POST['in-single-mom-submit'])):

        if($getPostedStatus = $posthome->PostFunction('in-single-mom-submit',$validate,$profiles,$user,$user_id)) 
          {
              $getPostedUsername = $getPostedStatus['username'];
              $getPostedFirstname = $getPostedStatus['firstname'];
              $getPostedLastname = $getPostedStatus['lastname'];
              $getPostedMessage = $getPostedStatus['message'];
              $getPostedType = $getPostedStatus['type'];

              $getBoxStatusTitleByType = $profiles->getBoxStatusTitleByType($getPostedType);

          }

 endif;
 
}