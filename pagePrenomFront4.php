<?php

    session_start();

    include "myLib01.php";
    require_once 'ipconfig.php';

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        = $_SESSION[ 'age' ];

    myHeader("THE END");

    print( "<h1>hello $prenom $nom, tu as $age ans, c'est la cour des grands chef</h1>");
    
?>
