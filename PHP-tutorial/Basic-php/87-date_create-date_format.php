<?php

$date = date_create("2025-05-3 11:12:10 am", timezone_open("Asia/Dhaka"));

echo date_format($date, "d/m/Y G:i:s a");



?>