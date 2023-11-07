<?php
    include "myLib01.php";
    include "parametreRB.php";

    myHeader( 'info age' );
    createForm( $_url."/PHP/pageAgeBackRB.php", "age" );
    myFooter();
?>