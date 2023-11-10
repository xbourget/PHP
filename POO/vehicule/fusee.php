<?php

    include_once "vehicule.php";

    //   $bateau1 = new Bateau( "licorne", 'cargo', 40 );


    class Fusee extends Vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(Fusee '.$this->nom.'  '.$this->famille.')'; 
        }

        public function demarer()
        {
            print( "$this->nom : j'allume la meche, la fusee decolle <br>" );
        }

        public function atterir()        
        {
            print( "$this->nom : je reduis l'allure et je jette l'ancre>" );
        }
     }
?>