<?php
    session_start();

    require_once 'ipconfig.php';

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header( "location: $myAddress/PHP/pagePrenomFront4.php"   );
        }
        else
            header( "location: $myAddress/PHP/pagePrenomFront3.php"   );
    }
?>
