<?php

$x = 7;

for ($i = 1; $i <= $x; $i++) {
    for ($j = 1; $j <= $x; $j++) {
        if (($i == $j) || ($i == 1) || ($i == $x)) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br />";
}

?>