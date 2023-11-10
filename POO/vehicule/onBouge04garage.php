<?php

    // exercice 3 : - créer une class Garage pour ranger y tous les véhicules 
    //              - créer une méthode pour afficher les véhicules rangés dans le garage

    include_once "garage.php";
    include_once "fusee.php";
    include_once "bateau.php";

    $fusee1 = new Fusee( "Apollo 69", 'cargo', 5000 );
    $bateau1 = new Bateau( "Speedy Gonzalez", 'cargo', 40 );

    $garage = new Garage(2);

    $garage->addVehicule( $fusee1 );
    $garage->addVehicule( $bateau1 );

    $garage->listerVehicules();

    $garage->removeVehicule( $fusee1 );
    $garage->removeVehicule( $bateau1 );

    $garage->listerVehicules();
?>