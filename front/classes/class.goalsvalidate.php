<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class GOALSVALIDATE
{	
	public function item_validate($input)
	{
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input; 
	} 
	public function category_description_validate($input)
	{
		
	    if (strlen($input) < 1 || strlen($input) > 255) {
	        $input = "";
	    }

		if (!ctype_alnum($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
	    }
	    
	return $input; 
		
		
	} 
	public function yesno_validate($input)
	{
		if (!ctype_alpha($input)) {
	        $input = "N";
	    }
		if (strlen($input) != 1) {
	        $input = "N";
	    }
		$options = array('Y','N');

		if (!in_array($input, $options)) {
		    $input = "N";
		}
		return $input; 
	} 
	
	public function category_title_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 45) {
	        $input = "";
	    }

		if (!ctype_alnum($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
	    }
	    
		return $input; 
	} 
	
	
	public function category_icon($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 15) {
	        $input = "trophystar";
	    }

		$options = array("trophystar", "health-care", "businesshands", "heartsmatch", "profits", "world", "silhouette", "toy", "apple", "open-book");
	    	if (!in_array($input, $options)) {
		    $input = "trophystar";
		}
		return $input; 
	} 

	
	public function category_type($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 14) {
	        $input = "";
	    }

		$options = array("Career", "Character", "Education", "Emotional", "Financial", "Health", "Intellectual", "Life", "Love", "Material", "Parenting", "Personal", "Social", "Spiritual", "Travel", "Other");
	    	if (!in_array($input, $options)) {
		    $input = "";
		}
		return $input; 
	} 

	
	public function category_id_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 11) {
	        $input = "";
	    }
            if (!ctype_digit($input)) {
	        $input = "";
	    }
	return $input; 
	} 
        
        public function deadline_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 11) {
	        $input = "NA";
	    }

		$options = array("Today", "This Week", "This Month", "3 Months", "6 Months", "1 Year", "2 Years", "3 Years", "4 Years", "5 Years", "10 Years");
                
	    	if (!in_array($input, $options)) {
		    $input = "NA";
		}
		return $input; 
                
	return $input; 
	} 
        
        public function duedate_validate($input)
	{

	switch($input)
            {
                case "Today":
                    $duedate = "CURDATE()";
                    break;
                case "This Week":
                    $duedate = "DATE_ADD(NOW(), INTERVAL 7 DAY)";
                    break;
                case "This Month":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 31 DAY))";
                    break;
                case "3 Months":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 3 MONTH))";
                    break;
                case "6 Months":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 6 MONTH))";
                    break;
                case "1 Year":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 1 YEAR))";
                    break;
                case "2 Years":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 2 YEAR))";
                    break;
                case "3 Years":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 3 YEAR))";
                    break;
                case "4 Years":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 4 YEAR))";
                    break;
                case "5 Years":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 5 YEAR))";
                    break;
                case "10 Years":
                    $duedate = "DATE(DATE_ADD(NOW(), INTERVAL 10 YEAR))";
                    break;
                default:
                    $duedate = "NOW()";
                    break;
            }
		return $duedate; 
                
	return $input; 
	} 

}	
