<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '../back/db-user.php';
include_once '../back/db-network.php';

if(isset($_POST['u']) && isset($_POST['o'])){

    $u = $network->id_validate($network->item_validate($_POST['u']))   ;
    $o = $network->id_validate($network->item_validate($_POST['o']))   ;
 
   If($u == "" || $o == "" || $u != $user_id){
      // $user->redirect('home');
       exit;
    }else{
            try
             {
                
                if($network->denyUpdateUserConnection($u,$o)){ 
                    try
                        {
                           if($network->denyUpdateOwnerConnection($u,$o)){ 
                              echo true;
                           }else{
                              echo false;
                           }
                       }
                       catch(PDOException $e)
                       {
                           echo $e->getMessage();
                       }  
                }else{
                    echo false;
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

