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
            print( "$this->nom : j'allume les reacteurs<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : j'atteris<br>" );
            $vitesseres= $this->vitesseMax/10;
            if ($this->vitesse>$vitesseres)
            print ("la vitesse residuelle est: $this->$vitesseres <br>");
            print ("oups ! ca secoue!<br>");

        }
     }
?>