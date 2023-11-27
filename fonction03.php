<?php
    require "myLib01.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );

    $date = 
    [
        [ 'jean'    , 'dupont' ],
        [ 'sergent' , 'garcia' ],
        [ 'sergent' , 'garcia' ],
        [ 'désiré'  , 'garcia' ],
    ];
    
    myTable( 4, 4, ":)" );
    myTable( 10, 5, "0+0");

    myFooter();
?>