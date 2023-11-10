<?php
    include_once "vehicule.php";
  
    class Garage
    {
        private  $listVehicule = [];
        
        private string $nom;  //permet de donner un nom à la classe
        

                      
 
        public function ranger( vehicule $vehicule  )
        {
            array_push( $this->listVehicule, $vehicule );
        }
        
       
        public function listerVehicules()
        {
            foreach ($this->listVehicule as $vehicule ) 
            {
                print( $vehicule.'<br>' );
               // print( $vehicule->getName().'<br>' ); permet dafficher uniquement le nom des vehicules (parce quon a créer la fonction getName)
            }
        }
    }