<?php

    $name = "John";
    $currentHour = date("G");
    $time = date("g:i a");
    $leapYear = date("L");
    $year = date("Y");

    if ($currentHour > 17) {
        echo("Good evening $name.");
    } elseif ($currentHour >= 12 && $currentHour < 16) { 
        echo("Good afternoon $name.");
    } elseif ($currentHour < 12) {
        echo("Good morning $name.");
    }

    echo "<br>It's currently $time.<br>";

    if ($leapYear) {
        echo "$year is a leap year.";
    } else {
        echo "$year isn't a leap year.";
    }

?>