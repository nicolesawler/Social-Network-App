<?php

/*
 * Copyright 2017 nicolesawler.
 */


/**
 * Description of class
 *
 * @author nicolesawler
 */
class POSTHOME {

    
      
    public function PostFunction($obj,$validate,$profiles,$user,$user_id)
    {
        switch ($obj) {
            case 'in-single-mom-submit': $result = $this->statusPost($validate,$profiles,$user,$user_id);
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
private function statusPost($validate,$profiles,$user,$user_id){
    
    $t = $user->basicValidation($_POST['type']);
    $message = $user->basicValidation($_POST['in-single-mom']);
    
    $options = array('THOUGHT','GOALS','LOVE','CAREER','GLOGS','STARS','TRIGGER');

    if (!in_array($t, $options) || !ctype_alpha($t) || strlen($t)>15) {
        $type = "THOUGHT";
    }else{
        $type = $t;
    }
    if(strlen($message) < 3 || strlen($message) > 255){
        $user->error  = "Status length doesn't match what's allowed." ;       
    }
    
    if(!empty($error)) {
        $user->error = "Oops! Something went wrong.";
        return false;
        
    }else{
       
        try
        {
            if($statusId = $profiles->homeInsert($user_id,$message,$type)) 
            {
               return $getPostedStatus = $profiles->getPostedStatus($user_id,$statusId);      
            }else{
                $user->error = "Oops! Something went wrong.";
                return false;
            }

       }
       catch(PDOException $e)
       {
          echo $e->getMessage();
       }
     
    }
  
  
  
}


    
 /**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
private function getLast3($validate,$profiles,$user,$user_id){
    
 
  
  
  
}

    
    
    
}
