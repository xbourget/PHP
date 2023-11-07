<?php
include "parametreRB.php";

    session_start(); //permet de garder en mémoire les informations demandées à l'utilisateur

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header('location: ' .$_url."/PHP/pagePrenomFront3RB.php"  ); // renvoie à la page prenomfront3rb si un age est entré par lutilisateur
        }
        else
            header( 'location: '.$_url."/PHP/pageAgeFrontRB.html"  );
    }
?>
