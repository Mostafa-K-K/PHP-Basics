<?php

function sumOfDigits($num){
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $digit = $num % 10;
        $sum = $sum + $digit;
        $num = $num/10;
    }
    return $sum;
}

echo sumOfDigits(991999);

?>