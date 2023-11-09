<?php
    // include_once "article01.php";

    abstract class Individus   // classe abstract: ne peut pas être instanciée
    {
        protected string $nom;       
          
        
        public function __construct( string $n ) 
        {
            $this->nom  = $n; 
        }                   

        public function __toString() 
        {

            return $this->nom; 
        }                   

        abstract public function travailler();  // veut dire que tous les enfants doivent implémenter cette méthode
        
   }
?>
