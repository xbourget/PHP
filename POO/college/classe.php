<?php
   include_once "enseignant.php";
 
    class Classe
    {
        protected string $name;       // variable d'instance
        protected array $listeProfs = [];       // variable d'instance
        
        
        public function __construct( public ? string $n=NULL ) 
        {
            $this->name  = $n; 
        }                   

        public function __toString() 
        {
            return 'Classe : '.$this->name; 
        }  
        
        public function getName( )
        {
            return $this->name;
        }

        public function getEnseignant($nom) : ?Enseignant
        {
            foreach( $this->listeProfs as $prof ) {
                    if( $prof->getName() == $nom )
                        return $prof;
            }
            return NULL;
        }

        public function getEnseignants()
        {
            foreach( $this->listeProfs as $prof ) {
                print($prof->getNom());
                print('<br>');
            }
            print('<br>');
        }

        public function setEnseignant( Enseignant &$prof )
        {
            array_push($this->listeProfs, $prof);
        }
   }
?>
