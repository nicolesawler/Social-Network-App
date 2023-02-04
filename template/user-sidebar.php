<div id="side-space" class="side-space">

<?php

if(defined('USER_PROFILE_ID')){
    $viewProfile_First = $viewingProfileUser['first'];
    $viewProfile_Last = $viewingProfileUser['last'];
    $viewProfile_Birthday = $viewingProfileUser['birthday'];
    $viewProfile_Zodiac = $viewingProfileUser['zodiac'];
    $viewProfile_Desc = $viewingProfileUser['user_description'];
?>

	
	<div class="owner">
	<div class="profile-pic"></div>
		<p>
		  <strong><?= $viewProfile_First; ?> <?= $viewProfile_Last; ?></strong>
		</p>
                
                
                <?php 
                /**
                * When user is viewing their own profile
                */  
                ?>
                <?php  if(USER_PROFILE_ID == $user_id){  ?>
                <p>
                    <a href="http://localhost/goalwoke/view?profile=<?= $_SESSION['user_name']; ?>"><button class="add-friend-button-sidebar">View Profile</button></a>
		</p>
                <p>
			<a href="http://localhost/goalwoke/"><button class="add-love-button-sidebar">Edit Profile</button></a>
		</p>
                <p>
			<a href=""><button class="add-career-button-sidebar">Find People</button></a>
		</p>

                <?php 
                /**
                * When viewing someone else's profile
                */  
                ?>
                <?php  }else if($connection = $network->checkIfConnected($user_id,USER_PROFILE_ID)){  ?>
                <p>
			<button id="Add<?= $connection; ?>Button" class="add-<?= strtolower($connection); ?>-button-sidebar">Message</button>
		</p>
                <p>
			<button id="BigRemoveButton" class="big-remove-button-sidebar">Add to Favorites</button>
		</p>
                
              
                <?php 
                /**
                * Viewing use profile and user is requested
                */  
                ?>
                <?php  }else if($connectionRequested = $network->checkIfRequested($user_id,USER_PROFILE_ID)){ ?>
                                     
                    <?php if($connectionRequested === 'FRIEND'){ ?>
                        <p>
			<button id="AddFriendButton" class="add-friend-button-sidebar">Requested</button>
                        </p>
                    <?php }else{ ?>
                        <p>
			<button id="AddFriendButton" class="add-friend-button-sidebar" disabled>Add Friend</button>
                        </p>
                    <?php } ?>
                    
                    
                    <?php if($connectionRequested === 'LOVE'){ ?>
                        <p>
			<button id="AddLoveButton" class="add-love-button-sidebar">Requested</button>
                        </p>
                    <?php }else{ ?>
                         <p>
			<button id="AddLoveButton" class="add-love-button-sidebar" disabled>Add Match</button>
                        </p>
                    <?php } ?>



                    <?php if($connectionRequested === 'CAREER'){ ?>
                        <p>
			<button id="AddCareerButton" class="add-career-button-sidebar">Requested</button>
                        </p>
                    <?php }else{ ?>
                        <p>
			<button id="AddCareerButton" class="add-career-button-sidebar" disabled>Add Co-Career</button>
                        </p>
                    <?php } ?>

                
                                 
                <?php 
                /**
                * Viewing use profile and user is requested
                */  
                ?>
                <?php  }else if($connectionRequested = $network->checkIfConfirmApproval($user_id,USER_PROFILE_ID)){ ?>
                                     
                    <?php if($connectionRequested === 'FRIEND'){ ?>
                        <p>
			<button id="AddFriendButton" class="add-friend-button-sidebar">Approve</button>
                        </p>
                    <?php }else if($connectionRequested === 'LOVE'){ ?>
                        <p>
			<button id="AddLoveButton" class="add-love-button-sidebar">Approve</button>
                        </p>
                    <?php }else if($connectionRequested === 'CAREER'){ ?>
                        <p>
			<button id="AddCareerButton" class="add-career-button-sidebar">Approve</button>
                        </p>
                    <?php }else{ ?>
                        <p>
			<button id="AddFriendButton" class="add-friend-button-sidebar" disabled>Approve</button>
                        </p>
                    <?php } ?>
     
                        <p>
			<button id="RequestButtonDeny" class="RequestButtonDeny" >Deny</button>
                        </p>
                        
                        
                <?php  
                /**
                * Viewing profile not connected with user
                */  
                ?>
                <?php  } else {  ?>
                
                <p>
			<button id="AddFriendButton" class="add-friend-button-sidebar">Add Friend</button>
		</p>
                <p>
			<button id="AddLoveButton" class="add-love-button-sidebar">Add Match</button>
		</p>
                <p>
			<button id="AddCareerButton" class="add-career-button-sidebar">Add Co-Career</button>
		</p>
                
                
               
                
                <?php  }  ?>
                
		<p class="zodiac" id="zodiac">
			<a class="zodiac-link-sidebar" href="" ><?= $viewProfile_Zodiac; ?></a>
		</p>
		<p>
			<a class="auto-bio-link-sidebar" href="" >About</a>
		</p>
		<p>

                    <br />
			<span class="quote-sidebar">Some quote goes here.</span>
		</p>

	</div>


<script>
    var user = <?php echo $user_id; ?>;
    var owner = <?php echo USER_PROFILE_ID; ?>;
</script>
<script src="http://localhost/goalwoke/assets/js/network.js" /></script>

<?php }else{ ?>
            
	
	<div class="owner">
	<div class="profile-pic"></div>
		<p>
			<strong><?php print(ucfirst(FIRST_NAME)); ?> <?php print(ucfirst(LAST_NAME)); ?></strong>
		</p>
                <p>
                    <a href="http://localhost/goalwoke/view?profile=<?= USER_NAME; ?>"><button class="add-friend-button-sidebar">View Profile</button></a>
		</p>
                <p>
			<a href="http://localhost/goalwoke/"><button class="add-love-button-sidebar">Edit Profile</button></a>
		</p>
                <p>
			<a href=""><button class="add-career-button-sidebar">Find People</button></a>
		</p>
		<p class="zodiac" id="zodiac">
			<a class="zodiac-link-sidebar" href="" ><?php print(ucfirst(USER_ZODIAC)); ?></a>
		</p>
		<p>
			<a class="auto-bio-link-sidebar" href="" >About</a>
		</p>
		<p>

                    <br />
			<span class="quote-sidebar">Some quote goes here.</span>
		</p>
	</div>
	


    
<?php } ?>

	<div class="newest-gritters-sidebar">
		<h2>New People</h2>
		<p class="newest-by-zodiac-sidebar">Aries</p>
		
	</div>
	
</div>
