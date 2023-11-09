<?php
    // include_once "article01.php";

    abstract class Individus   // classe abstract: ne peut pas être instanciée
    {
        protected string $name;       
          
        
        public function __construct( string $n ) 
        {
            $this->name  = $n; 
        }                   

        public function __toString() 
        {

            return $this->name; 
        }

        public function getName()
        {
            return $this->name;
        }

        abstract public function travailler();  // veut dire que tous les enfants doivent implémenter cette méthode
        
   }
?>
