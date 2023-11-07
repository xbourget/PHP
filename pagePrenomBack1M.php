<?php

    session_start();

    // var_dump($_ENV);
    if(!empty($_POST)) // $_POST correspond à la methode post du formulaire
    {
        $prenom = $_POST[ 'prenom' ]; // récupère le nom du champ name
        if ($prenom != "")
        {
            $_SESSION['prenom'] = $prenom;
            header('location: pagePrenomFront1M.html');
        }
        
        header('location: pagePrenomFront2M.html');
    }
    //$_SERVER['REQUEST_URI']
?>