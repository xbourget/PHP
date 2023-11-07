<?php

    session_start();

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        = $_SESSION[ 'age' ];

    print( "<h1>monAge $prenom $nom $age</h1>");
    
?>
