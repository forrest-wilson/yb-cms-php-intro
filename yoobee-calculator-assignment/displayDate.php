<?php
    $hour = date("G");
    $time = date("g:i a");
    $fullDate = date("l, jS F o-m-d");

    if ($hour >= 17) {
        echo("<p>Good evening!</p>");
    } elseif ($hour >= 12 && $hour < 16) { 
        echo("<p>Good afternoon!</p>");
    } elseif ($hour < 12) {
        echo("<p>Good morning!</p>");
    }

    echo "<p>It's currently $time, $fullDate</p>";
?>