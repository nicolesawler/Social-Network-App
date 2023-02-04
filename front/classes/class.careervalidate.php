<?php
class CAREERVALIDATE
{	
	public function item_validate($input)
	{
		$input = trim($input);
		$input = strip_tags($input);
		$input = stripcslashes($input);
		$input = htmlspecialchars($input);
		return $input; 
	} 
	public function textarea_validate($input)
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
	        $input = "NA";
	    }
		if (strlen($input) < 1 || strlen($input) > 2) {
	        $input = "NA";
	    }
		$options = array('NA','Y','N');

		if (!in_array($input, $options)) {
		    $input = "NA";
		}
		return $input; 
	} 
	
	public function basicinput_validate($input)
	{

	    if (strlen($input) < 1 || strlen($input) > 45) {
	        $input = "";
	    }

		if (!ctype_alnum($input)) {
	        $input = preg_replace("/[^a-z0-9-().,'&#$@!?:%_ ]/i", "", $input);
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
		    $input = "NA";
		}
		return $input; 
	} 
	
	public function category_validate($input)
	{
        $options = array('NA','Accounting','Admin','Animal','Banking','Beauty','Business','Contract','CustomerService','Diversity','Education','Engineering','ExecutiveManagement','FoodService','Government','HealthCare','Hospitality','HumanResources','InformationTechnology','Internships','Manufacturing','Media','Nonprofit','PerformanceArts','Retail','SalesMarketing','Science','Sports','Transportation');

		if (!in_array($input, $options)) {
		    $input = "NA";
		}
		if (!ctype_alpha($input)) {
	        $input = "NA";
			
	    }
	    if (strlen($input) < 1 || strlen($input) > 22) {
	        $input = "NA";
	    }
		return $input; 
	} 
	
	public function qualified_validate($input)
	{
        $options = array('NA','Y','N','Some','Progress');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 8)  $input = "NA";
		return $input; 
	} 
		
	public function language_validate($input)
	{
        $options = array('NA','Afrikanns','Albanian','Arabic','Armenian','Basque','Bengali','Bulgarian','Catalan','Cambodian','Chinese','Croation','Czech','Danish','Dutch','English','Estonian','Fiji','Finnish','French','Georgian','German','Greek','Gujarati','Hebrew','Hindi','Hungarian','Icelandic','Indonesian','Irish','Italian','Japanese','Javanese','Korean','Latin','Latvian','Lithuanian','Macedonian','Malay','Malayalam','Maltese','Maori','Marathi','Mongolian','Nepali','Norwegian','Persian','Polish','Portuguese','Punjabi','Quechua','Romanian','Russian','Samoan','Serbian','Slovak','Slovenian','Spanish','Swahili','Swedish','Tamil','Tatar','Telugu','Thai','Tibetan','Tonga','Turkish','Ukranian','Urdu','Uzbek','Vietnamese','Welsh','Xhosa');

		if (!in_array($input, $options))$input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 22) $input = "NA";
		return $input; 
	} 
	
	public function payment_validate($input)
	{
        $options = array('NA','Salary','Hourly','Contractual');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 22) $input = "NA";
		return $input; 
	} 
		
	public function workspace_validate($input)
	{
        $options = array('NA','Onsite','Office','AtHome','OpenGroup');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 10) $input = "NA";
		return $input; 
	} 

	public function schedule_validate($input)
	{
        $options = array('NA','Flexible','Consistent','Weekdays','Weekends','Evenings','EveningsWeekends','Nights');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 20) $input = "NA";
		return $input; 
	} 

	public function worktype_validate($input)
	{
        $options = array('NA','FullTime','PartTime','Temporary','Contractual','Student');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 20) $input = "NA";
		return $input; 
	} 


	public function benefits_validate($input)
	{
        $options = array('NA','Health','Dental','Insurance','HealthDental','FullCoverage');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 20) $input = "NA";
		return $input; 
	} 
	public function weeklyhours_validate($input)
	{
        $input = preg_replace("/[^a-z0-9-]/i", "", $input);
		$options = array('NA','0-20','20-40','40-60','60-80');
		if (!in_array($input, $options)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 5) $input = "NA";
		return $input; 
	} 
	public function yearlyincome_validate($input)
	{
        $input = preg_replace("/[^a-z0-9-]/i", "", $input);
		$options = array('NA','0-20','20-30','30-40','40-50','50-60','60-70','70-80','80-90','90-100','100');
		if (!in_array($input, $options)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 5) $input = "NA";
		return $input; 
	} 
	public function important_validate($input)
	{
        $options = array('NA','Leadership','Learning','Happy','GoodTeam','ApplySkills');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 

	public function learn_validate($input)
	{
        $options = array('NA','Visual','Auditory','ReadWrite','Kinesthetic','Unsure');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 
	public function want_validate($input)
	{
        $options = array('NA','Purpose','Responsibility','Flexibility','Communication','Transparency','FairWage','JobSecurity','CompetentManagers','Opportunity');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 22) $input = "NA";
		return $input; 
	} 

	public function companysuccess_validate($input)
	{
        $options = array('NA','New','Traditional');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 

	public function position_validate($input)
	{
        $options = array('NA','Leader','TeamPlayer','Independent');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 


	public function companytype_validate($input)
	{
        $options = array('NA','StartUp','Small','Large','Franchise','Any');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 

	public function manager_validate($input)
	{
        $options = array('NA','Appreciates','Leads','Listens','Teaches','Encourages');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 

	public function current_status_validate($input)
	{
        $options = array('NA','FullTime','PartTime','Temporary','Contractual','Seasonal');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 
	public function degree_validate($input)
	{
        $options = array('NA','GRADE','GED','COLUNI','CERT','DIPLOMA','ASSOCIATE','BACHELORS','MASTERS','DOCTORS','OTHER');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 12) $input = "NA";
		return $input; 
	} 
	public function yearatschool_validate($input)
	{
        $options = array('NA','Under1','1','2','3','4','5','6','7','8','9','10','11','12');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alnum($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 6) $input = "NA";
		return $input; 
	} 
	public function schoolstatus_validate($input)
	{
        $options = array('NA','CurrentlyAttending','Graduated','Partial');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 22) $input = "NA";
		return $input; 
	} 
	public function awardtype_validate($input)
	{
        $options = array('NA','Scholarship','Bursary','Award','Certificate','Grant','Fellowship','Volunteer');
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alpha($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 22) $input = "NA";
		return $input; 
	} 

	public function year_validate($input)
	{
        $options = array('NA',
        '2018',
        '2017',
        '2016',
        '2015',
        '2014',
        '2013',
        '2012',
        '2011',
        '2010',
        '2009',
        '2008',
        '2007',
        '2006',
        '2005',
        '2004',
        '2003',
        '2002',
        '2001',
        '2000',
        '1999',
        '1998',
        '1997',
        '1996',
        '1995',
        '1994',
        '1993',
        '1992',
        '1991',
        '1990',
        '1989',
        '1988',
        '1987',
        '1986',
        '1985',
        '1984',
        '1983',
        '1982',
        '1981',
        '1980',
        '1979',
        '1978',
        '1977',
        '1976',
        '1974',
        '1973',
        '1972',
        '1971',
        '1970'
        );
		if (!in_array($input, $options)) $input = "NA";
		if (!ctype_alnum($input)) $input = "NA";
	    if (strlen($input) < 1 || strlen($input) > 4) $input = "NA";
		return $input; 
	} 






}	
