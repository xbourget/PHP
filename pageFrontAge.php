<?php
    include "parametre.php";

    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header( 'location: '.$url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$url.'/PHP/pagePrenomFront1.php'   );
    }
?>

