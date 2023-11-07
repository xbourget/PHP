<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $url."/PHP/pagePrenomBack1.php", "prenom",  "ton prenom" );
    myFooter();
?>
