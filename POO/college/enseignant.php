<?php
    include_once "personnel.php";

    class Enseignant extends Personnel
    {
        protected array $listClasses = [];

        public function __toString() 
        {
            return '(Enseignant)'.parent::__toString(); 
        }  
        
        public function travailler()
        {
            //parent::travailler();
            print( "j'enseigne...<br>");
        }

        public function affecterALaClasse( Classe &$classe )
        {
            array_push($this->listClasses, $classe);
            $classe->setEnseignant( $this );
        }
   }
?>
