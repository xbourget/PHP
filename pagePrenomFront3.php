<?php

    session_start();

    include "myLib01.php";
    require_once 'ipconfig.php';

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];

    myHeader("info age");

    createForm($myAddress."/PHP/pagePrenomBack3.php", "age");
    
?>
