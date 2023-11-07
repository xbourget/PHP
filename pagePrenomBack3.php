<?php
    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header( 'location: http://172.28.160.1/PHP/pagePrenomFrontFinal.php'   );
        }
        else
            header( 'location: http://172.28.160.1/PHP/pagePrenomFront3.php'   );
    }
?>