<?php
    // for ($i = 0; $i < 12; $i++) {
    //     $array = [];
    //     for ($j = 0; $j < 4; $j++) {
    //         $rand = mt_rand(1, 100);
    //         echo "$i, $rand <br>";
    //     }
    // }

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*\t";
        }
        echo "<br>";
    }
?>