<?php
include "parametreRB.php";
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: '.$_url.'/PHP/pageAgeFrontRB.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront2RB.php');
    }
?>
