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

    $id = $_POST["id"];

    $sql = $conn -> prepare("DELETE FROM Items WHERE ID = ?");

    $sql -> execute(array($id));

    $conn = null;

    header("Location: inserting-data.php");
?>