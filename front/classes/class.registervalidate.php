<?php
class REGISTERVALIDATE
{	
    
    
	public function register_validate($input)
	{
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input; 
	} 
	
        
	public function validate_names($input)
	{
		//Make sure name meets length req.
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
		if(strlen($input) > 4 || !ctype_digit($input)){
			$input = "2000";
		}
	    
	return $input; 
	} 
	
        
        
        
	public function validate_month($input)
	{
	    $checkMonthArray = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		
	    if (!in_array($input, $checkMonthArray)) {
		    $input = "January";
		}
	return $input; 
	} 	
	
        
        
        
	public function validate_email($input)
	{
		if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
		  $input = ""; 
		}
		return $input; 
	} 
	
        
        
        
	public function validate_username($input)
	{
            if (!ctype_alnum($input)) {
	        //Don't allow users to have anything other than a-z 0-9 -_.
                if(preg_replace("/[^a-z0-9-_.]/i", "", $input)){
                    $input = '';
                }
                 
	    }
           
		return $input; 
	} 
	
	
	
	
	
	public function find_zodiac($birthdate)
	{
	   $zodiac = '';     
	   list ($year, $month, $day) = explode ('-', $birthdate); 
	    $month = ltrim($month, '0');
	    
	   if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; } 
	   elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; } 
	   elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; } 
	   elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; } 
	   elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
	   elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
	   elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
	   elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
	   elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; } 
	   elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; } 
	   elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; } 
	   elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; } 
	
	 return $zodiac; 
	} 
	
        
        
        
        
	public function convert_birthday($day,$month,$year) 
	{
	   if ( $month == 'January' ) { $month = "01"; } 
	   elseif (  $month == 'February'  ) { $month = "02"; } 
	   elseif ( $month == 'March'  ) { $month = "03"; } 
	   elseif (  $month == 'April'  ) { $month = "04"; } 
	   elseif (  $month == 'May'  ) { $month = "05"; } 
	   elseif (  $month == 'June'  ) { $month = "06"; } 
	   elseif (  $month == 'July'  ) { $month = "07"; } 
	   elseif (  $month == 'August') { $month = "08"; } 
	   elseif (  $month == 'September') { $month = "09"; } 
	   elseif (  $month == 'October'  ) { $month = "10"; } 
	   elseif (  $month == 'November' ) { $month = "11"; } 
	   elseif (  $month == 'December' ) { $month = "12"; } 
	   $converted = $year.'-'.$month.'-'.$day;
	   return $converted; 
	} 

}