<?php

// function fac($number){

//     if ($number <= 5) {
//         echo "$number <br>";
//         fac($number + 1);
//     }
// }

// fac(3);

function factorial($number){
    if ($number == 0) {
        return 1;
    } else {
        return ($number * factorial($number - 1));
    }
    
}


echo factorial(5);

?>