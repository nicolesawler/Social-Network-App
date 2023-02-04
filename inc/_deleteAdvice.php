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
    $advice = $validate->category_id_validate($validate->item_validate($_GET['a']))   ;
    
   If($g == "" || $u == "" || $o == "" || $u != $user_id){
       $user->redirect('home');
    }else{
        
    try
     {


                    $sql = "UPDATE goals.".$o."_adv SET status = 'DELETE', last_edited = NOW() WHERE adv_id = :a AND owner_id = :o";
                    $stmt = $GDB_con->prepare($sql); 
                   $stmt->bindparam(":o", $o);                   
                   $stmt->bindparam(":a", $advice);                   
                   $stmt->execute();

                   if($stmt){ 

                        
                             try
                                {


                                   $sql = "SELECT adv_id, goal_id, user_id, owner_id, adv_comment, date_added "
                                           . "FROM goals.".$o."_adv "
                                           . "WHERE adv_comment != '' "
                                           . "AND goal_id = :g AND owner_id = :o AND status = 'ACTIVE' ORDER BY adv_id DESC";
                                   $stmt = $GDB_con->prepare($sql);  
                                   $stmt->bindparam(":g", $g);  
                                   $stmt->bindparam(":o", $o);          
                                   $stmt->execute();
                                   $allAdvice = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                            if($stmt->rowCount() > 0)
                                            {
                                             $output = '';
                                              //echo json_encode($allAdvice);
                                              foreach ($allAdvice as $comment => $c){


                                                       $sql = "SELECT user_name, first, last "
                                                           . "FROM accounts.users "
                                                           . "WHERE user_id = :u ";
                                                           $stmt = $GDB_con->prepare($sql);    
                                                           $stmt->bindparam(":u", $c['user_id']); 
                                                           $stmt->execute();
                                                           $name = $stmt->fetch();
                                                           if($stmt->rowCount() > 0)
                                                               {
                                                               $output .= "<b>". $name['first'] . ' ' . $name['last'] . "</b> &nbsp; <small>";

if($user_id == $o){$output .= "<button onclick=deleteAdvice(".$c['goal_id'].",".$c['user_id'].",".$c['owner_id']."," .$c['adv_id']. ") class=removebtn>Remove</button>";}
if($c['user_id'] == $u && $c['user_id'] != $o){$output .= "<button onclick=deleteAdvice(".$c['goal_id'].",".$c['user_id'].",".$c['owner_id']."," .$c['adv_id']. ") class=removebtn>Remove</button>";}  

                                                               $output .= $goals->dateTimeConvert($c['date_added']) . "</small><br>";
                                                               $output .= $c['adv_comment'] . "<br>&nbsp;<br>";   
                                                               }
                                               }

                                                            echo $output;
                 
                                            } else {
                                                echo "No advice given yet.";
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

