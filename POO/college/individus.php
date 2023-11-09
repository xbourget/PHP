<?php

    abstract class Individus
    {
        protected string $name;       // variable d'instance
        
        public function __construct( string $n ) 
        {
            $this->name  = $n; 
        }                   

        public function __toString() 
        {
            return $this->name.'<br>'; 
        }  
        
        public function getName( )
        {
            return $this->name;
        }

        abstract public function travailler();
   }
?>
