<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

include_once '/Applications/MAMP/htdocs/goalwoke/back/db-user.php';
include_once '/Applications/MAMP/htdocs/goalwoke/back/db-profiles.php';

if(isset($_GET['s']) && isset($_GET['u']) && isset($_GET['o'])){
  
    $s = $_GET['s']  ;
    $u = $_GET['u']   ;
    $o = $_GET['o']  ;
    
     If($s == "" || $u == "" || $o == "" || $u != $user_id){
       $user->redirect('home');
    }else{
        
    try
     {

             $sql = "SELECT adv_id FROM profiles.".$o."_adv "
                     . "WHERE adv_encourage = 1 "
                     . "AND status_id = :s "
                     . "AND user_id = :u "
                     . "AND owner_id = :o";
             $stmt = $PDB_con->prepare($sql); 
             $stmt->bindparam(":s", $s);                          
             $stmt->bindparam(":u", $u); 
             $stmt->bindparam(":o", $o);   
             $stmt->execute();
             $encourageCount = $stmt->fetch();

             if($stmt->rowCount() > 0)
            {

                                try
                                 {
                                    $sql = "UPDATE profiles.".$o."_adv "
                                            . "SET  adv_encourage = 0, last_edited = NOW() "
                                            . "WHERE status_id = :s "
                                            . "AND user_id = :u "
                                            . "AND owner_id = :o";
                                                $ustmt = $PDB_con->prepare($sql);                     
                                                    $ustmt->bindparam(":s", $s);                          
                                                    $ustmt->bindparam(":u", $u); 
                                                    $ustmt->bindparam(":o", $o);  
                                                    $ustmt->execute(); 

                                                if($ustmt){         
                                                    $sql = "SELECT count(adv_encourage) as 'encourageCount' "
                                                            . "FROM profiles.".$o."_adv "
                                                            . "WHERE adv_encourage = 1 "
                                                            . "AND status_id = :s";
                                                    $stmt = $PDB_con->prepare($sql);  
                                                    $stmt->bindparam(":s", $s);  
                                                    $stmt->execute();
                                                    $encourageCount = $stmt->fetch();

                                                   if($stmt->rowCount() > 0)
                                                   {
                                                     echo $encourageCount['encourageCount'];
                                                   }else{
                                                       echo "0";
                                                   }
                                                }else{
                                                    echo "Error Updating";
                                                }


                                }
                                catch(PDOException $e)
                                {
                                    echo $e->getMessage();
                                }  
                                       
        }else{
                                         
                                         
                                         
                                          try
                                                {

                                                     $sql = "INSERT INTO profiles.".$o."_adv "
                                                             . "(status_id, user_id, owner_id, adv_encourage, date_added, last_edited, status) "
                                                             . "VALUES( :s, :u, :o, 1, NOW(), NOW(), 'ACTIVE' )";
                                                     $stmt2 = $PDB_con->prepare($sql);           
                                                    $stmt2->bindparam(":s", $s);                          
                                                    $stmt2->bindparam(":u", $u); 
                                                    $stmt2->bindparam(":o", $o);                   
                                                    $stmt2->execute();

                                                    if($stmt2){ 

                                                           try
                                                             {

                                                                     $sql = "SELECT count(adv_encourage) as 'encourageCount' "
                                                                             . "FROM profiles.".$o."_adv "
                                                                             . "WHERE adv_encourage = 1 "
                                                                             . "AND status_id = :s";
                                                                     $stmt = $PDB_con->prepare($sql);  
                                                                      $stmt->bindparam(":s", $s);  
                                                                     $stmt->execute();
                                                                     $encourageCount = $stmt->fetch();

                                                                              if($stmt->rowCount() > 0)
                                                                              {
                                                                                echo $encourageCount['encourageCount'];
                                                                              }else{
                                                                                  echo "error";
                                                                              }
                                                             }
                                                             catch(PDOException $e)
                                                             {
                                                                 echo $e->getMessage();
                                                             }  
                                                    }else{
                                                        echo "error inserting";
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

