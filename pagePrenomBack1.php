<?php

    include "parametreM.php";
    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( 'location: '.$url.'/PHP/pagePrenomFront2.html'   );
        }
        else
            header( 'location: '.$url.'/PHP/pagePrenomFront1.php' );
    }
?>
