<?php

require 'checkUsername.php';


        if(USER_PROFILE_ID != 0){
           
                 try
                    {
                        if($getCareerProfile = $userProfile->getCareerProfile(USER_PROFILE_ID)) 
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
<?php $page = 'career';?>
<?php include_once '../template/head.php';?>  
<div id="vision">
<?php include_once '../template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once '../template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once '../template/user-navigation.php';?>
    
<div class="career-intro-message" id="career-intro-message">
<strong>Standardizing the way we see resumes</strong> - Tell employers what you want at your organization. You spend a good portion of your life at your job, make sure you're doing something you <strong>love</strong>.
</div>

<form method="post" id="career-profile-form">

<div id="career-box-holder">
	<div id="career-title-top-left" class="career-title-top-left">
		Your Career Profile
	</div>
	
	<div id="career-box-top-left" class="career-box-top-left">
            <?php if($getCareerProfile['e_status'] != ''): ?>
		<div id="career-survey-question">
			Employment Status:
                        <span class="inputAnswer"><?= $getCareerProfile['e_status']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['e_position_title'] != ''): ?>
		<div id="career-survey-question">
			Desired Position Title:
			<span class="inputAnswer"><?= $getCareerProfile['e_position_title']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['e_career_category'] != ''): ?>
		<div id="career-survey-question">
                    Desired Career Category: 
                    <span class="inputAnswer"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['e_career_category']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['e_qualified'] != ''): ?>
		<div id="career-survey-question">
			Are you qualified for this position?: 
			<span class="inputAnswer"><?= $getCareerProfile['e_qualified']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['e_student'] != ''): ?>
		<div id="career-survey-question">
			Are you a student?: 
			<span class="inputAnswer"><?php echo $getCareerProfile['e_student'] == 'Y' ? "Yes" : "No"; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['e_lang'] != ''): ?>
		<div id="career-survey-question">
			Primary Language: 
			<span class="inputAnswer"><?= $getCareerProfile['e_lang']; ?></span>
		</div>
            <?php endif; ?>
            
            
            <?php if($getCareerProfile['e_province'] != '' || $getCareerProfile['e_city'] != '' || $getCareerProfile['e_country'] != ''): ?>
		<div id="career-survey-question">
			<b>Preferred Location:</b>
                        <span class="inputAnswer">
                           <?php 
                           if($getCareerProfile['e_city'] != ''): 
                               echo $getCareerProfile['e_city']; 
                           endif; 
                           
                           if($getCareerProfile['e_province'] != ''): 
                                if($getCareerProfile['e_city'] != ''): 
                                    echo ", "; 
                                endif; 
                               echo $getCareerProfile['e_province']; 
                           endif; 
                           
                          if($getCareerProfile['e_country'] != ''): 
                                if($getCareerProfile['e_province'] != ''): 
                                    echo ", "; 
                                elseif($getCareerProfile['e_province'] == '' && $getCareerProfile['e_city'] != ''):
                                    echo ", "; 
                                endif; 
                              echo $getCareerProfile['e_country']; 
                          endif; 
                          
                          ?> 
		</span>
			
		</div>
<?php endif; ?>
            
	</div>
</div>



<div id="career-box-holder">
	<div id="career-title-top-right" class="career-title-top-right">
		Connect
	</div>
	<div id="career-box-top-right" class="career-box-top-right">
<button type="submit" name="btn-career-save" >Download Resume</button>		
<button type="submit" name="btn-career-save" >Print Resume</button>
<button type="submit" name="btn-career-save" >E-mail Resume</button>
	</div>
</div>


