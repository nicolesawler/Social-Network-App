<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

//session_start();

$GDB_host = "localhost";
$GDB_user = "root";
$GDB_pass = "root";
$GDB_name = "goals";

try
{
     $GDB_con = new PDO("mysql:host={$GDB_host};dbname={$GDB_name}",$GDB_user,$GDB_pass);
     $GDB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once 'classes/class.goals.php';
$goals = new GOALS($GDB_con);