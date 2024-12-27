<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$limit_per_page = 5;

$page_no = "";

if (isset($_REQUEST["page_no"])) {
    $page_no = $_REQUEST["page_no"];
} else {
    $page_no = 1;
}


$offset = ($page_no - 1) * $limit_per_page;


$sql = "SELECT * FROM `users` limit {$offset}, {$limit_per_page}";

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {

    $output .= '<table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= " <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['first_name']} {$row['last_name']}</td>
                    </tr>";
    }

    $output .= "                </tbody>
            </table>";

    $sql_total = "SELECT * FROM `users`";
    $records = mysqli_query($conn, $sql_total);
    $total_records = mysqli_num_rows($records);
    $total_pages = ceil($total_records / $limit_per_page);

    $output .= '<div id="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        $active_class = ($i == $page_no) ? 'active' : '';
        $output .= "<a href='' id='{$i}' class='{$active_class}'>{$i}</a>";
    }


    $output .= '</div>';




    mysqli_close($conn);

    echo $output;
} else {

    echo "<h2>no date found</h2>";
}
