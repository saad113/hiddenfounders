<?php
session_start();

$restid = $_GET['id'];
$restname = $_GET['name'];
$restadd = $_GET['add'];
$userid = $_SESSION['id'];

require_once "config.php";


$sql = "INSERT INTO likes (user_id,place_id,name,address)
VALUES ('$userid','$restid','$restname','$restadd')
";

if ($link->multi_query($sql) === TRUE) {
	header("location: closest.php?lat=".$_SESSION['userlat']."&lon=".$_SESSION['userlon']."");
} else {
    echo "Error: " . $sql . "<br>" . $link->error ;
}

$link->close();



?>