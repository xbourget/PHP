<?php
    include "myLib01.php";
    include "parametr1.php";

    myHeader( 'info nom' );
    createForm( $_url."/PHP/pagePrenomBack3.php", "age",  "ton age" );
    myFooter();
?>