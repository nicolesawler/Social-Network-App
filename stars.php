<?php
/* user */
include_once 'back/db-user.php';
/* goals */
include_once 'back/db-stars.php';
/* post */
include 'front/post-stars.php';
/* css */
$page = 'stars';
?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    
    
    
    
<div class="stars-intro-message" id="stars-intro-message">
<strong>Random <?php if(isset($z_date)) echo $z_zodiac; ?> Traits</strong> - Tell employers what you want at your organization. You spend a good portion of your life at your job, make sure you're doing something you <strong>love</strong>.
</div>


<div id="stars-box-holder">
	<div id="stars-title-top-left" class="stars-title-top-left">
		Daily <?php if(isset($z_date)) echo $z_zodiac; ?> Horoscope
	</div>
	
	<div id="stars-box-top-left" class="stars-box-top-left">
                <i class="gw-<?php if(isset($z_zodiac)){ echo lcfirst($z_zodiac); } else{ echo 'aries';} ?>"></i>
                <strong><?php if(isset($z_date)) echo $z_zodiac; ?> <?php if(isset($z_date)) echo '('.$z_date.')'; ?></strong>
                <br>
<?= FIRST_NAME; ?>, Standardizing the way we see resumes</strong> - Tell employers what you want at your organization. You spend a good portion of your life at your job, make sure you're doing something yoStandardizing the way we see resumes</strong> - Tell employers what you want at your organization. 
        <div class="clear"></div>

	</div>
</div>



<div id="stars-box-holder">
	<div id="stars-title-top-right" class="stars-title-top-right">
	Signs
	</div>
	<div id="stars-box-top-right" class="stars-box-top-right">
            <form method="post">
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Aquarius" type="submit">Aquarius</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Aries" type="submit">Aries</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Cancer" type="submit">Cancer</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Capricorn" type="submit">Capricorn</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Gemini" type="submit">Gemini</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Libra" type="submit">Libra</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Leo" type="submit">Leo</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Pisces" type="submit">Pisces</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Sagittarius" type="submit">Sagittarius</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Scorpio" type="submit">Scorpio</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Taurus" type="submit">Taurus</button>
                <button class="btn-stars-zodiac" name="btn_stars_zodiac" value="Virgo" type="submit">Virgo</button>
        </form>
	</div>
</div>
<div class="clear"></div>

	
<div id="stars-title" class="stars-title">
Random <?php if(isset($z_date)) echo $z_zodiac; ?>  Facts
</div>
<div id="stars-box" class="stars-box">
			
<?php if(isset($z_random)) echo '<i class="gw-file"></i> '.$z_random; ?> 
	
</div>
	
<div id="stars-title" class="stars-title">
Types of Goals <?php if(isset($z_date)) echo $z_zodiac; ?>  Should Set
</div>
<div id="stars-box" class="stars-box">
			
<?php if(isset($z_goals)) echo '<i class="gw-medical"></i> '.$z_goals; ?> 
	
</div>
	
	
<div id="stars-title" class="stars-title">
Best ways for <?php if(isset($z_date)) echo $z_zodiac; ?>  to focus and achieve goals
</div>
<div id="stars-box" class="stars-box">
			
<?php if(isset($z_achieve)) echo '<i class="gw-business"></i> '.$z_achieve; ?> 
	
</div>

<div id="stars-box-holder"> <!-- Half -->
	<div id="stars-title-half" class="stars-title-half">
		<?php if(isset($z_date)) echo $z_zodiac; ?>  Love Connections
	</div>
	<div id="stars-box-half" class="stars-box-half">
		<?php if(isset($z_love)) echo '<i class="gw-profile-6"></i> '.$z_love; ?> 
	</div>
</div>


<div id="stars-box-holder"><!-- Half -->
	<div id="stars-title-half" class="stars-title-half">
		<?php if(isset($z_date)) echo $z_zodiac; ?>  Career Connections
	</div>
	<div id="stars-box-half" class="stars-box-half">
		<?php if(isset($z_career)) echo '<i class="gw-profile-7"></i> '.$z_career; ?> 
		
	</div>
</div>



<div class="clear"></div>


<div id="stars-note" class="stars-note">
We don't believe in references. You decide who you are.
</div>

<?php include_once 'template/foot.php'; ?>