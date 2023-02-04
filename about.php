<?php

include_once 'back/db-user.php';
include_once 'back/db-career.php';
$userPref = $career->getCareerProfile($user_id);

$s = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '?') + 1);
$saved = ($s=='saved' ? 'savesuccess' : "");

if( isset($_POST['btn-career-save']) )
{
	require_once 'db/class.careervalidate.php';

	
	$validate = new CAREERVALIDATE();
	
		$employment = $validate->basicinput_validate($validate->item_validate($_POST['career_employment']));
		$position = $validate->basicinput_validate($validate->item_validate($_POST['career_position']));
		$category = $validate->category_validate($validate->item_validate($_POST['career_category']));
		$qualified = $validate->qualified_validate($validate->item_validate($_POST['career_qualified']));
		$student = $validate->yesno_validate($validate->item_validate($_POST['career_student']));
		$language = $validate->language_validate($validate->item_validate($_POST['career_language']));
		$country = $validate->country_validate($validate->item_validate($_POST['career_country']));
		$province = $validate->basicinput_validate($validate->item_validate($_POST['career_province']));
		$city = $validate->basicinput_validate($validate->item_validate($_POST['career_city']));

		$payment = $validate->payment_validate($validate->item_validate($_POST['career_payment']));
		$wantwork = $validate->workspace_validate($validate->item_validate($_POST['career_wantwork']));
		$hours = $validate->schedule_validate($validate->item_validate($_POST['career_hours']));
		$type = $validate->worktype_validate($validate->item_validate($_POST['career_type']));
		$benefits = $validate->benefits_validate($validate->item_validate($_POST['career_benefits']));
		$workhours = $validate->weeklyhours_validate($validate->item_validate($_POST['career_workhours']));
		$yearlyincome = $validate->yearlyincome_validate($validate->item_validate($_POST['career_yearlyincome']));
		
		$mostimportant = $validate->important_validate($validate->item_validate($_POST['career_mostimportant']));
		$learn = $validate->learn_validate($validate->item_validate($_POST['career_learn']));
		$wantmost = $validate->want_validate($validate->item_validate($_POST['career_wantmost']));
		$prefercompany = $validate->companysuccess_validate($validate->item_validate($_POST['career_prefercompany']));
		$positionwhere = $validate->position_validate($validate->item_validate($_POST['career_positionwhere']));
		$companytype = $validate->companytype_validate($validate->item_validate($_POST['career_companytype']));
		$manager = $validate->manager_validate($validate->item_validate($_POST['career_manager']));
		
		$skill1 = $validate->basicinput_validate($validate->item_validate($_POST['career_skill1']));
		$skill2 = $validate->basicinput_validate($validate->item_validate($_POST['career_skill2']));
		$skill3 = $validate->basicinput_validate($validate->item_validate($_POST['career_skill3']));
		$skill4 = $validate->basicinput_validate($validate->item_validate($_POST['career_skill4']));
		$skill5 = $validate->basicinput_validate($validate->item_validate($_POST['career_skill5']));
		$summary = $validate->textarea_validate($validate->item_validate($_POST['career_summary']));
		
		$cocc = $validate->basicinput_validate($validate->item_validate($_POST['career_cocc']));
		$ccomp = $validate->basicinput_validate($validate->item_validate($_POST['career_ccomp']));
		$csince = $validate->year_validate($validate->item_validate($_POST['career_csince']));
		$cstatus = $validate->current_status_validate($validate->item_validate($_POST['career_cstatus']));
		$cdesc = $validate->textarea_validate($validate->item_validate($_POST['career_cdesc']));
		
		$exocc1 = $validate->basicinput_validate($validate->item_validate($_POST['career_exocc1']));
		$excomp1 = $validate->basicinput_validate($validate->item_validate($_POST['career_excomp1']));
		$exsince1 = $validate->year_validate($validate->item_validate($_POST['career_exsince1']));
		$exstatus1 = $validate->year_validate($validate->item_validate($_POST['career_exstatus1']));
		$exdesc1 = $validate->textarea_validate($validate->item_validate($_POST['career_exdesc1']));
		
		$exocc2 = $validate->basicinput_validate($validate->item_validate($_POST['career_exocc2']));
		$excomp2 = $validate->basicinput_validate($validate->item_validate($_POST['career_excomp2']));
		$exsince2 = $validate->year_validate($validate->item_validate($_POST['career_exsince2']));
		$exstatus2 = $validate->year_validate($validate->item_validate($_POST['career_exstatus2']));
		$exdesc2 = $validate->textarea_validate($validate->item_validate($_POST['career_exdesc2']));
		
		$edp_school = $validate->basicinput_validate($validate->item_validate($_POST['career_edp_school']));
		$edp_degree = $validate->degree_validate($validate->item_validate($_POST['career_edp_degree']));
		$edp_study = $validate->basicinput_validate($validate->item_validate($_POST['career_edp_study']));
		$edp_years = $validate->yearatschool_validate($validate->item_validate($_POST['career_edp_years']));
		$edp_status = $validate->schoolstatus_validate($validate->item_validate($_POST['career_edp_status']));
		
		$eds_school = $validate->basicinput_validate($validate->item_validate($_POST['career_eds_school']));
		$eds_degree = $validate->degree_validate($validate->item_validate($_POST['career_eds_degree']));
		$eds_study = $validate->basicinput_validate($validate->item_validate($_POST['career_eds_study']));
		$eds_years = $validate->yearatschool_validate($validate->item_validate($_POST['career_eds_years']));
		$edps_status = $validate->schoolstatus_validate($validate->item_validate($_POST['career_edps_status']));
		
		$award1_name = $validate->basicinput_validate($validate->item_validate($_POST['career_award1_name']));
		$award1_year = $validate->year_validate($validate->item_validate($_POST['career_award1_year']));
		$award1_type = $validate->awardtype_validate($validate->item_validate($_POST['career_award1_type']));
		$award2_name = $validate->basicinput_validate($validate->item_validate($_POST['career_award2_name']));
		$award2_year = $validate->year_validate($validate->item_validate($_POST['career_award2_year']));
		$award2_type = $validate->awardtype_validate($validate->item_validate($_POST['career_award2_type']));
		$award3_name = $validate->basicinput_validate($validate->item_validate($_POST['career_award3_name']));
		$award3_year = $validate->year_validate($validate->item_validate($_POST['career_award3_year']));
		$award3_type = $validate->awardtype_validate($validate->item_validate($_POST['career_award3_type']));

		//$allow_resume_download = $validate->basicinput_validate($validate->item_validate($_POST['allow_resume_download']));
		//$allow_pref_views = $validate->basicinput_validate($validate->item_validate($_POST['allow_pref_views']));
	

      try
      {
            if($career->saveProfile(
           $user_id,$employment,$position,$category,$qualified,$student,$language,$country,$province,$city,$cocc,$ccomp,$csince,$cstatus,$cdesc,$exocc1,$excomp1,$exsince1,$exstatus1,$exdesc1,$exocc2,$excomp2,$exsince2,$exstatus2,$exdesc2,$edp_school,$edp_degree,$edp_study,$edp_years,$edp_status,$eds_school,$eds_degree,$eds_study,$eds_years,$edps_status,$award1_name,$award1_type,$award1_year,$award2_name,$award2_type,$award2_year,$award3_name,$award3_type,$award3_year,$skill1,$skill2,$skill3,$skill4,$skill5,$summary,$payment,$wantwork,$hours,$type,$benefits,$workhours,$yearlyincome,$mostimportant,$learn,$wantmost,$prefercompany,$positionwhere,$companytype,$manager
            )) 
            {
	          $career->redirect('career.php?saved');
              }

     }
     catch(PDOException $e)
     {
        $e->getMessage();
     }



}

?>
<!DOCTYPE html>
<html lang="en" id="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”viewport” content="width=device-width, initial-scale=1" />


<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />


<title><?= $user['first'] ." ". $user['last'] ; ?> - GritBldr</title>
<meta name="description" content="A description of the page" /><!-- 155 characters max --> 
<link rel="stylesheet" href="assets/css/styles.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/career.css" type="text/css"  />
</head>

<body>
<div id="vision">
	
<?php
include_once 'includes/top-navigation.php';
?>

<div id="boxed-space">

<?php
include_once 'includes/user-sidebar.php';
?>


<div id="main-space" class="main-space">
	
	
<?php
include_once 'includes/user-navigation.php';
?>
<div class="career-intro-message" id="career-intro-message">
<strong>Standardizing the way we see resumes</strong> - Tell employers what you want at your organization. You spend a good portion of your life at your job, make sure you're doing something you <strong>love</strong>.
</div>

