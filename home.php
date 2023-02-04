<?php
$error = false;
/* user */
include_once 'back/db-user.php';
/* profiles */
include_once 'back/db-profiles.php';
/* network */
include_once 'back/db-network.php';
/* post */
include 'front/post-home.php';
/* css */
$page = 'home';

?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    


<div id="in-warnings" class="alert warning">
<?php
    if(isset($user->error)) {
       $user->printError();
       $error = true;
   }
   ?></div> 
           
           
	<div id="single-moment" class="single-moment">
            
            <form method="post">
                
                   <div class="radio-toolbar">
                       
                        <input type="radio" id="thought" name="type" value="THOUGHT" checked>
                        <label for="thought" class="thought"><i class="gw-world"></i> Just a thought</label>
                        
                        <input type="radio" id="goals" name="type" value="GOALS">
                        <label for="goals" class="goals"><i class="gw-clock-1"></i> Goals</label>
                        
                        <input type="radio" id="love" name="type" value="LOVE">
                        <label for="love" class="love"><i class="gw-pulse"></i> Love</label>

                        <input type="radio" id="career" name="type" value="CAREER">
                        <label for="career" class="career"><i class="gw-open-book"></i> Career</label>
                        
                       <input type="radio" id="glogs" name="type" value="GLOGS">
                        <label for="glogs" class="glogs"><i class="gw-edit"></i> Glogs</label>
                        
                        <input type="radio" id="stars" name="type" value="STARS">
                        <label for="stars" class="stars"><i class="gw-black"></i> Stars</label>
                        
                        <input type="radio" id="trigger" name="type" value="TRIGGER">
                        <label for="trigger" class="trigger"><i class="gw-money-1"></i> Trigger</label>

                  </div>
                <span class="triangle-just-because">&#9653;</span>
                <textarea id="in-single-mom" class="in-single-mom" name="in-single-mom" maxlength="255"><?php if($error){echo $user->basicValidation($_POST['in-single-mom']);}?></textarea>
                
<!--		<input id="in-single-mom" class="in-single-mom" name="in-single-mom" value="<?php if($error){echo $user->basicValidation($_POST['in-single-mom']);}?>" placeholder="Share a moment..." />-->
                
		<span id='characters-used' class='characters-used'>255</span>
                
                <button id="in-single-mom-submit" class="in-single-mom-submit" name="in-single-mom-submit" type="submit" >go</button>
<!--		<input id="in-single-mom-submit" class="in-single-mom-submit" name="in-single-mom-submit" type="submit" value="go" />-->
                
                <div class="clear"></div>
                
            </form>
		
	</div>
    
<!--    <h2>Timeline</h2>
    -->
    <br><br>
    

    
    


<div class="time-row">
    <a id="HomeFriendButton" href="javascript:void(0)" onclick="openType(event, 'Friend');" class="tablink Friend active">
      <div id="HomeFriendDiv" class="HomeFriendDiv tablink Friend ">Friends</div>
    </a>
    <a id="HomeLoveButton" href="javascript:void(0)" onclick="openType(event, 'Love');" class="tablink Love">
      <div id="HomeLoveDiv" class="HomeLoveDiv tablink Love">Love</div>
    </a>
    <a id="HomeCareerButton" href="javascript:void(0)" onclick="openType(event, 'Career');" class="tablink Career">
      <div id="HomeCareerDiv" class="HomeCareerDiv tablink Career">Career</div>
    </a>
 </div>
    
 <div class="clear"></div>
 
 <div class="Timeline_Container">
    
  <div id="Friend" class="w3-container timelineType" style="display:none">
 <?php
    try
 {

    if($posts = $profiles->getTimelineStatuses($friendids,'FRIEND')){ 
        foreach ($posts as $post) 
        {
            //Users need to be created
           if($ownerInfo = $user->getProfileUserById($post['owner_id'])){
               $friendfirst = $ownerInfo['first'];
               $friendlast = $ownerInfo['last'];
               $frienduname = $ownerInfo['user_name'];
               
           }
            $postedType = $profiles->getBoxStatusTitleByType($post['type']);
            $divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            ?>
            <div id="status-title" class="<?= strtolower($post['type']);?>">
                <a href="view?profile=<?= $frienduname; ?>"><?php if(isset($postedType)): echo '<b>' . $friendfirst . ' ' . $friendlast . '</b></a>' . $postedType; endif; ?>
            </div>
            <div id="status-box">
                <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
            <?= $post['message'];?>
                
                
                <p>Encourage -> Add to Triggers</p>
                
                  <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". $post['owner_id'].",". $divId;  ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount($post['owner_id'], $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
                </button>
            </div>
          <?php
          
       }
    }else{
        echo "<p align=center><br><br><b>Write a new status update!</b></p>";
    }


}
catch(PDOException $e)
{
    echo $e->getMessage();
}  
?> </div>

  <div id="Love" class="w3-container timelineType" style="display:none">
