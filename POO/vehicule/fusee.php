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
            return '(Fusée '.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : j'allume les réacteurs, je décolle!<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : je réduis l'allure et je m'apprête à me poser!<br>" );
            $this->getVitesseResiduelle();
        }
     }
?>