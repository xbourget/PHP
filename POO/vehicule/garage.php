<?php

include_once "vehicule.php";

class garage extends Vehicule
    {

        protected string $type = '';

        public function getVehiculeByName( $name ) 
        {
            forech ($this->listVehicule as $vehicule)
            {
                if ( $vehicule->getName() == $name)
                return $vehicule;
            }
            return NULL;
           
        } 
        public function listerVehicules() 
        {
            forech ($this->listVehicule as $vehicule)
            {
                $name = $vehicule->getVehiculeByName( )
                $this->listerVehicules( name );
                print( ' --------<br>');
              /*  if ( $vehicule->getName() == $name)
                return $vehicule;*/
            }
          /*  return NULL;*/
           
        }                    



    }







?>