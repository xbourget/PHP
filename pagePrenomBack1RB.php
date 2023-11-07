<?php
include "parametreRB.php"

    session_start(); //permet de garder en mémoire les informations demandées à l'utilisateur

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( 'location: http://192.168.56.1/PHP/pagePrenomFront2RB.html'   );
        }
        else
            header( 'location: http://192.168.56.1/PHP/pagePrenomFront1RB.html'   );
    }
?>
