<?php

// $conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


// $sql = "SELECT * FROM `users`";

// $result = mysqli_query($conn, $sql) or die("sql query failed");

// $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

// $json_data = json_encode($output, JSON_PRETTY_PRINT);

// $file_name = "my-" . date("d-m-Y") . ".json";

// if (file_put_contents("json/{$file_name}", $json_data)) {
//     echo $file_name . " file created";
// } else {
//     echo "sorry";
// }


if (isset($_REQUEST["save"])) {

    if (file_exists("json/users.json")) {
        $fname = $_REQUEST["fname"];
        $lname = $_REQUEST["lname"];

        if ($fname != "" && $lname != "") {

            $current_data = file_get_contents('json/users.json');

            $array_data = json_decode($current_data, true);

            $new_data = array(
                "first_name" => $fname,
                "last_name" => $lname,
            );

            $array_data[] = $new_data;
            $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

            if (file_put_contents("json/users.json", $json_data)) {
                echo "<h3>successful saved data</h3>";
            } else {
                echo "sorry";
            }
        } else {
            echo "<h2> All form fields age required </h2>";
        }
    } else {
        echo "try again";
    }
}
