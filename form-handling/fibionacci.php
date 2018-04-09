<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

        $num = $_POST["fibionacci"];

        fibionacci($num);
    ?>
</body>
</html>
