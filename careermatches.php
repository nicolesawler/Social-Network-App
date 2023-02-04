<?php
include_once 'back/db-user.php';
include_once 'back/db-career.php';
include_once 'back/db-network.php';
include_once 'front/load-careermatches.php';

   
?>
<?php $page = 'matches';?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">
    
    
            <?php
                if(isset($user->error)) {
                    echo '<div class="alert success">';
                   $user->printError();
                   $error = true;
                   echo '</div>';
               }
            ?>
<!--        Not getting enough relevant matches? Make sure your <a href="love"><strong>Love Profile</strong></a> is complete for more matches.-->
   
<div id="page-holder">
    
    <a href="#" target="_top" onclick="window.location.reload(true);"><button class="generate-new-matches generate-new-career-matches"><i class='gw-profits'></i> Generate New Matches</button> </a>  
    <a href="career" ><button class="update-career-profile"><i class='gw-edit'></i> Update Career Profile</button> </a>  
    
    <div class="clear"></div>
<div id="page-title" class="page-title">
People with similar career titles
</div>
<div id="page-box" class="page-box">     
<?php 
if($titleoutput != ""){
    echo $titleoutput;
}else{
    echo "<p align=center><i class='gw-coffee-cup'></i><br><b>We don't have any matches that share your title yet, hang tight!</b></p>";
}
?>      
<div class="clear"></div> 
</div>
    
<div id="page-title" class="page-title">
People in your career category
</div>
<div id="page-box" class="page-box">     
<?php 
if($categoryoutput != ""){
    echo $categoryoutput;
}else{
    echo "<p align=center><i class='gw-business'></i><br><b>We don't have any matches in your category yet, hang tight!</b></p>";
}

?>      
<div class="clear"></div> 
</div>
    

<div id="page-title" class="page-title">
People near you
</div>
<div id="page-box" class="page-box">     
<?php 
if($locationoutput != ""){
    echo $locationoutput;
}else{
    echo "<p align=center><i class='gw-emoticon'></i><br><b>We don't have any matches near you, hang tight!</b></p>";
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