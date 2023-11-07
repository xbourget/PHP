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
            header( 'location: '.$__url.'/PHP/pageAgeFront3.php'   );
        }
        else
            header( 'location: '.$__urL.'/PHP/pagePrenomFront2.php'   );
=======
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
>>>>>>> origin/xavier
    }
?>