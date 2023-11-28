<?php

    // exercice 2 : - faite le nécessaire pour qu'un véhicule ne puisse pas  
    //                dépasser sa vitesse max
    //              - afficher un message lorsque la limite est atteinte OK
    //              - lors de l'arrêt, indiquez la vitesse residuel (vitesse qui reste au moment de l'arrêt) Ok
    //              - si la vitesse résiduelle est supérieur à 10% de la vitesse max
    //                affichez le message 'Oups !  ça secoue...' Ok
    
    include_once "fuseeM.php";
    include_once "bateauM.php";

    $fusee1 = new Fusee( "spaceX", 'cargo', 2000 );
    $bateau1 = new Bateau( "licorne", 'cargo', 40 );

    $fusee1->demarrer();
    $bateau1->demarrer();
    
    $fusee1->accelerer();
    $bateau1->accelerer( 5 );
    
    $fusee1->accelerer();
    $bateau1->accelerer();

    $fusee1->accelerer(  1000 );
    $bateau1->accelerer(  20 );

    $fusee1->accelerer(  1000 );
    $bateau1->accelerer(  3  );
    
    $fusee1->accelerer( -200);
    $bateau1->accelerer( -10);

    $fusee1->accelerer( -500);
    $bateau1->accelerer( -15);

    $fusee1->accelerer( -100);
    $bateau1->accelerer( -15 );
  
    $fusee1->arreter();
    $bateau1->arreter();
?>