<?php
/* user */
include_once 'back/db-user.php';
/* goals */
include_once 'back/db-glogs.php';
/* post */
include 'front/post-glog.php';
/* css */
$page = 'glog';
?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    
	
	
<div id="glog-post" class="glog-post">
		
<?php
if(isset($error)){ 
?>
<div class="alert bad">
<span class="closebtn">&times;</span>  
    <?php echo $error; ?>
</div>
<?php } ?>

            
            
<form method="post" id="glog-post-form">     


<input id="glog-title" class="glog-title" name="glog-title" value="<?php if(isset($error)){echo $title;} if(isset($titleEdit)){echo $titleEdit;} ?>" placeholder="Chapter or Entry Title" />

<div class="owner-title">Image font options here</div>
    
<textarea id="glog-write-chapter" class="glog-write-chapter" name="glog-write-chapter" value="" placeholder="Start writing new chapter or blog entry..." /><?php if(isset($error)){echo $chapter;} if(isset($chapterEdit)){echo $chapterEdit;}?>
</textarea>

<input style="display:none;" name="chapid" value="<?php if(isset($chapSaveID)){echo $chapSaveID;} ?>" />
		
<button id="btn-glog-publish" class="btn-glog-publish"  <?php if(isset($publicEdit)){echo 'name="btn_glog_save_pub"';}else{echo 'name="btn_glog_publish"';}?> >
<?php if(isset($publicEdit)){echo "Save Public";}else{echo "Publish";}?>
</button>

<button id="btn-glog-private" class="btn-glog-private" <?php if(isset($privateEdit)){echo 'name="btn_glog_save_pri"';}else{echo 'name="btn_glog_private"';}?> >
<?php if(isset($privateEdit)){echo "Save Private";}else{echo "Private";}?>
</button>

<?php if(isset($titleEdit)){?> 
<button id="btn-glog-delete" class="btn-glog-delete" name="btn_glog_delete">Delete</button>
<?php } ?> 
		
</form>
<div class="clear"></div>
</div>
	
	
<div id="glog-post" class="glog-post">
<div class="bookchapters vertical">	
<ul>
	    
<?php 
$chap_cnt = 0;
if($chaps = $glog->getChapters($user_id)){
    foreach ($chaps as $cview) {
    $chap_cnt++;
?>
<li>
    <input type="radio" id="radio-<?=$chap_cnt;?>" name="radio-accordion"  />

    <label class="<?= $cview['chapter_hidden']; ?>" for="radio-<?=$chap_cnt;?>">
    <form method="post" id="edit-key"> <input style="display:none;" name="chapid" value="<?= $cview['chapter_id']; ?>" />
        <button type="submit" name="btn_edit">Edit</button> 
    </form>
        <?php if($cview['chapter_hidden'] == 'Y') echo "(Private)";?>
        Chapter <?=$chap_cnt;?> : <?= $cview['chapter_title']; ?> <br><small><?= $user->dateTimeConvert($cview['date_created']); ?> </small>
    </label>

    <div class="content">
        <p><?= nl2br($cview['chapter_blog']); ?></p>
    </div>

</li>
        
<?php   }   }   ?> 
</ul>
</div>


</div>
    <br><br><br>	
</div>
</div>
<script src="assets/js/glog-functions.js"></script>
<?php include_once 'template/foot.php'; ?>