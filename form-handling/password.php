<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Hash</title>
</head>
<body>
    <?php
        $pwd = $_POST["pwd"];
        $hash = password_hash($pwd, PASSWORD_BCRYPT);
        echo $hash . "<br>";

        echo password_verify($pwd, $hash);
    ?>
</body>
</html>