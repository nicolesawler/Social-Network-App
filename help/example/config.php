<?php
session_start();
define('conString', 'mysql:host=localhost;dbname=accounts');
define('dbUser', 'root');
define('dbPass', 'root');

//validate submit files
define('userfile', 'user.php');
define('loginfile', 'login.php');
define('activatefile', 'activate.php');
define('registerfile', 'register.php');


//template files (with ajax)
define('indexHead', 'inc/indexhead.htm');
define('indexTop', 'inc/indextop.htm');
define('indexFooter', 'inc/indexfooter.htm');

//middle of pages
define('loginForm', 'inc/loginform.php');
define('activationForm', 'inc/activationform.php');
define('indexMiddle', 'inc/indexmiddle.htm');
define('registerForm', 'inc/registerform.php');


define('userPage', 'inc/userpage.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = new User();
$user->dbConnect(conString, dbUser, dbPass);
