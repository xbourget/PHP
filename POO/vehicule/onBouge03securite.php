<?php

    // exercice 2 : - faite le nécessaire pour qu'un véhicule ne puisse pas  
    //                dépasser sa vitesse max
    //              - afficher un message lorsque la limite est atteinte
    //              - lors de l'arrêt, indiquez la vitesse residuel
    //              - si la vitesse résiduelle est supérieur à 10% de la vitesse max
    //                affichez le message 'Oups !  ça secoue...'
    
    include_once "fusee.php";
    include_once "bateau.php";

    $fusee1 = new Fusee( "spaceX", 'cargo', 2000 );
    $bateau1 = new Bateau( "licorne", 'cargo', 40 );

    protected string $type = '';

    public function __construct( string $nom, $type, $vitesseMax ) 
    {
        parent::__construct( $nom, $vitesseMax );
        $this->type = $type;
    }                   

    $fusee1->demarrer();

    public function demarer()
    {
        print( "$this->nom : j'allume la meche, la fusee decolle <br>" );
    }


    $bateau1->demarrer();
    public function demarrer()
    {
        print( "$this->nom : je leve l'ancre <br>" );
    }

    
    $fusee1->accelerer();
    $bateau1->accelerer( 5 );
    
    $fusee1->accelerer();
    $bateau1->accelerer();

    $fusee1->accelerer(  1000 );
    $bateau1->accelerer(  20 );

    $fusee1->accelerer(  1000 );
    $bateau1->accelerer(  15 );
    
    $fusee1->accelerer( -200);
    $bateau1->accelerer( -10);

    $fusee1->accelerer( -500);
    $bateau1->accelerer( -15);

    $fusee1->accelerer( -100);
    $bateau1->accelerer( -15 );
  
    $fusee1->arreter();
    $bateau1->arreter();
?>