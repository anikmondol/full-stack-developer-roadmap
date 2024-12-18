<?php

$date = date_create("4-10-2000");

date_time_set($date, "12", "30");

echo date_format($date, "d/m/Y H:i:s a");



?>