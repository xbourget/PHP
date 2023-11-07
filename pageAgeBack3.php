<?php
    include "parametre.php";
    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age; //stock en session
            header( 'location: '.$__url.'/PHP/pagePrenomFrontFinal.php'   );
        }
        else
            header ( 'location: '.$__urL.'/PHP/pageAgeFront3.php'   );
    }
?>