<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $url."/PHP/pagePrenomBack2.php", "nom",  "ton nom" );
    myFooter();
?>