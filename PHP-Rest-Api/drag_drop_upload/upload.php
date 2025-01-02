<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed" . mysqli_connect_error());





if ($_FILES['file']['name'] != "") {

	$file_names = '';

	$total = count($_FILES['file']['name']);

	for ($i = 0; $i < $total; $i++) {
		$filename = $_FILES['file']['name'][$i];

		$extension = pathinfo($filename, PATHINFO_EXTENSION);


		$valid_extensions = array("png", "jpg", "jpeg");


		if (in_array($extension, $valid_extensions)) {

			$new_name = rand() . "." . $extension;

			$path = "images/" . $new_name;

			move_uploaded_file($_FILES['file']['tmp_name'][$i], $path);

			$file_names .= $new_name . " , ";
		} else {
			echo "false";
		}
	}
	$sql = "INSERT INTO `uploads`(`file_name`) VALUES ('$file_names')";

	if (mysqli_query($conn, $sql)) {
		echo "true";
	} else {
		echo "false";
	}
	


}
