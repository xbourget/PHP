<?php

    $prenoms = ['eudes', 'sigismond', 'gontran', 'gertrude'];

    foreach ($prenoms as $prenom) {
        $prenomMaj = ucfirst($prenom);
        print( "bonjour $prenomMaj<br>");
        if($prenom == 'gontran')
            print("Bonne anniverssaire $prenomMaj<br>");
    }

?>