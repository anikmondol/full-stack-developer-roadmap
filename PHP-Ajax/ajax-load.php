<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {

    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">

    <tr>
    <th width="100px">ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th width="100px">Edit</th>
    <th width="100px">Delete</th>
    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
        <td>{$row['id']}</td>
        <td>{$row['first_name']}</td>
        <td>{$row['last_name']}</td>
        <td><button class='edit' data-eid='{$row["id"]}'>Edit</button></td>
        <td><button class='delete' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    }

    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
} else {

    echo "<h2>no date found</h2>";
}
