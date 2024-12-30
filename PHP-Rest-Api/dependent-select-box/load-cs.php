<?php


$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed". mysqli_connect_error());


if ($_REQUEST["type"] == "") {
	$sql = "SELECT * FROM `country_td`";

	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful");
	
	
	$str = "";
	
	while ($row = mysqli_fetch_assoc($query)) {
		$str .= "<option value='{$row['cid']}'> {$row['cname']} </option>";
	}
	
} else if($_REQUEST["type"] == "stateData") {

	$sql = "SELECT * FROM `state_td` where country = {$_REQUEST['id']} ";

	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful");
	
	
	$str = "";
	
	while ($row = mysqli_fetch_assoc($query)) {
		$str .= "<option value='{$row['sid']}'> {$row['sname']} </option>";
	}
}


echo $str;


?>