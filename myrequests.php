<?php
include_once 'back/db-user.php';
include_once 'back/db-network.php';
?>
<?php $page = 'page';?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">
    
    
<div class="menu-space">
    <ul id="menu">
             <li class="timeline"><a class="stars" href="myrequests">Requests</a></li>
            <li class="active"><a class="stars" href="myfriends">My Friends</a></li>
            <li class="career"><a class="stars" href="mymatches">My Matches</a></li>
            <li class="love"><a class="stars" href="mycareers">My Co-Careers</a></li>
<!--            <li class="glog"><a class="glog" href="glog">Invite</a></li>-->
            <li class="stars"><a class="stars" href="stars">Find People</a></li>
    </ul>
 </div>
    
    
<div id="page-holder">
    
	<div id="page-title" class="page-title">
  Requests
	</div>
	
    <div id="page-box" class="page-box">
  
<?php 
$r_cnt = 0;
$buttonIds = array();
try
{
    if($requests = $network->getAllConnectionRequests($network->id_validate($network->item_validate($user_id))))
    {
        foreach ($requests as $request) 
        {
        $r_cnt++;

        
            try
            {
                if($ownerInfo = $user->getProfileUserById($request['owner_id'])) 
                {
                      $ownerFirstName = $ownerInfo['first'];
                      $ownerLastName = $ownerInfo['last'];
                      ?>
                      
        
        
                    <div id="request-box" class="request-box <?= $request['n_type']; ?>-request">

                        <div class="request-buttons">
                            
<button id="RequestButtonApprove" onclick="approveConnection(this,<?= USER_ID; ?>,<?= $request['owner_id']; ?>)" class="RequestButtonApprove <?= $request['n_type']; ?>RequestButtonApprove">Approve</button>

<button id="RequestButtonDeny" onclick="denyConnection(this,<?= USER_ID; ?>,<?= $request['owner_id']; ?>)" class="RequestButtonDeny <?= $request['n_type']; ?>RequestButtonDeny">Deny</button>

                        </div>
                        <div class="request-photo">&nbsp;</div>
                        <strong><?= $ownerFirstName ." ".$ownerLastName; ?></strong><br>
                        <?= ucfirst(strtolower($request['n_type'])); ?> Request
                        
                    </div>
     
                      <?php //if (($r_cnt % 2) == 1): echo "<div class=clear></div>"; endif; ?>
                      
                      
                 <?php     
               }
               else{
                   echo "problem";
               }
           }
           catch(PDOException $e)
           {
              echo $e->getMessage();
           }
        }
    }else{
        echo "Sorry, you have no new requests.";
    }
}
catch(PDOException $e)
{
   echo $e->getMessage();
}

?>
       
    <div class="clear"></div> 
    </div>
    

    
    
  
</div> 
</div>
    
    
    
    
    
 </div> 
</div>  
<script src="assets/js/network.js"></script>
<?php include_once 'template/foot.php'; ?>