<?php

$x = 4;
echo "Factorial of $x is : ";

$nb = 1;
while ($x > 1) {
    $nb *= $x;
    $x--;
}
echo $nb;

?>