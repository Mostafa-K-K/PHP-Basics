<?php

$transactions = array(
    array(
        "id" => 1,
        "debit" => 2,
        "credit" => 3,
    ),
    array(
        "id" => 2,
        "debit" => 15,
        "credit" => 10,
    ),
);

$array = data($transactions);
function data($array)
{
    foreach ($array as $key => $val) {
        if (is_array($val)) {
            echo "ID: " . $val['id'] . " => amount: " . abs($val['debit'] - $val['credit']);
        }
        echo "<br />";
    }
}

?>