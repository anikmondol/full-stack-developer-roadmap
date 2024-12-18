<?php


// echo checkdate("2", "29", "2024");

$date = date_create("12-12-2012");
$date1 = date_create("12-12-2023");


$deff = date_diff($date1, $date);


echo $deff->format("%r%a Days");




// echo $deff->days;

// if ($deff->invert) {
//     echo "-" . $deff->days;
// } else {
//     echo $deff->days;
// }


echo "<pre>";
print_r($deff);





?>