<div class="clear"></div>



	<div id="career-title" class="career-title">
		Employer Match Preferences (This section only visible to potential employers)
	</div>
	
	<div id="career-box" class="career-box">
		
		<div id="career-survey-holder">	
			
            <?php if($getCareerProfile['emp_payment'] != ''): ?>
		<div id="career-survey-question">
			Payment Type: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_payment']); ?></span>
		</div>
            <?php endif; ?>
			
            <?php if($getCareerProfile['emp_work'] != ''): ?>
		<div id="career-survey-question">
			I'd like my work environment to be: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_work']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_hours'] != ''): ?>
		<div id="career-survey-question">
			Work Schedule: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_hours']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_type'] != ''): ?>
		<div id="career-survey-question">
			Employment Type: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_type']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_benefits'] != ''): ?>
		<div id="career-survey-question">
			Desired Benefits: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_benefits']); ?> Benefits</span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_weeklyhours'] != ''): ?>
		<div id="career-survey-question">
			Weekly Work Hours: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_weeklyhours']); ?> Hours Per Week</span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_yearlyincome'] != ''): ?>
		<div id="career-survey-question">
			Preferred Yearly Income: 
			<span class="inputAnswerBR">$<?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_yearlyincome']); ?>,000</span>
		</div>
            <?php endif; ?>
		
		</div>
		<div id="career-survey-holder">
            <?php if($getCareerProfile['emp_important'] != ''): ?>
		<div id="career-survey-question">
			Most important to me: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_important']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_learn'] != ''): ?>
		<div id="career-survey-question">
			My learning style is: 
			<span class="inputAnswerBR"><?= $getCareerProfile['emp_learn']; ?> Learner</span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_want'] != ''): ?>
		<div id="career-survey-question">
			What I want most is: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_want']); ?></span>
		</div>
            <?php endif; ?>
             <?php if($getCareerProfile['emp_company'] != ''): ?>
		<div id="career-survey-question">
			Preferred company's success approach: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_company']); ?> Approach</span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_position'] != ''): ?>
		<div id="career-survey-question">
			I want a position where I am a: 
			<span class="inputAnswerBR"><?php echo $getCareerProfile['emp_position'] == 'Independent' ? "Independent Worker" : $getCareerProfile['emp_position']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_ctype'] != ''): ?>
		<div id="career-survey-question">
			Preferred Company Type: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_ctype']); ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['emp_manager'] != ''): ?>
		<div id="career-survey-question">
			I want a manager that: 
			<span class="inputAnswerBR"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['emp_manager']); ?> me</span>
		</div>
            <?php endif; ?>
			
		</div>
	
	<div class="clear"></div>	
	</div>
	
	
	
	
	



 <?php $skillCnt = 0; $style="inline"; ?>
<div id="career-box-holder" class="hider"> <!-- Half -->
	<div id="career-title-half" class="career-title-half">
		Top Skills & Abilities
	</div>
	<div id="career-box-half" class="career-box-half">
		
            <?php if($getCareerProfile['skills_1'] != ''): $skillCnt++; ?>
		<div id="career-survey-question">
			<strong><?= "#".$skillCnt.". ".$getCareerProfile['skills_1']; ?></strong>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['skills_2'] != ''): $skillCnt++; ?>
		<div id="career-survey-question">
			<strong><?= "#".$skillCnt.". ".$getCareerProfile['skills_2']; ?></strong>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['skills_3'] != ''): $skillCnt++; ?>
		<div id="career-survey-question">
			<strong><?= "#".$skillCnt.". ".$getCareerProfile['skills_3']; ?></strong>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['skills_4'] != ''): $skillCnt++; ?>
		<div id="career-survey-question">
			<strong><?= "#".$skillCnt.". ".$getCareerProfile['skills_4']; ?></strong>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['skills_5'] != ''): $skillCnt++; ?>
		<div id="career-survey-question">
			<strong><?= "#".$skillCnt.". ".$getCareerProfile['skills_5']; ?></strong>
		</div>
            <?php endif; if($skillCnt === 0): $style="none"; endif; ?>
            <style>.hider{display: <?= $style; ?>!important;}</style>

	</div>
</div>


 <?php if($getCareerProfile['summary'] != ''): ?>
