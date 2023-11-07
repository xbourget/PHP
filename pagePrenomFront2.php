<?php

    session_start();

    include "myLib01.php";
    require_once 'ipconfig.php';

    $nom = $_SESSION[ 'nom' ];
    $prenom = $_SESSION[ 'prenom' ];
    $age = $_SESSION[ 'age' ];

    myHeader("THE END");

    print( "<h1>Salut $prenom $nom!! Tu as $age ans? C'est la cour des grands, chef!</h1>");
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 7; $j++) {
            print("<img src='".$_url."/PHP/banana-dance.gif' alt='banana dance' />");
        }
        print("<br>");
    }
    
?>
