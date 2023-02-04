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

(int) $cat_id = filter_input(INPUT_GET, 'cat', FILTER_SANITIZE_STRING);

if(isset($cat_id)){
    
    if (strlen($cat_id) < 1 || strlen($cat_id) > 11 || !ctype_digit($cat_id)) {
        $user->redirect('goals');
    }
   

    $cat_id = $user->basicValidation($cat_id);
    $match = false;
    if($cat_id != "")
    {
                try {
                    if($catIdList = $goals->selectCatIdList($user_id)) {

                        foreach ($catIdList as $id => $value) {
                            if($value['cat_id'] == $cat_id){
                                $match = true;
                            }
                        }
                        if(!$match){
                              $user->redirect('goals');
                        }

                    }else{
                        $user->redirect('goals');
                    }
                 }
                 catch(PDOException $e)
                 {
                    $e->getMessage();
                 }

    }else{
       $user->redirect('goals');
    }

}else{
    $user->redirect('goals');
}

/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/

if(isset($_POST))
{
    
 include 'classes/class.goalsvalidate.php';
 $validate = new GOALSVALIDATE(); 
 
 include 'classes/class.goalscatpost.php';
 $goal_post = new GOALCATPOST();
 
 if(isset($_POST['btn_goal_post'])):
     $result = $goal_post->PostFunction('btn_goal_post',$validate,$goals,$user,$user_id,$cat_id);
     if(!$result): $user->printMsg($result); endif;
     
 elseif(isset($_POST['btn_goal_delete'])):
     $goal_post->PostFunction('btn_goal_delete',$validate,$goals,$user,$user_id,$cat_id);
 
 elseif(isset($_POST['btn_goal_edit'])):
    $goalEdit = $goal_post->PostFunction('btn_goal_edit',$validate,$goals,$user,$user_id,$cat_id);
            $goalidEdit = $goalEdit['goal_id'];
            $titleEdit = $goalEdit['goal_title'];
            $descriptionEdit = $goalEdit['goal_description'];
            $timeEdit = $goalEdit['goal_time'];
            $privateEdit = $goalEdit['goal_private'];
            $achievedEdit = $goalEdit['goal_achieved'];
                  
 elseif(isset($_POST['btn_goal_editSave'])):
     $goal_post->PostFunction('btn_goal_editSave',$validate,$goals,$user,$user_id,$cat_id);
 
 elseif(isset($_POST['btn_goal_achieved'])):
     $goal_post->PostFunction('btn_goal_achieved',$validate,$goals,$user,$user_id,$cat_id);
 
 endif;
 
}