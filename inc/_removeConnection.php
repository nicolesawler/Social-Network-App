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
      echo false;
    }else{
            try
             {
                
                if($network->removeFromUser($u,$o)){ 
                    try
                        {
                           if($network->removeFromOwner($u,$o)){ 
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
    echo false;
}

