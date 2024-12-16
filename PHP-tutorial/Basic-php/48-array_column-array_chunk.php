<?php

$emp = [
    ["id" => 1, "name" => "anik", "designation" => "manager", "salary" => 5000],
    ["id" => 2, "name" => "salman", "designation" => "salesman", "salary" => 2000],
    ["id" => 3, "name" => "mohan", "designation" => "computer operator", "salary" => 12000],
    ["id" => 4, "name" => "amir", "designation" => "driver", "salary" => 5000],
];

// $new = array_column($emp, "name");
// $new = array_column($emp, "name", "id");

echo "<pre>";
// print_r($new);

$new = array_chunk($emp, 3);

print_r($new);

?>