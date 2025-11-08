<?php
// Infos about the database
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be26_exam4_verenamader_biglibrary";

$connect = mysqli_connect($hostname, $username, $password, $dbname);
// Warning if database couldn't be connected
if(!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
