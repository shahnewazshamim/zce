<?php

$age = function($x) {

    if($x <= 10)

        $str = "a Child";

    else if($x > 10 && $x <=17)

        $str = "a Teen-ager";

    else if($x > 18 && $x <=35)

        $str = "Young";

    else if($x > 35 && $x <=45)

        $str = "in Mid age";

    else if($x > 45 && $x <=55)

        $str = "Getting old";

    else

        $str = "Old";


    return "You are $str";

};

echo $age(9);