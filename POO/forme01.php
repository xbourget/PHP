<?php

include "triangleLib01.php";
include "carreLib01.php";
include "rectangleLibM01.php";

    $t1 = new Triangle( 5, 9, 12, 6 );
    $t2 = new Triangle( -5, 19, 1, 7 );

    $k1 = new Carre( 15, -1, 17 );

    $p1 = new Point( 2, 90 );

    $r1M = new Rectangle(5, 10, 15, 9, "noir");

    print( $t1 );
    print( "<br>" );
    print( $t2 );
    print( "<br>" );
    print( $p1);
    print( "<br>" );
    print( $k1);
    print( "<br>" );

    print( $t1->surface() );
    print( "<br>" );
    print( $k1->surface() );
    print( "<br>" );
    print($r1M);
    print( "<br>" );
    print($r1M->surface());
    print( "<br>" );
    print($r1M->perimetre());
?>
