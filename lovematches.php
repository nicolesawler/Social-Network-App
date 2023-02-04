<?php
include_once 'back/db-user.php';
include_once 'back/db-love.php';
include_once 'back/db-network.php';
include_once 'front/load-lovematches.php';

   
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
    
    <a href="#" target="_top" onclick="window.location.reload(true);"><button class="generate-new-matches"><i class='gw-heartshapes'></i> Generate New Matches</button> </a>  
    <a href="love" ><button class="update-love-profile"><i class='gw-edit'></i> Update Love Profile</button> </a>  
    
    <div class="clear"></div>
<div id="page-title" class="page-title">
Matches near you
</div>
<div id="page-box" class="page-box">     
<?php 
if($provinceoutput != ""){
    echo $provinceoutput;
}else{
    echo "<p align=center><i class='gw-heartshapesoutline'></i><br><b>We don't have any matches in your province or state yet, hang tight!</b></p>";
}
?>      
<div class="clear"></div> 
</div>
    
<div id="page-title" class="page-title">
Matches in your country
</div>
<div id="page-box" class="page-box">     
<?php 
if($countryoutput != ""){
    echo $countryoutput;
}else{
    echo "<p align=center><i class='gw-cup'></i><br><b>We don't have any distant matches in your country yet, hang tight!</b></p>";
}

?>      
<div class="clear"></div> 
</div>
    

<div id="page-title" class="page-title">
Matches around the world
</div>
<div id="page-box" class="page-box">     
<?php 
if($worldoutput != ""){
    echo $worldoutput;
}else{
    echo "<p align=center><i class='gw-worldhand'></i><br><b>We don't have any relevant matches outside your country yet, hang tight!</b></p>";
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