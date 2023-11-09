<?php

    session_start();
    print_r($_SESSION);

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        = $_SESSION[ 'age' ];

    print( "<h1>hello $prenom $nom</h1> $nom $nom<h1>  $age<h1> <an> ");
    
?>