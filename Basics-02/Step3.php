<?php

function swap($var1, $var2)
{
    $var0 = $var1;
    $var1 = $var2;
    $var2 = $var0;
    return $var1 . "<br />" . $var2;
}

$var0 = swap(9, 7);
echo $var0;

?>