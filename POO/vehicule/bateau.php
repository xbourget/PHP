<?php

    include_once "vehicule.php";

    class Bateau extends Vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(Bateau '.$this->nom.'  '.$this->famille.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : je leve l'ancre<br>" );
        }

        public function arreter()        
        {
            parent::arreter();
            print( "$this->nom : je réduis l'allure et je jette l'ancre<br>" );
        }
     }
?>