<?php
    include "pointLib01.php";
    include "rectangleRB.php";
    // instanciation d'un Point
    $p1 = new Point(4, 5);
    $p2 = new Point(14, 18);
    $p1->show();
    print( '<br>');
  
    print( $p1.'<br>'  );

    $p2->show();
    print( '<br>');

    $pc1 = new PointColor( 1, 3, 'red' );
    $pc1->show();
    print( $pc1.'<br>'  );
    $rec = new Rectangle( 14, 3,5,9, 'red' );
    $rec->show();
    print( $rec.'<br>'  );
    print ($rec->surface());
    print( $rec.'<br>'  );
    

    //$formes =[$t1,$t2,$k1,$rec1]; //on calcule la surface totale de tous les figures geometriques
   // $surfaceTotal=0;
   // foreach($formes as $forme)
    {
   //     $surfaceTotal+= $forme->surface();
    }
//print("surface totale : ".$surfaceTotal);
?>