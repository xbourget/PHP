<?php

    include_once "vehiculeM.php";

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
            print( "$this->nom : je décolle<br>" );
        }

        public function arreter()        
        {   $vitesseResiduelle = $this->getVitesse($this->vitesse);

            print( "$this->nom : je réduis l'allure et j'attérris, ma vitesse résiduelle est de $vitesseResiduelle <br> " );

            if ($vitesseResiduelle >= $this->vitesseMax*10/100)
                print("oups ça secoue<br>");

        }

     }
?>