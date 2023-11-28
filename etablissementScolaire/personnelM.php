<?php
    include_once "individusM.php";

    abstract class Personnel extends Individus
    {
        protected int $salaire;

        public function __construct( string $nom, int $salaire ) 
        {
            parent::__construct($nom);
            $this->salaire = $salaire; 
        }

        public function travailler()
        {   
            
            print("je travaille dans le collège");
        }

        public function remunerer()
        {   
            
            print("je gagne".$this->salaire."<br>");
        }
        
   }
?>
