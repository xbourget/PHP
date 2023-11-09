<?php

    abstract class Individus
    {
        protected string $nom;       // variable d'instance
        
        public function __construct( string $n ) 
        {
            $this->nom  = $n; 
        }                   

        public function __toString() 
        {
            return $this->nom.'<br>'; 
        }  
        
        abstract public function travailler();
   }
?>
