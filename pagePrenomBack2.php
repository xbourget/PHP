<?php
<<<<<<< HEAD
include "parametre1.php";

=======
    include "parametre.php";
>>>>>>> ddccaaf1fd7933676d2d7d8a75eb67e27325183c
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
<<<<<<< HEAD
            header( 'location: '.$_url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront2.html'   );
=======
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
>>>>>>> ddccaaf1fd7933676d2d7d8a75eb67e27325183c
    }
?>