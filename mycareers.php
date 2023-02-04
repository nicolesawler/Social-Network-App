<?php
include_once 'back/db-user.php';
include_once 'back/db-network.php';

$careersTotalCount = $network->getMyCareersCount($network->id_validate($network->item_validate($user_id)));

if($careersTotalCount != false){
 $careersTotalCountOutput = "(".$careersTotalCount.")"; 
}else{
  $careersTotalCountOutput = "(0)"; 
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
  Career Connections <?=$careersTotalCountOutput; ?>
	</div>
	
    <div id="page-box" class="page-box">
  
<?php 
try
{
    if($careers = $network->getMyCareers($network->id_validate($network->item_validate($user_id))))
    {
        foreach ($careers as $careercon) 
        {

?>
                      
        
        
                    <div id="careers-box" class="careers-box <?= $careercon['n_type']; ?>-request">


                        <div class="mycareers-photo">&nbsp;</div>
                        <strong><?= $careercon['first'] ." ".$careercon['last']; ?></strong> 
                        
<span class="careerstxtDelete">

        <i class="gw-trash-can" onclick="removeConnection(this,<?= $_SESSION['user_id']; ?>,<?= $careercon['owner_id']; ?>)"></i>

</span>
                        
                        <div class="mycareers-buttons">   
                            <button id="MessageCareersButton" class="MessageCareersButton">Message</button>
                            <a href="view?profile=<?=$careercon['user_name'];?>" target="_blank"><button id="RemoveButton" class="RemoveButton">View</button></a>
                        </div>
                    </div>
      
<?php     

        }
    }else{
        echo "You don't have any career connections yet.";
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