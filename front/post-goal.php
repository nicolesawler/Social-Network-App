<?php

/* 
 * Copyright 2017 nicolesawler.

 */

/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/

if(isset($_POST))
{
    
 include 'classes/class.goalsvalidate.php';
 $validate = new GOALSVALIDATE(); 
 
 include 'classes/class.goalspost.php';
 $postgoal = new POSTGOAL();
 
 if(isset($_POST['btn_goal_post'])):
    $postgoal->PostFunction('btn_goal_post',$validate,$goals,$user,$user_id);
     
 elseif(isset($_POST['btn_goal_delete'])):
     $postgoal->PostFunction('btn_goal_delete',$validate,$goals,$user,$user_id);
 
 elseif(isset($_POST['btn_goal_edit'])):
    $catEdit = $postgoal->PostFunction('btn_goal_edit',$validate,$goals,$user,$user_id);
        $catIdEdit = $catEdit['cat_id'];
        $titleEdit = $catEdit['cat_title'];
        $descriptionEdit = $catEdit['cat_description'];
        $iconEdit = $catEdit['cat_icon'];
        $typeEdit = $catEdit['cat_type'];
        $privacyEdit = $catEdit['cat_private'];
                  
 elseif(isset($_POST['btn_goal_editSave'])):
     $postgoal->PostFunction('btn_goal_editSave',$validate,$goals,$user,$user_id);
 
 endif;
 
}