<?php

date_default_timezone_set("Asia/Dhaka");
echo date_default_timezone_get(); 

$tz = timezone_open("Asia/Dhaka");
// echo timezone_name_get($tz);


echo "<pre>";
// print_r(timezone_location_get($tz));
// print_r(timezone_identifiers_list());
// print_r(timezone_identifiers_list(16));
print_r(timezone_identifiers_list(256));

?>  