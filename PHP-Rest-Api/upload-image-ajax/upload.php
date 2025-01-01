<?php
if (!empty($_FILES['file']['name'])) {
    $filename = $_FILES['file']['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $valid_extensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($extension, $valid_extensions)) {
        $new_name = rand() . "." . $extension;
        $path = "images/" . $new_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            echo '<img src="' . $path . '" style="max-width:200px;max-height:200px;" /><br><br>
            <button data-path="' . $path . '" id="delete_btn">Delete</button>';
        } else {
            echo '<script>alert("Failed to upload file.")</script>';
        }
    } else {
        echo '<script>alert("Invalid File Format.")</script>';
    }
} else {
    echo '<script>alert("Please Select a File.")</script>';
}
?>
