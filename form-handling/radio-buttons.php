<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radio Response</title>
</head>
<body>
    <?php
        if ($_POST["username"]) {
            echo $_POST["username"] . "<br>";
        } else {
            echo "No username <br>";
        }

        if (!empty($_POST["place"])) {
            foreach ($_POST["place"] as $place) {
                echo "$place <br>";
            }
        } else {
            echo "Please enter a place";
        }

        if ($_POST["result"]) {
            echo $_POST["result"];
        } else {
            echo "No grade";
        }
    ?>
</body>
</html>