<?php

$db_host = "localhost";
$db_user = "root";
// $db_user = "u8766973_bbm";
$db_pass = "";
// $db_pass = "bbm@BombaGrup2021";
$db_name = "bbm";
// $db_name = "u8766973_bbm";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Error: " . $e->getMessage());
}
?>