<?php
include_once 'db/dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$user=$stmt->fetch(PDO::FETCH_ASSOC);
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

employers will only be able to see your photo, name and career page


<div id="side-space" class="side-space">
	
	<div class="owner">
	<div class="profile-pic"></div>
		<p>
			<strong><?php print(ucfirst($user['first'])); ?> <?php print(ucfirst($user['last'])); ?></strong>
		</p>
		<p>
			<button class="follow-button">Follow</button>
		</p>
		<p class="zodiac" id="zodiac">
			<a class="zodiac-link" href="" ><?php print(ucfirst($user['zodiac'])); ?></a>
		</p>
		<p>
			<a class="auto-bio-link" href="" >About</a>
		</p>
		<p>
					
			<span class="gender-symbol female">&#9794;</span>
<!--
			<span class="gender-symbol male">&#9792;</span>
			<span class="gender-symbol intersex">&#9893;</span>
-->
	<br />
			<span class="quote">Some quote goes here.</span>
		</p>
	</div>
	
	
	<div class="newest-gritters">
		<h2>New Gritters</h2>
		<p class="newest-by-zodiac">Aries</p>
		
	</div>
	
</div>





<div id="main-space" class="main-space">
	
	
<?php
include_once 'includes/user-navigation.php';
?>

	
	<div id="career-title" class="career-title">
		Investments:
	</div>
	<div id="career-box" class="career-box">
Invest in people's talents - like system, but don't use that word, it's way to overplade, wtf is like anyway.
Let's make it a rate system, where people can up to... currency, a currency system where they earn currency the more they do on the site and invest in people to boost them to managers, producers
the people will literally be deciding who is famous... the people make the choices. The people decide who THEY want to work for... companies ask them for interviews, the people put their truth on what they really want in a career. In a life.. It's up to the individual to decide what they want.


	</div>
	
	<div id="career-title" class="career-title">
		Tell Your Employer What You Want
	</div>
	<div id="career-box" class="career-box">
Facebook is now the big blue. We're classy - different, clean, no mess, no bad world news and related shopping searches.
	</div>
	
	<div id="career-title" class="career-title">
	Love
</div>
	<div id="career-box" class="career-box">
love: select all where locations same, age within 7 years +- / Gender = preferred gender
to get % ( select all where matches preferences == matches preferences (get the count of matches) Divide total match options with current matches to get %, then sort by highest perfect to lowest for users)

Eventually we set a starting number of 1500 and then add points to questions to deduct and convert to matches that way - users will be able to prioritize whats most important to them, then matches will be more direct.

If a user has profile turned off, then get excluded from the list

To store matches in db

user gets a matches table - initial save will generate as many matches as possible. Any save after that will just look for new matches and add them to the table.
User will click "check for new matches" to add new matches to their table (they'll be able to see the new matches once clicked) Matches page will always show top matches



Need a way to be able to block people



We need apples backing on this.
	</div>
	
		<div id="career-title" class="career-title">
	Career
</div>
	<div id="career-box" class="career-box">
Career

Companies will have a separate back end where they can see resumes of users that say they want to work for a company, or love a company, there will also be a search for users will certain credentials.

Users will virtually have to do nothing but wait for companies to contact them based on the information in their career section.

Companies can send notes asking for interviews
Some sort of aptitude test for users companies can see results (users cannot)

	</div>
	
<div id="career-title" class="career-title">
	Account
</div>
	<div id="career-box" class="career-box">
Account
	</div>
	
	<div id="career-note" class="career-note">
	Account will have preferences on who can see what with check box list.
	Glog: use as journal blog or book
	Birthday: display birthday to world on birthday (not age or year)
        <br><br>
        
        Stars: user enters mood and how they feel. Drops get compared for average mood of sign that day. Make people feel more comfortable withalknowing other signs feels the same way. Try and compare users inputs for daily horoscope.  <br><br>
        
        Invest like a share system, investing puts on owners investments
        Invest in career people (endorse)
        Invest in couples
        invest in goals
        
	</div>
		

	
	
	<div class="clear"></div>
	
		
</div>






</div>
</div>
<script src="assets/js/home-functions.js"></script>
</body>
</html>