<?php
    include "parametre.php";
    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'Age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header( 'location: '.$__url.'/PHP/pagePrenomFrontFinal.php'   );
        }
        else
            header ( 'location: '.$__urL.'/PHP/pageAgeFront3.php'   );
    }
?>