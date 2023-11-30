<?php
    class Article
    {
        private string $nom;
        private float $prix;

        public function __construct( string $n, float $p ) 
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

        public function getNom()
        {
            return $this->nom;
        }

        

    }
?>
