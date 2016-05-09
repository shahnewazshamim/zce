<?php

$lucky = array(

    function() {

        return "You got a Phone";

    },

    function() {

        return "You got an Smart-phone";

    },

    function() {

        return "You got a Tablet";

    },

    function() {

        return "You got an iPhone";

    },

    function() {

        return "You got an iPad";

    },

    function() {

        return "You got a Macbook";

    },

    function() {

        return "You got an iMac";

    },

    function() {

        return "You got a Television";

    },

    function() {

        return "You got a Bicycle";

    },

    function() {

        return "You got a Bike";

    },

    function() {

        return "You got a Car";

    },

);
$random = rand(0, 50);

if(!array_key_exists($random, $lucky)) {

    echo "You are unlucky";

} else {

    echo $lucky[$random]();

}