<?php

require 'checkUsername.php';


        if(USER_PROFILE_ID != 0){
           
                 
           
        }else{
           //$user->redirect('glog.php?new');
        }




?>
<?php $page = 'goals';?>
<?php include_once '../template/head.php';?>  
<div id="vision">
<?php include_once '../template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once '../template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once '../template/user-navigation.php';?>
    

    

<?php 
if($getGoalsCategory = $userProfile->getGoalsCategoryProfile(USER_PROFILE_ID))
{
foreach ($getGoalsCategory as $cat_item) 
{
?>
<div id="goal-holder">	
    
        <div id="goal-title-top" class="goal-title-top">
here
	</div>
    
        <?php

        try
        {
              if($goalsCount = $userProfile->getGoalsPerCategoryCount(USER_PROFILE_ID,$cat_item['cat_id'])) 
              {
                  $goalsCountNum = $goalsCount['TotalGoals'];
              }else{
                  $goalsCountNum = 0;
              }

        }
        catch(PDOException $e)
        {
          $e->getMessage();
        }

        try
        {
              if($goalsAchievedCount = $userProfile->getAchievedGoalsPerCategoryCount(USER_PROFILE_ID,$cat_item['cat_id'])) 
              {
                  $achievedCountNum = $goalsAchievedCount['AchievedGoals'];
              }else{
                  $achievedCountNum = 0;
              }

        }
        catch(PDOException $e)
        {
          $e->getMessage();
        }

        if($goalsCountNum == 0){
            $percentComplete = 0;
        }else{
            $percentComplete = round(($achievedCountNum / $goalsCountNum) * 100); 
        }
        
        ?>
    
        <div id="goal-add-box-top" class="goal-box-top">
      <span class="countsSpan"><?= $goalsCountNum;?> Goals &nbsp; &nbsp; <?= $achievedCountNum;?> Achieved &nbsp; &nbsp; <?= $percentComplete;?>% Complete</span>
        
        <h2> 
            <i class="gw-<?= $cat_item['cat_icon']; ?>"></i>
            <a href="goalscategory?cat=<?= $cat_item['cat_id']; ?>&profile=<?=USER_PROFILE_NAME?>"><?= $cat_item['cat_title']; ?></a> &nbsp; &nbsp; 
       </h2>
            
        <?= $cat_item['cat_description']; ?>
      <br>
     </div>
</div>
<?php } } ?>

    
  
<div class="clear"></div>
	
<div id="goals-note" class="goals-note">
We don't believe in references. You decide who you are.
</div>
	
</div>


</div>
</div>


<script src="http://localhost/goalwoke/assets/js/goals.js"></script>
<?php include_once '../template/foot.php';?>