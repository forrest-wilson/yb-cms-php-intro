<?php
    function fibionacci($n) {
        // Sets the array to initial values
        $fibionacci = [1, 0];

        for ($i = 0; $i < $n; $i++) {
            // Calculates the sum of the array
            $next = array_sum($fibionacci);

            // Removes the first item from the array. This is to keep
            array_shift($fibionacci);

            // Adds the summed $next value to the end of the $fibionacci array
            $fibionacci[] = $next;

            // Echos the sum of the $next array to the DOM
            echo $next . ", ";
        }
    }

    print(fibionacci(5));
    echo "<br>";

    function recursiveFibionacci($n, $max) {
        $next = array_sum($n);
        array_shift($n);
        $n[] = $next;

        if ($next <= $max) {
            echo $next . ", ";
            recursiveFibionacci($n, $max);
        }
    }

    print(recursiveFibionacci([1, 0], 100));
?>