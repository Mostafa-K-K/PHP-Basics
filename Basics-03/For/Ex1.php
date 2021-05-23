<?php

$sum = 0;
$nb = "12345";
$lenght = strlen($nb);

for ($i = 0; $i < $lenght; $i++) {
    $sum += $nb[$i];
}
echo $sum;

?>