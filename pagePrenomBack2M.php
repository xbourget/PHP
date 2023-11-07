<?php

    session_start();

    // var_dump($_ENV);
    if(!empty($_POST)) // $_POST correspond à la methode post du formulaire
    {
        $nom = $_POST[ 'nom' ]; // récupère le nom du champ name
        if ($nom != "")
        {
            $_SESSION['nom'] = $nom;
            header('location: pagePrenomFront2M.html');
            
        }
        header('location: pagePrenomFront3M.php');
       
        // exit();
        //sinon on réaffiche le formulaire
    }
    //$_SERVER['REQUEST_URI']
?>