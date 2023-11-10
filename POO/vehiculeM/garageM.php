<?php

    include_once "fuseeM.php";
    include_once "bateauM.php";
    include_once "vehiculeM.php";

    class Garage
    {


        private $listVehicule = [];

        private string $nom;
        private string $vitesse;

        public function __construct( string $nom ) 
        {
            $this->nom  = $nom;
        }

        public function __toString() 
        {
            return $this->nom.'('.$this->vitesse.'km/h)'; 
        }

        public function ranger( Vehicule $vehicule  )
        {
            array_push( $this->listVehicule, $vehicule );
        }

        public function getVehiculeByName( $name )
        {
            foreach ($this->listVehicule as $vehicule ) 
            {
                if ( $vehicule->getName() == $name )
                    return $vehicule;
            }
            return NULL;
        }

        public function listerVehicules()
        {
            foreach ($this->listVehicule as $vehicule) 
            {
                $name = $vehicule->getVehiculeByName();
                $this->listerVehicules( $name );
                print( '***************<br>');
    
            }

        }

        



    }
?>