<?php
    include "parametre.php";
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
    }
?>