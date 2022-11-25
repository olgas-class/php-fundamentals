<?php
var_dump($_GET);
// $username = isset($_GET["username"]) ? $_GET["username"] : "";
$username = $_GET["username"] ?? "";
var_dump($username);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="GET">
        <label for="username"></label>
        <input type="text" name="username" id="username">

        <button type="submit">Invia</button>
    </form>

</body>

</html>