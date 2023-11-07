<<<<<<< HEAD:formulaireSuiteRB.php
<?php

    session_start();

    print( session_save_path() );
    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];

    print( "<h1>hello $prenom $nom</h1>");
?>
=======
<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $__url."/PHP/pagePrenomBack3.php", "age",  "ton age" );
    myFooter();
?>
>>>>>>> origin/xavier:pagePrenomFront3.php
