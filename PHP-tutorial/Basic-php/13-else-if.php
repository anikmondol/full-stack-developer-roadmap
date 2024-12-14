<?php

$n = 40;

if ($n >= 80 && $n <= 100) {
    echo "got A+";
} elseif($n >= 60 && $n < 80) {
    echo "got A";
}elseif($n >= 40 && $n < 60) {
    echo "got B";
}elseif($n >= 33 && $n < 40) {
    echo "got C";
}elseif($n < 33 ) {
    echo "you are fail";
}else{
    echo "enter valid number";
}



?>