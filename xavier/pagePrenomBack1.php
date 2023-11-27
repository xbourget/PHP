<?php
    include "parametre.php";

    session_start();

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
    }
?>
