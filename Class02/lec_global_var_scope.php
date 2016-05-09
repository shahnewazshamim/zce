<?php

$i = 1;

function global_var_scope() {

    global $i;

    return $i++;

}

for($j = 1; $j <= 10; $j++) {

    echo global_var_scope() . "<br>";

}