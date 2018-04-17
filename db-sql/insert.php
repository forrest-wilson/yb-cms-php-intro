<?php
    $dsn="mysql:dbname=Supermarket";
    $username="root";
    $password="root";

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "connection failed:" . $e -> getMessage();
    }

    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $reorder = $_POST["reorder"];

    $sql = $conn -> prepare("INSERT INTO Items(Name, Price) VALUES(?, ?)");
    $sql2 = $conn -> prepare("INSERT INTO Stock(Quantity, Reorder_Level) VALUES(?, ?)");

    $sql -> execute(array($name, $price));
    $sql2 -> execute(array($stock, $reorder));

    $conn = null;

    header("Location: inserting-data.php");
?>