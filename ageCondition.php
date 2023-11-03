<?php

$age = 41;

switch ($age) {
    case $age >= 64:
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
    case $age >= 0:
        print("GOUGOUGAGA LE BÉBÉ!");
        break;
    }  

?>