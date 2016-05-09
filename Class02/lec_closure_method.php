<?php

function closure_method($number) {

    return function($x) use($number) {

        return $number * $x;

    };

}

$closure_handler = closure_method(100);

echo $closure_handler(5);

echo "<br>";

echo $closure_handler(1);