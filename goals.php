<?php
/* user */
include_once 'back/db-user.php';
/* goals */
include_once 'back/db-goals.php';
/* post */
include 'front/post-goal.php';
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
	
            <?php if(isset($catIdEdit)): ?>Edit Category<?php endif; ?>
            <?php if(!isset($catIdEdit)): ?>Add A New Category<?php endif; ?>
            <?php if(isset($catIdEdit)): ?><button id="deleteButton">Delete </button><?php endif; ?>
     
	</div>
	
    <div id="goal-add-box-top" class="goal-box-top">
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

        <input type="text" class="goal-title" name="goal_title" placeholder="Ex: Health Goals" value="<?php if(isset($error)){echo $title;} ?><?php if(isset($titleEdit)){echo $titleEdit;} ?>"/>
        Description:
        <textarea class="goal-desc" name="goal_desc"><?php if(isset($error)){echo $description;} ?><?php if(isset($descriptionEdit)){echo $descriptionEdit;} ?></textarea>
        <br>
        <select id="goal-category" name="goal_icon">
        <option <?php if(isset($error) && $icon == "trophystar"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "trophystar"){echo "selected";} ?> value="trophystar">Personal Icon</option>
        <option <?php if(isset($error) && $icon == "health-care"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "health-care"){echo "selected";} ?>  value="health-care">Health Icon</option>
	<option <?php if(isset($error) && $icon == "businesshands"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "businesshands"){echo "selected";} ?>  value="businesshands">Career Icon</option>
        <option <?php if(isset($error) && $icon == "heartsmatch"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "heartsmatch"){echo "selected";} ?>  value="heartsmatch">Love Icon</option>
        <option <?php if(isset($error) && $icon == "profits"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "profits"){echo "selected";} ?>  value="profits">Money Icon</option>
        <option <?php if(isset($error) && $icon == "world"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "world"){echo "selected";} ?>  value="world">Travel Icon</option>
        <option <?php if(isset($error) && $icon == "silhouette"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "silhouette"){echo "selected";} ?>  value="silhouette">Fitness Icon</option>
        <option <?php if(isset($error) && $icon == "toy"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "toy"){echo "selected";} ?>  value="toy">Parenting Icon</option>
        <option <?php if(isset($error) && $icon == "apple"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "apple"){echo "selected";} ?>  value="apple">Health Icon</option>
       <option <?php if(isset($error) && $icon == "open-book"){echo "selected";} ?><?php if(isset($iconEdit) && $iconEdit == "open-book"){echo "selected";} ?>  value="open-book">Education Icon</option>
	</select>
        
        <select id="goal-category" name="goal_type">
          <option value="NA">Type of goals in category?:</option>
	 <option <?php if(isset($error) && $type == "Career"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Career"){echo "selected";} ?>   value="Career">Career</option>
	 <option <?php if(isset($error) && $type == "Education"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Education"){echo "selected";} ?> value="Education">Education</option>
	 <option <?php if(isset($error) && $type == "Emotional"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Emotional"){echo "selected";} ?> value="Emotional">Emotional</option>
	 <option <?php if(isset($error) && $type == "Financial"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Financial"){echo "selected";} ?> value="Financial">Financial</option>
	 <option <?php if(isset($error) && $type == "Health"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Health"){echo "selected";} ?> value="Health">Health & Fitness</option>
	 <option <?php if(isset($error) && $type == "Intellectual"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Intellectual"){echo "selected";} ?> value="Intellectual">Intellectual</option>
	 <option <?php if(isset($error) && $type == "Life"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Life"){echo "selected";} ?> value="Life">Life Vision</option>
	 <option <?php if(isset($error) && $type == "Love"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Love"){echo "selected";} ?> value="Love">Love & Romance</option>
	 <option <?php if(isset($error) && $type == "Material"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Material"){echo "selected";} ?> value="Material">Material Possessions (Cars, houses, etc) </option>
	 <option <?php if(isset($error) && $type == "Parenting"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Parenting"){echo "selected";} ?> value="Parenting">Parenting</option>
	 <option <?php if(isset($error) && $type == "Personal"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Personal"){echo "selected";} ?> value="Personal">Personal Character</option>
	 <option <?php if(isset($error) && $type == "Social"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Social"){echo "selected";} ?> value="Social">Social</option>
	 <option <?php if(isset($error) && $type == "Spiritual"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Spiritual"){echo "selected";} ?> value="Spiritual">Spiritual</option>
	 <option <?php if(isset($error) && $type == "Travel"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Travel"){echo "selected";} ?> value="Travel">Travel</option>
	 <option <?php if(isset($error) && $type == "Other"){echo "selected";} ?><?php if(isset($typeEdit) && $typeEdit == "Other"){echo "selected";} ?> value="Other">Other</option>
	</select>
        <div class="checks">
       <input name="goal_private" type="checkbox" <?php if(isset($error) && $private == "Y"){echo "checked";} ?><?php if(isset($privacyEdit) && $privacyEdit == "Y"){echo "checked";} ?>> Keep category private
        </div>
        <input name="cat-id" value="<?php if(isset($catIdEdit)){echo $catIdEdit;} ?>" style="display:none;" />
         <?php if(isset($catIdEdit)): ?> <button class="goal-post" type="submit" name="btn_goal_editSave">Save</button><?php endif; ?>
         <?php if(!isset($catIdEdit)): ?><button class="goal-post" type="submit" name="btn_goal_post">Add</button>  <?php endif; ?>
        </form>
        <?php if(isset($catIdEdit)): ?><a href="goals"><button id="cancelButtonCat">Cancel </button></A><?php endif; ?>
       
        <div class="clear"></div>
       </div>
    
</div>
    

<?php 
if($getGoalsCategory = $goals->getGoalsCategoryProfile($user_id))
{
foreach ($getGoalsCategory as $cat_item) 
{
?>
<div id="goal-holder">	
    
        <div id="goal-title-top" class="goal-title-top">
	<form method="post" id="edit-key">
            <input name="cat-id" value="<?= $cat_item['cat_id']; ?>" style="display:none;" />
            <button name="btn_goal_edit" type="submit" class="btn-goals-edit">Edit </button>
        </form>
	</div>
    
        <?php

        try
        {
              if($goalsCount = $goals->getGoalsPerCategoryCount($user_id,$cat_item['cat_id'])) 
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
              if($goalsAchievedCount = $goals->getAchievedGoalsPerCategoryCount($user_id,$cat_item['cat_id'])) 
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
            <a href="goalscategory?cat=<?= $cat_item['cat_id']; ?>"><?= $cat_item['cat_title']; ?></a> &nbsp; &nbsp; 
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
    
    <!-- The Modal -->
 <div id="myModal" class="modal">
   <!-- Modal content -->
   <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
      Delete Goal Category
     </div>
     <div class="modal-body">
       <p>Deleting this category will delete all of it's goals. Are you sure you want to do this?</p>
     </div>
     <div class="modal-footer">

      <form method="post" id="edit-key">
             <input name="cat-id" value="<?php if(isset($catIdEdit)){echo $catIdEdit;} ?>" style="display:none;" />
             <button name="btn_goal_delete" type="submit" class="btn-goals-delete modalbtn" >Yes, Delete.</button>
      </form>
         <button id="cancelButton" class="modalbtn">No</button>
     </div>
   </div>
 </div>


<script src="assets/js/goals.js"></script>
<?php include_once 'template/foot.php'; ?>