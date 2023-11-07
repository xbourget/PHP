<?php
    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( 'location: http://192.168.56.1/PHP/pagePrenomFront2.html'   );
        }
        else
            header( 'location: http://192.168.56.1/PHP/pagePrenomFront1.html'   );
    }
?>
