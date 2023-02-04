<?php

//session_start();

$SDB_host = "localhost";
$SDB_user = "root";
$SDB_pass = "root";
$SDB_name = "stars";

try
{
     $SDB_con = new PDO("mysql:host={$SDB_host};dbname={$SDB_name}",$SDB_user,$SDB_pass);
     $SDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'classes/class.stars.php';
$stars = new STARS($SDB_con);