<?php
/* user */
include_once 'back/db-user.php';
/* goals */
include_once 'back/db-goals.php';
/* post */
include 'front/post-goalcat.php';
/* css */
$page = 'goals';
?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    

    
    
    
    
<div id="goal-holder">
	<div id="goal-title-top" class="goal-title-top">
           <?php if(isset($goalidEdit)): ?>Edit Goal<?php endif; ?>
            <?php if(!isset($goalidEdit)): ?>Add A New Goal<?php endif; ?>
            <?php if(isset($goalidEdit)): ?><button id="deleteButton">Delete </button><?php endif; ?>
     
	</div>
	
    <div id="goal-add-box-top" class="goal-add-box-top">
        <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert bad">
	                  <span class="closebtn">&times;</span>  
                      <?php echo $error; ?>
                  </div>
                  <?php
               }
            
            }
            ?>
        

        
        
        
        <form method="post" id="goal-form">
            
        <input type="text" class="goal-title" name="goal_title" placeholder="Goal Title" value="<?php if(isset($error)){echo $title;} ?><?php if(isset($titleEdit)){echo $titleEdit;} ?>"/>
        
        Goal Description:
     <textarea class="goal-desc" name="goal_desc"><?php if(isset($error)){echo $description;} ?><?php if(isset($descriptionEdit)){echo $descriptionEdit;} ?></textarea>
        
        <br>
        <select id="goal-deadline" name="goal_deadline">
            <option value="NA">Goal Deadline:</option>
	    <option <?php if(isset($error) && $deadline == "Today"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "Today"){echo "selected";} ?> value="Today">Today</option>
	    <option <?php if(isset($error) && $deadline == "This Week"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "This Week"){echo "selected";} ?> value="This Week">This Week</option>
	    <option <?php if(isset($error) && $deadline == "This Month"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "This Month"){echo "selected";} ?> value="This Month">This Month</option>
	    <option <?php if(isset($error) && $deadline == "3 Months"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "3 Months"){echo "selected";} ?> value="3 Months">Within 3 Months</option>
	    <option <?php if(isset($error) && $deadline == "6 Months"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "6 Months"){echo "selected";} ?> value="6 Months">Within 6 Months</option>
	    <option <?php if(isset($error) && $deadline == "1 Year"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "1 Year"){echo "selected";} ?> value="1 Year">Within 1 Year</option>
	    <option <?php if(isset($error) && $deadline == "2 Years"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "2 Years"){echo "selected";} ?> value="2 Years">2 Years</option>
	    <option <?php if(isset($error) && $deadline == "3 Years"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "3 Years"){echo "selected";} ?> value="3 Years">3 Years</option>
	    <option <?php if(isset($error) && $deadline == "4 Years"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "4 Years"){echo "selected";} ?> value="4 Years">4 Years</option>
	    <option <?php if(isset($error) && $deadline == "5 Years"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "5 Years"){echo "selected";} ?> value="5 Years">5 Years</option>
	    <option <?php if(isset($error) && $deadline == "10 Years"){echo "selected";} ?><?php if(isset($timeEdit) && $timeEdit == "10 Years"){echo "selected";} ?> value="10 Years">10 Years</option>
	</select>
        <div class="checks">
       <input name="goal_private" <?php if(isset($error) && $private == "Y"){echo "checked";} ?><?php if(isset($privateEdit) && $privateEdit == "Y"){echo "checked";} ?> type="checkbox"> Keep this goal private   
        </div>
        <input name="goal_id" value="<?php if(isset($goalidEdit)){echo $goalidEdit;} ?>" style="display:none;" />
         <?php if(isset($goalidEdit)): ?><button class="goal-post" type="submit" name="btn_goal_editSave">Save</button><?php endif; ?>
         <?php if(!isset($goalidEdit)): ?><button class="goal-post" type="submit" name="btn_goal_post">Add</button>  <?php endif; ?>
        
        </form>
        <?php if(isset($goalidEdit)): ?><a href="goalscategory?cat=<?=$cat_id?>"><button id="cancelButton">Cancel </button></A><?php endif; ?>
       
        
        
        <div class="clear"></div>
       </div>
    
</div>
    
    
    
	
<?php 
if($getGoals = $goals->getGoalsInCategory($user_id,$cat_id))
{
foreach ($getGoals as $goalitem) 
{
?> 
     <div id="goal-holder">
        <div id="goal-title-top" class="goal-title-top">
            <form method="post" id="edit-key">     
                <input name="goal_id" value="<?= $goalitem['goal_id']; ?>" style="display:none;" />
            
                <button name="btn_goal_edit" type="submit" class="btn-goals-edit">Edit </button>
                | 
                
         <?php if($goalitem['goal_achieved']=='N'): ?><button name="btn_goal_achieved" type="submit" class="btn-goals-achieved">Mark As Achieved </button><?php endif; ?>
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

              <button id="encourageSpan<?= $goalitem['goal_id'];?>" class="encourageSpan" onclick="showEncourages(<?= $goalitem['goal_id'] .",". $user_id .",". $user_id  ?>)">
                  <?php 
                  $encourageCount = $goals->getGoalEncouragesCount($user_id,$goalitem['goal_id']);
                  echo $encourageCount['EncourageCountTotal'];
                  ?>
              </button>
        
          
          </div>
         
         
         
          Due on: <strong><?php echo $goals->dateTimeConvert($goalitem['due_date']);  ?></strong>
       
        </div>
         
         
         
        <div class="advice_comments vertical">
            
            <input type="checkbox" id="advice-<?= $goalitem['goal_id'];?>" name="radio-accordion"  />
           <label class="" onclick="getAdvice(<?= $goalitem['goal_id'] .",". $user_id  .",". $user_id   ?>)" for="advice-<?= $goalitem['goal_id'];?>">Advice</label>
            
            <div class="content">
                <p>           
                    <textarea id="advice_input_<?= $goalitem['goal_id'];?>" class="goal-advice-comment-box" name="advice_input_<?= $goalitem['goal_id'];?>" ></textarea><button class="addadvicebtn" onclick="addAdvice(<?= $goalitem['goal_id'] .",". $user_id .",". $user_id  ?>)">Add Advice</button>
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
    echo "<div class=clear></div><div class=nogoals>Start building your goals! They'll appear here.</div>";
}
?> 

    
    
    
<div class="clear"></div>
	
<div id="goals-note" class="goals-note">
We don't believe in references. You decide who you are.

</div>
	
</div>

</div>
</div>

        <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          Delete Goal
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this goal?</p>
        </div>
        <div class="modal-footer">

         <form method="post" id="edit-key">
                <input name="goal_id" value="<?php if(isset($goalidEdit)){echo $goalidEdit;} ?>" style="display:none;" />
                <button name="btn_goal_delete" type="submit" class="btn-goals-delete modalbtn" >Yes, Delete.</button>
         </form>
            <button id="cancelButton" class="modalbtn">No</button>
        </div>
      </div>
    </div>
                
<script src="assets/js/goals.js"></script>
<?php include_once 'template/foot.php'; ?>