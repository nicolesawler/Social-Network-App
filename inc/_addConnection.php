<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '../back/db-user.php';
include_once '../back/db-network.php';

if(isset($_POST['t']) && isset($_POST['u']) && isset($_POST['o'])){

    $t = $network->type_validate($user->basicValidation($_POST['t']))   ;
    $u = $network->id_validate($user->basicValidation($_POST['u']))   ;
    $o = $network->id_validate($user->basicValidation($_POST['o']))   ;
 
   If($t == "" || $u == "" || $o == "" || $u != $user_id){
      // $user->redirect('home');
       exit;
    }else{
            try
             {
                if($previousID = $network->getConnectionCheckIfExists($o,$u)){ 
                    try
                        {
                           if($network->editOldConnectionRemove($o,$u,$previousID)){ 
                               //echo "edited old one";
                                    try
                                     {
                                        if($network->addNewConnection($o,$u,$t)){ 
                                            echo "Added";
                                        }
                                    }
                                    catch(PDOException $e)
                                    {
                                        echo $e->getMessage();
                                    }  
                           }
                       }
                       catch(PDOException $e)
                       {
                           echo $e->getMessage();
                       }  
                }else{
                    echo $previousID;
                    echo "adding";
                       try
                        {
                           if($network->addNewConnection($o,$u,$t)){ 
                               echo "Added";
                           }
                       }
                       catch(PDOException $e)
                       {
                           echo $e->getMessage();
                       }  
                }


            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }  
                                         
    }//If($t == "" || $u == "" || $o == "" || $u != $user_id){

}else{
    //$user->redirect('/home');
    exit;
}

