<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '../back/db-user.php';
//include_once '../back/db-network.php';
include_once '../back/db-profiles.php';


if(isset($_POST['i']) && isset($_POST['t'])){
echo "here";
    $i = $_POST['i'];//filter_input_array(INPUT_POST, $_POST['i']);
    //$ids = explode(",", $i);
    $type = $user->basicValidation($_POST['t']);
    
    if($type != 'FRIEND' || $type != 'LOVE' || $type != 'CAREER'){
        $type = 'FRIEND';
    }
    
   If($type == ""){
      // $user->redirect('home');
       echo "here2";
    }else{
            try
             {
                
                if($posts = $profiles->getTimelineStatuses($i,$type)){ 
                      echo $posts;
                }else{
                    echo "nope";
                }


            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }  
                                         
    }//if(isset($_POST['u']) && isset($_POST['o'])){

}else{
    //$user->redirect('/home');
    exit;
}

