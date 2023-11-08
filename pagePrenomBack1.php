<?php
<<<<<<< HEAD
    include "parametre1.php";
=======
    include "parametre.php";
>>>>>>> origin/xavier

    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
<<<<<<< HEAD
            header( 'location: '.$_url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront1.php'   );
=======
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront1.php'   );
>>>>>>> origin/xavier
    }
?>
