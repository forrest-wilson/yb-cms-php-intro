<?php
    $n = array();
    $n = array(3, 1, 4, 5, 2);

    echo $n[1];

    echo "<br>";

    // Ascending order logic
    for ($i = 0; $i < count($n); $i++) {
        for ($j = $i; $j < count($n); $j++) {
            if ($n[$i] > $n[$j]) {
                $temp = $n[$i];
                $n[$i] = $n[$j];
                $n[$j] = $temp;
            }
        }
    }

    print_r($n);

    echo "<br>";

    // Descending order logic
    for ($i = 0; $i < count($n); $i++) {
        for ($j = $i; $j < count($n); $j++) {
            if ($n[$i] < $n[$j]) {
                $temp = $n[$i];
                $n[$i] = $n[$j];
                $n[$j] = $temp;
            }
        }
    }

    print_r($n);

    echo "<br>";

    $marks = array(56, 346, 248, 54);
    sort($marks);
    print_r($marks);
    rsort($marks);
    echo "<br>";
    print_r($marks);

    echo "<br>";

    // Foreach syntax
    foreach($n as $v) {
        echo $v . "<br>";
    }
?>