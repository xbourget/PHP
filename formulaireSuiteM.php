<?php

    session_start();

    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
        
    print( "<h1>hello $prenom $nom</h1>");

?>