<?php

require 'checkUsername.php';
//echo $ConnectionType;

?>
<?php $page = 'home';?>
<?php include_once '../template/head.php';?>  
<div id="vision">
<?php include_once '../template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once '../template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once '../template/user-navigation.php';?>

    
    <br> 
    
<div id="in-warnings" class="alert warning">
<?php
if(isset($user->error)) {
   $user->printError();
   $error = true;
}
?></div> 
    <br>
    

    
<div class="time-row">
    <a id="HomeFriendButton" href="javascript:void(0)" onclick="openType(event, 'Friend');" class="tablink Friend <?php if( $ConnectionType == "FRIEND" || $ConnectionType == "USERISOWNER") echo 'active';?>">
      <div id="HomeFriendDiv" class="HomeFriendDiv tablink Friend ">Friends</div>
    </a>
    <a id="HomeLoveButton" href="javascript:void(0)" onclick="openType(event, 'Love');" class="tablink Love <?php if( $ConnectionType == "LOVE" ) echo 'active';?>">
      <div id="HomeLoveDiv" class="HomeLoveDiv tablink Love">Love</div>
    </a>
    <a id="HomeCareerButton" href="javascript:void(0)" onclick="openType(event, 'Career');" class="tablink Career <?php if( $ConnectionType == "CAREER" ) echo 'active';?>">
      <div id="HomeCareerDiv" class="HomeCareerDiv tablink Career">Career</div>
    </a>
 </div>


    
    
    
 <div class="clear"></div>
 
 <div class="Timeline_Container">
    
  <div id="Friend" class="timelineType" style="display:none">
 <?php
 
 if($ConnectionType == "FRIEND" || $ConnectionType == "USERISOWNER"){
    try
    {

       if($posts = $profiles->getTimelineStatuses(USER_PROFILE_ID,'FRIEND')){ 
           foreach ($posts as $post) 
           {
               $postedType = $profiles->getBoxStatusTitleByType($post['type']);
$divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            
               ?>
               <div id="status-title" class="<?= strtolower($post['type']);?>">
                   <?php if(isset($postedType)): echo '<b>' . $viewProfile_First . ' ' . $viewProfile_Last . '</b>' . $postedType; endif; ?>
                   <?php if($ConnectionType == "USERISOWNER"): echo "Remove"; endif; ?>
               </div>
               <div id="status-box">
                   <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
               <?= $post['message'];?>
                   
                   
                <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". USER_PROFILE_ID .",". $divId; ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount(USER_PROFILE_ID, $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
              </button>
                   
                   
               </div>
             <?php

          }
       }else{
           echo "nope";
       }


   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }  
 }else{
     echo "No Friend Timeline Results";
 }


?> </div>

  <div id="Love" class="timelineType" style="display:none">
<?php
 if($ConnectionType == "LOVE" || $ConnectionType == "USERISOWNER"){
    try
    {

       if($posts = $profiles->getTimelineStatuses(USER_PROFILE_ID,'LOVE')){ 
           foreach ($posts as $post) 
           {

               $postedType = $profiles->getBoxStatusTitleByType($post['type']);
            $divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            ?>
               <div id="status-title" class="love">
                   <?php if(isset($postedType)): echo '<b>' . $viewProfile_First . ' ' . $viewProfile_Last . '</b>' . $postedType; endif; ?>
               </div>
               <div id="status-box">
                   <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
               <?= $post['message'];?>
                <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". USER_PROFILE_ID.",". $divId;  ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount(USER_PROFILE_ID, $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
              </button>
               </div>
             <?php
          }
       }else{
           echo "No Love Timeline Results";
       }


   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   } 
 }else{
     echo "Nope";
 }

    ?></div>

  <div id="Career" class="timelineType" style="display:none">
<?php
 if($ConnectionType == "CAREER" || $ConnectionType == "USERISOWNER"){
    try
    {

       if($posts = $profiles->getTimelineStatuses(USER_PROFILE_ID,'CAREER')){ 
           foreach ($posts as $post) 
           {

               $postedType = $profiles->getBoxStatusTitleByType($post['type']);
               $divId = $post['owner_status_id'].$post['owner_id'].date_timestamp_get(date_create());
            

               ?>
               <div id="status-title" class="career">
                   <?php if(isset($postedType)): echo '<b>' . $viewProfile_First . ' ' . $viewProfile_Last . '</b>' . $postedType; endif; ?>
               </div>
               <div id="status-box">
                   <div class="timelinedate"><?= $user->dateTimeConvert($post['date_added']);?></div>
               <?= $post['message'];?>
                  <button id="encourageSpan<?= $divId; ?>" class="encourageSpan" 
                        onclick="showEncourages(<?= $post['owner_status_id'] .",". $user_id .",". USER_PROFILE_ID .",". $divId; ?>)">
                  <?php 
                  if($encourageCount = $profiles->getStatusEncouragesCount(USER_PROFILE_ID, $post['owner_status_id']) ){
                      echo $encourageCount['EncourageCountTotal'];
                  }
                  
                  ?>
              </button>
               </div>
             <?php
          }
       }else{
           echo "No Career Timeline Results";
       }


   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   } 
}else{
     echo "Nope";
 }
?>
  </div>
    
    
</div>
    

 </div><!-- timeline container -->   
    
 
    
    
	
	
</div><!--main space-->
   
</div>

<script>
var ctype = "<?php if($ConnectionType == "USERISOWNER"){ echo 'Friend'; }else{ echo ucfirst(strtolower($ConnectionType)); }?>";
document.getElementById(ctype).style.display = "block";
document.getElementById('Home'+ctype+'Div').className += " "+ctype.toLowerCase()+"Active";

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
<script src="../assets/js/home-functions.js"></script>
<?php include_once '../template/foot.php'; ?>