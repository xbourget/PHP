<?php

    include_once "vehicule.php";
   

    $fusee1 = new Fusee( "spaceX", 'cargo', 5000 );
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
            print( "$this->nom : decollage<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : je réduis l'allure et j'atteris<br>" );
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
     }
?>
