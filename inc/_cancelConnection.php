<?php
/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '../back/db-user.php';
include_once '../back/db-network.php';

if(isset($_POST['t']) && isset($_POST['u']) && isset($_POST['o'])){

    $t = $network->type_validate($network->item_validate($_POST['t']))   ;
    $u = $network->id_validate($network->item_validate($_POST['u']))   ;
    $o = $network->id_validate($network->item_validate($_POST['o']))   ;
 
   If($t == "" || $u == "" || $o == "" || $u != $user_id){
       exit;
    }else{
            try
             {
                if($previousID = $network->getConnectionCheckIfExists($o,$u)){ 
                    try
                        {
                           if($network->editOldConnectionRemove($o,$u,$previousID)){ 
                               echo "Add ".$t;
                           }
                       }
                       catch(PDOException $e)
                       {
                           echo $e->getMessage();
                       }  
                }else{
                   
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

