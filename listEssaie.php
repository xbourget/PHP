<?php


    $prenoms = [ 'eudes', 'sigismond', 'gontran', 'gertrude' ];


    foreach( $prenoms as $prenom )
    {
        $prenom = ucfirst( $prenom ); 
        print( "bonjour $prenom<br>" );
        if ( $prenom == 'Gontrain' )
        print( "bonne fete $prenom<br>" );
    }
        
    


?>