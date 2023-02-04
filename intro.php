<?php

include_once 'back/db-user.php';
?>
<!DOCTYPE html>
<html lang="en" id="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”viewport” content="width=device-width, initial-scale=1" />
<title>Welcome to GoalWoke</title>
<meta name="description" content="A description of the page" /><!-- 155 characters max --> 
<link rel="stylesheet" href="assets/css/layout.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/typography.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/themes.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/framework.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/mobile.css" type="text/css"  />
<style>
    .intro-box{
        width:950px;
        margin:10px auto 10px auto;
        text-align:center;
        font-family:verdana;
    }
    .intro-box h2{
        font-size:32px;
        font-family: Arial;
        color:#080049;
    }
</style>
</head>
<body>
<div id="vision">
	
<?php
require_once 'template/top-navigation.php';
?>
<div class="intro-box">

    <h2><span style="color:#dbce00;">Goal</span>Woke.</h2>

    <h3>A social network to inspire personal growth.</h3>

    <h4></h4>
#goaldiggers giving you the tools to achieve success in the areas of your life that matter most.
</h4> <h4>
We’re challenging the way we build meaningful relationships online.
</h4> <h4>
Driving employee power by connecting you with people in career areas that give you innovation.
</h4>
<a href="home"><button  >Got it, let's go!</button> </a>
<div id="footer-outside" class="">    
   &copy; GritBldr <?= date('Y'); ?>
 </div>

</div>
    
</div>
</body>
</html>