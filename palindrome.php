<?php
    $name = "racecar";
    $lowerName = strtolower($name);
    $eman = strrev($name);
    if ($lowerName == strrev($lowerName)) {
        echo "$name is $eman backwards making it a palindrome";
    } else {
        echo "$name is not a palindrome";
    }
?>