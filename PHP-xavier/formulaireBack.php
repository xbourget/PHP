<?php
    //http://localhost/PHP/formulaire1.php?nom=dupond&prenom=juste&submit=OK

    session_start();

    //var_dump( $_ENV );
    if( ! empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        $prenom = $_POST[ 'prenom' ];

        $_SESSION[ 'nom'  ] = $nom;
        $_SESSION[ 'prenom'  ] = $prenom;

        header( 'location: http://192.168.1.152/PHP/formulaireSuite.php'   ); 
    }
    //$_SERVER['REQUEST_URI']
?>
