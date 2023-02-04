<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */
 /* NEED MENU FOR IF USER IS ALREADY A FRIEND */

if(defined('USER_PROFILE_ID')){
    
   if(defined('USER_PROFILE_NAME')){

       if(USER_PROFILE_NAME != 'Unknown'){  ?>
  

        <div class="menu-space">
            <ul id="menu">
                    <li class="timeline"><a class="" href="http://localhost/goalwoke/view?profile=<?=USER_PROFILE_NAME;?>">Profile</a></li>
                    <li class="active"><a class="" href="http://localhost/goalwoke/view/goals?profile=<?=USER_PROFILE_NAME;?>">Goals</a></li>
                    <li class="career"><a class="" href="http://localhost/goalwoke/view/career?profile=<?=USER_PROFILE_NAME;?>">Career</a></li>
                    <li class="love"><a class="" href="http://localhost/goalwoke/view/love?profile=<?=USER_PROFILE_NAME;?>">Love</a></li>
                    <li class="glog"><a class="" href="http://localhost/goalwoke/view/glog?profile=<?=USER_PROFILE_NAME;?>">Glog</a></li>
                    <li class="stars"><a class="" href="http://localhost/goalwoke/view/stars?profile=<?=USER_PROFILE_NAME;?>">Stars</a></li>
                    <li class="investments"><a class="" href="http://localhost/goalwoke/view/triggers?profile=<?=USER_PROFILE_NAME;?>">Triggers</a></li>
            </ul>
	</div>


      <?php 
      
        } else {
            echo "username unknown";
           // $user->redirect('../');
    }
    } ?>








           
        <?php  }else{  ?>
           
     
<div class="menu-space">
		<ul id="menu">
			<li class="timeline"><a class="timeline" href="home">Home</a></li>
			<li class="active"><a class="goals" href="goals">Goals</a></li>
			<li class="career"><a class="career" href="career">Career</a></li>
			<li class="love"><a class="love" href="love">Love</a></li>
			<li class="glog"><a class="glog" href="glog">Glog</a></li>
			<li class="stars"><a class="stars" href="stars">Stars</a></li>
			<li class="investments"><a class="investments" href="triggers">Triggers</a></li>
		</ul>
	</div>
       
            
         <?php   
        }


?>