<div id="career-box-holder" > <!-- Half -->
	<div id="career-title-half" class="career-title-half">
		Summary about me
	</div>
	<div id="career-box-half" class="career-box-half">
		
		<div id="career-survey-question">
			<?= $getCareerProfile['summary']; ?>
		</div>
	</div>
</div>
<?php endif; ?>
   

<div class="clear"></div>	


 <?php $currentPositionCnt = 0; $hiderCurrentPosition = "inline"; ?>
<div class="hiderCurrentPosition">
<div id="career-title" class="career-title" >
Current Position
</div>
<div id="career-box" class="career-box ">

	<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Position Details: </strong>
		</div>
		
            <?php if($getCareerProfile['ex_current_occupation'] != ''): $currentPositionCnt++; ?>
		<div id="career-survey-question">
                    Current Occupation: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_current_occupation']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_current_companyname'] != ''): $currentPositionCnt++; ?>
		<div id="career-survey-question">
                    Company Name: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_current_companyname']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_current_year'] != ''): $currentPositionCnt++; ?>
		<div id="career-survey-question">
                    Employed Here Since: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_current_year']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_current_status'] != ''): $currentPositionCnt++; ?>
		<div id="career-survey-question">
                Current Status: <span class="inputAnswerCurrent"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['ex_current_status']); ?></span>
		</div>
            <?php endif; ?>
	</div>
	
	<div id="career-survey-holder">
            <?php if($getCareerProfile['ex_current_desc'] != ''): $currentPositionCnt++; ?>
		<div id="career-survey-question">
                    <strong>Description: </strong><br>
			<?= $getCareerProfile['ex_current_desc']; ?>
		</div>
             <?php endif; ?>
	</div>
	
<div class="clear"></div>
</div>
</div>
<?php if($currentPositionCnt === 0): $hiderCurrentPosition="none"; endif; ?>
<style>.hiderCurrentPosition{display: <?= $hiderCurrentPosition; ?>!important;}</style>









 <?php $experiencePositionCnt = 0; $hiderExperiencePosition = "inline"; ?>
<div class="hiderExperiencePosition">
    
<div id="career-title" class="career-title">
	Experience Positions
</div>
<div id="career-box" class="career-box">

