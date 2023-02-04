<?php

require 'checkUsername.php';

if(isset($_GET['cat'])){
    
    if(USER_PROFILE_ID != 0){

        require_once '../front/classes/class.goalsvalidate.php';
        $validate = new GOALSVALIDATE();

        $cat_id = $validate->category_id_validate($validate->item_validate($_GET['cat']))   ;
        $match = false;
        if($cat_id != "")
        {
            try {
                    if($catIdList = $userProfile->selectCatIdList(USER_PROFILE_ID)) {
                        
                        foreach ($catIdList as $id => $value) {
                            if($value['cat_id'] == $cat_id){
                                $match = true;
                            }
                        }
                        if(!$match){
                            $user->redirect('goals');
                        }
                       
                    }else{$user->redirect('goals');}//if($catIdList = $userProfile->selectCatIdList(USER_PROFILE_ID)) {
                 }
                 catch(PDOException $e)
                 {
                    $e->getMessage();
                 }
  
        }else{$user->redirect('../goals');}//if($cat_id != "")
    }else{$user->redirect('../goals');}//if(USER_PROFILE_ID != 0){
}else{$user->redirect('../goals');}//if(isset($_GET['cat'])){



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
if($getGoals = $userProfile->getGoalsInCategory(USER_PROFILE_ID,$cat_id))
{
foreach ($getGoals as $goalitem) 
{
?> 
     <div id="goal-holder">
        <div id="goal-title-top" class="goal-title-top">
            <form method="post" id="edit-key">     
                <input name="goal_id" value="<?= $goalitem['goal_id']; ?>" style="display:none;" />
            
     
         <?php if($goalitem['goal_achieved']=='Y'): ?>Achieved!<?php endif; ?>
            </form>

            </div>
            <div id="goal-box-top" class="goal-box-top">
            <h2><?= $goalitem['goal_title']; ?></a></h2>
            <?= $goalitem['goal_description']; ?>
            <br>
            
     </div>
     <div class="goals-social-box">
          <div class="goals-social-box-right"> 

              <button id="encourageSpan<?= $goalitem['goal_id'];?>" class="encourageSpan" onclick="showEncourages(<?= $goalitem['goal_id'] .",". $user_id .",". USER_PROFILE_ID  ?>)">
                  <?php 
                  $encourageCount = $userProfile->getGoalEncouragesCount(USER_PROFILE_ID,$goalitem['goal_id']);
                  echo $encourageCount['EncourageCountTotal'];
                  ?>
              </button>
        
          
          </div>
         
         
         
          Due on: <strong><?php echo $userProfile->dateTimeConvert($goalitem['due_date']);  ?></strong>
       
        </div>
         
         
         
        <div class="advice_comments vertical">
            
            <input type="checkbox" id="advice-<?= $goalitem['goal_id'];?>" name="radio-accordion"  />
           <label class="" onclick="getAdvice(<?= $goalitem['goal_id'] .",". USER_PROFILE_ID .",". $user_id  ?>)" for="advice-<?= $goalitem['goal_id'];?>">Advice</label>
            
            <div class="content">
                <p>           
                    <textarea id="advice_input_<?= $goalitem['goal_id'];?>" class="goal-advice-comment-box" name="advice_input_<?= $goalitem['goal_id'];?>" ></textarea><button class="addadvicebtn" onclick="addAdvice(<?= $goalitem['goal_id'] .",". $user_id .",". USER_PROFILE_ID  ?>)">Add Advice</button>
                </p>
                
                <div class="goal-advice-comments" id="goal-advice-<?= $goalitem['goal_id'];?>">
                    
                </div>
                
                
            </div>

        
        </div>
<div class="clear"></div>
         
         
         
         
    </div> 
    
<?php
}
}else{
    echo "<div class=clear></div><div class=nogoals>There hasn't been any goals added to this categpry yet. Check back soon!</div>";
}
?> 

    
    
    
<div class="clear"></div>
	
<div id="goals-note" class="goals-note">
We don't believe in references. You decide who you are.

</div>
	
</div>

</div>
</div>

                
<script src="http://localhost/goalwoke/assets/js/goals.js"></script>
<?php include_once '../template/foot.php';?>