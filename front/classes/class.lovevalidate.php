<?php
class LOVEVALIDATE
{	
	public function option_validate($input)
	{
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input; 
	} 
	public function description_validate($input)
	{
		
		if (strlen($input) < 1 || strlen($input) > 255) {
	        $input = NULL;
	    }

		//Replace anything that isn't a letter
		if (!ctype_alnum($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
	    }
	    
		return $input; 
		
		
	} 
	public function yesno_validate($input)
	{
		if (!ctype_alpha($input)) {
	        $input = "";
	    }
		if (strlen($input) < 1 || strlen($input) > 3) {
	        $input = "";
	    }
		$options = array('NA','Y','N',"Yes","No");

		if (!in_array($input, $options)) {
		    $input = "";
		}
		return $input; 
	} 
	public function basicinput_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 45) {
	        $input = "";
	    }

		//Replace anything that isn't a letter
		if (!ctype_alpha($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
	    }
	    
		return $input; 
	} 
	
	
	
	
	public function age_validate($input)
	{

		if (!ctype_digit($input)) {
	        
	        $options = array('LateTeens','Early 20s','Late 20s','Early 30s','30s','40s','50s','60s','MiddleAge','LateAdult','Senior');

			if (!in_array($input, $options)) {
			    $input = "";
			}
			
	    }else{
		    if (strlen($input) < 1 || strlen($input) > 3) {
		        $input = "";
		    }

	    }
	    
		return $input; 
	} 

	
	public function country_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 45) {
	        $input = "";
	    }

			$options = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Angola", "Anguilla", "Antartica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Ashmore and Cartier Island", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Clipperton Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czeck Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Europa Island", "Falkland Islands (Islas Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern and Antarctic Lands", "Gabon", "Gambia, The", "Gaza Strip", "Georgia", "Germany", "Ghana", "Gibraltar", "Glorioso Islands", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See (Vatican City)", "Honduras", "Hong Kong", "Howland Island", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Ireland, Northern", "Israel", "Italy", "Jamaica", "Jan Mayen", "Japan", "Jarvis Island", "Jersey", "Johnston Atoll", "Jordan", "Juan de Nova Island", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Man, Isle of", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Midway Islands", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcaim Islands", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romainia", "Russia", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Scotland", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and South Sandwich Islands", "Spain", "Spratly Islands", "Sri Lanka", "Sudan", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Tobago", "Toga", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "USA", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands", "Wales", "Wallis and Futuna", "West Bank", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
	    	if (!in_array($input, $options)) {
		    $input = "";
		}
		return $input; 
	} 
	
	
	public function gender_validate($input)
	{
		if (!ctype_alpha($input)) {
	        $input = "";
	    }
		if ( strlen($input) < 1 || strlen($input) > 12 ) {
	        $input = "";
	    }
		$options = array('Female','Male','Bigender','Transgender','Any');

		if (!in_array($input, $options)) {
		    $input = "";
		}
		return $input; 
	} 
		
	public function havekids_validate($input)
	{
		if (!ctype_alnum($input)) {
	        $input = "";
	    }
	    if (strlen($input) < 1 || strlen($input) > 2) {
	        $input = "";
	    }
		$options = array('NA','N','1','2','3','4','5','6');

		if (!in_array($input, $options)) {
		    $input = "";
		}
		return $input; 
	} 
	public function lookingfor_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 2 || strlen($input) > 12) $input = "NA";
		$options = array('NA','Fun','NoCommitment','Monogamy','LongTerm','Friendship','Open','Connections','WPF');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	} 
	
	
	public function sexorientation_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 2 || strlen($input) > 8) $input = "NA";
		$options = array('NA','Straight','Gay','Lesbian','Bisexual','ASexual','Unsure');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	} 

		
	public function seriouslove_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 2 || strlen($input) > 14) $input = "NA";
		$options = array('NA','VerySerious','PrettySerious','NotThatSerious','NotAtAll','DontCare');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	} 
	public function currentstatus_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 2 || strlen($input) > 12) $input = "NA";
		$options = array('NA','Friendship','Single','Dating','Relationship','Married','Divorced','Widowed','Other');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	} 	
	
	
	
	
	

	public function moviegenre_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 14) $input = "";
		$options = array('Action','Adventure','Animation','Biography','Comedy','Crime','Documentary','Drama','Family','History','Independent','Horror','Musical','Mystery','Romance','SciFi','Sport','Thriller','War','Western');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
	
	
	public function musicgenre_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 12) $input = "";
		$options = array('Blues','Caribbean','Comedy','Country','Folk','Gospel','HipHop','Jazz','Pop','RB','Rock','Alternative','All');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
		
	public function petlover_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 9) $input = "";
		$options = array('All','Some','CatsDogs','DogsOnly','CatsOnly','Caged','Reptiles','Water','Birds','Farm','None');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
	public function vehicle_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 15) $input = "";
		$options = array('NoLicense','Truck','Car','SportsCar','FamilyVehicle','SUV','TunerVehicle','ClassicVehicles','NoVehicle','Other');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
	public function dressstyle_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 10) $input = "";
		$options = array('Business','Casual','Classy','Gothic','Hipster','HipHop','Punk','Rocker','Sexy','Sporty','Trendy','Other','Everything');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
		
	public function lovelanguage_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 22) $input = "";
		$options = array('ActsOfService','WordsOfAffirmation','QualityTime','GiftGiving','PhysicalTouch','Unsure');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	} 
	
			
	public function firstdate_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 25) $input = "";
		$options = array('DriveAroundTown','DinnerAndMovie','Walk','CoffeeAndMall','BarAndDance','SportsGame','HangWithFriends','Talk','SomethingTotallyDifferent','AdrenalinJunkie','Relaxing');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	}
	public function mostimportant_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 14) $input = "";
		$options = array('Manners','Generosity','Independence','Sexiness','UniqueTraits','Conversation','Sincerity','Compliments','SelfConfidence','Happiness');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	}
	public function outdoorsindoors_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 26) $input = "";
		$options = array('Outdoors','Indoors','Sleeping','OutdoorsHuntingFishing','IndoorsGymGaming');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	}
	public function diet_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 2 || strlen($input) > 13) $input = "";
		$options = array('MeatEater','SomeMeat','Vegan','Vegetarian','Pescatarian','Experiment','NoDiet');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	}






