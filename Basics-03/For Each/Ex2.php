<?php

$transactions = array(
    array(
        "id" => 1,
        "name" => "Gaby",
        "email" => "gaby@codi.tech",
    ),
    array(
        "id" => 3,
        "name" => "Omar",
        "email" => "omar@codi.tech",
    ),
);

$array = data($transactions);
function data($array)
{
    foreach ($array as $key => $val) {
        if (is_array($val)) {
            echo "id: " . $val['id'] . ", name: " . $val['name'] . ", email: " . $val['email'];
        }
        echo "<br />";
    }
}
