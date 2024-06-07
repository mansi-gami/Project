<?php
//session_start();
ob_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "super_market";
$db = mysqli_connect($host, $user, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