<?php
    try
 {

    if($posts = $profiles->getTimelineStatuses($loveids,'LOVE')){ 
        foreach ($posts as $post) 
        {
            //Users need to be created
           if($ownerInfo = $user->getProfileUserById($post['owner_id'])){
               $lovefirst = $ownerInfo['first'];
               $lovelast = $ownerInfo['last'];
               $loveuname = $ownerInfo['user_name'];
           }
            $postedType = $profiles->getBoxStatusTitleByType($post['type']);
            $divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            ?>
            <div id="status-title" class="love">
                <a href="view?profile=<?= $loveuname; ?>"><?php if(isset($postedType)): echo '<b>' . $lovefirst . ' ' . $lovelast . '</b></a>' . $postedType; endif; ?>
            </div>
            <div id="status-box">
                <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
            <?= $post['message'];?>
                
                
                <p>Encourage -> Add to Triggers</p>
                
                  <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". $post['owner_id'].",". $divId;  ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount($post['owner_id'], $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
                </button>
            </div>
          <?php
       }
    }else{
        echo "<p align=center><br><br><b>Write a new love status update!</b></p>";
    }


}
catch(PDOException $e)
{
    echo $e->getMessage();
}  
    ?></div>

  <div id="Career" class="w3-container timelineType" style="display:none">
<?php
    try
 {

    if($posts = $profiles->getTimelineStatuses($careerids,'CAREER')){ 
        foreach ($posts as $post) 
        {
            //Users need to be created
           if($ownerInfo = $user->getProfileUserById($post['owner_id'])){
               $careerfirst = $ownerInfo['first'];
               $careerlast = $ownerInfo['last'];
               $careeruname = $ownerInfo['user_name'];
           }
            $postedType = $profiles->getBoxStatusTitleByType($post['type']);
            $divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            ?>
            <div id="status-title" class="career">
                <a href="view?profile=<?= $careeruname; ?>"><?php if(isset($postedType)): echo '<b>' . $careerfirst . ' ' . $careerlast . '</b></a>' . $postedType; endif; ?>
            </div>
            <div id="status-box">
                <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
            <?= $post['message'];?>
                
                
                <p>Encourage -> Add to Triggers</p>
                
                  <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". $post['owner_id'] .",". $divId; ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount($post['owner_id'], $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
                </button>
            </div>
          <?php
       }
    }else{
        echo "<p align=center><br><br><b>Write a new career update!</b></p>";
    }


}
catch(PDOException $e)
{
    echo $e->getMessage();
}  
    ?>
  </div>
    
    
</div>
    

 </div><!-- timeline container -->   
    
 
    
    
	
	
</div><!--main space-->
   
</div>
    <script>
document.getElementById('Friend').style.display = "block";
document.getElementById('HomeFriendDiv').className += " friendActive";

function openType(evt, type) {
    
    var frienddiv = document.getElementById('HomeFriendDiv');
    var lovediv = document.getElementById('HomeLoveDiv');
    var careerdiv = document.getElementById('HomeCareerDiv');
    

    var i, x, tablinks;
    x = document.getElementsByClassName("timelineType");
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");

    }
    if(type === "Friend"){
        frienddiv.className += " friendActive";
        lovediv.classList.remove("loveActive");
        careerdiv.classList.remove("careerActive");
    }else if(type === "Love"){
        frienddiv.classList.remove("friendActive");
        lovediv.className += " loveActive";
        careerdiv.classList.remove("careerActive");
    }else{
        frienddiv.classList.remove("friendActive");
        lovediv.classList.remove("loveActive");
        careerdiv.className += " careerActive";    
    }
    
    
    document.getElementById(type).style.display = "block";
  
    evt.currentTarget.className += " active";
}




    function showEncourages(status,user,owner,divId) {
        //alert("here");
        if (status == "") {
            document.getElementById("encourageSpan"+status).innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(goal,user,owner);
                    document.getElementById("encourageSpan"+divId).innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","http://localhost/goalwoke/inc/_encouragesStatus.php?s="+status+"&u="+user+"&o="+owner,true);
            xmlhttp.send();
        }
    }

</script>
<script src="assets/js/home-functions.js"></script>
<?php include_once 'template/foot.php'; ?>