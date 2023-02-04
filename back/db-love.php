<?php

//session_start();

$LDB_host = "localhost";
$LDB_user = "root";
$LDB_pass = "root";
$LDB_name = "love";

try
{
     $LDB_con = new PDO("mysql:host={$LDB_host};dbname={$LDB_name}",$LDB_user,$LDB_pass);
     $LDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'classes/class.love.php';
$love = new LOVE($LDB_con);