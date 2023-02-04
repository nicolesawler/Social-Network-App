<?php
class POSTGLOG {
    
    public function PostFunction($obj,$validate,$glog,$user,$user_id)
    {
        switch ($obj) {
            case 'btn_glog_publish': $result = $this->glogPublish($validate,$glog,$user,$user_id);
            break;
            case 'btn_glog_private': $result = $this->glogPublish($validate,$glog,$user,$user_id);
            break;
            case 'btn_edit': $result = $this->glogEdit($glog,$user,$user_id);
            break;
            case 'btn_glog_save_pub': $result = $this->glogSave($validate,$glog,$user,$user_id);
            break;
            case 'btn_glog_save_pri': $result = $this->glogSave($validate,$glog,$user,$user_id);
            break;
            case 'btn_glog_delete': $result = $this->glogDelete($glog,$user,$user_id);
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
private function glogPublish($validate,$glog,$user,$user_id){

        $title = $chapter = "";
	$type='CREATE';
	$validate->chapter_validate($_POST['glog-title']) ? $title = $_POST['glog-title'] : $error[] = "Something went wrong." ;
	$validate->chapter_validate($_POST['glog-write-chapter']) ? $chapter = $_POST['glog-write-chapter'] : $error[] = "Something went wrong." ;

    if($title=="" || $chapter=="") {
       $error[] = "No thought is ever empty."; 
    } 
    else
    {
	   
	   if(isset($_POST['btn_glog_publish']))
		{
			$hidden = 'N';
		}else{
			$hidden = 'Y';
		}
			
      try
      {
            if($glog->newChapter($title,$chapter,$type,$hidden,$user_id)) 
            {
	          return $user->redirect('glog.php?new');
            }

     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}


/**
* Updates status to delete and removes visibibility from goals
* @param Posts form params
* @return redirects back to page to clear form on success
*/
private function glogEdit($glog,$user,$user_id){
        $id = $_POST['chapid'];
        if(ctype_digit($id) && strlen($id) < 12){
		$id = $user->basicValidation($id);
	}else{
		$error[] = "Oops! Something went wrong." ;
	}
	
    if(empty($error)) {

      try
      {
            if($chapterEdit = $glog->editChapter($id,$user_id)) 
            {
	      return $chapterEdit;
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
private function glogSave($validate,$glog,$user,$user_id){
    
	$title = $chapter = "";
	
	if(ctype_digit($_POST['chapid'])){
		$type='EDITED';
		$chapID = $_POST['chapid'];
	}else{
		$error[] = "Something went wrong" ;
	}

	if($validate->chapter_validate($_POST['glog-title']))
	{
	  	$title = $_POST['glog-title']; 
	}else{
		$title = $_POST['glog-title']; 
		$error[] = "Something is wrong with the title" ;
	}
	if($validate->chapter_validate($_POST['glog-write-chapter']))
	{
	  	$chapter = $_POST['glog-write-chapter']; 
	}else{
		$chapter = $_POST['glog-write-chapter']; 
		$error[] = "Something is wrong with the title" ;
	}
	if(isset($_POST['btn-glog-save-pub']))
	{
		$hidden = 'N';
	}else{
		$hidden = 'Y';
	}
	
    if(empty($error)) {
	   	
      try
      {
            if($glog->saveChapter($user_id,$title,$chapter,$type,$hidden,$chapID)) 
            {
	          return $user->redirect('glog.php?saved');
            }

     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
    
}

/**
* Saves edited changes of goal cat
* @param Posts form params
* @return redirects back to page to clear form on success
*/
private function glogDelete($glog,$user,$user_id){
    
        if(ctype_digit($_POST['chapid']) && strlen($_POST['chapid']) < 12){
                    $type='DELETE';
                    $chapID = $_POST['chapid'];
            }else{
                    $error[] = "Something went wrong" ;
            }

        if(empty($error)) {

          try
          {
                if($glog->deleteChapter($user_id,$type,$chapID)) 
                {
                      return $user->redirect('glog.php?delete');
                }

         }
         catch(PDOException $e)
         {
            echo $e->getMessage();
         }
      } 
      
}


}//class