<?php

$personal_details = array("name" => "Rajesh Rao",
    "occupation" => "Engineer",
    "age" => 39,
    "country" => "India",
);

function getData($arr)
{
    foreach ($arr as $key => $value) {
        echo "$key=$value";
        echo "<br />";
    }
}

getData($personal_details);

?>