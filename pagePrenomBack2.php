<?php
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: http://172.28.160.1/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: http://172.28.160.1/PHP/pagePrenomFront2.php'   );
    }
?>