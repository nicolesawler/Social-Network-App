<?php
class GOALCATPOST {//extends GOALS
    
//    public function __construct() {
//        parent::__construct();
//    }
    
    public function PostFunction($obj,$validate,$goals,$user,$user_id,$cat_id)
    {
        switch ($obj) {
            case 'btn_goal_post': $result = $this->goal_newCat_Post($validate,$goals,$user,$user_id,$cat_id);
            break;
            case 'btn_goal_delete': $result = $this->goal_delCat_Post($validate,$goals,$user,$user_id,$cat_id);
            break;
            case 'btn_goal_edit': $result = $this->goal_editCat_Start($validate,$goals,$user,$user_id,$cat_id);
            break;
            case 'btn_goal_editSave': $result = $this->goal_editCat_Post($validate,$goals,$user,$user_id,$cat_id);
            break;
            case 'btn_goal_achieved': $result = $this->goal_markasAchieved_Post($validate,$goals,$user,$user_id,$cat_id);
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
private function goal_newCat_Post($validate,$goals,$user,$user_id,$cat_id){

   $title = $validate->category_title_validate($user->basicValidation($_POST['goal_title']));
   $description = $validate->category_description_validate($user->basicValidation($_POST['goal_desc']));
   $deadline = $validate->deadline_validate($user->basicValidation($_POST['goal_deadline']));
   $private = ( isset($_POST['goal_private'])  ? "Y" : "N");
   $due = $validate->duedate_validate($user->basicValidation($_POST['goal_deadline']));
 
    if($title=="" && $description=="") {
        $error[] = "Oops! Title or description is required"; 
     } 
     else
     {
        try
        {
              if($goals->addNewGoal($user_id,$title,$description,$deadline,$private,$cat_id,$due)) 
              {
                  return true;
                  //$user->redirect('goalscategory?cat='.$cat_id);
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
private function goal_delCat_Post($validate,$goals,$user,$user_id,$cat_id){
    if(ctype_digit($_POST['goal_id']) && strlen($_POST['goal_id']) < 12){
		$status='DELETE';
		$goal_id = $user->basicValidation($_POST['goal_id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
    if(empty($error)) {
	   	
      try
      {
            if($goals->deleteGoal($user_id,$status,$goal_id)) 
            {
	          return $user->redirect('goalscategory?cat='.$cat_id);
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
private function goal_editCat_Start($validate,$goals,$user,$user_id,$cat_id){
     	if(ctype_digit($_POST['goal_id']) && strlen($_POST['goal_id']) < 12){
		$goal_id = $user->basicValidation($_POST['goal_id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
      try
      {
            if($goalEdit = $goals->editGoal($goal_id,$user_id)) 
            {
               
                return $goalEdit;
	          
            }

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
private function goal_editCat_Post($validate,$goals,$user,$user_id,$cat_id){

    	if(ctype_digit($_POST['goal_id']) && strlen($_POST['goal_id']) < 12){
		$goalidEdit = $user->basicValidation($_POST['goal_id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
   $title = $validate->category_title_validate($user->basicValidation($_POST['goal_title']));
   $description = $validate->category_description_validate($user->basicValidation($_POST['goal_desc']));
   $deadline = $validate->deadline_validate($user->basicValidation($_POST['goal_deadline']));
   $private = ( isset($_POST['goal_private'])  ? "Y" : "N");
   $due = $validate->duedate_validate($user->basicValidation($_POST['goal_deadline']));

    if($title=="" && $description=="") {
        $error[] = "Oops! Title or description is required"; 
     } 
     else
     {
        try
        {
              if($goals->saveEditGoal($user_id,$goalidEdit,$title,$description,$deadline,$private,$due)) 
              {
                  return $user->redirect('goalscategory?cat='.$cat_id);
                }

       }
       catch(PDOException $e)
       {
          $e->getMessage();
       }
     }
}
/**
* Mark goal as achieved
* @param Uses goal id to mark as achieved
* @return redirects back to page to clear form on success
*/
private function goal_markasAchieved_Post($validate,$goals,$user,$user_id,$cat_id){

	if(ctype_digit($_POST['goal_id']) && strlen($_POST['goal_id']) < 12){
		$achieved='Y';
		$goal_id = $user->basicValidation($_POST['goal_id']);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
    if(empty($error)) {
	   	
      try
      {
            if($goals->achievedGoal($user_id,$achieved,$goal_id)) 
            {

	         return $user->redirect('goalscategory?cat='.$cat_id);
            }

     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}





}//class