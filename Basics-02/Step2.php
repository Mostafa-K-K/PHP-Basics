<?php

function greaterFn($num)
{
    ($num > 30) ?
    $str = "$num is greater than 30"
    : (($num > 20) ?
        $str = "$num is greater than 20"
        : (($num > 10) ?
            $str = "$num is greater than 10"
            : $str = "$num is less than 10"));
    return $str;
}

$num = greaterFn(9);
echo $num;

?>