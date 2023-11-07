<?php
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: http://192.168.1.5/PHP/pagePrenomFront3RB.php'   );
        }
        else
            header( 'location: http://192.168.1.5/PHP/pagePrenomFront2RB.html'   );
    }
?>
