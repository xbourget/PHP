<?php

    session_start();
    // var_dump($_ENV);
    if(!empty($_POST)) // $_POST correspond à la method post du formulaire
    {
        $nom = $_POST[ 'nom' ];
        $prenom = $_POST[ 'prenom' ]; // récupère le nom du champ name
        
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;

        header('location: formulaireSuiteM.php');
        // exit();
        //sinon on réaffiche le formulaire
    }
    //$_SERVER['REQUEST_URI']
?>