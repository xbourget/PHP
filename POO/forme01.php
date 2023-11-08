<?php

include "triangleLib01.php";
include "carreLib01.php";
include "rectangleLib01.php";

    $t1 = new Triangle( 5, 9, 12, 6 );
    $t2 = new Triangle( -5, 19, 1, 7 );

    $k1 = new Carre( 15, -1, 17 );

    $r1 = new Rectangle(3, 4, 6, 3);

    $p1 = new Point( 2, 90 );

    print( $t1 );
    print( "<br>" );
    print( $t2 );
    print( "<br>" );
    print( $p1);
    print( "<br>" );
    print( $k1);
    print( "<br>" );
    print( $r1);
    print( "<br>" );

    print( $t1->surface() );
    print( "<br>" );
    print( $k1->surface() );
    print( "<br>" );
    print( $r1->surface() );
    print( "<br>" );
?>
