<?php

function isPowerOfTwo($n)
{
    if (($n & ($n - 1)) == 0) {
        return "$n is power of 2";
    } else {
        return "$n is not power of 2";
    }
}

echo(isPowerOfTwo(4) . "\n");

?>