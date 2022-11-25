<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
$password = $_GET["password"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <section>
            <?php
            if (empty($password)) {
                echo "Inserisci la password";
            } else {
                if ($password === "Boolean") {
                    $class = "green";
                } else {
                    $class = "red";
                }
            ?>
                <p class="<?php echo $class; ?>">
                    <?php echo $password; ?>
                </p>
            <?php } ?>
        </section>
        <section>
            <form action="index.php" method="GET">
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </div>
                <button type="submit">Invia</button>
            </form>
        </section>
    </main>

</body>

</html>