<?php
include "parametreRB.php";

    session_start(); //permet de garder en mémoire les informations demandées à l'utilisateur

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header('location: '. $_url."/PHP/pagePrenomFront2RB.php"   );
        }
        else
            header('location: '. $_url."/PHP/pagePrenomFront1RB.php"  );
    }
?>
