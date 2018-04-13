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

    $sql = $conn -> prepare("INSERT INTO Items(Name, Price) VALUES(?, ?)");

    $sql -> execute(array($name, $price));

    $conn = null;

    header("Location: inserting-data.php");
?>