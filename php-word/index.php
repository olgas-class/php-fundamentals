<?php
// WORD
// 1. Inserire delle parole all’interno di un array
// 2. controllare che la parola passata dall’utente è presente nell'array.

$words = ["ciao", "torta", "gatto", "cane"];
// $words2 = ["hello"];
// $merged = array_merge($words2, $words);
// var_dump($merged);
// die();
var_dump($words);
// var_dump(array_keys($words));
// die();

$user_word = $_GET["user-word"] ?? "";

// Se la stringa non è vuota,
if ($user_word === "") {
    echo "Inserisci la parola";
} else {
    // controlliamo se la stringa è contenuta nell'array
    if (in_array($user_word, $words)) {
        //  quindi stampiamo che la parola è stat indovinata
        echo "Ottimo! Hai indovinato la parola!";
    } else {
        // Altrimenti stampiamo che la parola non esiste.
        echo "Non conosco questa parola, prova ancora";
    }
}
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
    <h2>Prova a indovinare la parola</h2>
    <form action="index.php" method="GET">
        <label for="user-word">Inserisci la parola</label>
        <input type="text" name="user-word" id="user-word">
        <button type="submit">Invia</button>
    </form>

</body>

</html>