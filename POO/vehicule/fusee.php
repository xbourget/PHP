<?php

    include_once "vehicule.php";

    class fusee extends Vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(fusee '.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : j'allume la meche il decollé<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : j'eteinds le moteur, je tombe <br>" );
            $vitesse10PC = $this->vitesseMax /10;
            if ( $this->vitesse >$vitesse10PC )
            {
                print( "$this->nom : ta vitesse est de <br>" );
                print( "$this->nom : oupss!!! ça secoue...<br>" );
            }
        }
     }
?>