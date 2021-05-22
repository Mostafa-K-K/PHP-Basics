<?php

function isArmstrong($num)
{
    $lenght = strlen($num);
    $sum = 0;
    $var = $num;
    while ($var != 0) {
        $digit = $var % 10;
        $sum = $sum + ($digit ** $lenght);
        $var = $var / 10;
    }
    if ($sum == $num) {
        return $num . " is Armstrong number";
    } else {
        return $num . " is not Armstrong number";
    }
}

echo isArmstrong(153);

?>