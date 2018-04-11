<?php
    function calculateCircle() {
        $rad = $_POST["radius"];
        $diam = 2 * $rad;
        $area = 3.14 * $rad * $rad;
        $circum = 2 * 3.14 * $rad;

        echo "<br>";
        echo "<p>Radius: $rad</p>";
        echo "<p>Diameter: $diam</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Circumference: $circum</p>";
        echo "<br>";
        echo "<div class='circle'></div>";
    }

    function calculateSquare() {
        $side = $_POST["side"];
        $area = $side * $side;
        $perim = $side * 4;

        echo "<br>";
        echo "<p>Side Length: $side</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Perimeter: $perim</p>";
        echo "<br>";
        echo "<div class='square'></div>";
    }

    function calculateRectangle() {
        $w = $_POST["width"];
        $h = $_POST["height"];
        $area = $w * $h;
        $perim = ($w * 2) + ($h * 2);

        echo "<br>";
        echo "<p>Width: $w</p>";
        echo "<p>Height: $h</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Perimeter: $perim</p>";
        echo "<br>";

        echo ($h > $w) ? "<div class='rectangle tall'></div>" : "<div class='rectangle'></div>";
    }

    switch($_POST["action"]) {
        case "circle":
        calculateCircle();
        break;
        case "square":
        calculateSquare();
        break;
        case "rectangle":
        calculateRectangle();
        break;
    }
?>