<?php

    session_start();

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age     = $_SESSION[ 'age' ];

    print( "<h1> Hello $prenom $nom $age</h1>");
    
?>
