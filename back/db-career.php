<?php

//session_start();

$CDB_host = "localhost";
$CDB_user = "root";
$CDB_pass = "root";
$CDB_name = "love";

try
{
     $CDB_con = new PDO("mysql:host={$CDB_host};dbname={$CDB_name}",$CDB_user,$CDB_pass);
     $CDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'classes/class.career.php';
$career = new CAREER($CDB_con);