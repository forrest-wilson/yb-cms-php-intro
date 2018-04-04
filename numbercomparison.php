<?php
    $one = 14;
    $two = 60;
    $three = 10;

    if ($one > $two) {
        echo "$one is bigger than $two";
    } else {
        echo "$one is not bigger than $two";
    }

    echo "<br>";

    if ($one > $two && $one > $three) {
        echo "$one is the biggest";
    } else if ($two > $one && $two > $three) {
        echo "$two is the biggest";
    } else if ($three > $one && $three > $two) {
        echo "$three is the biggest";
    }
?>