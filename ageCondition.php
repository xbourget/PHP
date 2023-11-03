<?php

$age = 65;
$money = 50000;

if ($money >= 100000) {
    $riche = true;
} else {
    $riche = false;
}

switch (true) {
    case $age >= 64 and $riche:
        print("Retraite");
        break;
    case $age >= 20:
        print("Galère");
        break;   
    case $age >= 18:
        print("Permis");
        break;
    case $age >= 15:
        print("Lycée");
        break;
    case $age >= 11:
        print("Collège");
        break;
    case $age >= 6:
        print("Primaire");
        break;
    case $age >= 3:
        print("Maternelle");
        break;
    default:
        print("GOUGOUGAGA LE BÉBÉ!");
    }  

?>