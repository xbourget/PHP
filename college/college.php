<?php
    include_once "Individus.php";

   class College
    {
        private $ListIndividus=[];
        private $ListClasses=[];
        private string $nom;
        
        public function __construct(string $nom)
        {
           $this->nom= $nom;
            
        }                
                   
        public function addIndividus (Individus $individus)
        {
           array_push($this->ListIndividus, $individus);
        }
        public function listerIndividus()
        {
            foreach($this->$ListIndividus as $individus)
            {
                print($individus.'<br>');
            }
        }
        public function getIndividusByName($name)
        {
            foreach($this->$ListIndividus as $individus)
            {
                if($individus->getName()==$name)
                return $individus;
                
            }
        return NULL;
        }




    }

?>
