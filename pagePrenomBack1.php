<?php
    include "parametres.php";

    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;

            header( 'location: http://192.168.1.17/PHP/pagePrenomFront2.html'   );
        }
        else
            header( 'location: http://192.168.1.17/PHP/pagePrenomFront1.html'   );

            header( 'location: '.$url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$url.'/PHP/pagePrenomFront1.php'   );

    
?>