/*
	*
	* YOUR ANSWERS / PREFERRED PARTNER
	*
	
	*/
	
	
	public function smoke_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "";
	    if (strlen($input) < 1 || strlen($input) > 14) $input = "";
		$options = array('Yes','No','Recreational');
		if (!in_array($input, $options)) $input = "";
		
		return $input; 
	}
	
	public function drink_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 3) $input = "NA";
		$options = array('NA','Y','N','REC','REG','OFT','DAY');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}

	public function drugs_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 3) $input = "NA";
		$options = array('NA','Y','N','NOTSER','REC');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}


	public function employed_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) != 2) $input = "NA";
		$options = array('NA','FT','PT','SE','UE','BO','EN','HP','ST');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function travelwork_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 2) $input = "NA";
		$options = array('NA','Y','N','OF','SW');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	
	public function salaryhours_validate($input)
	{
		
	    if (strlen($input) < 2 || strlen($input) > 6) $input = "NA";
		$options = array('NA','0-20','20-40','40-60','60-80','80-100','100');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}


	public function religprac_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 9) $input = "NA";
		$options = array('NA','YPractice','NPractice','ET','Other','NoPart');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function ethnicity_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 20) $input = "NA";
		$options = array('NA','Arab','African','AfricanAmerican','Bangladeshi','Caribbean','Caucasian','Chinese','Cuban','Hispanic','Indian','Indigenous','Irish','Japanese','Jewish','Korean','Latino','Mexican','Mixed','NativeAmerican','Pacific','Pakistani','Scottish','Welsh','Other');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function wantkids_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		$options = array('NA','Y','N','HaveWantMore','HaveNoMore');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function bodytype_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 10) $input = "NA";
		$options = array('NA','Skinny','Average','Fit','Muscular','Thick','Curvy','Heavy');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function health_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 5) $input = "NA";
		$options = array('NA','N','Past','Minor','Other');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function haircolor_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 6) $input = "NA";
		$options = array('NA','Brown','Blonde','Red','Black','Gray','Other');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function eyecolor_validate($input)
	{
		
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 5) $input = "NA";
		$options = array('NA','Brown','Black','Blue','Green','Gray','Hazel');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function height_validate($input)
	{
		
		$input = preg_replace("/[^a-z0-9.]/i", "", $input);
	    if (strlen($input) < 1 || strlen($input) > 4) $input = "NA";
		$options = array('NA','5.0','5.1','5.2','5.3','5.4','5.5','5.6','5.7','5.8','5.9','5.10','5.11','6.0','6.1','6.2','6.3','6.4','6.5','6.6','6.7','6.8','6.9','6.10','6.11','7.0','7.1','7.2');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function weight_validate($input)
	{
		
	    if (strlen($input) < 1 || strlen($input) > 13) $input = "NA";
		$options = array('NA','100lbs-120lbs','120lbs-140lbs','140lbs-160lbs','160lbs-180lbs','180lbs-200lbs','200lbs-250lbs','250lbs-300lbs','300lbs');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}
	public function education_validate($input)
	{
		
	    if (strlen($input) < 1 || strlen($input) > 10) $input = "NA";
		$options = array('NA','GRADE','GED','COLUNI','CERT','DIPLOMA','ASSOCIATE','BACHELORS','MASTERS','DOCTORS','OTHER');
		if (!in_array($input, $options)) $input = "NA";
		
		return $input; 
	}

/*
	*
	* YOUR ANSWERS / PREFERRED PARTNER
	*
	
	*/
	
	
	
	
	
	
	
	
	
	
	

}	