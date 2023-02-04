<?php

require 'checkUsername.php';


        if(USER_PROFILE_ID != 0){
           
                 try
                    {
                        if($getLoveProfile = $userProfile->getLoveProfile(USER_PROFILE_ID)) 
                        {

                            
                        }
                   }
                   catch(PDOException $e)
                   {
                      echo $e->getMessage();
                   } 
           
           
        }else{
           //$user->redirect('glog.php?new');
        }




?>
<?php $page = 'love';?>
<?php include_once '../template/head.php';?>  
<div id="vision">
<?php include_once '../template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once '../template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once '../template/user-navigation.php';?>
    

<form method="post" id="love-profile-form">
	 	
<div id="love-box-holder">
<div id="love-title-top-left" class="love-title-top-left">
Your Romantic Profile
</div>
<div id="love-box-top-left" class="love-box-top-left">
	

            <?php if($getLoveProfile['age'] != ''): ?>
		<div id="career-survey-question">
			Age:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['age']); ?></span>
		</div>
            <?php endif; ?>


            <?php if($getLoveProfile['gender'] != ''): ?>
		<div id="career-survey-question">
			Gender:
                        <span class="inputAnswer"><?= $getLoveProfile['gender']; ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['partner_gender'] != ''): ?>
		<div id="career-survey-question">
			Preferred Partner Gender:
                        <span class="inputAnswer"><?= $getLoveProfile['partner_gender']; ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['have_kids'] != ''): ?>
		<div id="career-survey-question">
			Children:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['have_kids']); ?> Children</span>
		</div>
            <?php endif; ?>


            <?php if($getLoveProfile['job_title'] != ''): ?>
		<div id="career-survey-question">
			Occupation:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['job_title']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['looking_for'] != ''): ?>
		<div id="career-survey-question">
			Looking for:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['looking_for']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['orientation'] != ''): ?>
		<div id="career-survey-question">
			Sexual Orientation:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['orientation']); ?></span>
		</div>
            <?php endif; ?>


            <?php if($getLoveProfile['serious_love'] != ''): ?>
		<div id="career-survey-question">
			Serious About Love:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['serious_love']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['current'] != ''): ?>
		<div id="career-survey-question">
			Current Relationship Status:
                        <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['current']); ?></span>
		</div>
            <?php endif; ?>


            <?php if($getLoveProfile['province'] != '' || $getLoveProfile['city'] != '' || $getLoveProfile['country'] != ''): ?>
		<div id="career-survey-question">
			Location:
                        <span class="inputAnswer">
                           <?php 
                           if($getLoveProfile['city'] != ''): 
                               echo $getLoveProfile['city']; 
                           endif; 
                           
                           if($getLoveProfile['province'] != ''): 
                                if($getLoveProfile['city'] != ''): 
                                    echo ", "; 
                                endif; 
                               echo $getLoveProfile['province']; 
                           endif; 
                           
                          if($getLoveProfile['country'] != ''): 
                                if($getLoveProfile['province'] != ''): 
                                    echo ", "; 
                                elseif($getLoveProfile['province'] == '' && $getLoveProfile['city'] != ''):
                                    echo ", "; 
                                endif; 
                              echo $getLoveProfile['country']; 
                          endif; 
                          
                          ?> 
		</span>
			
		</div>
            <?php endif; ?>


</div>
</div>
	
	
	
	
<div id="love-box-holder">
<div id="love-title-top-right" class="love-title-top-right">
Connect
</div>
<div id="love-box-top-right" class="love-box-top-right">
% Match<br><br>
Message<br><br>
Add to Favs?<br><br>
Block


</h1></h1></h1></h1>
</div>
</div>

	<div class="clear"></div>
	
	
        
        
         <?php $personalCnt = 0; $stylePersonalHide="inline"; ?>
        <div class="personalHider">
	<div id="love-title" class="love-title ">
		Your Personal Style
	</div>
	<div id="love-box" class="love-box ">

        <div id="love-survey-holder">	
	
	


            <?php if($getLoveProfile['movie_genre'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Favorite Movie Genre:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['movie_genre']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['music_genre'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Favorite Music Genre:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['music_genre']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['pet_lover'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Pet Lover:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['pet_lover']); ?></span>
		</div>
            <?php endif; ?>



            <?php if($getLoveProfile['car'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			My Vehicle Style:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['car']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['dress_style'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			My Dress Style:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['dress_style']); ?></span>
		</div>
            <?php endif; ?>
			
			
            <?php if($getLoveProfile['love_language'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Love Language:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['love_language']); ?></span>
		</div>
            <?php endif; ?>
		
			
            <?php if($getLoveProfile['first_date'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Ideal First Date:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['first_date']); ?></span>
		</div>
            <?php endif; ?>	
					
			
            <?php if($getLoveProfile['most_important'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Most Important To Me:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['most_important']); ?></span>
		</div>
            <?php endif; ?>	
					
					
			
</div>
<div id="love-survey-holder">
			
            <?php if($getLoveProfile['leader'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			My Inspirational Leader:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['leader']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['religious_views'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Religious Views:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['religious_views']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['political_views'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Political Views:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['political_views']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['out_in'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Outdoors Vs. Indoors:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['out_in']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['meat_vegan'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Meat or Vegan?:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['meat_vegan']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['hobby'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			Favorite Hobby:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['hobby']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['travel_place'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			I Want To Travel To:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['travel_place']); ?></span>
		</div>
            <?php endif; ?>

            <?php if($getLoveProfile['dream_career'] != ''): $personalCnt++; ?>
		<div id="career-survey-question">
			My Dream Career:
                        <span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getLoveProfile['dream_career']); ?></span>
		</div>
            <?php endif; ?>

</div>
		<div class="clear"></div>
	
</div>
</div>
<?php if($personalCnt === 0): $stylePersonalHide="none"; endif; ?>
<style>.personalHider{display: <?= $stylePersonalHide; ?>!important;}</style>




<div class="clear"></div>
	
	
<?php if($getLoveProfile['you_desc'] != ''):  ?>	
<div id="love-box-holder">
<div id="love-title-half" class="love-title-half">
About Me
</div>
<div id="love-box-half" class="love-box-half">	
<div id="love-survey-question">
<?= $getLoveProfile['you_desc']; ?>
</div>
</div>
</div>
<?php endif; ?>	
	
<?php if($getLoveProfile['p_desc'] != ''):  ?>	
<div id="love-box-holder">
<div id="love-title-half" class="love-title-half">
What I'm looking for
</div>
<div id="love-box-half" class="love-box-half">
<div id="love-survey-question">
<?= $getLoveProfile['p_desc']; ?>
</div>	
</div>
</div>
<?php endif; ?>		
	
<div class="clear"></div>
	
</form>	
	
	
	
<div id="love-note" class="love-note">
Some sort of disclaimer. Children under 13 have this section disabled.

</div>
<div class="clear"></div>
		
</div>

</div>
</div>
<?php include_once '../template/foot.php';?>