<?php
    $i = 1;

    do {
        echo "$i <br>";
        $i++;
    } while ($i <= 10);

    // Reset $i before next loop
    $i = 1;

    echo "<br>";

    while ($i <= 10) {
        echo "$i <br>";
        $i++;
    }

    // Reset $i before next loop
    $i = 1;

    echo "<br>";

    while ($i <= 10) {
        echo "$i <br>";
        $i++;

        if ($i == 5) {
            break; // Breaks the while loop
            echo "This won't print";
        } else {
            continue; // Continues to keep the loop running
            echo "This sentance will not be printed";
        }
    }
?>