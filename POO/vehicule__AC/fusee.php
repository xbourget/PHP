<?php

    include_once "vehicule.php";

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
            return '(Fusee '.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : j'allume la mêche, la fusée décolle<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : j'éteinds le moteur, je tombe, " );
            print( "ma vitesse residuelle : $this->vitesse, " );
            if ( $this->vitesse > ($this->vitesseMax / 10) ) {
                print( "Oups !  ça secoue... <br>" );
            }
        }
     }
?>