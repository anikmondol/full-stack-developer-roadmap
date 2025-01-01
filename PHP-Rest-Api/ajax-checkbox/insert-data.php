<?php


$conn = mysqli_connect("localhost", "root", "", "phptutorial");

$name = $_REQUEST['name'];
$language = $_REQUEST['language'];


$sql = "INSERT INTO `insert_language`(`name`, `language`) VALUES ('$name','$language')";


if (mysqli_query($conn, $sql)) {
	echo "data save";
} else {
	echo "sorry";
}



?>