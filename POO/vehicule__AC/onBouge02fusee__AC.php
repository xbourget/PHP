<?php

    // exercice 1 : créer une la nouvelle class nécessaire

    include_once "fusee.php";

    $fusee1 = new Fusee( "spaceX", 'cargo', 5000 );
    
    $fusee1->demarrer();
    $fusee1->accelerer();
    $fusee1->accelerer(  500 );
    $fusee1->accelerer(  500 );
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->arreter();
?>