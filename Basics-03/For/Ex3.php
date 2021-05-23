<?php

$nb = 5;

for ($i = 1; $i <= $nb; $i++) {
    for ($y = 0; $y < $i; $y++) {
        echo "*";
    }
    echo "<br />";
}
for ($i = $nb; $i > 0; $i--) {
    for ($y = $i; $y > 0; $y--) {
        echo "*";
    }
    echo "<br />";
}

?>