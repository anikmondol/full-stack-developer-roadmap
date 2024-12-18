<?php
date_default_timezone_set("Asia/Dhaka");
echo "today is " . date("d/m/Y G:i:s a") . "<br>";



echo date("d-m-Y",mktime(0,0,0,0, 15, 2003)) . "<br>";
echo date("d-m-Y",gmmktime(0,0,0,0, 15, 2003));


?>