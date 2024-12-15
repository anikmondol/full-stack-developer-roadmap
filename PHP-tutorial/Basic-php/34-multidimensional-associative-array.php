<?php

$marks = [
    "anik" => ["physics" => 85, "maths" => 78, "chemistry" => 52],
    "salman" => ["physics" => 87, "maths" => 78, "chemistry" => 82],
    "mohan" => ["physics" => 66, "maths" => 67, "chemistry" => 89],
    "amir" => ["physics" => 85, "maths" => 73, "chemistry" => 92],
];



echo "<table border='1' cellpadding='5px' cellspacing='0'>";
echo "<tr>
    <th>name</th>
    <th>physics</th>
    <th>maths</th>
    <th>chemistry</th>
</tr>";


foreach ($marks as $key => $values) {
    echo "<tr>
        <td> $key </td>
    ";
    foreach ($values as $key => $value) {
        echo "<td> {$value} </td>";
    }

    echo "<tr>";
}

echo "</table>";
