<?php

// $emp = [
//     [1, "anik", "manager", 5000],
//     [2, "salman", "salesman", 2000],
//     [3, "mohan", "computer operator", 12000],
//     [4, "amir", "driver", 5000],
// ];

// echo "<table border='1' cellpadding='5px' cellspacing='0'>";
// echo "<tr>
//     <th>ID</th>
//     <th>NAME</th>
//     <th>DESIGNATION</th>
//     <th>SALARY</th>
// </tr>";

// foreach ($emp as list($ID, $NAME, $DESIGNATION, $SALARY)) {
//     echo "<tr> 
//     <td>$ID</td>
//     <td>$NAME</td>
//     <td>$DESIGNATION</td>
//     <td>$SALARY</td> 
//     </tr>";
// }

// echo "</table>";


$emp = [
    ["id" => 1, "name" => "anik", "designation" => "manager", "salary" => 5000],
    ["id" => 2, "name" => "salman", "designation" => "salesman", "salary" => 2000],
    ["id" => 3, "name" => "mohan", "designation" => "computer operator", "salary" => 12000],
    ["id" => 4, "name" => "amir", "designation" => "driver", "salary" => 5000],
];

echo "<table border='1' cellpadding='5px' cellspacing='0'>";
echo "<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DESIGNATION</th>
    <th>SALARY</th>
</tr>";

foreach ($emp as list("id" => $ID, "name" => $NAME, "designation" => $DESIGNATION, "salary" => $SALARY)) {
    echo "<tr> 
    <td>$ID</td>
    <td>$NAME</td>
    <td>$DESIGNATION</td>
    <td>$SALARY</td> 
    </tr>";
}

echo "</table>";
