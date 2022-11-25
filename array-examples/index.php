<?php

$students = ["Ottavio", "Igor", "Benito"];
echo $students[2];
$students[] = "Carlo";

var_dump($students);

$student = [
    "name" => "Ottavio",
    "lastname" => "Paolini"
];

$student["age"] = 31;

$student["age"] = 32;

var_dump($student);

echo $student["name"];

$new_students = [
    [
        "name" => "Ottavio",
        "lastname" => "Paolini"
    ],
    [
        "name" => "Andrea",
        "lastname" => "Pricoco"
    ]
];

$new_st = [
    "name" => "Benito",
    "lastname" => "Rubano"
];

$new_students[] = $new_st;

var_dump($new_students);
// Stampa nome del primo studente
echo $new_students[0]["name"];
