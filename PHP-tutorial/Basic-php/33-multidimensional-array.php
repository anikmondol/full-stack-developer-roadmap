<?php

$emp = [
    [1, "anik", "manager", 5000],
    [2, "salman", "salesman", 2000],
    [3, "mohan", "computer operator", 12000],
    [4, "amir", "driver", 5000],
];

echo "<table border='1' cellpadding='5px' cellspacing='0'>"; 
echo "<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DESIGNATION</th>
    <th>SALARY</th>
</tr>";
for ($row = 0; $row < count($emp); $row++) { 
    echo "<tr>";
    for ($col = 0; $col < count($emp[$row]); $col++) { 
        echo "<td> {$emp[$row][$col]} </td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
