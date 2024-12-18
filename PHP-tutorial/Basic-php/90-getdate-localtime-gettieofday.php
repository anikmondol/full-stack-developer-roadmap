<?php

// date_default_timezone_set("Asia/Dhaka");


// $oldDate = mktime(0,0,0,03,15,2015);


// echo getdate()["month"];
// echo getdate($oldDate)["year"] . "-" . getdate($oldDate)["month"];

// echo "<pre>";
// print_r(getdate($oldDate));


// echo gettimeofday()["sec"];

// echo gettimeofday(true);

// echo "<pre>";
// print_r(gettimeofday());

$oldDate = mktime(0,0,0,0,12,2012);

echo "<pre>";
print_r(localtime($oldDate, true));


?>