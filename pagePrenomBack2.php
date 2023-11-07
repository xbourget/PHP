<?php
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: http://192.168.1.141/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: http://192.168.1.141/PHP/pagePrenomFront2.html'   );
    }
?>
