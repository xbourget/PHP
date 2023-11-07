<?php
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: http://192.168.1.138/PHP/pagePrenomFront3.php'   );
        }
        else
<<<<<<< HEAD
            header( 'location: http://192.168.1.138/PHP/pagePrenomFront2.html'   );
=======
            header( 'location: http://192.168.1.152/PHP/pagePrenomFront2.php'   );
>>>>>>> origin/xavier
    }
?>