<?php
    require "myLib.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );
    
    myTable( 4, 4, "+" );

    print("<br><br>");
    
    myTable( 10, 5);

    myFooter();
?>