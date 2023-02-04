<?php
/* user */
include_once 'back/db-user.php';
/* goals */
include_once 'back/db-love.php';
/* post */
include 'front/post-love.php';
/* css */
$page = 'love';
?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    


<form method="post" id="love-profile-form">
	 	
<div id="love-box-holder">
<div id="love-title-top-left" class="love-title-top-left">
Your Romantic Profile
</div>
<div id="love-box-top-left" class="love-box-top-left">
	
<?php 	$userPref['age'];
?>
<div id="love-survey-question">
Display age as:
<select id="love-select" name="love_age">
	<option value="<?= USER_AGE; ?>"><?= USER_AGE; ?></option>
	<option <?=$userPref['age'] == 'LateTeens' ? 'selected ' : '';?>value="LateTeens">Late Teens</option>
	<option <?=$userPref['age'] == 'Early 20s' ? 'selected ' : '';?>value="Early 20s">Early 20s</option>
	<option <?=$userPref['age'] == 'Late 20s' ? 'selected ' : '';?>value="Late 20s">Late 20s</option>
	<option <?=$userPref['age'] == 'Early 30s' ? 'selected ' : '';?>value="Early 30s">Early 30s</option>
	<option <?=$userPref['age'] == '30s' ? 'selected ' : '';?>value="30s">30s</option>
	<option <?=$userPref['age'] == '40s' ? 'selected ' : '';?>value="40s">40s</option>
	<option <?=$userPref['age'] == '50s' ? 'selected ' : '';?>value="50s">50s</option>
	<option <?=$userPref['age'] == '60s' ? 'selected ' : '';?>value="60s">60s</option>
	<option <?=$userPref['age'] == 'MiddleAge' ? 'selected ' : '';?>value="MiddleAge">Middle Age</option>
	<option <?=$userPref['age'] == 'LateAdult' ? 'selected ' : '';?>value="LateAdult">Late Adult</option>
	<option <?=$userPref['age'] == 'Senior' ? 'selected ' : '';?>value="Senior">Senior</option>

</select>
</div>

<div id="love-survey-question">
Country:
<select id="country" name="love_country" class="love-select"><option value="<?= $userPref['country']; ?>"><?= $userPref['country']; ?></option></select>
</div>

<div id="love-survey-question">
State/Province:
<select name="love_province" id="state" class="love-select"><option value="<?= $userPref['province']; ?>"><?= $userPref['province']; ?></option></select>
</div>

 <div id="love-survey-question">
City:  
<input name="love_city" value="<?= $userPref['city']; ?>" class=""  maxlength="45"/>
</div>


