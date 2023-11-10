<?php

    include_once "vehicule.php";

    class Garage
    {
        private $listVehicules = [];

        public function ranger( Vehicule $vehicule  )
        {
            array_push( $this->listVehicules, $vehicule );
        }

        public function listerVehicules()
        {
            print("Les véhicules rangés dans le garage : <br>"); 
            foreach ($this->listVehicules as $vehicule) {
                print("*** $vehicule<br>");
            }
        }
     }
?>