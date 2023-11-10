<?php

    // exercice 3 : - créer une class Garage pour ranger y tous les véhicules 
    //              - créer une méthode pour afficher les véhicules rangés dans le garage

    include_once "garageM.php";
    include_once "fuseeM.php";
    include_once "bateauM.php";
    

    $fusee1 = new Fusee( "spaceX", 'cargo', 5000 );
    $bateau1 = new Bateau( "licorne", 'cargo', 40 );

    $garage = new Garage( 'garage de James' );

    $garage->ranger( $fusee1 );
    $garage->ranger( $bateau1 );

    $garage->listerVehicules();
?>