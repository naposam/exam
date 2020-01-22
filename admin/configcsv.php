<?php
$dbHost ="localhost";
$dbUserName = "root";
$dbPassword  ="";
$dbName="db_exam";


$db = new mysqli($dbHost, $dbUserName, $dbPassword,$dbName);

if($db->connect_error){
    die("Unable to connect to database:".$db->connect_error);
}

?>