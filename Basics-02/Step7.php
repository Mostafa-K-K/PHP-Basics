<?php

function replace($string)
{
    $string = str_replace("Python", "PHP", $string);
    return $string;
}

echo replace("hello Python");

?>