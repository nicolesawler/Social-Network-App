<?php
        //Require for all pages
	require_once '../class/user.php';
        
        //Constants defines
	require_once 'config.php';
        
     /**
    * Use to build page layout for every page...
      * separate pieces and build new methods for pages
    */
        
        /// all pages
	$user->indexHead();
	$user->indexTop();
        
        //this could be any page structure
	$user->loginForm();
	$user->activationForm();
	$user->indexMiddle();
	$user->registerForm();
        
        
        /// all pages
	$user->indexFooter();
?>