<div id="love-survey-question">
Your Gender: 
<select id="love-select" name="love_gender">
	<option <?=$userPref['gender'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['gender'] == 'Female' ? 'selected ' : '';?>value="Female">Female</option>
	<option <?=$userPref['gender'] == 'Male' ? 'selected ' : '';?>value="Male">Male</option>
	<option <?=$userPref['gender'] == 'Bigender' ? 'selected ' : '';?>value="Bigender">Bigender</option>
	<option <?=$userPref['gender'] == 'Transgender' ? 'selected ' : '';?>value="Transgender">Transgender</option>
</select>
</div>

<div id="love-survey-question">
Preferred Partner Gender: 
<select id="love-select" name="love_ppg">
	<option <?=$userPref['partner_gender'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['partner_gender'] == 'Female' ? 'selected ' : '';?>value="Female">Female</option>
	<option <?=$userPref['partner_gender'] == 'Male' ? 'selected ' : '';?>value="Male">Male</option>
	<option <?=$userPref['partner_gender'] == 'Bigender' ? 'selected ' : '';?>value="Bigender">Bigender</option>
	<option <?=$userPref['partner_gender'] == 'Transgender' ? 'selected ' : '';?>value="Transgender">Transgender</option>
	<option <?=$userPref['partner_gender'] == 'Any' ? 'selected ' : '';?>value="Any">Any</option>
</select>
</div>

<div id="love-survey-question">
Do you have kids?: 
<select id="love-select" name="love_havekids">
	<option <?=$userPref['have_kids'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['have_kids'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['have_kids'] == '1' ? 'selected ' : '';?>value="1">1</option>
	<option <?=$userPref['have_kids'] == '2' ? 'selected ' : '';?>value="2">2</option>
	<option <?=$userPref['have_kids'] == '3' ? 'selected ' : '';?>value="3">3</option>
	<option <?=$userPref['have_kids'] == '4' ? 'selected ' : '';?>value="4">4</option>
	<option <?=$userPref['have_kids'] == '5' ? 'selected ' : '';?>value="5">5</option>
	<option <?=$userPref['have_kids'] == '6' ? 'selected ' : '';?>value="6">6+</option>
</select>
</div>


<div id="love-survey-question">
Job/Career Title: <input name="love_jobtitle" class="" maxlength="45" value="<?= $userPref['job_title']; ?>"/>
</div>

<div id="love-survey-question">
What are you looking for?: 
<select id="love-select" name="love_lookingfor">
	<option <?=$userPref['looking_for'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['looking_for'] == 'Fun' ? 'selected ' : '';?>value="Fun">Just some fun</option>
	<option <?=$userPref['looking_for'] == 'NoCommitment' ? 'selected ' : '';?>value="NoCommitment">No Commitment</option>
	<option <?=$userPref['looking_for'] == 'Monogamy' ? 'selected ' : '';?>value="Monogamy">Monogamy (Committed Relationship)</option>
	<option <?=$userPref['looking_for'] == 'LongTerm' ? 'selected ' : '';?>value="LongTerm">Long Term Partner</option>
	<option <?=$userPref['looking_for'] == 'Friendship' ? 'selected ' : '';?>value="Friendship">Friendship</option>
	<option <?=$userPref['looking_for'] == 'Open' ? 'selected ' : '';?>value="Open">Open Relationship</option>
	<option <?=$userPref['looking_for'] == 'Connections' ? 'selected ' : '';?>value="Connections">Connections</option>
	<option <?=$userPref['looking_for'] == 'WPF' ? 'selected ' : '';?>value="WPF">White Picket Fence (Marriage, Kids, House etc)</option>
</select>
</div>

<div id="love-survey-question">
Your sexual orientation: 
<select id="love-select" name="love_sexori">
	<option <?=$userPref['orientation'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['orientation'] == 'Straight' ? 'selected ' : '';?>value="Straight">Straight</option>
	<option <?=$userPref['orientation'] == 'Gay' ? 'selected ' : '';?>value="Gay">Gay</option>
	<option <?=$userPref['orientation'] == 'Lesbian' ? 'selected ' : '';?>value="Lesbian">Lesbian</option>
	<option <?=$userPref['orientation'] == 'Bisexual' ? 'selected ' : '';?>value="Bisexual">Bisexual</option>
	<option <?=$userPref['orientation'] == 'ASexual' ? 'selected ' : '';?>value="ASexual">ASexual</option>
	<option <?=$userPref['orientation'] == 'Unsure' ? 'selected ' : '';?>value="Unsure">Unsure</option>
</select>
</div>


<div id="love-survey-question">
How serious are you about Love?: 
<select id="love-select" name="love_seriouslove">
	<option <?=$userPref['serious_love'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['serious_love'] == 'VerySerious' ? 'selected ' : '';?>value="VerySerious">Very Serious</option>
	<option <?=$userPref['serious_love'] == 'PrettySerious' ? 'selected ' : '';?>value="PrettySerious">Pretty Serious</option>
	<option <?=$userPref['serious_love'] == 'NotThatSerious' ? 'selected ' : '';?>value="NotThatSerious">Not That Serious</option>
	<option <?=$userPref['serious_love'] == 'NotAtAll' ? 'selected ' : '';?>value="NotAtAll">Not at all serious</option>
	<option <?=$userPref['serious_love'] == 'DontCare' ? 'selected ' : '';?>value="DontCare">Don't Care</option>
</select>
</div>

<div id="love-survey-question">
Your current relationship status:
<select id="love-select" name="love_current">
	<option <?=$userPref['current'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['current'] == 'Friendship' ? 'selected ' : '';?>value="Friendship">Friendship</option>
	<option <?=$userPref['current'] == 'Single' ? 'selected ' : '';?>value="Single">Single</option>
	<option <?=$userPref['current'] == 'Dating' ? 'selected ' : '';?>value="Dating">Dating</option>
	<option <?=$userPref['current'] == 'Relationship' ? 'selected ' : '';?>value="Relationship">Relationship</option>
	<option <?=$userPref['current'] == 'Married' ? 'selected ' : '';?>value="Married">Married</option>
	<option <?=$userPref['current'] == 'Divorced' ? 'selected ' : '';?>value="Divorced">Divorced</option>
	<option <?=$userPref['current'] == 'Widowed' ? 'selected ' : '';?>value="Widowed">Widowed</option>
	<option <?=$userPref['current'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>
</select>
</div>





</div>
</div>
	
	
	
	
<div id="love-box-holder">
<div id="love-title-top-right" class="love-title-top-right">
Connect
</div>
<div id="love-box-top-right" class="love-box-top-right">
	Views<br>
	Matches<br>
	Messages<br>
	Favorites<br>
	<br>
	Hide Me<br>
<!--
Send message
show interest
-->
<!--
% Match<br><br>
Message<br><br>
Wave?<br><br>
Add to Favs?<br><br>
Block
-->
<!--
Edit<br><br>
Message<br><br>
Waves<br><br>
Favorites<br><br>
-->

</h1></h1></h1></h1>
</div>
</div>

	<div class="clear"></div>
	
	
	<div id="love-title" class="love-title">
		Your Personal Style
	</div>
	<div id="love-box" class="love-box">
		

<div id="love-survey-holder">	
	
	


<div id="love-survey-question">
Favorite movie genre: 
<select id="love-select" name="love_movie">
	<option <?=$userPref['movie_genre'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['movie_genre'] == 'Action' ? 'selected ' : '';?>value="Action">Action</option>
	<option <?=$userPref['movie_genre'] == 'Adventure' ? 'selected ' : '';?>value="Adventure">Adventure</option>
	<option <?=$userPref['movie_genre'] == 'Animation' ? 'selected ' : '';?>value="Animation">Animation</option>
	<option <?=$userPref['movie_genre'] == 'Biography' ? 'selected ' : '';?>value="Biography">Biography</option>
	<option <?=$userPref['movie_genre'] == 'Comedy' ? 'selected ' : '';?>value="Comedy">Comedy</option>
	<option <?=$userPref['movie_genre'] == 'Crime' ? 'selected ' : '';?>value="Crime">Crime</option>
	<option <?=$userPref['movie_genre'] == 'Documentary' ? 'selected ' : '';?>value="Documentary">Documentary</option>
	<option <?=$userPref['movie_genre'] == 'Drama' ? 'selected ' : '';?>value="Drama">Drama</option>
	<option <?=$userPref['movie_genre'] == 'Family' ? 'selected ' : '';?>value="Family">Family</option>
	<option <?=$userPref['movie_genre'] == 'History' ? 'selected ' : '';?>value="History">History</option>
	<option <?=$userPref['movie_genre'] == 'Independent' ? 'selected ' : '';?>value="Independent">Independent</option>
	<option <?=$userPref['movie_genre'] == 'Horror' ? 'selected ' : '';?>value="Horror">Horror</option>
	<option <?=$userPref['movie_genre'] == 'Musical' ? 'selected ' : '';?>value="Musical">Musical</option>
	<option <?=$userPref['movie_genre'] == 'Mystery' ? 'selected ' : '';?>value="Mystery">Mystery</option>
	<option <?=$userPref['movie_genre'] == 'Romance' ? 'selected ' : '';?>value="Romance">Romance</option>
	<option <?=$userPref['movie_genre'] == 'SciFi' ? 'selected ' : '';?>value="SciFi">Sci-Fi</option>
	<option <?=$userPref['movie_genre'] == 'Sport' ? 'selected ' : '';?>value="Sport">Sport</option>
	<option <?=$userPref['movie_genre'] == 'Thriller' ? 'selected ' : '';?>value="Thriller">Thriller</option>
	<option <?=$userPref['movie_genre'] == 'War' ? 'selected ' : '';?>value="War">War</option>
	<option <?=$userPref['movie_genre'] == 'Western' ? 'selected ' : '';?>value="Western">Western</option>
</select>
</div>

<div id="love-survey-question">
Favorite music genre: 
<select id="love-select" name="love_music">
	<option <?=$userPref['music_genre'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['music_genre'] == 'Blues' ? 'selected ' : '';?>value="Blues">Blues</option>
	<option <?=$userPref['music_genre'] == 'Caribbean' ? 'selected ' : '';?>value="Caribbean">Caribbean</option>
	<option <?=$userPref['music_genre'] == 'Comedy' ? 'selected ' : '';?>value="Comedy">Comedy</option>
	<option <?=$userPref['music_genre'] == 'Country' ? 'selected ' : '';?>value="Country">Country</option>
	<option <?=$userPref['music_genre'] == 'Folk' ? 'selected ' : '';?>value="Folk">Folk</option>
	<option <?=$userPref['music_genre'] == 'Gospel' ? 'selected ' : '';?>value="Gospel">Gospel</option>
	<option <?=$userPref['music_genre'] == 'HipHop' ? 'selected ' : '';?>value="HipHop">Hip Hop / Rap</option>
	<option <?=$userPref['music_genre'] == 'Jazz' ? 'selected ' : '';?>value="Jazz">Jazz</option>
	<option <?=$userPref['music_genre'] == 'Pop' ? 'selected ' : '';?>value="Pop">Pop</option>
	<option <?=$userPref['music_genre'] == 'RB' ? 'selected ' : '';?>value="RB">R&B</option>
	<option <?=$userPref['music_genre'] == 'Rock' ? 'selected ' : '';?>value="Rock">Rock</option>
	<option <?=$userPref['music_genre'] == 'Alternative' ? 'selected ' : '';?>value="Alternative">Alternative</option>
	<option <?=$userPref['music_genre'] == 'All' ? 'selected ' : '';?>value="All">All / Other</option>
</select>
</div>

<div id="love-survey-question">
Pet lover: 
<select id="love-select" name="love_pets">
	<option <?=$userPref['pet_lover'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['pet_lover'] == 'All' ? 'selected ' : '';?>value="All">All Pets</option>
	<option <?=$userPref['pet_lover'] == 'Some' ? 'selected ' : '';?>value="Some">Some Pets</option>
	<option <?=$userPref['pet_lover'] == 'CatsDogs' ? 'selected ' : '';?>value="CatsDogs">Cats & Dogs</option>
	<option <?=$userPref['pet_lover'] == 'DogsOnly' ? 'selected ' : '';?>value="DogsOnly">Dogs Only</option>
	<option <?=$userPref['pet_lover'] == 'CatsOnly' ? 'selected ' : '';?>value="CatsOnly">Cats Only</option>
	<option <?=$userPref['pet_lover'] == 'Caged' ? 'selected ' : '';?>value="Caged">Caged (Rabbits, Hamsters etc)</option>
	<option <?=$userPref['pet_lover'] == 'Reptiles' ? 'selected ' : '';?>value="Reptiles">Reptilians</option>
	<option <?=$userPref['pet_lover'] == 'Water' ? 'selected ' : '';?>value="Water">Water Pets</option>
	<option <?=$userPref['pet_lover'] == 'Birds' ? 'selected ' : '';?>value="Birds">Birds</option>
	<option <?=$userPref['pet_lover'] == 'Farm' ? 'selected ' : '';?>value="Farm">Farm Pets (Cows, Pigs, etc)</option>
	<option <?=$userPref['pet_lover'] == 'None' ? 'selected ' : '';?>value="None">Not A Pet Lover</option>
</select>
</div>



<div id="love-survey-question">
Vehicle you drive: 
<select id="love-select"  name="love_vehicle">
	<option <?=$userPref['car'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['car'] == 'NoLicense' ? 'selected ' : '';?>value="NoLicense">I don't have a license</option>
	<option <?=$userPref['car'] == 'Truck' ? 'selected ' : '';?>value="Truck">I drive a truck</option>
	<option <?=$userPref['car'] == 'Car' ? 'selected ' : '';?>value="Car">I drive a car</option>
	<option <?=$userPref['car'] == 'SportsCar' ? 'selected ' : '';?>value="SportsCar">I drive a sports car</option>
	<option <?=$userPref['car'] == 'FamilyVehicle' ? 'selected ' : '';?>value="FamilyVehicle">I drive family vehicles</option>
	<option <?=$userPref['car'] == 'SUV' ? 'selected ' : '';?>value="SUV">I drive an SUV</option>
	<option <?=$userPref['car'] == 'TunerVehicle' ? 'selected ' : '';?>value="TunerVehicle">I prefer tuner vehicles</option>
	<option <?=$userPref['car'] == 'ClassicVehicles' ? 'selected ' : '';?>value="ClassicVehicles">I prefer classic vehicles</option>
	<option <?=$userPref['car'] == 'NoVehicle' ? 'selected ' : '';?>value="NoVehicle">I have a license, but no vehicle</option>
	<option <?=$userPref['car'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>
</select>
</div>

<div id="love-survey-question">
Your dress style: 
<select id="love-select" name="love_dress">
	<option <?=$userPref['dress_style'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['dress_style'] == 'Business' ? 'selected ' : '';?>value="Business">Business</option>
	<option <?=$userPref['dress_style'] == 'Casual' ? 'selected ' : '';?>value="Casual">Casual</option>
	<option <?=$userPref['dress_style'] == 'Classy' ? 'selected ' : '';?>value="Classy">Classy</option>
	<option <?=$userPref['dress_style'] == 'Gothic' ? 'selected ' : '';?>value="Gothic">Gothic</option>
	<option <?=$userPref['dress_style'] == 'Hipster' ? 'selected ' : '';?>value="Hipster">Hipster</option>
	<option <?=$userPref['dress_style'] == 'HipHop' ? 'selected ' : '';?>value="HipHop">HipHop</option>
	<option <?=$userPref['dress_style'] == 'Punk' ? 'selected ' : '';?>value="Punk">Punk</option>
	<option <?=$userPref['dress_style'] == 'Rocker' ? 'selected ' : '';?>value="Rocker">Rocker</option>
	<option <?=$userPref['dress_style'] == 'Sexy' ? 'selected ' : '';?>value="Sexy">Sexy</option>
	<option <?=$userPref['dress_style'] == 'Sporty' ? 'selected ' : '';?>value="Sporty">Sporty</option>
	<option <?=$userPref['dress_style'] == 'Trendy' ? 'selected ' : '';?>value="Trendy">Trendy</option>
	<option <?=$userPref['dress_style'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>
	<option <?=$userPref['dress_style'] == 'Everything' ? 'selected ' : '';?>value="Everything">A Bit of Everything</option>
</select>
</div>
			
			
	<div id="love-survey-question">
Your love language: 
<select id="love-select" name="love_lovelang">
	<option <?=$userPref['love_language'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['love_language'] == 'ActsOfService' ? 'selected ' : '';?>value="ActsOfService">Acts of Service</option>
	<option <?=$userPref['love_language'] == 'WordsOfAffirmation' ? 'selected ' : '';?>value="WordsOfAffirmation">Words of Affirmation</option>
	<option <?=$userPref['love_language'] == 'QualityTime' ? 'selected ' : '';?>value="QualityTime">Quality Time</option>
	<option <?=$userPref['love_language'] == 'GiftGiving' ? 'selected ' : '';?>value="GiftGiving">Gift Giving</option>
	<option <?=$userPref['love_language'] == 'PhysicalTouch' ? 'selected ' : '';?>value="PhysicalTouch">Physical Touch</option>
	<option <?=$userPref['love_language'] == 'Unsure' ? 'selected ' : '';?>value="Unsure">I'm not sure</option>
</select>
</div>		
		
			
<div id="love-survey-question">
Ideal first date: 
<select id="love-select" name="love_firstdate">
	<option <?=$userPref['first_date'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['first_date'] == 'DriveAroundTown' ? 'selected ' : '';?>value="DriveAroundTown">A drive around town</option>
	<option <?=$userPref['first_date'] == 'DinnerAndMovie' ? 'selected ' : '';?>value="DinnerAndMovie">Dinner and a movie</option>
	<option <?=$userPref['first_date'] == 'Walk' ? 'selected ' : '';?>value="Walk">A walk somewhere</option>
	<option <?=$userPref['first_date'] == 'CoffeeAndMall' ? 'selected ' : '';?>value="CoffeeAndMall">Coffee and a walk around the mall</option>
	<option <?=$userPref['first_date'] == 'BarAndDance' ? 'selected ' : '';?>value="BarAndDance">Drinking at a bar and dancing</option>
	<option <?=$userPref['first_date'] == 'SportsGame' ? 'selected ' : '';?>value="SportsGame">Sports game and some food</option>
	<option <?=$userPref['first_date'] == 'HangWithFriends' ? 'selected ' : '';?>value="HangWithFriends">Get together with friends</option>
	<option <?=$userPref['first_date'] == 'Talk' ? 'selected ' : '';?>value="Talk">Something where we can talk</option>
	<option <?=$userPref['first_date'] == 'SomethingTotallyDifferent' ? 'selected ' : '';?>value="SomethingTotallyDifferent">Something totally different</option>
	<option <?=$userPref['first_date'] == 'AdrenalinJunkie' ? 'selected ' : '';?>value="AdrenalinJunkie">Something to get my adrenalin going</option>
	<option <?=$userPref['first_date'] == 'Relaxing' ? 'selected ' : '';?>value="Relaxing">Something relaxing</option>
</select>
</div>		
					
			
			
<div id="love-survey-question">
What's most important: 
<select id="love-select" name="love_mostimportant">
	<option <?=$userPref['most_important'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['most_important'] == 'Manners' ? 'selected ' : '';?>value="Manners">Manners</option>
	<option <?=$userPref['most_important'] == 'Generosity' ? 'selected ' : '';?>value="Generosity">Generosity</option>
	<option <?=$userPref['most_important'] == 'Independence' ? 'selected ' : '';?>value="Independence">Independence</option>
	<option <?=$userPref['most_important'] == 'Sexiness' ? 'selected ' : '';?>value="Sexiness">Sexiness</option>
	<option <?=$userPref['most_important'] == 'UniqueTraits' ? 'selected ' : '';?>value="UniqueTraits">Unique Traits</option>
	<option <?=$userPref['most_important'] == 'Conversation' ? 'selected ' : '';?>value="Conversation">Conversation</option>
	<option <?=$userPref['most_important'] == 'Sincerity' ? 'selected ' : '';?>value="Sincerity">Sincerity</option>
	<option <?=$userPref['most_important'] == 'Compliments' ? 'selected ' : '';?>value="Compliments">Compliments</option>
	<option <?=$userPref['most_important'] == 'SelfConfidence' ? 'selected ' : '';?>value="SelfConfidence">Self-Confidence</option>
	<option <?=$userPref['most_important'] == 'Happiness' ? 'selected ' : '';?>value="Happiness">Happiness</option>

</select>
</div>		
					
					
			
</div>
<div id="love-survey-holder">
			

<div id="love-survey-question">
Inspirational leader: <input name="love_leader" class="" value="<?= $userPref['leader']; ?>" maxlength="45"/>
</div>

<div id="love-survey-question">
Religious Views: <input name="love_religion" class="" value="<?= $userPref['religious_views']; ?>" maxlength="45"/>
</div>

<div id="love-survey-question">
Political Views: <input name="love_politics" class="" value="<?= $userPref['political_views']; ?>" maxlength="45"/>
</div>

<div id="love-survey-question">
Outdoors or Indoors:
<select id="love-select" name="love_outin">
	<option <?=$userPref['out_in'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['out_in'] == 'Outdoors' ? 'selected ' : '';?>value="Outdoors">Outdoors</option>
	<option <?=$userPref['out_in'] == 'Indoors' ? 'selected ' : '';?>value="Indoors">Indoors</option>
	<option <?=$userPref['out_in'] == 'Sleeping' ? 'selected ' : '';?>value="Sleeping">I'd rather be sleeping</option>
	<option <?=$userPref['out_in'] == 'OutdoorsHuntingFishing' ? 'selected ' : '';?>value="OutdoorsHuntingFishing">Outdoors + Hunt and Fish</option>
	<option <?=$userPref['out_in'] == 'IndoorsGymGaming' ? 'selected ' : '';?>value="IndoorsGymGaming">Indoors + Other (Gym, etc)</option>

</select>
</div>

<div id="love-survey-question">
Meat or Vegan: 
<select id="love-select" name="love_vegan">
	<option <?=$userPref['meat_vegan'] == '' ? 'selected ' : '';?>value=""></option>
	<option <?=$userPref['meat_vegan'] == 'MeatEater' ? 'selected ' : '';?>value="MeatEater">I am a Meat Eater</option>
	<option <?=$userPref['meat_vegan'] == 'SomeMeat' ? 'selected ' : '';?>value="SomeMeat">I eat some meat</option>
	<option <?=$userPref['meat_vegan'] == 'Vegan' ? 'selected ' : '';?>value="Vegan">I am Vegan</option>
	<option <?=$userPref['meat_vegan'] == 'Vegetarian' ? 'selected ' : '';?>value="Vegetarian">I am Vegetarian</option>
	<option <?=$userPref['meat_vegan'] == 'Pescatarian' ? 'selected ' : '';?>value="Pescatarian">I am Pescatarian</option>
	<option <?=$userPref['meat_vegan'] == 'Experiment' ? 'selected ' : '';?>value="Experiment">I experiment with different diets</option>
	<option <?=$userPref['meat_vegan'] == 'NoDiet' ? 'selected ' : '';?>value="NoDiet">I have no relationship with any diets</option>

</select>
</div>

<div id="love-survey-question">
Favorite Hobby: <input name="love_hobby" class="" value="<?= $userPref['hobby']; ?>" maxlength="45"/>
</div>

	<div id="love-survey-question">
I want to travel to: <input name="love_travel" class="" value="<?= $userPref['travel_place']; ?>" maxlength="45"/>
</div>

<div id="love-survey-question">
My dream career is: <input name="love_dreamcareer" class="" value="<?= $userPref['dream_career']; ?>" maxlength="45"/>
</div>

</div>
		<div class="clear"></div>
	
</div>












	
	<div id="love-title" class="love-title">
		Personal Match Preferences (This section is not public)
	</div>
	<div id="love-box" class="love-box">
		
Tell us about your perfect partner and some qualities you would prefer in a partner that you may not necessarily want other people to know publicly. We'll do our best to match you with people closest to your requests.
<br>
<br>

<div id="love-survey-holder">	
			<strong>Your Answers</strong>

<div id="love-survey-question">
Do you smoke: 
<select id="love-select" name="love_u_smoke">
	<option <?=$userPref['you_smoke'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_smoke'] == 'Yes' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['you_smoke'] == 'No' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['you_smoke'] == 'Recreational' ? 'selected ' : '';?>value="REC">Recreational</option>

</select>
</div>

<div id="love-survey-question">
Do you drink: 
<select id="love-select" name="love_u_drink">
	<option <?=$userPref['you_drink'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_drink'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['you_drink'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['you_drink'] == 'REC' ? 'selected ' : '';?>value="REC">Recreational</option>
	<option <?=$userPref['you_drink'] == 'REG' ? 'selected ' : '';?>value="REG">Regularly</option>
	<option <?=$userPref['you_drink'] == 'OFT' ? 'selected ' : '';?>value="OFT">Often</option>
	<option <?=$userPref['you_drink'] == 'DAY' ? 'selected ' : '';?>value="DAY">Daily</option>

</select>
</div>

<div id="love-survey-question">
Do you do drugs:
<select id="love-select" name="love_u_drugs">
	<option <?=$userPref['you_drugs'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_drugs'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['you_drugs'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['you_drugs'] == 'NOTSER' ? 'selected ' : '';?>value="NOTSER">Nothing Serious</option>
	<option <?=$userPref['you_drugs'] == 'REC' ? 'selected ' : '';?>value="REC">Recreational</option>

</select>
</div>


<div id="love-survey-question">
Are you employed: 
<select id="love-select" name="love_u_employed">
	<option <?=$userPref['you_employed'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_employed'] == 'FT' ? 'selected ' : '';?>value="FT">Full Time</option>
	<option <?=$userPref['you_employed'] == 'PT' ? 'selected ' : '';?>value="PT">Part Time</option>
	<option <?=$userPref['you_employed'] == 'SE' ? 'selected ' : '';?>value="SE">Self-Employed</option>
	<option <?=$userPref['you_employed'] == 'UE' ? 'selected ' : '';?>value="UE">Unemployed</option>
	<option <?=$userPref['you_employed'] == 'BO' ? 'selected ' : '';?>value="BO">Business Owner</option>
	<option <?=$userPref['you_employed'] == 'EN' ? 'selected ' : '';?>value="EN">Entrepreneur</option>
	<option <?=$userPref['you_employed'] == 'HP' ? 'selected ' : '';?>value="HP">At Home Parent</option>
	<option <?=$userPref['you_employed'] == 'ST' ? 'selected ' : '';?>value="ST">Student</option>
</select>
</div>


<div id="love-survey-question">
Do you travel for work: 
<select id="love-select" name="love_u_travelwork">
	<option <?=$userPref['you_travel'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_travel'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['you_travel'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['you_travel'] == 'OF' ? 'selected ' : '';?>value="OF">Often</option>
	<option <?=$userPref['you_travel'] == 'SW' ? 'selected ' : '';?>value="SW">Somewhat</option>

</select>
</div>


<div id="love-survey-question">
Whats your salary <!-- (private for matches) -->:
<select id="love-select" name="love_u_salary">
	<option <?=$userPref['you_salary'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_salary'] == '0-20' ? 'selected ' : '';?>value="0-20">$0-$20k</option>
	<option <?=$userPref['you_salary'] == '20-40' ? 'selected ' : '';?>value="20-40">$20k-$40k</option>
	<option <?=$userPref['you_salary'] == '40-60' ? 'selected ' : '';?>value="40-60">$40k-$60k</option>
	<option <?=$userPref['you_salary'] == '60-80' ? 'selected ' : '';?>value="60-80">$60k-$80k</option>
	<option <?=$userPref['you_salary'] == '80-100' ? 'selected ' : '';?>value="80-100">$80k-$100k</option>
	<option <?=$userPref['you_salary'] == '100' ? 'selected ' : '';?>value="100">$100k +</option>

</select>
</div>

<div id="love-survey-question">
Hours a week you work:
<select id="love-select" name="love_u_hourswork">
	<option <?=$userPref['you_hours'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_hours'] == '0-20' ? 'selected ' : '';?>value="0-20">0-20</option>
	<option <?=$userPref['you_hours'] == '20-40' ? 'selected ' : '';?>value="20-40">20-40</option>
	<option <?=$userPref['you_hours'] == '40-60' ? 'selected ' : '';?>value="40-60">40-60</option>
	<option <?=$userPref['you_hours'] == '60-80' ? 'selected ' : '';?>value="60-80">60-80</option>

</select>
</div>

<div id="love-survey-question">
Your religious practice: 
<select id="love-select" name="love_u_religious">
	<option <?=$userPref['you_religious'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_religious'] == 'YPractice' ? 'selected ' : '';?>value="YPractice">I practice a religious belief</option>
	<option <?=$userPref['you_religious'] == 'NPractice' ? 'selected ' : '';?>value="NPractice">I do not practice a religious belief</option>
	<option <?=$userPref['you_religious'] == 'ET' ? 'selected ' : '';?>value="ET">I believe in extra terrestrials (aliens)</option>
	<option <?=$userPref['you_religious'] == 'Other' ? 'selected ' : '';?>value="Other">I believe in something else...</option>
	<option <?=$userPref['you_religious'] == 'NoPart' ? 'selected ' : '';?>value="NoPart">I want no part of this</option>

</select>
</div>

<div id="love-survey-question">
Your ethnicity: 
<select id="love-select" name="love_u_ethnicity">
	<option <?=$userPref['you_ethnicity'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
      <option <?=$userPref['you_ethnicity'] == 'Arab' ? 'selected ' : '';?>value="Arab">Arab</option>
      <option <?=$userPref['you_ethnicity'] == 'African' ? 'selected ' : '';?>value="African">African</option>
      <option <?=$userPref['you_ethnicity'] == 'AfricanAmerican' ? 'selected ' : '';?>value="AfricanAmerican">African American</option>
      <option <?=$userPref['you_ethnicity'] == 'Bangladeshi' ? 'selected ' : '';?>value="Bangladeshi">Bangladeshi</option>
      <option <?=$userPref['you_ethnicity'] == 'Caribbean' ? 'selected ' : '';?>value="Caribbean">Caribbean</option>
      <option <?=$userPref['you_ethnicity'] == 'Caucasian' ? 'selected ' : '';?>value="Caucasian">Caucasian</option>
      <option <?=$userPref['you_ethnicity'] == 'Chinese' ? 'selected ' : '';?>value="Chinese">Chinese</option>
      <option <?=$userPref['you_ethnicity'] == 'Cuban' ? 'selected ' : '';?>value="Cuban">Cuban</option>
      <option <?=$userPref['you_ethnicity'] == 'Hispanic' ? 'selected ' : '';?>value="Hispanic">Hispanic</option>
      <option <?=$userPref['you_ethnicity'] == 'Indian' ? 'selected ' : '';?>value="Indian">Indian</option>
      <option <?=$userPref['you_ethnicity'] == 'Indigenous' ? 'selected ' : '';?>value="Indigenous">Indigenous</option>
      <option <?=$userPref['you_ethnicity'] == 'Irish' ? 'selected ' : '';?>value="Irish">Irish</option>
      <option <?=$userPref['you_ethnicity'] == 'Japanese' ? 'selected ' : '';?>value="Japanese">Japanese</option>
      <option <?=$userPref['you_ethnicity'] == 'Jewish' ? 'selected ' : '';?>value="Jewish">Jewish</option>
      <option <?=$userPref['you_ethnicity'] == 'Korean' ? 'selected ' : '';?>value="Korean">Korean</option>
      <option <?=$userPref['you_ethnicity'] == 'Latino' ? 'selected ' : '';?>value="Latino">Latino</option>
      <option <?=$userPref['you_ethnicity'] == 'Mexican' ? 'selected ' : '';?>value="Mexican">Mexican</option>
      <option <?=$userPref['you_ethnicity'] == 'Mixed' ? 'selected ' : '';?>value="Mixed">Mixed Background</option>
      <option <?=$userPref['you_ethnicity'] == 'NativeAmerican' ? 'selected ' : '';?>value="NativeAmerican">Native American</option>
      <option <?=$userPref['you_ethnicity'] == 'Pacific' ? 'selected ' : '';?>value="Pacific">Pacific (Polynesian, Micronesian, etc)</option>
      <option <?=$userPref['you_ethnicity'] == 'Pakistani' ? 'selected ' : '';?>value="Pakistani">Pakistani</option>
      <option <?=$userPref['you_ethnicity'] == 'Scottish' ? 'selected ' : '';?>value="Scottish">Scottish</option>
      <option <?=$userPref['you_ethnicity'] == 'Welsh' ? 'selected ' : '';?>value="Welsh">Welsh</option>
      <option <?=$userPref['you_ethnicity'] == 'Other' ? 'selected ' : '';?>value="Other">Other ethnicity not listed</option>
    </optgroup>
</select>
</div>

<div id="love-survey-question">
Do you want kids: 
<select id="love-select" name="love_u_wantkids">
	<option <?=$userPref['you_wantkids'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_wantkids'] == 'Y' ? 'selected ' : '';?>value="Y">Yes, I want kids</option>
	<option <?=$userPref['you_wantkids'] == 'N' ? 'selected ' : '';?>value="N">No, I do not want kids</option>
	<option <?=$userPref['you_wantkids'] == 'HaveWantMore' ? 'selected ' : '';?>value="HaveWantMore">I have kids and want more</option>
	<option <?=$userPref['you_wantkids'] == 'HaveNoMore' ? 'selected ' : '';?>value="HaveNoMore">I have kids and do not want more</option>

</select>
</div>


<div id="love-survey-question">
Your Body Type: 
<select id="love-select" name="love_u_body">
	<option <?=$userPref['you_bodytype'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_bodytype'] == 'Skinny' ? 'selected ' : '';?>value="Skinny">Skinny</option>
	<option <?=$userPref['you_bodytype'] == 'Average' ? 'selected ' : '';?>value="Average">Average</option>
	<option <?=$userPref['you_bodytype'] == 'Fit' ? 'selected ' : '';?>value="Fit">Fit</option>
	<option <?=$userPref['you_bodytype'] == 'Muscular' ? 'selected ' : '';?>value="Muscular">Muscular</option>
	<option <?=$userPref['you_bodytype'] == 'Thick' ? 'selected ' : '';?>value="Thick">Thick</option>
	<option <?=$userPref['you_bodytype'] == 'Curvy' ? 'selected ' : '';?>value="Curvy">Curvy</option>
	<option <?=$userPref['you_bodytype'] == 'Heavy' ? 'selected ' : '';?>value="Heavy">Heavy</option>

</select>
</div>


<div id="love-survey-question">
Health issues: 
<select id="love-select" name="love_u_health">
	<option <?=$userPref['you_health'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_health'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['you_health'] == 'Past' ? 'selected ' : '';?>value="Past">Have in the past</option>
	<option <?=$userPref['you_health'] == 'Minor' ? 'selected ' : '';?>value="Minor">Minor issues</option>
	<option <?=$userPref['you_health'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>

</select>
</div>


<div id="love-survey-question">
Do you live alone: 
<select id="love-select" name="love_u_livealone">
	<option <?=$userPref['you_livealone'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_livealone'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['you_livealone'] == 'N' ? 'selected ' : '';?>value="N">No</option>

</select>
</div>

<div id="love-survey-question">
Natural Hair Color: 
<select id="love-select" name="love_u_hair">
	<option <?=$userPref['you_hair'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_hair'] == 'Brown' ? 'selected ' : '';?>value="Brown">Brown</option>
	<option <?=$userPref['you_hair'] == 'Blonde' ? 'selected ' : '';?>value="Blonde">Blonde</option>
	<option <?=$userPref['you_hair'] == 'Red' ? 'selected ' : '';?>value="Red">Red</option>
	<option <?=$userPref['you_hair'] == 'Black' ? 'selected ' : '';?>value="Black">Black</option>
	<option <?=$userPref['you_hair'] == 'Gray' ? 'selected ' : '';?>value="Gray">Salt & Pepper</option>
	<option <?=$userPref['you_hair'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>

</select>
</div>

<div id="love-survey-question">
Natural Eye Color: 
<select id="love-select" name="love_u_eye">
	<option <?=$userPref['you_eye'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_eye'] == 'Brown' ? 'selected ' : '';?>value="Brown">Brown</option>
	<option <?=$userPref['you_eye'] == 'Black' ? 'selected ' : '';?>value="Black">Black</option>
	<option <?=$userPref['you_eye'] == 'Blue' ? 'selected ' : '';?>value="Blue">Blue</option>
	<option <?=$userPref['you_eye'] == 'Green' ? 'selected ' : '';?>value="Green">Green</option>
	<option <?=$userPref['you_eye'] == 'Gray' ? 'selected ' : '';?>value="Gray">Gray</option>
	<option <?=$userPref['you_eye'] == 'Hazel' ? 'selected ' : '';?>value="Hazel">Hazel</option>

</select>
</div>

<div id="love-survey-question">
Height:
<select id="love-select" name="love_u_height">
	<option <?=$userPref['you_height'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_height'] == '5.0' ? 'selected ' : '';?>value="5.0">5’0”</option>
	<option <?=$userPref['you_height'] == '5.1' ? 'selected ' : '';?>value="5.1">5’1”</option>
	<option <?=$userPref['you_height'] == '5.2' ? 'selected ' : '';?>value="5.2">5’2”</option>
	<option <?=$userPref['you_height'] == '5.3' ? 'selected ' : '';?>value="5.3">5’3”</option>
	<option <?=$userPref['you_height'] == '5.4' ? 'selected ' : '';?>value="5.4">5’4”</option>
	<option <?=$userPref['you_height'] == '5.5' ? 'selected ' : '';?>value="5.5">5’5”</option>
	<option <?=$userPref['you_height'] == '5.6' ? 'selected ' : '';?>value="5.6">5’6”</option>
	<option <?=$userPref['you_height'] == '5.7' ? 'selected ' : '';?>value="5.7">5’7”</option>
	<option <?=$userPref['you_height'] == '5.8' ? 'selected ' : '';?>value="5.8">5’8”</option>
	<option <?=$userPref['you_height'] == '5.9' ? 'selected ' : '';?>value="5.9">5’9”</option>
	<option <?=$userPref['you_height'] == '5.10' ? 'selected ' : '';?>value="5.10">5’10”</option>
	<option <?=$userPref['you_height'] == '5.11' ? 'selected ' : '';?>value="5.11">5’11”</option>
	<option <?=$userPref['you_height'] == '6.0' ? 'selected ' : '';?>value="6.0">6’0”</option>
	<option <?=$userPref['you_height'] == '6.1' ? 'selected ' : '';?>value="6.1">6’1”</option>
	<option <?=$userPref['you_height'] == '6.2' ? 'selected ' : '';?>value="6.2">6’2”</option>
	<option <?=$userPref['you_height'] == '6.3' ? 'selected ' : '';?>value="6.3">6’3”</option>
	<option <?=$userPref['you_height'] == '6.4' ? 'selected ' : '';?>value="6.4">6’4”</option>
	<option <?=$userPref['you_height'] == '6.5' ? 'selected ' : '';?>value="6.5">6’5”</option>
	<option <?=$userPref['you_height'] == '6.6' ? 'selected ' : '';?>value="6.6">6’6”</option>
	<option <?=$userPref['you_height'] == '6.7' ? 'selected ' : '';?>value="6.7">6’7”</option>
	<option <?=$userPref['you_height'] == '6.8' ? 'selected ' : '';?>value="6.8">6’8”</option>
	<option <?=$userPref['you_height'] == '6.9' ? 'selected ' : '';?>value="6.9">6’9”</option>
	<option <?=$userPref['you_height'] == '6.10' ? 'selected ' : '';?>value="6.10">6’10”</option>
	<option <?=$userPref['you_height'] == '6.11' ? 'selected ' : '';?>value="6.11">6’11”</option>
	<option <?=$userPref['you_height'] == '7.0' ? 'selected ' : '';?>value="7.0">7’0”</option>
	<option <?=$userPref['you_height'] == '7.1' ? 'selected ' : '';?>value="7.1">7’1”</option>
	<option <?=$userPref['you_height'] == '7.2' ? 'selected ' : '';?>value="7.2">7’2”</option>

</select>
</div>

<div id="love-survey-question">
Weight: 
<select id="love-select" name="love_u_weight">
	<option <?=$userPref['you_weight'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_weight'] == '100lbs-120lbs' ? 'selected ' : '';?>value="100lbs-120lbs">100lbs-120lbs</option>
	<option <?=$userPref['you_weight'] == '120lbs-140lbs' ? 'selected ' : '';?>value="120lbs-140lbs">120lbs-140lbs</option>
	<option <?=$userPref['you_weight'] == '140lbs-160lbs' ? 'selected ' : '';?>value="140lbs-160lbs">140lbs-160lbs</option>
	<option <?=$userPref['you_weight'] == '160lbs-180lbs' ? 'selected ' : '';?>value="160lbs-180lbs">160lbs-180lbs</option>
	<option <?=$userPref['you_weight'] == '180lbs-200lbs' ? 'selected ' : '';?>value="180lbs-200lbs">180lbs-200lbs</option>
	<option <?=$userPref['you_weight'] == '200lbs-250lbs' ? 'selected ' : '';?>value="200lbs-250lbs">200lbs-250lbs</option>
	<option <?=$userPref['you_weight'] == '250lbs-300lbs' ? 'selected ' : '';?>value="250lbs-300lbs">250lbs-300lbs</option>
	<option <?=$userPref['you_weight'] == '300lbs' ? 'selected ' : '';?>value="300lbs">300lbs +</option>

</select>
</div>
			
<div id="love-survey-question">
Are you educated: 
<select id="love-select" name="love_u_educated">
	<option <?=$userPref['you_educated'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['you_educated'] == 'GRADE' ? 'selected ' : '';?>value="GRADE">Grade/High School</option>
	<option <?=$userPref['you_educated'] == 'GED' ? 'selected ' : '';?>value="GED">GED</option>
	<option <?=$userPref['you_educated'] == 'COLUNI' ? 'selected ' : '';?>value="COLUNI">College or University</option>
	<option <?=$userPref['you_educated'] == 'CERT' ? 'selected ' : '';?>value="CERT">Certificate(s)</option>
	<option <?=$userPref['you_educated'] == 'DIPLOMA' ? 'selected ' : '';?>value="DIPLOMA">Diploma</option>
	<option <?=$userPref['you_educated'] == 'ASSOCIATE' ? 'selected ' : '';?>value="ASSOCIATE">Associate Degree</option>
	<option <?=$userPref['you_educated'] == 'BACHELORS' ? 'selected ' : '';?>value="BACHELORS">Bachelor's Degree</option>
	<option <?=$userPref['you_educated'] == 'MASTERS' ? 'selected ' : '';?>value="MASTERS">Master's Degree</option>
	<option <?=$userPref['you_educated'] == 'DOCTORS' ? 'selected ' : '';?>value="DOCTORS">Doctoral Degree</option>
	<option <?=$userPref['you_educated'] == 'OTHER' ? 'selected ' : '';?>value="OTHER">Other</option>

	</select>
</div>
	
	
	
		
			
</div>
<div id="love-survey-holder">
<strong>Your Preferred Partner</strong>
			
			
			
			
<div id="love-survey-question">
Can they smoke: 
<select id="love-select" name="love_p_smoke">
	<option <?=$userPref['p_smoke'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_smoke'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['p_smoke'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['p_smoke'] == 'VAPOR' ? 'selected ' : '';?>value="VAPOR">Vapor</option>
	<option <?=$userPref['p_smoke'] == 'REC' ? 'selected ' : '';?>value="REC">Recreational</option>
	<option <?=$userPref['p_smoke'] == 'QUIT' ? 'selected ' : '';?>value="QUIT">Trying To Quit</option>

</select>
</div>

<div id="love-survey-question">
Can they drink: 
<select id="love-select" name="love_p_drink">
	<option <?=$userPref['p_drink'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_drink'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['p_drink'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['p_drink'] == 'REC' ? 'selected ' : '';?>value="REC">Recreational</option>
	<option <?=$userPref['p_drink'] == 'REG' ? 'selected ' : '';?>value="REG">Regularly</option>
	<option <?=$userPref['p_drink'] == 'OFT' ? 'selected ' : '';?>value="OFT">Often</option>
	<option <?=$userPref['p_drink'] == 'DAY' ? 'selected ' : '';?>value="DAY">Daily</option>

</select>
</div>

<div id="love-survey-question">
Can they do drugs:
<select id="love-select" name="love_p_drugs">
	<option <?=$userPref['p_drugs'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_drugs'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['p_drugs'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['p_drugs'] == 'NOTSER' ? 'selected ' : '';?>value="NOTSER">Nothing Serious</option>
	<option <?=$userPref['p_drugs'] == 'REC' ? 'selected ' : '';?>value="REC">Recreational</option>

</select>
</div>


<div id="love-survey-question">
Are you employed: 
<select id="love-select" name="love_p_employed">
	<option <?=$userPref['p_employed'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_employed'] == 'FT' ? 'selected ' : '';?>value="FT">Full Time</option>
	<option <?=$userPref['p_employed'] == 'PT' ? 'selected ' : '';?>value="PT">Part Time</option>
	<option <?=$userPref['p_employed'] == 'SE' ? 'selected ' : '';?>value="SE">Self-Employed</option>
	<option <?=$userPref['p_employed'] == 'UE' ? 'selected ' : '';?>value="UE">Unemployed</option>
	<option <?=$userPref['p_employed'] == 'BO' ? 'selected ' : '';?>value="BO">Business Owner</option>
	<option <?=$userPref['p_employed'] == 'EN' ? 'selected ' : '';?>value="EN">Entrepreneur</option>
	<option <?=$userPref['p_employed'] == 'HP' ? 'selected ' : '';?>value="HP">At Home Parent</option>
	<option <?=$userPref['p_employed'] == 'ST' ? 'selected ' : '';?>value="ST">Student</option>

</select>
</div>


<div id="love-survey-question">
Do you travel for work: 
<select id="love-select" name="love_p_travelwork">
	<option <?=$userPref['p_travel'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_travel'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['p_travel'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['p_travel'] == 'OF' ? 'selected ' : '';?>value="OF">Often</option>
	<option <?=$userPref['p_travel'] == 'SW' ? 'selected ' : '';?>value="SW">Somewhat</option>

</select>
</div>


<div id="love-survey-question">
Whats your salary:
<select id="love-select" name="love_p_salary">
	<option <?=$userPref['p_salary'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_salary'] == '0-20' ? 'selected ' : '';?>value="0-20">$0-$20k</option>
	<option <?=$userPref['p_salary'] == '20-40' ? 'selected ' : '';?>value="20-40">$20k-$40k</option>
	<option <?=$userPref['p_salary'] == '40-60' ? 'selected ' : '';?>value="40-60">$40k-$60k</option>
	<option <?=$userPref['p_salary'] == '60-80' ? 'selected ' : '';?>value="60-80">$60k-$80k</option>
	<option <?=$userPref['p_salary'] == '80-100' ? 'selected ' : '';?>value="80-100">$80k-$100k</option>
	<option <?=$userPref['p_salary'] == '100' ? 'selected ' : '';?>value="100">$100k +</option>

</select>
</div>

<div id="love-survey-question">
Hours a week you work:
<select id="love-select" name="love_p_hourswork">
	<option <?=$userPref['p_hours'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_hours'] == '0-20' ? 'selected ' : '';?>value="0-20">0-20</option>
	<option <?=$userPref['p_hours'] == '20-40' ? 'selected ' : '';?>value="20-40">20-40</option>
	<option <?=$userPref['p_hours'] == '40-60' ? 'selected ' : '';?>value="40-60">40-60</option>
	<option <?=$userPref['p_hours'] == '60-80' ? 'selected ' : '';?>value="60-80">60-80</option>

</select>
</div>

<div id="love-survey-question">
Your religious practice: 
<select id="love-select" name="love_p_religious">
	<option <?=$userPref['p_religious'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_religious'] == 'YPractice' ? 'selected ' : '';?>value="YPractice">I practice a religious belief</option>
	<option <?=$userPref['p_religious'] == 'NPractice' ? 'selected ' : '';?>value="NPractice">I do not practice a religious belief</option>
	<option <?=$userPref['p_religious'] == 'ET' ? 'selected ' : '';?>value="ET">I believe in extra terrestrials (aliens)</option>
	<option <?=$userPref['p_religious'] == 'Other' ? 'selected ' : '';?>value="Other">I believe in something else...</option>
	<option <?=$userPref['p_religious'] == 'NoPart' ? 'selected ' : '';?>value="NoPart">I want no part of this</option>

</select>
</div>

<div id="love-survey-question">
Your ethnicity: 
<select id="love-select" name="love_p_ethnicity">
<option <?=$userPref['p_ethnicity'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
      <option <?=$userPref['p_ethnicity'] == 'Arab' ? 'selected ' : '';?>value="Arab">Arab</option>
      <option <?=$userPref['p_ethnicity'] == 'African' ? 'selected ' : '';?>value="African">African</option>
      <option <?=$userPref['p_ethnicity'] == 'AfricanAmerican' ? 'selected ' : '';?>value="AfricanAmerican">African American</option>
      <option <?=$userPref['p_ethnicity'] == 'Bangladeshi' ? 'selected ' : '';?>value="Bangladeshi">Bangladeshi</option>
      <option <?=$userPref['p_ethnicity'] == 'Caribbean' ? 'selected ' : '';?>value="Caribbean">Caribbean</option>
      <option <?=$userPref['p_ethnicity'] == 'Caucasian' ? 'selected ' : '';?>value="Caucasian">Caucasian</option>
      <option <?=$userPref['p_ethnicity'] == 'Chinese' ? 'selected ' : '';?>value="Chinese">Chinese</option>
      <option <?=$userPref['p_ethnicity'] == 'Cuban' ? 'selected ' : '';?>value="Cuban">Cuban</option>
      <option <?=$userPref['p_ethnicity'] == 'Hispanic' ? 'selected ' : '';?>value="Hispanic">Hispanic</option>
      <option <?=$userPref['p_ethnicity'] == 'Indian' ? 'selected ' : '';?>value="Indian">Indian</option>
      <option <?=$userPref['p_ethnicity'] == 'Indigenous' ? 'selected ' : '';?>value="Indigenous">Indigenous</option>
      <option <?=$userPref['p_ethnicity'] == 'Irish' ? 'selected ' : '';?>value="Irish">Irish</option>
      <option <?=$userPref['p_ethnicity'] == 'Japanese' ? 'selected ' : '';?>value="Japanese">Japanese</option>
      <option <?=$userPref['p_ethnicity'] == 'Jewish' ? 'selected ' : '';?>value="Jewish">Jewish</option>
      <option <?=$userPref['p_ethnicity'] == 'Korean' ? 'selected ' : '';?>value="Korean">Korean</option>
      <option <?=$userPref['p_ethnicity'] == 'Latino' ? 'selected ' : '';?>value="Latino">Latino</option>
      <option <?=$userPref['p_ethnicity'] == 'Mexican' ? 'selected ' : '';?>value="Mexican">Mexican</option>
      <option <?=$userPref['p_ethnicity'] == 'Mixed' ? 'selected ' : '';?>value="Mixed">Mixed Background</option>
      <option <?=$userPref['p_ethnicity'] == 'NativeAmerican' ? 'selected ' : '';?>value="NativeAmerican">Native American</option>
      <option <?=$userPref['p_ethnicity'] == 'Pacific' ? 'selected ' : '';?>value="Pacific">Pacific (Polynesian, Micronesian, etc)</option>
      <option <?=$userPref['p_ethnicity'] == 'Pakistani' ? 'selected ' : '';?>value="Pakistani">Pakistani</option>
      <option <?=$userPref['p_ethnicity'] == 'Scottish' ? 'selected ' : '';?>value="Scottish">Scottish</option>
      <option <?=$userPref['p_ethnicity'] == 'Welsh' ? 'selected ' : '';?>value="Welsh">Welsh</option>
      <option <?=$userPref['p_ethnicity'] == 'Other' ? 'selected ' : '';?>value="Other">Other ethnicity not listed</option>
    </optgroup>
</select>
</div>

<div id="love-survey-question">
Do you want kids: 
<select id="love-select" name="love_p_wantkids">
	<option <?=$userPref['p_wantkids'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_wantkids'] == 'Y' ? 'selected ' : '';?>value="Y">Yes, I want kids</option>
	<option <?=$userPref['p_wantkids'] == 'N' ? 'selected ' : '';?>value="N">No, I do not want kids</option>
	<option <?=$userPref['p_wantkids'] == 'HaveWantMore' ? 'selected ' : '';?>value="HaveWantMore">I have kids and want more</option>
	<option <?=$userPref['p_wantkids'] == 'HaveNoMore' ? 'selected ' : '';?>value="HaveNoMore">I have kids and do not want more</option>

</select>
</div>


<div id="love-survey-question">
Body Type: 
<select id="love-select" name="love_p_body">
	<option <?=$userPref['p_bodytype'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_bodytype'] == 'Skinny' ? 'selected ' : '';?>value="Skinny">Skinny</option>
	<option <?=$userPref['p_bodytype'] == 'Average' ? 'selected ' : '';?>value="Average">Average</option>
	<option <?=$userPref['p_bodytype'] == 'Fit' ? 'selected ' : '';?>value="Fit">Fit</option>
	<option <?=$userPref['p_bodytype'] == 'Muscular' ? 'selected ' : '';?>value="Muscular">Muscular</option>
	<option <?=$userPref['p_bodytype'] == 'Thick' ? 'selected ' : '';?>value="Thick">Thick</option>
	<option <?=$userPref['p_bodytype'] == 'Curvy' ? 'selected ' : '';?>value="Curvy">Curvy</option>
	<option <?=$userPref['p_bodytype'] == 'Heavy' ? 'selected ' : '';?>value="Heavy">Heavy</option>

</select>
</div>


<div id="love-survey-question">
Health issues: 
<select id="love-select" name="love_p_health">
	<option <?=$userPref['p_health'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_health'] == 'N' ? 'selected ' : '';?>value="N">No</option>
	<option <?=$userPref['p_health'] == 'Past' ? 'selected ' : '';?>value="Past">Have in the past</option>
	<option <?=$userPref['p_health'] == 'Minor' ? 'selected ' : '';?>value="Minor">Minor issues</option>
	<option <?=$userPref['p_health'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>

</select>
</div>


<div id="love-survey-question">
Should they live alone: 
<select id="love-select" name="love_p_livealone">
	<option <?=$userPref['p_livealone'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_livealone'] == 'Y' ? 'selected ' : '';?>value="Y">Yes</option>
	<option <?=$userPref['p_livealone'] == 'N' ? 'selected ' : '';?>value="N">No</option>

</select>
</div>

<div id="love-survey-question">
Natural Hair Color: 
<select id="love-select" name="love_p_hair">
	<option <?=$userPref['p_hair'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_hair'] == 'Brown' ? 'selected ' : '';?>value="Brown">Brown</option>
	<option <?=$userPref['p_hair'] == 'Blonde' ? 'selected ' : '';?>value="Blonde">Blonde</option>
	<option <?=$userPref['p_hair'] == 'Red' ? 'selected ' : '';?>value="Red">Red</option>
	<option <?=$userPref['p_hair'] == 'Black' ? 'selected ' : '';?>value="Black">Black</option>
	<option <?=$userPref['p_hair'] == 'Gray' ? 'selected ' : '';?>value="Gray">Salt & Pepper</option>
	<option <?=$userPref['p_hair'] == 'Other' ? 'selected ' : '';?>value="Other">Other</option>

</select>
</div>

<div id="love-survey-question">
Natural Eye Color: 
<select id="love-select" name="love_p_eye">
	<option <?=$userPref['p_eye'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_eye'] == 'Brown' ? 'selected ' : '';?>value="Brown">Brown</option>
	<option <?=$userPref['p_eye'] == 'Black' ? 'selected ' : '';?>value="Black">Black</option>
	<option <?=$userPref['p_eye'] == 'Blue' ? 'selected ' : '';?>value="Blue">Blue</option>
	<option <?=$userPref['p_eye'] == 'Green' ? 'selected ' : '';?>value="Green">Green</option>
	<option <?=$userPref['p_eye'] == 'Gray' ? 'selected ' : '';?>value="Gray">Gray</option>
	<option <?=$userPref['p_eye'] == 'Hazel' ? 'selected ' : '';?>value="Hazel">Hazel</option>

</select>
</div>

<div id="love-survey-question">
Height:
<select id="love-select" name="love_p_height">
	<option <?=$userPref['p_height'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_height'] == '5.0' ? 'selected ' : '';?>value="5.0">5’0”</option>
	<option <?=$userPref['p_height'] == '5.1' ? 'selected ' : '';?>value="5.1">5’1”</option>
	<option <?=$userPref['p_height'] == '5.2' ? 'selected ' : '';?>value="5.2">5’2”</option>
	<option <?=$userPref['p_height'] == '5.3' ? 'selected ' : '';?>value="5.3">5’3”</option>
	<option <?=$userPref['p_height'] == '5.4' ? 'selected ' : '';?>value="5.4">5’4”</option>
	<option <?=$userPref['p_height'] == '5.5' ? 'selected ' : '';?>value="5.5">5’5”</option>
	<option <?=$userPref['p_height'] == '5.6' ? 'selected ' : '';?>value="5.6">5’6”</option>
	<option <?=$userPref['p_height'] == '5.7' ? 'selected ' : '';?>value="5.7">5’7”</option>
	<option <?=$userPref['p_height'] == '5.8' ? 'selected ' : '';?>value="5.8">5’8”</option>
	<option <?=$userPref['p_height'] == '5.9' ? 'selected ' : '';?>value="5.9">5’9”</option>
	<option <?=$userPref['p_height'] == '5.10' ? 'selected ' : '';?>value="5.10">5’10”</option>
	<option <?=$userPref['p_height'] == '5.11' ? 'selected ' : '';?>value="5.11">5’11”</option>
	<option <?=$userPref['p_height'] == '6.0' ? 'selected ' : '';?>value="6.0">6’0”</option>
	<option <?=$userPref['p_height'] == '6.1' ? 'selected ' : '';?>value="6.1">6’1”</option>
	<option <?=$userPref['p_height'] == '6.2' ? 'selected ' : '';?>value="6.2">6’2”</option>
	<option <?=$userPref['p_height'] == '6.3' ? 'selected ' : '';?>value="6.3">6’3”</option>
	<option <?=$userPref['p_height'] == '6.4' ? 'selected ' : '';?>value="6.4">6’4”</option>
	<option <?=$userPref['p_height'] == '6.5' ? 'selected ' : '';?>value="6.5">6’5”</option>
	<option <?=$userPref['p_height'] == '6.6' ? 'selected ' : '';?>value="6.6">6’6”</option>
	<option <?=$userPref['p_height'] == '6.7' ? 'selected ' : '';?>value="6.7">6’7”</option>
	<option <?=$userPref['p_height'] == '6.8' ? 'selected ' : '';?>value="6.8">6’8”</option>
	<option <?=$userPref['p_height'] == '6.9' ? 'selected ' : '';?>value="6.9">6’9”</option>
	<option <?=$userPref['p_height'] == '6.10' ? 'selected ' : '';?>value="6.10">6’10”</option>
	<option <?=$userPref['p_height'] == '6.11' ? 'selected ' : '';?>value="6.11">6’11”</option>
	<option <?=$userPref['p_height'] == '7.0' ? 'selected ' : '';?>value="7.0">7’0”</option>
	<option <?=$userPref['p_height'] == '7.1' ? 'selected ' : '';?>value="7.1">7’1”</option>
	<option <?=$userPref['p_height'] == '7.2' ? 'selected ' : '';?>value="7.2">7’2”</option>

</select>
</div>

<div id="love-survey-question">
Weight: 
<select id="love-select" name="love_p_weight">
	<option <?=$userPref['p_weight'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_weight'] == '100lbs-120lbs' ? 'selected ' : '';?>value="100lbs-120lbs">100lbs-120lbs</option>
	<option <?=$userPref['p_weight'] == '120lbs-140lbs' ? 'selected ' : '';?>value="120lbs-140lbs">120lbs-140lbs</option>
	<option <?=$userPref['p_weight'] == '140lbs-160lbs' ? 'selected ' : '';?>value="140lbs-160lbs">140lbs-160lbs</option>
	<option <?=$userPref['p_weight'] == '160lbs-180lbs' ? 'selected ' : '';?>value="160lbs-180lbs">160lbs-180lbs</option>
	<option <?=$userPref['p_weight'] == '180lbs-200lbs' ? 'selected ' : '';?>value="180lbs-200lbs">180lbs-200lbs</option>
	<option <?=$userPref['p_weight'] == '200lbs-250lbs' ? 'selected ' : '';?>value="200lbs-250lbs">200lbs-250lbs</option>
	<option <?=$userPref['p_weight'] == '250lbs-300lbs' ? 'selected ' : '';?>value="250lbs-300lbs">250lbs-300lbs</option>
	<option <?=$userPref['p_weight'] == '300lbs' ? 'selected ' : '';?>value="300lbs">300lbs +</option>

</select>
</div>
			
<div id="love-survey-question">
Are they educated: 
<select id="love-select" name="love_p_educated">
	<option <?=$userPref['p_educated'] == 'NA' ? 'selected ' : '';?>value="NA"></option>
	<option <?=$userPref['p_educated'] == 'GRADE' ? 'selected ' : '';?>value="GRADE">Grade/High School</option>
	<option <?=$userPref['p_educated'] == 'GED' ? 'selected ' : '';?>value="GED">GED</option>
	<option <?=$userPref['p_educated'] == 'COLUNI' ? 'selected ' : '';?>value="COLUNI">College or University</option>
	<option <?=$userPref['p_educated'] == 'CERT' ? 'selected ' : '';?>value="CERT">Certificate(s)</option>
	<option <?=$userPref['p_educated'] == 'DIPLOMA' ? 'selected ' : '';?>value="DIPLOMA">Diploma</option>
	<option <?=$userPref['p_educated'] == 'ASSOCIATE' ? 'selected ' : '';?>value="ASSOCIATE">Associate Degree</option>
	<option <?=$userPref['p_educated'] == 'BACHELORS' ? 'selected ' : '';?>value="BACHELORS">Bachelor's Degree</option>
	<option <?=$userPref['p_educated'] == 'MASTERS' ? 'selected ' : '';?>value="MASTERS">Master's Degree</option>
	<option <?=$userPref['p_educated'] == 'DOCTORS' ? 'selected ' : '';?>value="DOCTORS">Doctoral Degree</option>
	<option <?=$userPref['p_educated'] == 'OTHER' ? 'selected ' : '';?>value="OTHER">Other</option>

	</select>
</div>
		

</div>
		<div class="clear"></div>
	
</div>












	
	<div class="clear"></div>
	
	
	
<div id="love-box-holder">
<div id="love-title-half" class="love-title-half">
A small description about me
</div>
<div id="love-box-half" class="love-box-half">
		
<div id="love-survey-question">
<textarea name="love_u_desc" class="descriptions" maxlength="255"/><?=$userPref['you_desc'];?></textarea>
</div>

</div>
</div>
	
	
	
	
<div id="love-box-holder">
<div id="love-title-half" class="love-title-half">
What I'd like from a partner
</div>
<div id="love-box-half" class="love-box-half">
	
<div id="love-survey-question">
<textarea name="love_p_desc" class="descriptions" maxlength="255"/><?=$userPref['p_desc'];?></textarea>
</div>
	
</div>
</div>
	
<button type="submit" name="btn_love_save" class="save-love" id="save-love" <?=$saved == 'savesuccess' ? ' disabled ' : '';?>>Save</button>

	
<div class="clear"></div>
	
	
	
</form>	
	
	
	
	<div id="love-note" class="love-note">
	Some sort of disclaimer. Children under 13 have this section disabled.
	
	</div>
		

	
	
	<div class="clear"></div>
	
		
</div>


</div>
</div>

<script src="assets/js/countrycodes.js"></script>
        <script language="javascript">

var rotator = function(){
  setTimeout(rotator,5000);
  document.getElementById('save-love').removeAttribute('disabled');
  };

 setTimeout(rotator,5000);

            populateCountries("country", "state", "<?php echo $userPref['country']; ?>");
        </script>
<?php include_once 'template/foot.php'; ?>