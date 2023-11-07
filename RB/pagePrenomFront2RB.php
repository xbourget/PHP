<?php
    include "myLib01.php";
    include "parametreRB.php";

    myHeader( 'info nom' );
    createForm( $_url."/PHP/pagePrenomBack2RB.php", "nom",  "ton nom" );
    myFooter();
?>