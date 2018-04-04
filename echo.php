<?php
    $currentDate = date("M j, Y g:i:s a");
    echo "Hello<br>";
    $printValue = print("Good afternoon. Current time and date is $currentDate<br>");
    echo("$printValue");
    $a = 4;
    $b = 5;
    $name = "Name";
    $c = 5.67;
    echo "<br>", $a + $b, "<br>";

    echo gettype($a);
    echo "<br>";
    echo gettype(5.1);
    echo "<br>";
    echo gettype($a);
    settype($a, "float");
    echo "<br>";
    echo gettype($a);
    $int = 3.0;
    settype($int, "integer");
    echo "<br>";
    echo gettype($int);
    echo "<br>";
    echo (int)$int;
    echo "<br>";
    echo intval($c);

    // Modulus
    echo "<br>";
    echo $b%$a;
?>