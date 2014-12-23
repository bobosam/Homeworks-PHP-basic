<?php

function personalInfo($firstName,$lastName,$age){
    $fullName = $firstName .' '. $lastName;
    echo "My name is $fullName and I am $age years old.\n";
}
$firstName = 'Georgi';
$lastName = 'Ivanov';
$age = 111;
personalInfo($firstName,$lastName,$age);

$firstName = 'Pesho';
$lastName = 'Peshev';
$age = 55;
personalInfo($firstName,$lastName,$age);

?>