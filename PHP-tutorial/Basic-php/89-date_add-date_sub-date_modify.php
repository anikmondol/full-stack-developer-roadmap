<?php

$date = date_create("15-03-2013");

// date_add($date, date_interval_create_from_date_string("10 days"));

// date_sub($date, date_interval_create_from_date_string("10 days"));

// date_modify($date, "10 days");

echo date_format($date, "Y-m-d");


?>