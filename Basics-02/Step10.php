<?php

function Palindrome($string)
{
    if (strrev($string) == $string) {
        echo "\"$string\" is Palindrome";
    } else {
        echo "\"$string\" is Not Palindrome";
    }
}

Palindrome("helleh");

?>