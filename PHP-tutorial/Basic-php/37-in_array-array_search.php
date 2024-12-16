<?php

$numbers = array(11, 20, 74, "55", 65);

// echo array_search(74, $numbers);

// echo in_array(55,$numbers);
// echo in_array(535,$numbers);

// if (in_array(55,$numbers)) {
//     echo "true";
// } else {
//     echo "false";
// }


// if (in_array(55,$numbers,true)) {
//     echo "true";
// } else {
//     echo "false";
// }




$emp = [
    1 => [1, "anik", "manager", 5000],
    2 => [2, "salman", "salesman", 2000],
   3 => [3, "mohan", "computer operator", 12000],
    [4, "amir", "driver", 5000],
];

echo array_search([3, "mohan", "computer operator", 12000], $emp);


// if (in_array([2, "salman", "salesman", 2000],$emp,true)) {
//     echo "true";
// } else {
//     echo "false";
// }


?>