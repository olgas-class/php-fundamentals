<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "<br />";
}

$students = [
    [
        "name" => "Ottavio",
        "lastname" => "Paolini"
    ],
    [
        "name" => "Andrea",
        "lastname" => "Pricoco"
    ],
    [
        "name" => "Benito",
        "lastname" => "Rubano"
    ]
];

$i = 0;
while ($i < count($students)) {
    $cur_student = $students[$i];
    var_dump($cur_student);
    $i++;
}

// die();
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
    <ul>
        <?php
        // for ($i = 0; $i < count($students); $i++) {
        //     $cur_strudent = $students[$i];
        //     echo "<li><h3>" . $cur_strudent["name"] . " " . $cur_strudent["lastname"] . "</h3></li>";
        // }
        ?>

        <?php for ($i = 0; $i < count($students); $i++) {
            $cur_strudent = $students[$i];
        ?>
            <li>
                <h3>
                    <?php echo $cur_strudent["name"] . " " . $cur_strudent["lastname"]; ?>
                </h3>
            </li>
        <?php } ?>
    </ul>
</body>

</html>