<?php

/* 
 * Copyright 2017 nicolesawler.
 *
*/


/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/

if(isset($_POST))
{
    
 include 'classes/class.glogvalidate.php';
 $validate = new GLOGVALIDATE(); 
 
 include 'classes/class.glogpost.php';
 $postglog = new POSTGLOG();
 
 if(isset($_POST['btn_glog_publish'])):
     $postglog->PostFunction('btn_glog_publish',$validate,$glog,$user,$user_id);

 elseif(isset($_POST['btn_glog_private'])):
     $postglog->PostFunction('btn_glog_private',$validate,$glog,$user,$user_id);
 
 elseif(isset($_POST['btn_edit'])):
    $chapterEdit = $postglog->PostFunction('btn_edit',$validate,$glog,$user,$user_id);
        $chapSaveID = $chapterEdit['chapter_id'];
        $titleEdit = $chapterEdit['chapter_title'];
        $chapterEdit = $chapterEdit['chapter_blog'];
        $publicEdit = $privateEdit = "";
   
 elseif(isset($_POST['btn_glog_save_pub'])):
     $postglog->PostFunction('btn_glog_save_pub',$validate,$glog,$user,$user_id);
 
 elseif(isset($_POST['btn_glog_save_pri'])):
     $postglog->PostFunction('btn_glog_save_pri',$validate,$glog,$user,$user_id);
 
 elseif(isset($_POST['btn_glog_delete'])):
     $postglog->PostFunction('btn_glog_delete',$validate,$glog,$user,$user_id);
 
 endif;
 
 
 
 
}