<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("Connection failed");

$limit = 5;
if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
} else {
    $page = 0;
}

$offset = $page * $limit;

$sql = "SELECT * FROM users LIMIT {$offset}, {$limit}";
$query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if (mysqli_num_rows($query) > 0) {
    $output = "";
    $output .= "<tbody>";
    while ($row = mysqli_fetch_assoc($query)) {
        $row["id"] = htmlspecialchars($row["id"]);
        $row["first_name"] = htmlspecialchars($row["first_name"]);
        $row["last_name"] = htmlspecialchars($row["last_name"]);
        
        $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td></tr>";
    }
    $output .= "</tbody>
                <tbody id='pagination'>
                  <tr>
                    <td colspan='2'>
                      <button id='ajaxbtn' data-id='" . ($page + 1) . "'>Load More</button>
                    </td>
                  </tr>
                </tbody>";
    echo $output;

} else {
    echo "<tr><td colspan='2'>No more records found.</td></tr>";
}

mysqli_close($conn);
?>
