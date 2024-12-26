<?php

$student_id = $_REQUEST["id"];

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "SELECT * FROM `users` where id = $student_id";

$result = mysqli_query($conn, $sql);




$output = "";

if (mysqli_num_rows($result) > 0) {

   

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                        <td>First Name : </td>
                        <td>
                            <input type='text' id='edit-fname' value = '{$row['first_name']}'>
                        </td>
                    </tr>

                    <tr>
                        <td>Last Name : </td>
                        <td>
                            <input type='text' id='edit-lname' value = '{$row['last_name']}'>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type='submit' id='edit-submit' value='save'>
                            <input type='hidden' id='hidden' value = '{$row['id']}'>
                        </td>
                    </tr>";
    }


    mysqli_close($conn);

    echo $output;
} else {

    echo "<h2>no date found</h2>";
}



?>