<form method="post" id="career-profile-form">

<div id="career-box-holder">
	<div id="career-title-top-left" class="career-title-top-left">
		Your Career Profile
	</div>
	
	<div id="career-box-top-left" class="career-box-top-left">
		<div id="career-survey-question">
			Employment Status:
			<input name="career_employment" class="" maxlength="25" value="<?= $userPref['e_status']; ?>"/>
		</div>
		<div id="career-survey-question">
			Desired Position Title:
			<input name="career_position" class="" maxlength="25" value="<?= $userPref['e_position_title']; ?>"/>
		</div>
		<div id="career-survey-question">
			Desired Career Category: 
			<select name="career_category" id="career-select" >
			<option <?=$userPref['e_career_category'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['e_career_category'] == 'Accounting' ? 'selected ' : '';?>value="Accounting">Accounting</option>
			<option <?=$userPref['e_career_category'] == 'Admin' ? 'selected ' : '';?>value="Admin">Admin & Clerical</option>
			<option <?=$userPref['e_career_category'] == 'Animal' ? 'selected ' : '';?>value="Animal">Animal Care</option>
			<option <?=$userPref['e_career_category'] == 'Banking' ? 'selected ' : '';?>value="Banking">Banking & Finance</option>
			<option <?=$userPref['e_career_category'] == 'Beauty' ? 'selected ' : '';?>value="Beauty">Beauty & Esthetics</option>
			<option <?=$userPref['e_career_category'] == 'Business' ? 'selected ' : '';?>value="Business">Business Opportunities</option>
			<option <?=$userPref['e_career_category'] == 'Contract' ? 'selected ' : '';?>value="Contract">Contract & Freelance</option>
			<option <?=$userPref['e_career_category'] == 'CustomerService' ? 'selected ' : '';?>value="CustomerService">Customer Service</option>
			<option <?=$userPref['e_career_category'] == 'Diversity' ? 'selected ' : '';?>value="Diversity">Diversity Opportunities</option>
			<option <?=$userPref['e_career_category'] == 'Education' ? 'selected ' : '';?>value="Education">Education</option>
			<option <?=$userPref['e_career_category'] == 'Engineering' ? 'selected ' : '';?>value="Engineering">Engineering & Trades</option>
			<option <?=$userPref['e_career_category'] == 'ExecutiveManagement' ? 'selected ' : '';?>value="ExecutiveManagement">Executive/Management</option>
			<option <?=$userPref['e_career_category'] == 'FoodService' ? 'selected ' : '';?>value="FoodService">Food Service</option>
			<option <?=$userPref['e_career_category'] == 'Government' ? 'selected ' : '';?>value="Government">Government</option>
			<option <?=$userPref['e_career_category'] == 'HealthCare' ? 'selected ' : '';?>value="HealthCare">Health Care</option>
			<option <?=$userPref['e_career_category'] == 'Hospitality' ? 'selected ' : '';?>value="Hospitality">Hospitality</option>
			<option <?=$userPref['e_career_category'] == 'HumanResources' ? 'selected ' : '';?>value="HumanResources">Human Resources</option>
			<option <?=$userPref['e_career_category'] == 'InformationTechnology' ? 'selected ' : '';?>value="InformationTechnology">Information Technology</option>
			<option <?=$userPref['e_career_category'] == 'Internships' ? 'selected ' : '';?>value="Internships">Internships & College</option>
			<option <?=$userPref['e_career_category'] == 'Manufacturing' ? 'selected ' : '';?>value="Manufacturing">Manufacturing</option>
			<option <?=$userPref['e_career_category'] == 'Media' ? 'selected ' : '';?>value="Media">Media</option>
			<option <?=$userPref['e_career_category'] == 'Nonprofit' ? 'selected ' : '';?>value="Nonprofit">Nonprofit</option>
			<option <?=$userPref['e_career_category'] == 'PerformanceArts' ? 'selected ' : '';?>value="PerformanceArts">Performance Arts</option>
			<option <?=$userPref['e_career_category'] == 'Retail' ? 'selected ' : '';?>value="Retail">Retail</option>
			<option <?=$userPref['e_career_category'] == 'SalesMarketing' ? 'selected ' : '';?>value="SalesMarketing">Sales & Marketing</option>
			<option <?=$userPref['e_career_category'] == 'Science' ? 'selected ' : '';?>value="Science">Science & Biotech</option>
			<option <?=$userPref['e_career_category'] == 'Sports' ? 'selected ' : '';?>value="Sports">Sports & Athletics</option>
			<option <?=$userPref['e_career_category'] == 'Transportation' ? 'selected ' : '';?>value="Transportation">Transportation</option>
			</select>
		</div>
		<div id="career-survey-question">
			Are you qualified for this position?: 
			<select id="career-select" name="career_qualified">
			<option <?=$userPref['e_qualified'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['e_qualified'] == 'Y' ? 'selected ' : '';?>value="Yes">Yes, I am qualified</option>
			<option <?=$userPref['e_qualified'] == 'N' ? 'selected ' : '';?>value="No">No, but want to be</option>
			<option <?=$userPref['e_qualified'] == 'Some' ? 'selected ' : '';?>value="Some">Some experience/education</option>
			<option <?=$userPref['e_qualified'] == 'Progress' ? 'selected ' : '';?>value="Progress">In progress of qualifying</option>
			</select>
		</div>
		<div id="career-survey-question">
			Are you a student?: 
			<select id="career-select" name="career_student">
			<option <?=$userPref['e_student'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['e_student'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
			<option <?=$userPref['e_student'] == 'N' ? 'selected ' : '';?>value="N">No</option>
			</select>
		</div>
		<div id="career-survey-question">
			Primary Language: 
			<select id="career-select" name="career_language">
			  <option <?=$userPref['e_lang'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			  <option <?=$userPref['e_lang'] == 'Afrikanns' ? 'selected ' : '';?>value="Afrikanns">Afrikanns</option>
			  <option <?=$userPref['e_lang'] == 'Albanian' ? 'selected ' : '';?>value="Albanian">Albanian</option>
			  <option <?=$userPref['e_lang'] == 'Arabic' ? 'selected ' : '';?>value="Arabic">Arabic</option>
			  <option <?=$userPref['e_lang'] == 'Armenian' ? 'selected ' : '';?>value="Armenian">Armenian</option>
			  <option <?=$userPref['e_lang'] == 'Basque' ? 'selected ' : '';?>value="Basque">Basque</option>
			  <option <?=$userPref['e_lang'] == 'Bengali' ? 'selected ' : '';?>value="Bengali">Bengali</option>
			  <option <?=$userPref['e_lang'] == 'Bulgarian' ? 'selected ' : '';?>value="Bulgarian">Bulgarian</option>
			  <option <?=$userPref['e_lang'] == 'Catalan' ? 'selected ' : '';?>value="Catalan">Catalan</option>
			  <option <?=$userPref['e_lang'] == 'Cambodian' ? 'selected ' : '';?>value="Cambodian">Cambodian</option>
			  <option <?=$userPref['e_lang'] == 'Chinese' ? 'selected ' : '';?>value="Chinese">Chinese (Mandarin)</option>
			  <option <?=$userPref['e_lang'] == 'Croation' ? 'selected ' : '';?>value="Croation">Croation</option>
			  <option <?=$userPref['e_lang'] == 'Czech' ? 'selected ' : '';?>value="Czech">Czech</option>
			  <option <?=$userPref['e_lang'] == 'Danish' ? 'selected ' : '';?>value="Danish">Danish</option>
			  <option <?=$userPref['e_lang'] == 'Dutch' ? 'selected ' : '';?>value="Dutch">Dutch</option>
			  <option <?=$userPref['e_lang'] == 'English' ? 'selected ' : '';?>value="English">English</option>
			  <option <?=$userPref['e_lang'] == 'Estonian' ? 'selected ' : '';?>value="Estonian">Estonian</option>
			  <option <?=$userPref['e_lang'] == 'Fiji' ? 'selected ' : '';?>value="Fiji">Fiji</option>
			  <option <?=$userPref['e_lang'] == 'Finnish' ? 'selected ' : '';?>value="Finnish">Finnish</option>
			  <option <?=$userPref['e_lang'] == 'French' ? 'selected ' : '';?>value="French">French</option>
			  <option <?=$userPref['e_lang'] == 'Georgian' ? 'selected ' : '';?>value="Georgian">Georgian</option>
			  <option <?=$userPref['e_lang'] == 'German' ? 'selected ' : '';?>value="German">German</option>
			  <option <?=$userPref['e_lang'] == 'Greek' ? 'selected ' : '';?>value="Greek">Greek</option>
			  <option <?=$userPref['e_lang'] == 'Gujarati' ? 'selected ' : '';?>value="Gujarati">Gujarati</option>
			  <option <?=$userPref['e_lang'] == 'Hebrew' ? 'selected ' : '';?>value="Hebrew">Hebrew</option>
			  <option <?=$userPref['e_lang'] == 'Hindi' ? 'selected ' : '';?>value="Hindi">Hindi</option>
			  <option <?=$userPref['e_lang'] == 'Hungarian' ? 'selected ' : '';?>value="Hungarian">Hungarian</option>
			  <option <?=$userPref['e_lang'] == 'Icelandic' ? 'selected ' : '';?>value="Icelandic">Icelandic</option>
			  <option <?=$userPref['e_lang'] == 'Indonesian' ? 'selected ' : '';?>value="Indonesian">Indonesian</option>
			  <option <?=$userPref['e_lang'] == 'Irish' ? 'selected ' : '';?>value="Irish">Irish</option>
			  <option <?=$userPref['e_lang'] == 'Italian' ? 'selected ' : '';?>value="Italian">Italian</option>
			  <option <?=$userPref['e_lang'] == 'Japanese' ? 'selected ' : '';?>value="Japanese">Japanese</option>
			  <option <?=$userPref['e_lang'] == 'Javanese' ? 'selected ' : '';?>value="Javanese">Javanese</option>
			  <option <?=$userPref['e_lang'] == 'Korean' ? 'selected ' : '';?>value="Korean">Korean</option>
			  <option <?=$userPref['e_lang'] == 'Latin' ? 'selected ' : '';?>value="Latin">Latin</option>
			  <option <?=$userPref['e_lang'] == 'Latvian' ? 'selected ' : '';?>value="Latvian">Latvian</option>
			  <option <?=$userPref['e_lang'] == 'Lithuanian' ? 'selected ' : '';?>value="Lithuanian">Lithuanian</option>
			  <option <?=$userPref['e_lang'] == 'Macedonian' ? 'selected ' : '';?>value="Macedonian">Macedonian</option>
			  <option <?=$userPref['e_lang'] == 'Malay' ? 'selected ' : '';?>value="Malay">Malay</option>
			  <option <?=$userPref['e_lang'] == 'Malayalam' ? 'selected ' : '';?>value="Malayalam">Malayalam</option>
			  <option <?=$userPref['e_lang'] == 'Maltese' ? 'selected ' : '';?>value="Maltese">Maltese</option>
			  <option <?=$userPref['e_lang'] == 'Maori' ? 'selected ' : '';?>value="Maori">Maori</option>
			  <option <?=$userPref['e_lang'] == 'Marathi' ? 'selected ' : '';?>value="Marathi">Marathi</option>
			  <option <?=$userPref['e_lang'] == 'Mongolian' ? 'selected ' : '';?>value="Mongolian">Mongolian</option>
			  <option <?=$userPref['e_lang'] == 'Nepali' ? 'selected ' : '';?>value="Nepali">Nepali</option>
			  <option <?=$userPref['e_lang'] == 'Norwegian' ? 'selected ' : '';?>value="Norwegian">Norwegian</option>
			  <option <?=$userPref['e_lang'] == 'Persian' ? 'selected ' : '';?>value="Persian">Persian</option>
			  <option <?=$userPref['e_lang'] == 'Polish' ? 'selected ' : '';?>value="Polish">Polish</option>
			  <option <?=$userPref['e_lang'] == 'Portuguese' ? 'selected ' : '';?>value="Portuguese">Portuguese</option>
			  <option <?=$userPref['e_lang'] == 'Punjabi' ? 'selected ' : '';?>value="Punjabi">Punjabi</option>
			  <option <?=$userPref['e_lang'] == 'Quechua' ? 'selected ' : '';?>value="Quechua">Quechua</option>
			  <option <?=$userPref['e_lang'] == 'Romanian' ? 'selected ' : '';?>value="Romanian">Romanian</option>
			  <option <?=$userPref['e_lang'] == 'Russian' ? 'selected ' : '';?>value="Russian">Russian</option>
			  <option <?=$userPref['e_lang'] == 'Samoan' ? 'selected ' : '';?>value="Samoan">Samoan</option>
			  <option <?=$userPref['e_lang'] == 'Serbian' ? 'selected ' : '';?>value="Serbian">Serbian</option>
			  <option <?=$userPref['e_lang'] == 'Slovak' ? 'selected ' : '';?>value="Slovak">Slovak</option>
			  <option <?=$userPref['e_lang'] == 'Slovenian' ? 'selected ' : '';?>value="Slovenian">Slovenian</option>
			  <option <?=$userPref['e_lang'] == 'Spanish' ? 'selected ' : '';?>value="Spanish">Spanish</option>
			  <option <?=$userPref['e_lang'] == 'Swahili' ? 'selected ' : '';?>value="Swahili">Swahili</option>
			  <option <?=$userPref['e_lang'] == 'Swedish' ? 'selected ' : '';?>value="Swedish ">Swedish </option>
			  <option <?=$userPref['e_lang'] == 'Tamil' ? 'selected ' : '';?>value="Tamil">Tamil</option>
			  <option <?=$userPref['e_lang'] == 'Tatar' ? 'selected ' : '';?>value="Tatar">Tatar</option>
			  <option <?=$userPref['e_lang'] == 'Telugu' ? 'selected ' : '';?>value="Telugu">Telugu</option>
			  <option <?=$userPref['e_lang'] == 'Thai' ? 'selected ' : '';?>value="Thai">Thai</option>
			  <option <?=$userPref['e_lang'] == 'Tibetan' ? 'selected ' : '';?>value="Tibetan">Tibetan</option>
			  <option <?=$userPref['e_lang'] == 'Tonga' ? 'selected ' : '';?>value="Tonga">Tonga</option>
			  <option <?=$userPref['e_lang'] == 'Turkish' ? 'selected ' : '';?>value="Turkish">Turkish</option>
			  <option <?=$userPref['e_lang'] == 'Ukranian' ? 'selected ' : '';?>value="Ukranian">Ukranian</option>
			  <option <?=$userPref['e_lang'] == 'Urdu' ? 'selected ' : '';?>value="Urdu">Urdu</option>
			  <option <?=$userPref['e_lang'] == 'Uzbek' ? 'selected ' : '';?>value="Uzbek">Uzbek</option>
			  <option <?=$userPref['e_lang'] == 'Vietnamese' ? 'selected ' : '';?>value="Vietnamese">Vietnamese</option>
			  <option <?=$userPref['e_lang'] == 'Welsh' ? 'selected ' : '';?>value="Welsh">Welsh</option>
			  <option <?=$userPref['e_lang'] == 'Xhosa' ? 'selected ' : '';?>value="Xhosa">Xhosa</option>
			</select>
		</div>
		<div id="career-survey-question">
			<b>Looking for a position in:</b>
		</div>
		<div id="career-survey-question">
			Country:
			<select id="country" name="career_country" class="career-select"><option value="<?= $userPref['e_country']; ?>"><?= $userPref['e_country']; ?></option></select>
		</div>
		<div id="career-survey-question">
			State/Province:
			<select name="career_province" id="state" class="career-select"><option value="<?= $userPref['e_province']; ?>"><?= $userPref['e_province']; ?></option></select>
		</div>
		<div id="career-survey-question">
			City:  
			<input name="career_city" value="<?= $userPref['e_city']; ?>" class=""  maxlength="45"/>
		</div>

	</div>
</div>



<div id="career-box-holder">
	<div id="career-title-top-right" class="career-title-top-right">
		Connect
	</div>
	<div id="career-box-top-right" class="career-box-top-right">
		Allow employers to download my resume<br>
		Matches<br>
		Messages<br>
		Favorites<br>
		<br>
		Hide Me<br>
	</div>
</div>


<div class="clear"></div>



	<div id="career-title" class="career-title">
		Employer Match Preferences (This section only visible to potential employers)
	</div>
	
	<div id="career-box" class="career-box">
		
		<div id="career-survey-holder">	
			
			<div id="career-survey-question">
				Preferred Payment: 
				<select id="career-select" name="career_payment">
				<option <?=$userPref['emp_payment'] == '' ? 'selected ' : '';?>value=""></option>
				<option <?=$userPref['emp_payment'] == 'Salary' ? 'selected ' : '';?>value="Salary">Salary</option>
				<option <?=$userPref['emp_payment'] == 'Hourly' ? 'selected ' : '';?>value="Hourly">Hourly</option>
				<option <?=$userPref['emp_payment'] == 'Contractual' ? 'selected ' : '';?>value="Contractual">Contractual</option>
				</select>
			</div>
			<div id="career-survey-question">
				You want to work: 
				<select id="career-select" name="career_wantwork">
				<option <?=$userPref['emp_work'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_work'] == 'Onsite' ? 'selected ' : '';?>value="Onsite">On-site</option>
				<option <?=$userPref['emp_work'] == 'Office' ? 'selected ' : '';?>value="Office">Office</option>
				<option <?=$userPref['emp_work'] == 'AtHome' ? 'selected ' : '';?>value="AtHome">At Home</option>
				<option <?=$userPref['emp_work'] == 'OpenGroup' ? 'selected ' : '';?>value="OpenGroup">Open Group (Cubical, etc) </option>
				</select>
			</div>
			<div id="career-survey-question">
				Work Schedule:
				<select id="career-select" name="career_hours">
				<option <?=$userPref['emp_hours'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_hours'] == 'Flexible' ? 'selected ' : '';?>value="Flexible">Flexible</option>
				<option <?=$userPref['emp_hours'] == 'Consistent' ? 'selected ' : '';?>value="Consistent">Consistent (9-5 type)</option>
				<option <?=$userPref['emp_hours'] == 'Weekdays' ? 'selected ' : '';?>value="Weekdays">Weekdays Only</option>
				<option <?=$userPref['emp_hours'] == 'Weekends' ? 'selected ' : '';?>value="Weekends">Weekends Only</option>
				<option <?=$userPref['emp_hours'] == 'Evenings' ? 'selected ' : '';?>value="Evenings">Evenings</option>
				<option <?=$userPref['emp_hours'] == 'EveningsWeekends' ? 'selected ' : '';?>value="EveningsWeekends">Evenings & Weekends</option>
				<option <?=$userPref['emp_hours'] == 'Nights' ? 'selected ' : '';?>value="Nights">Nights</option>
				</select>
			</div>
			<div id="career-survey-question">
				Employment type: 
				<select id="career-select" name="career_type">
				<option <?=$userPref['emp_type'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_type'] == 'FullTime' ? 'selected ' : '';?>value="FullTime">Full Time</option>
				<option <?=$userPref['emp_type'] == 'PartTime' ? 'selected ' : '';?>value="PartTime">Part Time</option>
				<option <?=$userPref['emp_type'] == 'Temporary' ? 'selected ' : '';?>value="Temporary">Temporary</option>
				<option <?=$userPref['emp_type'] == 'Contractual' ? 'selected ' : '';?>value="Contractual">Contractual</option>
				<option <?=$userPref['emp_type'] == 'Student' ? 'selected ' : '';?>value="Student">Student</option>
				</select>
			</div>
			<div id="career-survey-question">
				Desired Benefits: 
				<select id="career-select" name="career_benefits">
				<option <?=$userPref['emp_benefits'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_benefits'] == 'Health' ? 'selected ' : '';?>value="Health">Health Benefits</option>
				<option <?=$userPref['emp_benefits'] == 'Dental' ? 'selected ' : '';?>value="Dental">Dental Benefits</option>
				<option <?=$userPref['emp_benefits'] == 'Insurance' ? 'selected ' : '';?>value="Insurance">Insurance</option>
				<option <?=$userPref['emp_benefits'] == 'HealthDental' ? 'selected ' : '';?>value="HealthDental">Health & Dental</option>
				<option <?=$userPref['emp_benefits'] == 'FullCoverage' ? 'selected ' : '';?>value="FullCoverage">Full Coverage</option>
				</select>
			</div>
			<div id="career-survey-question">
				Weekly Work Hours:
				<select id="career-select" name="career_workhours">
				<option <?=$userPref['emp_weeklyhours'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_weeklyhours'] == '0-20' ? 'selected ' : '';?>value="0-20">0-20</option>
				<option <?=$userPref['emp_weeklyhours'] == '20-40' ? 'selected ' : '';?>value="20-40">20-40</option>
				<option <?=$userPref['emp_weeklyhours'] == '40-60' ? 'selected ' : '';?>value="40-60">40-60</option>
				<option <?=$userPref['emp_weeklyhours'] == '60-80' ? 'selected ' : '';?>value="60-80">60-80</option>
				</select>
			</div>
			<div id="career-survey-question">
				Desired Yearly Income: 
				<select id="career-select" name="career_yearlyincome">
				<option <?=$userPref['emp_yearlyincome'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_yearlyincome'] == '0-20' ? 'selected ' : '';?>value="0-20">$0-$20k</option>
				<option <?=$userPref['emp_yearlyincome'] == '20-30' ? 'selected ' : '';?>value="20-30">$20k-$30k</option>
				<option <?=$userPref['emp_yearlyincome'] == '30-40' ? 'selected ' : '';?>value="30-40">$30k-$40k</option>
				<option <?=$userPref['emp_yearlyincome'] == '40-50' ? 'selected ' : '';?>value="40-50">$40k-$50k</option>
				<option <?=$userPref['emp_yearlyincome'] == '50-60' ? 'selected ' : '';?>value="50-60">$50k-$60k</option>
				<option <?=$userPref['emp_yearlyincome'] == '60-70' ? 'selected ' : '';?>value="60-70">$60k-$70k</option>
				<option <?=$userPref['emp_yearlyincome'] == '70-80' ? 'selected ' : '';?>value="70-80">$70k-$80k</option>
				<option <?=$userPref['emp_yearlyincome'] == '80-90' ? 'selected ' : '';?>value="80-90">$80k-$90k</option>
				<option <?=$userPref['emp_yearlyincome'] == '90-100' ? 'selected ' : '';?>value="90-100">$90k-$100k</option>
				<option <?=$userPref['emp_yearlyincome'] == '100' ? 'selected ' : '';?>value="100">$100k +</option>
				</select>
			</div>
		
		</div>
		<div id="career-survey-holder">
			
			<div id="career-survey-question">
				What's most important: 
				<select id="career-select" name="career_mostimportant">
				<option <?=$userPref['emp_important'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_important'] == 'Leadership' ? 'selected ' : '';?>value="Leadership">Good leadership</option>
				<option <?=$userPref['emp_important'] == 'Learning' ? 'selected ' : '';?>value="Learning">Learning something new</option>
				<option <?=$userPref['emp_important'] == 'Happy' ? 'selected ' : '';?>value="Happy">Doing what makes me happy</option>
				<option <?=$userPref['emp_important'] == 'GoodTeam' ? 'selected ' : '';?>value="GoodTeam">A good team of people</option>
				<option <?=$userPref['emp_important'] == 'ApplySkills' ? 'selected ' : '';?>value="ApplySkills">Applying my skills</option>
				</select>
			</div>
			<div id="career-survey-question">
				How do you learn best: 
				<select id="career-select" name="career_learn">
				<option <?=$userPref['emp_learn'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_learn'] == 'Visual' ? 'selected ' : '';?>value="Visual">Visual Learner</option>
				<option <?=$userPref['emp_learn'] == 'Auditory' ? 'selected ' : '';?>value="Auditory">Auditory Learner (Verbal Communication)</option>
				<option <?=$userPref['emp_learn'] == 'ReadWrite' ? 'selected ' : '';?>value="ReadWrite">Read-Write Learner</option>
				<option <?=$userPref['emp_learn'] == 'Kinesthetic' ? 'selected ' : '';?>value="Kinesthetic">Kinesthetic Learner (Hands-on)</option>
				<option <?=$userPref['emp_learn'] == 'Unsure' ? 'selected ' : '';?>value="Unsure">Unsure</option>
				</select>
			</div>
			<div id="career-survey-question">
				What do you want most:
				<select id="career-select" name="career_wantmost">
				<option <?=$userPref['emp_want'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_want'] == 'Purpose' ? 'selected ' : '';?>value="Purpose">Purpose at work</option>
				<option <?=$userPref['emp_want'] == 'Responsibility' ? 'selected ' : '';?>value="Responsibility">Responsibility</option>
				<option <?=$userPref['emp_want'] == 'Flexibility' ? 'selected ' : '';?>value="Flexibility">Flexibility</option>
				<option <?=$userPref['emp_want'] == 'Communication' ? 'selected ' : '';?>value="Communication">Communication & Appreciation</option>
				<option <?=$userPref['emp_want'] == 'Transparency' ? 'selected ' : '';?>value="Transparency">Transparency</option>
				<option <?=$userPref['emp_want'] == 'FairWage' ? 'selected ' : '';?>value="FairWage">Fair Compensation</option>
				<option <?=$userPref['emp_want'] == 'JobSecurity' ? 'selected ' : '';?>value="JobSecurity">Job Security</option>
				<option <?=$userPref['emp_want'] == 'CompetentManagers' ? 'selected ' : '';?>value="CompetentManagers">Competent Managers</option>
				<option <?=$userPref['emp_want'] == 'Opportunity' ? 'selected ' : '';?>value="Opportunity">Opportunity for Advancement</option>
				</select>
			</div>
			<div id="career-survey-question">
				I want a company: 
				<select id="career-select" name="career_prefercompany">
				<option <?=$userPref['emp_company'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_company'] == 'New' ? 'selected ' : '';?>value="New">with new approaches to success</option>
				<option <?=$userPref['emp_company'] == 'Traditional' ? 'selected ' : '';?>value="Traditional">with traditional approaches to success</option>
				</select>
			</div>
			<div id="career-survey-question">
				I want a position where: 
				<select id="career-select" name="career_positionwhere">
				<option <?=$userPref['emp_position'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_position'] == 'Leader' ? 'selected ' : '';?>value="Leader">I am a leader</option>
				<option <?=$userPref['emp_position'] == 'TeamPlayer' ? 'selected ' : '';?>value="TeamPlayer">I am a team player</option>
				<option <?=$userPref['emp_position'] == 'Independent' ? 'selected ' : '';?>value="Independent">I am an independent worker</option>
				</select>
			</div>
			<div id="career-survey-question">
				Preferred company type: 
				<select id="career-select" name="career_companytype">
				<option <?=$userPref['emp_ctype'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_ctype'] == 'StartUp' ? 'selected ' : '';?>value="StartUp">Start Up</option>
				<option <?=$userPref['emp_ctype'] == 'Small' ? 'selected ' : '';?>value="Small">Small Company</option>
				<option <?=$userPref['emp_ctype'] == 'Large' ? 'selected ' : '';?>value="Large">Large Corporation</option>
				<option <?=$userPref['emp_ctype'] == 'Franchise' ? 'selected ' : '';?>value="Franchise">Franchise Operation</option>
				<option <?=$userPref['emp_ctype'] == 'Any' ? 'selected ' : '';?>value="Any">Any</option>
				</select>
			</div>	
			<div id="career-survey-question">
				I want a manager that: 
				<select id="career-select" name="career_manager">
				<option <?=$userPref['emp_manager'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['emp_manager'] == 'Appreciates' ? 'selected ' : '';?>value="Appreciates">Appreciates me</option>
				<option <?=$userPref['emp_manager'] == 'Leads' ? 'selected ' : '';?>value="Leads">Leads me to success</option>
				<option <?=$userPref['emp_manager'] == 'Listens' ? 'selected ' : '';?>value="Listens">Listens to me</option>
				<option <?=$userPref['emp_manager'] == 'Teaches' ? 'selected ' : '';?>value="Teaches">Teaches me</option>
				<option <?=$userPref['emp_manager'] == 'Encourages' ? 'selected ' : '';?>value="Encourages">Encourages me</option>
				</select>
			</div>	
			
		</div>
	
	<div class="clear"></div>	
	</div>
	
	
	
	
	






<div id="career-box-holder"> <!-- Half -->
	<div id="career-title-half" class="career-title-half">
		Top Skills & Abilities
	</div>
	<div id="career-box-half" class="career-box-half">
		
		<div id="career-survey-question">
		<strong>#1. </strong>
		<input name="career_skill1" value="<?= $userPref['skills_1']; ?>" class="skill"  maxlength="45"/>
		</div>
		
		<div id="career-survey-question">
		<strong>#2. </strong>
		<input name="career_skill2" value="<?= $userPref['skills_2']; ?>" class="skill"  maxlength="45"/>
		</div>
		
		<div id="career-survey-question">
		<strong>#3. </strong>
		<input name="career_skill3" value="<?= $userPref['skills_3']; ?>" class="skill"  maxlength="45"/>
		</div>
		
		<div id="career-survey-question">
		<strong>#4. </strong>
		<input name="career_skill4" value="<?= $userPref['skills_4']; ?>" class="skill"  maxlength="45"/>
		</div>
		
		<div id="career-survey-question">
		<strong>#5. </strong>
		<input name="career_skill5" value="<?= $userPref['skills_5']; ?>" class="skill"  maxlength="45"/>
		</div>

	</div>
</div>


<div id="career-box-holder"><!-- Half -->
	<div id="career-title-half" class="career-title-half">
		A Summary About You
	</div>
	<div id="career-box-half" class="career-box-half">
		<div id="career-survey-question">
			<textarea name="career_summary" class="summary" maxlength="255"/><?=$userPref['summary'];?></textarea>
		</div>
	</div>
</div>


<div class="clear"></div>	









	
	

<div id="career-title" class="career-title">
Current Position
</div>
<div id="career-box" class="career-box">

	<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Position Details: </strong>
		</div>
		
		<div id="career-survey-question">
			Current Occupation: 
			<input name="career_cocc" value="<?= $userPref['ex_current_occupation']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Company Name: 
			<input name="career_ccomp" value="<?= $userPref['ex_current_companyname']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Employed here since: 
			<select id="career-select" name="career_csince">
				<option <?=$userPref['ex_current_year'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_current_year'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['ex_current_year'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['ex_current_year'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['ex_current_year'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['ex_current_year'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['ex_current_year'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['ex_current_year'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['ex_current_year'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['ex_current_year'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['ex_current_year'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['ex_current_year'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['ex_current_year'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['ex_current_year'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['ex_current_year'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['ex_current_year'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['ex_current_year'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['ex_current_year'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['ex_current_year'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['ex_current_year'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['ex_current_year'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['ex_current_year'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['ex_current_year'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['ex_current_year'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['ex_current_year'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['ex_current_year'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['ex_current_year'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['ex_current_year'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['ex_current_year'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['ex_current_year'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['ex_current_year'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['ex_current_year'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['ex_current_year'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['ex_current_year'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['ex_current_year'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['ex_current_year'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['ex_current_year'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['ex_current_year'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['ex_current_year'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['ex_current_year'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['ex_current_year'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['ex_current_year'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['ex_current_year'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['ex_current_year'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['ex_current_year'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['ex_current_year'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['ex_current_year'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['ex_current_year'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['ex_current_year'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['ex_current_year'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
			</select>
		</div>
		<div id="career-survey-question">
			Current Status: 
			<select id="career-select" name="career_cstatus">
				<option <?=$userPref['ex_current_status'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_current_status'] == 'FullTime' ? 'selected ' : '';?>value="FullTime">Full Time</option>
				<option <?=$userPref['ex_current_status'] == 'PartTime' ? 'selected ' : '';?>value="PartTime">Part Time</option>
				<option <?=$userPref['ex_current_status'] == 'Temporary' ? 'selected ' : '';?>value="Temporary">Temporary</option>
				<option <?=$userPref['ex_current_status'] == 'Contractual' ? 'selected ' : '';?>value="Contractual">Contractual</option>
				<option <?=$userPref['ex_current_status'] == 'Seasonal' ? 'selected ' : '';?>value="Seasonal">Seasonal</option>

			</select>
		</div>
	</div>
	
	<div id="career-survey-holder">
		<div id="career-survey-question">
			<strong>Description: </strong>
			<textarea name="career_cdesc" class="descriptions" maxlength="255"/><?=$userPref['ex_current_desc'];?></textarea>
		</div>
	</div>
	
<div class="clear"></div>
</div>











<div id="career-title" class="career-title">
	Experience Positions
</div>
<div id="career-box" class="career-box">

	<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Position Details: </strong>
		</div>
		<div id="career-survey-question">
			Current Occupation: 
			<input name="career_exocc1" value="<?= $userPref['ex_1_occupation']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Company Name: 
			<input name="career_excomp1" value="<?= $userPref['ex_1_companyname']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Employed here from: 
			<select id="career-select" name="career_exsince1">
				<option <?=$userPref['ex_1_yearfrom'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_1_yearfrom'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['ex_1_yearfrom'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['ex_1_yearfrom'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
			</select>
		</div>
		<div id="career-survey-question">
			Employed here to: 
			<select id="career-select" name="career_exstatus1">
				<option <?=$userPref['ex_1_yearto'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_1_yearto'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['ex_1_yearto'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['ex_1_yearto'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['ex_1_yearto'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['ex_1_yearto'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['ex_1_yearto'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['ex_1_yearto'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['ex_1_yearto'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['ex_1_yearto'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['ex_1_yearto'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['ex_1_yearto'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['ex_1_yearto'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['ex_1_yearto'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['ex_1_yearto'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['ex_1_yearto'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['ex_1_yearto'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['ex_1_yearto'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['ex_1_yearto'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['ex_1_yearto'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['ex_1_yearto'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['ex_1_yearto'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['ex_1_yearto'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['ex_1_yearto'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['ex_1_yearto'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['ex_1_yearto'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['ex_1_yearto'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['ex_1_yearto'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['ex_1_yearto'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['ex_1_yearto'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['ex_1_yearto'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['ex_1_yearto'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['ex_1_yearto'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['ex_1_yearto'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['ex_1_yearto'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['ex_1_yearto'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['ex_1_yearto'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['ex_1_yearto'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['ex_1_yearto'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['ex_1_yearto'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['ex_1_yearto'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['ex_1_yearto'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['ex_1_yearto'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['ex_1_yearto'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['ex_1_yearto'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['ex_1_yearto'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['ex_1_yearto'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['ex_1_yearto'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['ex_1_yearto'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['ex_1_yearto'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
			</select>
		</div>
		
		</div>
		<div id="career-survey-holder">
				<div id="career-survey-question">
					<strong>Description: </strong>
					<textarea name="career_exdesc1" class="descriptions" maxlength="255"/><?=$userPref['ex_1_desc'];?></textarea>
				</div>
		</div>

		<div class="clear"></div>



		<div id="career-survey-holder">	
			<div id="career-survey-question">
				<strong>Position Details: </strong>
			</div>
			<div id="career-survey-question">
				Current Occupation: 
				<input name="career_exocc2" value="<?= $userPref['ex_2_occupation']; ?>" class=""  maxlength="45"/>
			</div>
			<div id="career-survey-question">
				Company Name: 
				<input name="career_excomp2" value="<?= $userPref['ex_2_companyname']; ?>" class=""  maxlength="45"/>
			</div>
			<div id="career-survey-question">
				Employed here from: 
				<select id="career-select" name="career_exsince2">
				<option <?=$userPref['ex_2_yearfrom'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_2_yearfrom'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['ex_2_yearfrom'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['ex_2_yearfrom'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
				</select>
			</div>
			<div id="career-survey-question">
				Employed here to: 
				<select id="career-select" name="career_exstatus2">
				<option <?=$userPref['ex_2_yearto'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['ex_2_yearto'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['ex_2_yearto'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['ex_2_yearto'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['ex_2_yearto'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['ex_2_yearto'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['ex_2_yearto'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['ex_2_yearto'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['ex_2_yearto'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['ex_2_yearto'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['ex_2_yearto'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['ex_2_yearto'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['ex_2_yearto'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['ex_2_yearto'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['ex_2_yearto'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['ex_2_yearto'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['ex_2_yearto'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['ex_2_yearto'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['ex_2_yearto'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['ex_2_yearto'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['ex_2_yearto'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['ex_2_yearto'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['ex_2_yearto'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['ex_2_yearto'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['ex_2_yearto'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['ex_2_yearto'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['ex_2_yearto'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['ex_2_yearto'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['ex_2_yearto'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['ex_2_yearto'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['ex_2_yearto'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['ex_2_yearto'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['ex_2_yearto'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['ex_2_yearto'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['ex_2_yearto'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['ex_2_yearto'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['ex_2_yearto'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['ex_2_yearto'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['ex_2_yearto'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['ex_2_yearto'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['ex_2_yearto'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['ex_2_yearto'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['ex_2_yearto'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['ex_2_yearto'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['ex_2_yearto'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['ex_2_yearto'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['ex_2_yearto'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['ex_2_yearto'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['ex_2_yearto'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['ex_2_yearto'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
				</select>
			</div>
		
		</div>
		<div id="career-survey-holder">
			<div id="career-survey-question">
				<strong>Description: </strong>
				<textarea name="career_exdesc2" class="descriptions" maxlength="255"/><?=$userPref['ex_2_desc'];?></textarea>
			</div>
		</div>

<div class="clear"></div>
</div>













<div id="career-title" class="career-title">
	Education
</div>
<div id="career-box" class="career-box">

	<div id="career-survey-holder">
		<div id="career-survey-question">
			<strong>Primary: </strong>
		</div>
		<div id="career-survey-question">
			School: 
			<input name="career_edp_school" value="<?= $userPref['ed_p_school']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Degree: 
			<select id="career-select" name="career_edp_degree">
			<option <?=$userPref['ed_p_degree'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_p_degree'] == 'GRADE' ? 'selected ' : '';?>value="GRADE">Grade/High School</option>
			<option <?=$userPref['ed_p_degree'] == 'GED' ? 'selected ' : '';?>value="GED">GED</option>
			<option <?=$userPref['ed_p_degree'] == 'COLUNI' ? 'selected ' : '';?>value="COLUNI">College or University</option>
			<option <?=$userPref['ed_p_degree'] == 'CERT' ? 'selected ' : '';?>value="CERT">Certificate(s)</option>
			<option <?=$userPref['ed_p_degree'] == 'DIPLOMA' ? 'selected ' : '';?>value="DIPLOMA">Diploma</option>
			<option <?=$userPref['ed_p_degree'] == 'ASSOCIATE' ? 'selected ' : '';?>value="ASSOCIATE">Associate Degree</option>
			<option <?=$userPref['ed_p_degree'] == 'BACHELORS' ? 'selected ' : '';?>value="BACHELORS">Bachelor's Degree</option>
			<option <?=$userPref['ed_p_degree'] == 'MASTERS' ? 'selected ' : '';?>value="MASTERS">Master's Degree</option>
			<option <?=$userPref['ed_p_degree'] == 'DOCTORS' ? 'selected ' : '';?>value="DOCTORS">Doctoral Degree</option>
			<option <?=$userPref['ed_p_degree'] == 'OTHER' ? 'selected ' : '';?>value="OTHER">Other</option>
			</select>
		</div>
		<div id="career-survey-question">
			Study: 
			<input name="career_edp_study" value="<?= $userPref['ed_p_study']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Years at Institute: 
			<select id="career-select" name="career_edp_years">
			<option <?=$userPref['ed_p_years'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_p_years'] == 'Under1' ? 'selected ' : '';?>value="Under1">Under 1 year</option>
			<option <?=$userPref['ed_p_years'] == '1' ? 'selected ' : '';?>value="1">1</option>
			<option <?=$userPref['ed_p_years'] == '2' ? 'selected ' : '';?>value="2">2</option>
			<option <?=$userPref['ed_p_years'] == '3' ? 'selected ' : '';?>value="3">3</option>
			<option <?=$userPref['ed_p_years'] == '4' ? 'selected ' : '';?>value="4">4</option>
			<option <?=$userPref['ed_p_years'] == '5' ? 'selected ' : '';?>value="5">5</option>
			<option <?=$userPref['ed_p_years'] == '6' ? 'selected ' : '';?>value="6">6</option>
			<option <?=$userPref['ed_p_years'] == '7' ? 'selected ' : '';?>value="7">7</option>
			<option <?=$userPref['ed_p_years'] == '8' ? 'selected ' : '';?>value="8">8</option>
			<option <?=$userPref['ed_p_years'] == '9' ? 'selected ' : '';?>value="9">9</option>
			<option <?=$userPref['ed_p_years'] == '10' ? 'selected ' : '';?>value="10">10</option>
			<option <?=$userPref['ed_p_years'] == '11' ? 'selected ' : '';?>value="11">11</option>
			<option <?=$userPref['ed_p_years'] == '12' ? 'selected ' : '';?>value="12">12+</option>
			</select>
		</div>
		<div id="career-survey-question">
			Current Status: 
			<select id="career-select" name="career_edp_status">
			<option <?=$userPref['ed_p_status'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_p_status'] == 'CurrentlyAttending' ? 'selected ' : '';?>value="CurrentlyAttending">Currently Attending</option>
			<option <?=$userPref['ed_p_status'] == 'Graduated' ? 'selected ' : '';?>value="Graduated">Graduated</option>
			<option <?=$userPref['ed_p_status'] == 'Partial' ? 'selected ' : '';?>value="Partial">Partial</option>
			</select>
		</div>
	</div>

	<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Secondary: </strong>
		</div>
		
		<div id="career-survey-question">
			School: 
			<input name="career_eds_school" value="<?= $userPref['ed_s_school']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Degree: 
			<select id="career-select" name="career_eds_degree">
			<option <?=$userPref['ed_s_degree'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_s_degree'] == 'GRADE' ? 'selected ' : '';?>value="GRADE">Grade/High School</option>
			<option <?=$userPref['ed_s_degree'] == 'GED' ? 'selected ' : '';?>value="GED">GED</option>
			<option <?=$userPref['ed_s_degree'] == 'COLUNI' ? 'selected ' : '';?>value="COLUNI">College or University</option>
			<option <?=$userPref['ed_s_degree'] == 'CERT' ? 'selected ' : '';?>value="CERT">Certificate(s)</option>
			<option <?=$userPref['ed_s_degree'] == 'DIPLOMA' ? 'selected ' : '';?>value="DIPLOMA">Diploma</option>
			<option <?=$userPref['ed_s_degree'] == 'ASSOCIATE' ? 'selected ' : '';?>value="ASSOCIATE">Associate Degree</option>
			<option <?=$userPref['ed_s_degree'] == 'BACHELORS' ? 'selected ' : '';?>value="BACHELORS">Bachelor's Degree</option>
			<option <?=$userPref['ed_s_degree'] == 'MASTERS' ? 'selected ' : '';?>value="MASTERS">Master's Degree</option>
			<option <?=$userPref['ed_s_degree'] == 'DOCTORS' ? 'selected ' : '';?>value="DOCTORS">Doctoral Degree</option>
			<option <?=$userPref['ed_s_degree'] == 'OTHER' ? 'selected ' : '';?>value="OTHER">Other</option>
			</select>
		</div>
		<div id="career-survey-question">
			Study: 
			<input name="career_eds_study" value="<?= $userPref['ed_s_study']; ?>" class=""  maxlength="45"/>
		</div>
		<div id="career-survey-question">
			Years at Institute: 
			<select id="career-select" name="career_eds_years">
			<option <?=$userPref['ed_s_years'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_s_years'] == 'Under1' ? 'selected ' : '';?>value="Under1">Under 1 year</option>
			<option <?=$userPref['ed_s_years'] == '1' ? 'selected ' : '';?>value="1">1</option>
			<option <?=$userPref['ed_s_years'] == '2' ? 'selected ' : '';?>value="2">2</option>
			<option <?=$userPref['ed_s_years'] == '3' ? 'selected ' : '';?>value="3">3</option>
			<option <?=$userPref['ed_s_years'] == '4' ? 'selected ' : '';?>value="4">4</option>
			<option <?=$userPref['ed_s_years'] == '5' ? 'selected ' : '';?>value="5">5</option>
			<option <?=$userPref['ed_s_years'] == '6' ? 'selected ' : '';?>value="6">6</option>
			<option <?=$userPref['ed_s_years'] == '7' ? 'selected ' : '';?>value="7">7</option>
			<option <?=$userPref['ed_s_years'] == '8' ? 'selected ' : '';?>value="8">8</option>
			<option <?=$userPref['ed_s_years'] == '9' ? 'selected ' : '';?>value="9">9</option>
			<option <?=$userPref['ed_s_years'] == '10' ? 'selected ' : '';?>value="10">10</option>
			<option <?=$userPref['ed_s_years'] == '11' ? 'selected ' : '';?>value="11">11</option>
			<option <?=$userPref['ed_s_years'] == '12' ? 'selected ' : '';?>value="12">12+</option>
			</select>
		</div>
		<div id="career-survey-question">
			Current Status: 
			<select id="career-select" name="career_edps_status">
			<option <?=$userPref['ed_s_status'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
			<option <?=$userPref['ed_s_status'] == 'CurrentlyAttending' ? 'selected ' : '';?>value="CurrentlyAttending">Currently Attending</option>
			<option <?=$userPref['ed_s_status'] == 'Graduated' ? 'selected ' : '';?>value="Graduated">Graduated</option>
			<option <?=$userPref['ed_s_status'] == 'Partial' ? 'selected ' : '';?>value="Partial">Partial</option>
			</select>
		</div>
	</div>
	
	
<div class="clear"></div>
</div>


	<div id="career-title" class="career-title">
		Notable Accomplishments
	</div>
	<div id="career-box" class="career-box">
		<div id="career-survey-question">
				
				<input name="career_award1_name" value="<?= $userPref['acc_1_name']; ?>" class="award"  maxlength="45"/>
	
				<select id="career-select" name="career_award1_type" class="award-info">
				<option <?=$userPref['acc_1_type'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_1_type'] == 'Scholarship' ? 'selected ' : '';?>value="Scholarship">Scholarship</option>
				<option <?=$userPref['acc_1_type'] == 'Bursary' ? 'selected ' : '';?>value="Bursary">Bursary</option>
				<option <?=$userPref['acc_1_type'] == 'Award' ? 'selected ' : '';?>value="Award">Award</option>
				<option <?=$userPref['acc_1_type'] == 'Certificate' ? 'selected ' : '';?>value="Certificate">Certificate</option>
				<option <?=$userPref['acc_1_type'] == 'Grant' ? 'selected ' : '';?>value="Grant">Grant</option>
				<option <?=$userPref['acc_1_type'] == 'Fellowship' ? 'selected ' : '';?>value="Fellowship">Fellowship</option>
				<option <?=$userPref['acc_1_type'] == 'Volunteer' ? 'selected ' : '';?>value="Volunteer">Volunteer</option>
				</select>
				
				<select id="career-select" name="career_award1_year" class="award-info">
				<option <?=$userPref['acc_1_year'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_1_year'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['acc_1_year'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['acc_1_year'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['acc_1_year'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['acc_1_year'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['acc_1_year'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['acc_1_year'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['acc_1_year'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['acc_1_year'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['acc_1_year'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['acc_1_year'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['acc_1_year'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['acc_1_year'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['acc_1_year'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['acc_1_year'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['acc_1_year'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['acc_1_year'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['acc_1_year'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['acc_1_year'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['acc_1_year'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['acc_1_year'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['acc_1_year'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['acc_1_year'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['acc_1_year'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['acc_1_year'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['acc_1_year'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['acc_1_year'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['acc_1_year'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['acc_1_year'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['acc_1_year'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['acc_1_year'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['acc_1_year'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['acc_1_year'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['acc_1_year'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['acc_1_year'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['acc_1_year'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['acc_1_year'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['acc_1_year'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['acc_1_year'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['acc_1_year'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['acc_1_year'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['acc_1_year'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['acc_1_year'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['acc_1_year'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['acc_1_year'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['acc_1_year'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['acc_1_year'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['acc_1_year'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['acc_1_year'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
				</select>
		</div>
		<div id="career-survey-question">
				<input name="career_award2_name" value="<?= $userPref['acc_2_name']; ?>" class="award"  maxlength="45"/>
	
				<select id="career-select" name="career_award2_type" class="award-info">
				<option <?=$userPref['acc_2_type'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_2_type'] == 'Scholarship' ? 'selected ' : '';?>value="Scholarship">Scholarship</option>
				<option <?=$userPref['acc_2_type'] == 'Bursary' ? 'selected ' : '';?>value="Bursary">Bursary</option>
				<option <?=$userPref['acc_2_type'] == 'Award' ? 'selected ' : '';?>value="Award">Award</option>
				<option <?=$userPref['acc_2_type'] == 'Certificate' ? 'selected ' : '';?>value="Certificate">Certificate</option>
				<option <?=$userPref['acc_2_type'] == 'Grant' ? 'selected ' : '';?>value="Grant">Grant</option>
				<option <?=$userPref['acc_2_type'] == 'Fellowship' ? 'selected ' : '';?>value="Fellowship">Fellowship</option>
				<option <?=$userPref['acc_2_type'] == 'Volunteer' ? 'selected ' : '';?>value="Volunteer">Volunteer</option>
				</select>
				
				<select id="career-select" name="career_award2_year" class="award-info">
				<option <?=$userPref['acc_2_year'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_2_year'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['acc_2_year'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['acc_2_year'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['acc_2_year'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['acc_2_year'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['acc_2_year'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['acc_2_year'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['acc_2_year'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['acc_2_year'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['acc_2_year'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['acc_2_year'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['acc_2_year'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['acc_2_year'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['acc_2_year'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['acc_2_year'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['acc_2_year'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['acc_2_year'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['acc_2_year'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['acc_2_year'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['acc_2_year'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['acc_2_year'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['acc_2_year'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['acc_2_year'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['acc_2_year'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['acc_2_year'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['acc_2_year'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['acc_2_year'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['acc_2_year'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['acc_2_year'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['acc_2_year'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['acc_2_year'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['acc_2_year'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['acc_2_year'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['acc_2_year'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['acc_2_year'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['acc_2_year'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['acc_2_year'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['acc_2_year'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['acc_2_year'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['acc_2_year'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['acc_2_year'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['acc_2_year'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['acc_2_year'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['acc_2_year'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['acc_2_year'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['acc_2_year'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['acc_2_year'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['acc_2_year'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['acc_2_year'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
				</select>
		</div>
		<div id="career-survey-question">
				<input name="career_award3_name" value="<?= $userPref['acc_3_name']; ?>" class="award"  maxlength="45"/>
	
				<select id="career-select" name="career_award3_type" class="award-info">
				<option <?=$userPref['acc_3_type'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_3_type'] == 'Scholarship' ? 'selected ' : '';?>value="Scholarship">Scholarship</option>
				<option <?=$userPref['acc_3_type'] == 'Bursary' ? 'selected ' : '';?>value="Bursary">Bursary</option>
				<option <?=$userPref['acc_3_type'] == 'Award' ? 'selected ' : '';?>value="Award">Award</option>
				<option <?=$userPref['acc_3_type'] == 'Certificate' ? 'selected ' : '';?>value="Certificate">Certificate</option>
				<option <?=$userPref['acc_3_type'] == 'Grant' ? 'selected ' : '';?>value="Grant">Grant</option>
				<option <?=$userPref['acc_3_type'] == 'Fellowship' ? 'selected ' : '';?>value="Fellowship">Fellowship</option>
				<option <?=$userPref['acc_3_type'] == 'Volunteer' ? 'selected ' : '';?>value="Volunteer">Volunteer</option>
				</select>
				
				<select id="career-select" name="career_award3_year" class="award-info">
				<option <?=$userPref['acc_3_year'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
				<option <?=$userPref['acc_3_year'] == '2018' ? 'selected ' : '';?>value="2018">2018</option>
				<option <?=$userPref['acc_3_year'] == '2017' ? 'selected ' : '';?>value="2017">2017</option>
				<option <?=$userPref['acc_3_year'] == '2016' ? 'selected ' : '';?>value="2016">2016</option>
				<option <?=$userPref['acc_3_year'] == '2015' ? 'selected ' : '';?>value="2015">2015</option>
				<option <?=$userPref['acc_3_year'] == '2014' ? 'selected ' : '';?>value="2014">2014</option>
				<option <?=$userPref['acc_3_year'] == '2013' ? 'selected ' : '';?>value="2013">2013</option>
				<option <?=$userPref['acc_3_year'] == '2012' ? 'selected ' : '';?>value="2012">2012</option>
				<option <?=$userPref['acc_3_year'] == '2011' ? 'selected ' : '';?>value="2011">2011</option>
				<option <?=$userPref['acc_3_year'] == '2010' ? 'selected ' : '';?>value="2010">2010</option>
				<option <?=$userPref['acc_3_year'] == '2009' ? 'selected ' : '';?>value="2009">2009</option>
				<option <?=$userPref['acc_3_year'] == '2008' ? 'selected ' : '';?>value="2008">2008</option>
				<option <?=$userPref['acc_3_year'] == '2007' ? 'selected ' : '';?>value="2007">2007</option>
				<option <?=$userPref['acc_3_year'] == '2006' ? 'selected ' : '';?>value="2006">2006</option>
				<option <?=$userPref['acc_3_year'] == '2005' ? 'selected ' : '';?>value="2005">2005</option>
				<option <?=$userPref['acc_3_year'] == '2004' ? 'selected ' : '';?>value="2004">2004</option>
				<option <?=$userPref['acc_3_year'] == '2003' ? 'selected ' : '';?>value="2003">2003</option>
				<option <?=$userPref['acc_3_year'] == '2002' ? 'selected ' : '';?>value="2002">2002</option>
				<option <?=$userPref['acc_3_year'] == '2001' ? 'selected ' : '';?>value="2001">2001</option>
				<option <?=$userPref['acc_3_year'] == '2000' ? 'selected ' : '';?>value="2000">2000</option>
				<option <?=$userPref['acc_3_year'] == '1999' ? 'selected ' : '';?>value="1999">1999</option>
				<option <?=$userPref['acc_3_year'] == '1998' ? 'selected ' : '';?>value="1998">1998</option>
				<option <?=$userPref['acc_3_year'] == '1997' ? 'selected ' : '';?>value="1997">1997</option>
				<option <?=$userPref['acc_3_year'] == '1996' ? 'selected ' : '';?>value="1996">1996</option>
				<option <?=$userPref['acc_3_year'] == '1995' ? 'selected ' : '';?>value="1995">1995</option>
				<option <?=$userPref['acc_3_year'] == '1994' ? 'selected ' : '';?>value="1994">1994</option>
				<option <?=$userPref['acc_3_year'] == '1993' ? 'selected ' : '';?>value="1993">1993</option>
				<option <?=$userPref['acc_3_year'] == '1992' ? 'selected ' : '';?>value="1992">1992</option>
				<option <?=$userPref['acc_3_year'] == '1991' ? 'selected ' : '';?>value="1991">1991</option>
				<option <?=$userPref['acc_3_year'] == '1990' ? 'selected ' : '';?>value="1990">1990</option>
				<option <?=$userPref['acc_3_year'] == '1989' ? 'selected ' : '';?>value="1989">1989</option>
				<option <?=$userPref['acc_3_year'] == '1988' ? 'selected ' : '';?>value="1988">1988</option>
				<option <?=$userPref['acc_3_year'] == '1987' ? 'selected ' : '';?>value="1987">1987</option>
				<option <?=$userPref['acc_3_year'] == '1986' ? 'selected ' : '';?>value="1986">1986</option>
				<option <?=$userPref['acc_3_year'] == '1985' ? 'selected ' : '';?>value="1985">1985</option>
				<option <?=$userPref['acc_3_year'] == '1984' ? 'selected ' : '';?>value="1984">1984</option>
				<option <?=$userPref['acc_3_year'] == '1983' ? 'selected ' : '';?>value="1983">1983</option>
				<option <?=$userPref['acc_3_year'] == '1982' ? 'selected ' : '';?>value="1982">1982</option>
				<option <?=$userPref['acc_3_year'] == '1981' ? 'selected ' : '';?>value="1981">1981</option>
				<option <?=$userPref['acc_3_year'] == '1980' ? 'selected ' : '';?>value="1980">1980</option>
				<option <?=$userPref['acc_3_year'] == '1979' ? 'selected ' : '';?>value="1979">1979</option>
				<option <?=$userPref['acc_3_year'] == '1978' ? 'selected ' : '';?>value="1978">1978</option>
				<option <?=$userPref['acc_3_year'] == '1977' ? 'selected ' : '';?>value="1977">1977</option>
				<option <?=$userPref['acc_3_year'] == '1976' ? 'selected ' : '';?>value="1976">1976</option>
				<option <?=$userPref['acc_3_year'] == '1975' ? 'selected ' : '';?>value="1975">1975</option>
				<option <?=$userPref['acc_3_year'] == '1974' ? 'selected ' : '';?>value="1974">1974</option>
				<option <?=$userPref['acc_3_year'] == '1973' ? 'selected ' : '';?>value="1973">1973</option>
				<option <?=$userPref['acc_3_year'] == '1972' ? 'selected ' : '';?>value="1972">1972</option>
				<option <?=$userPref['acc_3_year'] == '1971' ? 'selected ' : '';?>value="1971">1971</option>
				<option <?=$userPref['acc_3_year'] == '1970' ? 'selected ' : '';?>value="1970">1970</option>
				</select>
		</div>
	
<div class="clear"></div>	
</div>









	<div id="career-title" class="career-title">
		Resume Preferences
	</div>
	<div id="career-box" class="career-box">
			
				<input name="allow_resume_download" value="<?= $userPref['city']; ?>" class="award" type="checkbox"/> I want to allow employers to download my resume.<br>
				<input name="allow_pref_views" value="<?= $userPref['city']; ?>" class="award" type="checkbox"/> I want to allow employers to view my preferences when viewing my resume
how do you want to be matched with others: match people with same desired position, match with people who work for these companies.
		
			
<div class="clear"></div>	
</div>
	

<button type="submit" name="btn-career-save" class="save-career" id="save-career" <?=$saved == 'savesuccess' ? ' disabled ' : '';?>>Save</button>
<div class="clear"></div>
</form>	




<div id="career-note" class="career-note">
We don't believe in references. You decide who you are.

</div>

<script src="assets/js/countrycodes.js"></script>
        <script language="javascript">
            
var rotator = function(){
  setTimeout(rotator,5000);
  document.getElementById('save-career').removeAttribute('disabled');
  };

 setTimeout(rotator,5000);
   
            populateCountries("country", "state", "<?php echo $userPref['e_country']; ?>");
        </script>
</body>
</html>