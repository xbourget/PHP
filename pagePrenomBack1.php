<?php
    session_start();

    require_once 'ipconfig.php';

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( "location: $myAddress/PHP/pagePrenomFront2.php"   );
        }
        else
            header( "location: $myAddress/PHP/pagePrenomFront1.php"   );
    }
?>
