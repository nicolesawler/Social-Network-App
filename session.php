<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
$DB_name = "accounts";

try {
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) { 
    echo 'Connection did not work out!';
    //return false;
}

include 'back/classes/class.session.php';
$handler = new SESSION($DB_con);
session_set_save_handler($handler, true);
session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//echo bin2hex(openssl_random_pseudo_bytes(32));
// Destroy session

echo session_id();

$stmt=$DB_con->prepare('INSERT INTO sessions(id,date_updated) VALUES (?,NOW())' );
$stmt->execute([session_id()]);
        
if ($stmt) {
    echo 'added';
} else {
   echo 'not added';
}


//session_destroy();