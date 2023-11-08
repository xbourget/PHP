<?php
    include "parametre.php";

    session_start();

<<<<<<< HEAD
    require_once 'config.php';

    $_SESSION['message'] = "";

    if(!empty($_POST)) {

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $age = $_POST['age'];

        if (($prenom != "") && ($nom != "") && (is_numeric($age))) {

            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;
            $_SESSION['age'] = $age;

            header("location: $_url/PHP/pagePrenomFront2.php");

        } else {

            $_SESSION['message'] = "Merci de remplir tous les champs correctement!";
            header("location: $_url/PHP/pagePrenomFront1.php");

        }
=======
    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront1.php'   );
>>>>>>> origin/xavier
    }
?>
