<?php

//session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
//$DB_name = "accounts";
$LDB_name = "love";
$CDB_name = "career";
$GDB_name = "glogs";
$GODB_name = "goals";
$SDB_name = "stars";


try
{
     $LDB_con = new PDO("mysql:host={$DB_host};dbname={$LDB_name}",$DB_user,$DB_pass);
     $LDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


try
{
     $CDB_con = new PDO("mysql:host={$DB_host};dbname={$CDB_name}",$DB_user,$DB_pass);
     $CDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}



try
{
     $GDB_con = new PDO("mysql:host={$DB_host};dbname={$GDB_name}",$DB_user,$DB_pass);
     $GDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


try
{
     $GODB_con = new PDO("mysql:host={$DB_host};dbname={$GODB_name}",$DB_user,$DB_pass);
     $GODB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

try
{
     $SDB_con = new PDO("mysql:host={$DB_host};dbname={$SDB_name}",$DB_user,$DB_pass);
     $SDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}



include_once 'classes/class.viewProfile.php';
$userProfile = new VIEWPROFILE($LDB_con,$CDB_con,$GDB_con,$GODB_con,$SDB_con);
