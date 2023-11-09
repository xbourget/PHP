<?php
    include_once "individus.php";
    include_once "classe.php";

    class Eleve extends Individus
    {
        protected ?Classe $classe = NULL;

        public function __construct( string $nom ) 
        {
            parent::__construct( $nom );
        }                   

        public function __toString() 
        {

            if ( $this->classe == NULL  )
                return '(Eleve - non affecté)'.parent::__toString(); 
            else
                return '(Eleve '.$this->classe.')'.parent::__toString(); 
        }  
 
        public function affecterALaClasse( Classe &$classe )
        {
            $this->classe  = $classe; 
        }

        public function travailler()
        {
            if ( $this->classe == NULL  )
                print( "j'étudie." );
            else
                print( "j'étudie dans la classe de ".$this->classe );
        }

        public function getClasse()
        {
            return $this->classe;          
        }

    }
?>