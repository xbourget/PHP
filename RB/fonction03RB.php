<?php
    require "myLib01.php";
    
    myHeader( 'toto' );
    print( '<h1>HELLO</h1>'  );
    $data = [
        ['jean', 'dupont'],
        ['sergent', 'garcia'],
        ['xavier','dupont'],
        ['jean','jean']

    ];
    myTable (4,4,'//');

    myTable(4,4);
    myFooter();
?>