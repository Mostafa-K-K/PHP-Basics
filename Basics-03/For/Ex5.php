<?php

$string = "Hello guys, My name is Mostafa";
$length = strlen($string);
$result = "";

for ($i = 1; $i <= $length; $i++) {
    // echo $string[$length - $i];
    $result = $result . $string[$length - $i];
}

echo $result;

?>