<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Position Details: </strong>
		</div>
		
            <?php if($getCareerProfile['ex_1_occupation'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Current Occupation: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_1_occupation']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_1_companyname'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Company Name: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_1_companyname']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_1_yearfrom'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Employed Here From: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_1_yearfrom']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_1_yearto'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                Employed Here To: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_1_yearto']; ?></span>
		</div>
            <?php endif; ?>
	</div>
	
	<div id="career-survey-holder">
            <?php if($getCareerProfile['ex_1_desc'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    <strong>Description: </strong><br>
			<?= $getCareerProfile['ex_1_desc']; ?>
		</div>
             <?php endif; ?>
	</div>

		<div class="clear"></div>



<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Position Details: </strong>
		</div>
            <?php if($getCareerProfile['ex_2_occupation'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Current Occupation: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_2_occupation']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_2_companyname'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Company Name: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_2_companyname']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_2_yearfrom'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    Employed Here From: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_2_yearfrom']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ex_2_yearto'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                Employed Here To: <span class="inputAnswerCurrent"><?= $getCareerProfile['ex_2_yearto']; ?></span>
		</div>
            <?php endif; ?>
	</div>
	
	<div id="career-survey-holder">
            <?php if($getCareerProfile['ex_2_desc'] != ''): $experiencePositionCnt++; ?>
		<div id="career-survey-question">
                    <strong>Description: </strong><br>
			<?= $getCareerProfile['ex_2_desc']; ?>
		</div>
             <?php endif; ?>
	</div>

<div class="clear"></div>
</div>
</div>
<?php if($experiencePositionCnt === 0): $hiderExperiencePosition="none"; endif; ?>
<style>.hiderExperiencePosition{display: <?= $hiderExperiencePosition; ?>!important;}</style>











 <?php $educationPositionCnt = 0; $hiderEducationPosition = "inline"; ?>
<div class="hiderEducationPosition">

<div id="career-title" class="career-title">
Education
</div>
<div id="career-box" class="career-box">

	<div id="career-survey-holder">
		<div id="career-survey-question">
			<strong>Primary: </strong>
		</div>
            <?php if($getCareerProfile['ed_p_school'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                School: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_p_school']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ed_p_degree'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Degree: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_p_degree']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ed_p_study'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Study: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_p_study']; ?></span>
		</div>
            <?php endif; ?>
	    <?php if($getCareerProfile['ed_p_years'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Years at Institute: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_p_years']; ?> Years</span>
		</div>
            <?php endif; ?>
	     <?php if($getCareerProfile['ed_p_status'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Current Status: <span class="inputAnswerCurrent"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['ed_p_status']); ?></span>
		</div>
            <?php endif; ?>
	</div>

	<div id="career-survey-holder">	
		<div id="career-survey-question">
			<strong>Secondary: </strong>
		</div>
            <?php if($getCareerProfile['ed_s_school'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                School: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_s_school']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ed_s_degree'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Degree: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_s_degree']; ?></span>
		</div>
            <?php endif; ?>
            <?php if($getCareerProfile['ed_s_study'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Study: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_s_study']; ?></span>
		</div>
            <?php endif; ?>
	    <?php if($getCareerProfile['ed_s_years'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Years at Institute: <span class="inputAnswerCurrent"><?= $getCareerProfile['ed_s_years']; ?> Years</span>
		</div>
            <?php endif; ?>
	     <?php if($getCareerProfile['ed_s_status'] != ''): $educationPositionCnt++; ?>
		<div id="career-survey-question">
                Current Status: <span class="inputAnswerCurrent"><?= preg_replace('/(?<!\ )[A-Z]/', ' $0', $getCareerProfile['ed_s_status']); ?></span>
		</div>
            <?php endif; ?>
	</div>
	
	
<div class="clear"></div>
</div>
</div>
<?php if($educationPositionCnt === 0): $hiderEducationPosition="none"; endif; ?>
<style>.hiderEducationPosition{display: <?= $hiderEducationPosition; ?>!important;}</style>




 <?php $accomplishPositionCnt = 0; $hiderAccomplishPosition = "inline"; ?>
<div class="hiderAccomplishPosition">

	<div id="career-title" class="career-title">
		Notable Accomplishments
	</div>
	<div id="career-box" class="career-box">
            
        <?php if($getCareerProfile['acc_1_name'] != ''): $accomplishPositionCnt++; ?>
        <div id="career-survey-question">
            <?= $getCareerProfile['acc_1_name']; ?>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_1_year']; ?></span>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_1_type']; ?></span>
            </div>
        <?php endif; ?>
            
            
       <?php if($getCareerProfile['acc_2_name'] != ''): $accomplishPositionCnt++; ?>
        <div id="career-survey-question">
            <?= $getCareerProfile['acc_2_name']; ?>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_2_year']; ?></span>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_2_type']; ?></span>
            </div>
        <?php endif; ?>
            
       <?php if($getCareerProfile['acc_3_name'] != ''): $accomplishPositionCnt++; ?>
        <div id="career-survey-question">
            <?= $getCareerProfile['acc_3_name']; ?>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_3_year']; ?></span>
            <span class="inputAnswerCurrent"><?= $getCareerProfile['acc_3_type']; ?></span>
            </div>
        <?php endif; ?>
	
        <div class="clear"></div>	
        </div>
</div>
<?php if($accomplishPositionCnt === 0): $hiderAccomplishPosition="none"; endif; ?>
<style>.hiderAccomplishPosition{display: <?= $hiderAccomplishPosition; ?>!important;}</style>








<div class="clear"></div>
</form>	




<div id="career-note" class="career-note">
We don't believe in references. You decide who you are.

</div>
<?php include_once '../template/foot.php';?>