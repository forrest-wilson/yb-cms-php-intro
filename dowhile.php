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
            break;
            echo "This won't print";
        } else {
            continue;
            echo "This sentance will not be printed";
        }
    }
?>