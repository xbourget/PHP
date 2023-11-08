<?php
    include "parametre.php";
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
<<<<<<< HEAD
            header( 'location: http://192.168.1.17/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: http://192.168.1.17/PHP/pagePrenomFront2.php'   );
=======
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
>>>>>>> origin/xavier
    }
?>