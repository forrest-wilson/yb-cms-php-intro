<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Supermarket";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }

    $sql = "CREATE TABLE Transactions (
        ID int(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        Name varchar(255),
        Quantity int(5),
        Amount float(5,2)
    )";

    if ($conn -> query($sql) === TRUE) {
        echo "Table Transactions created successfully!";
    } else {
        echo "Error creating table: " . $conn -> error;
    }

    $conn -> close();

?>