<?php
$data = $_GET;
var_dump($data);
// var_dump(empty($data));
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
    <main>
        <section>
            <h2>Rispondi alle mie domande</h2>
            <form action="index.php" method="GET">
                <div>
                    <label for="user-name">Username</label>
                    <input type="text" name="user-name" id="user-name">
                </div>

                <div>
                    <label for="user-age">Età</label>
                    <input type="number" name="user-age" id="user-age">
                </div>

                <div>
                    <label for="user-select">Seleziona</label>
                    <select name="user-select" id="user-select">
                        <option value="option-1">Option 1</option>
                        <option value="option-2">Option 2</option>
                        <option value="option-3">Option 3</option>
                    </select>
                </div>

                <div>
                    <label for="message">Lasci un messaggio</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <button type="submit">Invia</button>


            </form>
        </section>

        <section>
            <?php if (empty($data)) { ?>
                <h2>Non hai ancora premuto "invio"</h2>
            <?php } else { ?>
                <h2>Ecco cosa hai risposto:</h2>
                <ul>
                    <?php foreach ($data as $key => $elem) { ?>
                        <li>
                            <strong><?php echo $key; ?></strong>
                            <?php echo $elem; ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
    </main>

</body>

</html>