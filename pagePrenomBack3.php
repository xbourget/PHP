<?php
    include "parametre.php";
    
    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
<<<<<<< HEAD
            header( 'location: '.$__url.'/PHP/pagePrenomFront4.php'   );
=======
            header( 'location: '.$__url.'/PHP/pagePrenomFrontFinal.php'   );
>>>>>>> origin/xavier
        }
        else
            header( 'location: '.$__url.'/PHP/pagePrenomFront3.php'   );
    }
?>