<?php

$db_host = "localhost";
$db_user = "root";
// $db_user = "digiprim_insight";
$db_pass = "";
// $db_pass = "2a6nJCa;GcnM";
$db_name = "bbm";
// $db_name = "digiprim_insight";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Error: " . $e->getMessage());
}
?>