<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $__url."/PHP/pagebackprenom.php", "nom",  "ton nom" );
    createForm($__url."/PHP/pagebackprenom.php", "prenom",  "ton prenom");
    createForm($__url."/PHP/pagebackprenom.php", "age",  "ton age");
    myFooter();
?>