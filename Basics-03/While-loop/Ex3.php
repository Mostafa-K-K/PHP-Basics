<?php

$str = "Hello world. It's a beautiful day. Hello";
$array = explode(" ", $str);

// echo substr_count($str, 'Hello');

print_r(array_count_values($array));

?>