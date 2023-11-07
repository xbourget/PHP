<?php
    session_start();

    require_once 'ipconfig.php';

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( "location: $myAddress/PHP/pagePrenomFront3.php"   );
        }
        else
            header( "location: $myAddress/PHP/pagePrenomFront2.php"   );
    }
?>
