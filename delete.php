<?php
// Connect to db
require_once "db_connect.php";
// Get the Primary-key
$id = $_GET['ISBN'];
// Media-query to get the right media-information
$sql = "SELECT * FROM `media` WHERE ISBN = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

// Media-query to delete the selected media
$deleteSql = "DELETE FROM `media` WHERE ISBN = '$id'";
$result = mysqli_query($connect, $deleteSql);
// Immediatly after delete transfer back to index.php
header("Location: index.php");

?>
