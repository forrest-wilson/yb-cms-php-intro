<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Response</title>
</head>
<body>
    <?php
        $rad = $_GET["radius"];

        define("PI", 3.14);

        $diam = 2*$rad;

        $area = PI*$rad*$rad;

        $circum = 2*PI*$rad;

        echo "Given radius: $rad<br>";

        echo "Area: $area<br>Circumference: $circum<br>Diameter: $diam"
    ?>
</body>
</html>