<?php
    include_once "individusM.php";
    include_once "classeM.php";

    class College 
    {
        private $listIndividus = [];
        private $listClasses = [];

        private string $nom;

        public function __construct( string $nom ) 
        {
            
            $this->nom = $nom; 
        }

        public function addIndividus(Individus $individus)
        {   
            array_push($this -> listIndividus, $individus);
            
        }

        public function listerIndividus()
        {   
            
            foreach ($this->listIndividus as $individu)
            {
                print($individu. "<br>");
            }
        }

        public function getIndividusNyName( $name )
        {   
            
            foreach ($this->listIndividus as $individu)
            {   
                if ($individu->getName()== $name)
                    return $individu;
            }
            return null;
        }


        public function getClasseNyName( $name )
        {   
            
            foreach ($this->listClasses as $classe)
            {   
                if ($classe->getName()== $name)
                    return $classe;
            }
            return null;
        }



        public function listerClasses()
        {   
            
            foreach ($this->listClasses as $classe)
            {
                print($classe. "<br>");
            }
        }

        public function addClasse(Classe $classe)
        {   
            
            array_push($this->listClasses, $classe);
        
        }

        public function addEleve(Eleve $eleve, string $classname)
        {   
            $this -> addIndividus($eleve);
            $classe = getClasseNyName($classname);
            if ($classe == null)
            {
                print("la classe $classname n'existe pas");
                return $classe;
            }
        }

            public function addClasse(Classe $classe)
        {   
            
            array_push($this->listClasses, $classe)
        
        }
    }
        
?>
