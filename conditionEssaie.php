<?php

    $age = 199;

    switch ($age) {
        case $age >= 3 && $age < 6:
            print('Bienvenue en maternelle');
            break;
        
        case $age >= 6 && $age < 11:
            print('Bienvenue en primaire');
            break;    

        case $age >= 11 && $age < 15:
            print('Bienvenue au collège');
            break; 

        case $age >= 15 && $age < 18:
            print('Bienvenue au lycée');
            break; 

        case $age >= 18 && $age < 99:
            print('Passe le permis enfin');
            break; 

        case $age >= 99:
            print('A la maison de retraite pépé/mémé');
            break; 
            
        default:
            print('Ah le bébé');
            break;
    }
    //  3 mat
    //  6 prim
    // 18 permis
    // 99 retraite
    // 15 lycéé
    // 11 college

?>