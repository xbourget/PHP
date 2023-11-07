<?php

    session_start();

    include "myLib01.php";
    require_once 'ipconfig.php';

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];

    myHeader("info age");

    print( "<h1>hello $prenom $nom</h1>");

    createForm($myAddress."/PHP/pagePrenomBack3.php", "age");
    
?>
