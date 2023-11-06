<?php


    $prenoms = [ 'eudes', 'sigismond', 'gontran', 'gertrude' ];


    foreach( $prenoms as $prenom )
    if ($prenom === 'gontran') {
       print( "Joyeux anniversaire Gontran !<br>");
    } else {
        print( "bonjour " . ucfirst($prenom) . "<br>" );

    }


?>