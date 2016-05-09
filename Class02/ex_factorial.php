<?php
/**
 * Created by PhpStorm.
 * User: Md. Shamim Shahnewaz
 * Date: 5/9/2016
 * Time: 1:29 PM
 */
function get_factorial($number) {

    static $product = 1;

    if($number > 1) {

        $product = $product * $number;

        $number--;

        get_factorial($number);

    }

    return $product;

}

echo get_factorial(5);