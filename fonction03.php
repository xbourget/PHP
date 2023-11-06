<?php
    require "myLib01.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );
    
    myTable( 4, 4, ":)" );
    myTable( 10, 5);

    myFooter();
?>