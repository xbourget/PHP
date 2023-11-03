<?php


    $prenoms = [ 'eudes', 'sigismond', 'gontran', 'gertrude' ];


    foreach( $prenoms as $prenom  ) {

        $upperPrenom = ucfirst($prenom);
        print( "bonjour $upperPrenom <br>" );

        if($prenom == 'Gontran') {
            print( "Joyeux annivairsaire " );
        }
    }

?>