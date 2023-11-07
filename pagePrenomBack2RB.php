<<<<<<< HEAD:pagePrenomBack2RB.php
<?php
include "parametreRB.php";
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: '.$_url.'/PHP/pageAgeFrontRB.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront2RB.php');
    }
?>
=======
<?php
    include "parametre.php";
    session_start();

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        if ( $nom != "" )
        {
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront2.php'   );
    }
?>
>>>>>>> origin/xavier:pagePrenomBack2.php
