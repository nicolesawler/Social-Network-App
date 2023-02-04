<?php
class GLOGVALIDATE
{	
	public function chapter_validate($input)
	{
		
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = str_replace(array(' ', "'", ',', '-', '!', '&', '$', '*', '(', ')', '/', '?', '#', '%', '~',"\n","\r","\t","\r\n",';','"','.',':','_','@'), '', $input);
		
		if (!ctype_alnum($input)) {
	        return false;
	    }
		if (strlen($input) < 4 || strlen($input) > 9999) {
	        return false;
	    }
		return true; 
	} 
	
	public function validate_names($input)
	{
		//Make sure name meets length req.
		
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		
		if(strlen($input) > 25){
			$input = "";
			return $input;
		}
		
		$input = strtolower($input);
	
		//Replace anything that isn't a letter
		if (!ctype_alpha($input)) {
	        $input = preg_replace("/[^a-z-]/i", "", $input);
	    }
	    
	    //Capitalize Second Name if Hyphened
	    $input = implode('-', array_map('ucfirst', explode('-', $input)));
	
		return ucfirst($input); 
	} 
	
	public function validate_dates($input)
	{
		if(strlen($input) > 4){
			$input = "00";
			return $input;
		}
		if (!ctype_digit($input)) {
			$input = "00";
			return $input;
	    }
	    
		return $input; 
	} 
	
}

