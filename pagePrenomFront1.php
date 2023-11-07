<?php
    include "myLib01.php";
    include "parametre1.php";

    myHeader( 'info nom' );
    createForm( '.$__url.'"/PHP/pagePrenomBack1.php", "prenom",  "ton prenom" );
    myFooter();
?>