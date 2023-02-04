<?php

//session_start();

$NDB_host = "localhost";
$NDB_user = "root";
$NDB_pass = "root";
$NDB_name = "network";

try
{
     $NDB_con = new PDO("mysql:host={$NDB_host};dbname={$NDB_name}",$NDB_user,$NDB_pass);
     $NDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'classes/class.network.php';
$network = new NETWORK($NDB_con);