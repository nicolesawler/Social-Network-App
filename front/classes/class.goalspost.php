<?php
class POSTGOAL { 
    
    public function PostFunction($obj,$validate,$goals,$user,$user_id)
    {
        switch ($obj) {
            case 'btn_goal_post': $result = $this->catPost($validate,$goals,$user,$user_id);
            break;
            case 'btn_goal_delete': $result = $this->catDelete($validate,$goals,$user,$user_id);
            break;
            case 'btn_goal_edit': $result = $this->catEdit($validate,$goals,$user,$user_id);
            break;
            case 'btn_goal_editSave': $result = $this->catSaveEdits($validate,$goals,$user,$user_id);
            break;
            
            default:
            break;
        }
         
        if(isset($error)){
            return $error;
        }else{
            return $result;
        }
       
    }//end 
    
 /**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
private function catPost($validate,$goals,$user,$user_id){

   $title = $validate->category_title_validate($user->basicValidation($_POST['goal_title']));
   $description = $validate->category_description_validate($user->basicValidation($_POST['goal_desc']));
   $icon = $validate->category_icon($user->basicValidation($_POST['goal_icon']));
   $type = $validate->category_type($user->basicValidation($_POST['goal_type']));
   $private = ( isset($_POST['goal_private'])  ? "Y" : "N");

  if($title=="" || $type=="") {
      $error[] = "Oops! Title and category are required"; 
   } 
   else
   {

        
      try
      {
            if($goals->saveCategory($user_id,$title,$description,$icon,$type,$private)) 
            {
                return $user->redirect('goals.php?saved');
            }

     }
     catch(PDOException $e)
     {
        $e->getMessage();
     }
   }
}
/**
* Updates status to delete and removes visibibility from goals
* @param Posts form params
* @return redirects back to page to clear form on success
*/
private function catDelete($validate,$goals,$user,$user_id){
   if(ctype_digit($_POST['cat-id']) && strlen($_POST['cat-id']) < 12 ){
		$status='DELETE';
		$cat_id = $user->basicValidation($_POST['cat-id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
    if(empty($error)) {
	   	
      try
      {
            if($goals->deleteCategory($user_id,$status,$cat_id)) 
            {
	          return $user->redirect('goals');
            }

     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}

/**
* Fills form with data fields from selected goal cat to edit
* @param Posts form params
* @return redirects back to page to clear form on success
*/
private function catEdit($validate,$goals,$user,$user_id){
    
	if(ctype_digit($_POST['cat-id']) && strlen($_POST['cat-id']) < 12 ){
		$catIdEdit = $user->basicValidation($_POST['cat-id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
      try
      {
         return $goals->editCategory($catIdEdit,$user_id);

     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
    
}

/**
* Saves edited changes of goal cat
* @param Posts form params
* @return redirects back to page to clear form on success
*/
private function catSaveEdits($validate,$goals,$user,$user_id,$cat_id){

   $catIdEdit = $_POST['cat-id'];
	
   $title = $validate->category_title_validate($user->basicValidation($_POST['goal_title']));
   $description = $validate->category_description_validate($user->basicValidation($_POST['goal_desc']));
   $icon = $validate->category_icon($user->basicValidation($_POST['goal_icon']));
   $type = $validate->category_type($user->basicValidation($_POST['goal_type']));
   $private = ( isset($_POST['goal_private'])  ? "Y" : "N");

  if($title=="" || $type=="") {
      $error[] = "Oops! Title and category are required"; 
   } 
   else
   {

        
      try
      {
            if($goals->saveEditCategory($catIdEdit,$user_id,$title,$description,$icon,$type,$private)) 
            {
	          return $user->redirect('goals.php?saved');
              }

     }
     catch(PDOException $e)
     {
        $e->getMessage();
     }
   }

}


}//class