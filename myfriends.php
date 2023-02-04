<?php
include_once 'back/db-user.php';
include_once 'back/db-network.php';

$friendsTotalCount = $network->getMyFriendsCount($network->id_validate($network->item_validate($user_id)));

if($friendsTotalCount != false){
 $friendsTotalCountOutput = "(".$friendsTotalCount.")"; 
}else{
  $friendsTotalCountOutput = "(0)"; 
}

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
  Friends <?=$friendsTotalCountOutput; ?>
	</div>
	
    <div id="page-box" class="page-box">
  
<?php 
$r_cnt = 0;
$buttonIds = array();
try
{
    if($friends = $network->getMyFriends($network->id_validate($network->item_validate($user_id))))
    {
        foreach ($friends as $friend) 
        {


?>
                      
        
        
                    <div id="friend-box" class="friend-box <?= $friend['n_type']; ?>-request">


                        <div class="myfriends-photo">&nbsp;</div>
                        <strong><?= $friend['first'] ." ".$friend['last']; ?></strong> 
                        
<span class="friendtxtDelete">

        <i class="gw-trash-can" onclick="removeConnection(this,<?= $_SESSION['user_id']; ?>,<?= $friend['owner_id']; ?>)"></i>

</span>
                        
                        <div class="myfriends-buttons">   
                            <button id="MessageFriendButton" class="MessageFriendButton">Message</button>
                            <a href="view?profile=<?=$friend['user_name'];?>" target="_blank"><button id="RemoveButton" class="RemoveButton">View</button></a>
                        </div>
                    </div>
      
<?php     

        }
    }else{
        echo "You don't have any friends yet.";
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