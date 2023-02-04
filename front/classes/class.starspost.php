<?php
class POSTSTARS {
    
    
    public function PostFunction($obj,$stars,$user,$user_id,$z)
    {
        switch ($obj) {
            case 'get_zodiac': $result = $this->getZodiacInfo($stars,$z);
            break;
            case 'btn_stars_zodiac': $result = $this->directUserToZodiac($user);
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
* Get user love preferences
* @param Required on love page (edit)
* @return array
*/    
private function getZodiacInfo($stars,$z){
    
   try
      {
       if($getZ = $stars->getZodiac($z))
            return $getZ;
       else{
           return "Error";
       }
        
     }
     catch(PDOException $e)
     {
        $e->getMessage();
     } 
}
  
    
/**
* Add New Goal Category
* @param Posts form params
* @return redirects back to page to clear form on success
*/   
private function directUserToZodiac($user){

    $input = $user->basicValidation($_POST['btn_stars_zodiac']);
    
    if (ctype_alpha($input)) {
        $validateZodiac = array("Aries", "Taurus", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagittarius", "Capricorn", "Aquarius", "Pisces");

        if (!in_array($input, $validateZodiac)) {
            $input = (  isset($_SESSION['zodiac']) ? $_SESSION['zodiac'] : "Aries"  );
        }
        
    }else{
        $input = (  isset($_SESSION['zodiac']) ? $_SESSION['zodiac'] : "Aries"  );
    }	

    if(isset($input) && $input != "") 
    {
        return $user->redirect('stars?'. $input);
    }else{
        return $user->redirect('stars');
    }
    
    
    
}

  



}//class