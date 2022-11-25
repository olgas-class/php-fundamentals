<?php
$number = -2;
// Controllare se il numero è negativo, positivo o zero e stampare il risultato
if ($number > 0) {
    echo "<p>Il numero è positivo</p>";
} elseif ($number === 0) {
    echo "Il numero  è zero";
} else {
    echo "Il numero è negativo";
}

// Altra possibilità di stampa
?>
<?php if ($number > 0) { ?>
    <p>Positivo</p>
<?php } elseif ($number === 0) { ?>
    <p>E' zero</p>
<?php } else { ?>
    <p>Negativo</p>
<?php } ?>


<?php if ($number > 0) { ?>

<?php } ?>