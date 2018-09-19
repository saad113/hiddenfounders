<?php
session_start();

$placeid = $_GET['place_id'];
$user = $_SESSION['id'];

require_once "config.php";

$sql = "DELETE FROM likes WHERE place_id = '$placeid' AND user_id = '$user' ";

if ($link->multi_query($sql) === TRUE) {
	header("location: liked.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error ;
}

$link->close();

?>?>