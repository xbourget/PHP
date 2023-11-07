<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $__url."/PHP/pagePrenomBack3.php", "age",  "ta date de naissance" );
    myFooter();
?>