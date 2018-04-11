<?php
    define("PI", 3.14);
    
    function calculateCircle() {
        $rad = $_POST["radius"];
        $diam = 2 * $rad;
        $area = PI * $rad * $rad;
        $circum = 2 * PI * $rad;

        echo "<br>";
        echo "<p>Radius: $rad", "px</p>";
        echo "<p>Diameter: $diam", "px</p>";
        echo "<p>Area: $area", "px<sup>2</sup></p>";
        echo "<p>Circumference: $circum", "px</p>";
        echo "<br>";
        echo "<div class='shape' style='border-radius: 50%; width: $diam", "px; height: $diam", "px;'></div>";
    }

    function calculateSquare() {
        $side = $_POST["side"];
        $area = $side * $side;
        $perim = $side * 4;

        echo "<br>";
        echo "<p>Side Length: $side", "px</p>";
        echo "<p>Area: $area", "px<sup>2</sup></p>";
        echo "<p>Perimeter: $perim", "px</p>";
        echo "<br>";
        echo "<div class='shape' style='width: $side", "px; height: $side", "px;'></div>";
    }

    function calculateRectangle() {
        $w = $_POST["width"];
        $h = $_POST["height"];
        $area = $w * $h;
        $perim = ($w * 2) + ($h * 2);

        echo "<br>";
        echo "<p>Width: $w", "px</p>";
        echo "<p>Height: $h", "px</p>";
        echo "<p>Area: $area", "px<sup>2</sup></p>";
        echo "<p>Perimeter: $perim", "px</p>";
        echo "<br>";

        echo "<div class='shape' style='width: $w", "px; height: $h", "px;'></div>";
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