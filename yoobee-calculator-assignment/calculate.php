<?php
    function calculateCircle() {
        $rad = $_POST["radius"];
        $diam = 2 * $rad;
        $area = 3.14 * $rad * $rad;
        $circum = 2 * 3.14 * $rad;

        echo "<p>Radius: $rad</p>";
        echo "<p>Diameter: $diam</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Circumference: $circum</p>";
    }

    function calculateSquare() {
        $side = $_POST["side"];
        $area = $side * $side;
        $perim = $side * 4;

        echo "<p>Side Length: $side</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Perimeter: $perim</p>";
    }

    function calculateRectangle() {
        $w = $_POST["width"];
        $h = $_POST["height"];
        $area = $w * $h;
        $perim = ($w * 2) + ($h * 2);

        echo "<p>Width: $w</p>";
        echo "<p>Height: $h</p>";
        echo "<p>Area: $area</p>";
        echo "<p>Perimeter: $perim</p>";
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