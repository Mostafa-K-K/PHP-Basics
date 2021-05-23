<?php

function prime($number)
{
    if ($number == 1) {
        return 0;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$n = 9;
$result = prime($n);
if ($result == 1) {
    echo "$n in Prime";
} else {
    echo "$n is Not Prime";
}

?>