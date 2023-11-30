<?php

    $colors = array("red", "green", "blue", "yellow");
    
    foreach ( $colors as $value) 
    {
        print ( "$value <br>");
    }

    $nous = array("gabriel", "astou", "robin", "abdallah", "nora", "josé", "lynda", "clément", "maria", "mathias", "linda" );
    foreach( $nous as $prenom )
        print( "prenom : $prenom<br>");
    
    print( "================================<br>");

    for( $a=0, $sizeNous = count( $nous ); $a < $sizeNous ; $a++  )
        print( "prenom $a :".$nous[$a]."<br>");

    $nom = 'gabi';

    if ( in_array( $nom, $nous))
        print( "$nom est dans la liste") ;
    else
        print( "$nom n'est pas dans la liste") ;

?>