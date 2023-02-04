<?php
include_once 'back/db-user.php';
include_once 'back/db-network.php';
$matchesTotalCount = $network->getMyMatchesCount($network->id_validate($network->item_validate($user_id)));

if($matchesTotalCount != false){
 $matchesTotalCountOutput = "(".$matchesTotalCount.")"; 
}else{
  $matchesTotalCountOutput = "(0)"; 
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
  Love Interests <?=$matchesTotalCountOutput; ?>
	</div>
	
    <div id="page-box" class="page-box">
  
<?php 
try
{
    if($matches = $network->getMyMatches($network->id_validate($network->item_validate($user_id))))
    {
        foreach ($matches as $match) 
        {
          
?>
                      
        
        
                    <div id="match-box" class="match-box <?= $match['n_type']; ?>-request">


                        <div class="mymatched-photo">&nbsp;</div>
                        <strong><?= $match['first'] ." ".$match['last']; ?></strong> 
                        
<span class="matchtxtDelete">

        <i class="gw-trash-can" onclick="removeConnection(this,<?= $_SESSION['user_id']; ?>,<?= $match['owner_id']; ?>)"></i>

</span>
                        
                        <div class="mymatched-buttons">   
                            <button id="MessageMatchButton" class="MessageMatchButton">Message</button>
                            <a href="view?profile=<?=$match['user_name'];?>" target="_blank"><button id="RemoveButton" class="RemoveButton">View</button></a>
                        </div>
                    </div>
      
<?php     

        }
    }else{
        echo "You haven't been matched with anyone yet.";
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