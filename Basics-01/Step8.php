<?php

$items = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");

echo "Hello sir, do you have "
    . $items[0] . ", "
    . $items[1] . ", "
    . "and "
    . $items[2] . "? Also if you sell fruits can I find a "
    . $items[5] . "?";

?>

<?php

$arraym = array(
    "eggs" => array("balade", "mazere3"),
    "milk" => array("Fresh", "Taanayel"),
    "water-pack" => array("Tanoureen", "Reem")
);

echo "<br>Hey Sir, Please I need 1 pack of "
    . $arraym["eggs"][0]
    . " eggs and 3 "
    . $arraym["water-pack"][1]
    . " Water Pack.";

?>