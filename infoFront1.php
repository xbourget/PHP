<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    startForm( $__url."/PHP/infoBack1.php" );
    createInput( "prenom",  "ton prenom" );
    createInput( "nom",  "ton nom" );
    createInput( "age",  "ton age" );
    endForm();
    myFooter();
?>