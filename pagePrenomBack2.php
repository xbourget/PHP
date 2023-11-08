<?php
<<<<<<< HEAD
=======
    include "parametre.php";
    session_start();
>>>>>>> origin/xavier

include "parametre1.php";
session_start();

if( !empty($_POST))
{
    $nom = $_POST[ 'nom' ];
    if ( $nom != "" )
    {
<<<<<<< HEAD
        $_SESSION[ 'nom'  ] = $nom;
        header( 'location: '.$_url.'/PHP/pagePrenomFront3.php'   );
=======
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
>>>>>>> origin/xavier
    }
    else
        header( 'location: '.$_url.'/PHP/pagePrenomFront2.php'   );
}

?>