<?php
    include "myLib01.php";
    include "parametreRB.php";

    myHeader( 'info prenom' );
    createForm( $_url."/PHP/pagePrenomBack2RB.php", "prenom",  "ton prenom" );
    myFooter();
?>