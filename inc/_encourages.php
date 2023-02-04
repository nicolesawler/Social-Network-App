<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '../back/db-user.php';
include_once '../back/db-goals.php';

if(isset($_GET['g']) && isset($_GET['u']) && isset($_GET['o'])){
    
    require_once '../front/classes/class.goalsvalidate.php';
    $validate = new GOALSVALIDATE();

    $g = $validate->category_id_validate($validate->item_validate($_GET['g']))   ;
    $u = $validate->category_id_validate($validate->item_validate($_GET['u']))   ;
    $o = $validate->category_id_validate($validate->item_validate($_GET['o']))   ;
    
     If($g == "" || $u == "" || $o == "" || $u != $user_id){
       $user->redirect('home');
    }else{
        
    try
     {

             $sql = "SELECT adv_id FROM goals.".$o."_adv "
                     . "WHERE adv_encourage = 1 "
                     . "AND goal_id = :g "
                     . "AND user_id = :u "
                     . "AND owner_id = :o";
             $stmt = $GDB_con->prepare($sql); 
             $stmt->bindparam(":g", $g);                          
             $stmt->bindparam(":u", $u); 
             $stmt->bindparam(":o", $o);   
             $stmt->execute();
             $encourageCount = $stmt->fetch();

             if($stmt->rowCount() > 0)
            {

                                try
                                 {
                                    $sql = "UPDATE goals.".$o."_adv "
                                            . "SET  adv_encourage = 0, last_edited = NOW() "
                                            . "WHERE goal_id = :g "
                                            . "AND user_id = :u "
                                            . "AND owner_id = :o";
                                                $stmt = $GDB_con->prepare($sql);                     
                                                    $stmt->bindparam(":g", $g);                          
                                                    $stmt->bindparam(":u", $u); 
                                                    $stmt->bindparam(":o", $o);  
                                                    $stmt->execute(); 


                                                    $sql = "SELECT count(adv_encourage) as 'encourageCount' "
                                                            . "FROM goals.".$o."_adv "
                                                            . "WHERE adv_encourage = 1 "
                                                            . "AND goal_id = :g";
                                                    $stmt = $GDB_con->prepare($sql);  
                                                    $stmt->bindparam(":g", $g);  
                                                    $stmt->execute();
                                                    $encourageCount = $stmt->fetch();

                                                   if($stmt->rowCount() > 0)
                                                   {
                                                     echo $encourageCount['encourageCount'];
                                                   }



                                }
                                catch(PDOException $e)
                                {
                                    echo $e->getMessage();
                                }  
                                       
            }else{
                                         
                                         
                                         
                                          try
                                                {

                                                     $sql = "INSERT INTO goals.".$o."_adv "
                                                             . "(goal_id, user_id, owner_id, adv_encourage, date_added, last_edited, status) "
                                                             . "VALUES( :g, :u, :o, 1, NOW(), NOW(), 'ACTIVE' )";
                                                     $stmt2 = $GDB_con->prepare($sql);           
                                                    $stmt2->bindparam(":g", $g);                          
                                                    $stmt2->bindparam(":u", $u); 
                                                    $stmt2->bindparam(":o", $o);                   
                                                    $stmt2->execute();

                                                    if($stmt2){ 

                                                           try
                                                             {

                                                                     $sql = "SELECT count(adv_encourage) as 'encourageCount' "
                                                                             . "FROM goals.".$o."_adv "
                                                                             . "WHERE adv_encourage = 1 "
                                                                             . "AND goal_id = :g";
                                                                     $stmt = $GDB_con->prepare($sql);  
                                                                      $stmt->bindparam(":g", $g);  
                                                                     $stmt->execute();
                                                                     $encourageCount = $stmt->fetch();

                                                                              if($stmt->rowCount() > 0)
                                                                              {
                                                                                echo $encourageCount['encourageCount'];
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
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                     }
                    }
                    catch(PDOException $e)
                    {
                        echo $e->getMessage();
                    }   
        
        
        
        
       
      
       

        
    }

}else{
    $user->redirect('/home');
}

