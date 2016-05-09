<?php

function var_ref_param(&$x) {

    $x = 50;

}

$y = 10;

var_ref_param($y);

echo $y;