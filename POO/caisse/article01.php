<?php
    class Article
    {

        public function __construct( $n, $p ) 
        {
            $this->nom  = $n;  // copie des variables 
            $this->prix = $p;  // dans les variables
        }      
        
        public function __toString() 
        {
            return $this->nom.'   '.$this->prix; 
        }      

        public function getPrix()
        {
            return $this->prix;
        }
        
        
    }
?>
