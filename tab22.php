<?php
    require "myLib01.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );
    
    myTable( 4, 4, ":)" );
    myTable( $carac );
    myTable( 10, 5, "linda");

    myFooter();
?>