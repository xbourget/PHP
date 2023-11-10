<?php
    include_once "individus.php";
    include_once "classe.php";

    class College
    {
        private  $listIndividus = [];
        private  $listClasses = [];

        private string $nom;
        

        public function __construct( string $nom ) 
        {
            $this->nom  = $nom; 
        }                   
 
        public function addIndividus( Individus $individus  )
        {
            array_push( $this->listIndividus, $individus );
        }
        
        public function addClasse( Classe $classe  )
        {
            array_push( $this->listClasses, $classe );
        }
        
       
        public function listerIndividus()
        {
            foreach ($this->listIndividus as $individus ) 
            {
                print( $individus.'<br>' );
            }
        }
        
        public function listerClasses()
        {
            foreach ($this->listClasses as $classe ) 
            {
                print( $classe.'<br>' );
            }
        }

        public function getIndividusByName( $name )
        {
            foreach ($this->listIndividus as $individus ) 
            {
                if ( $individus->getName() == $name )
                    return $individus;
            }
            return NULL;
        }
        
        public function getClasseByName( $name )
        {
            foreach ($this->listClasses as $classe ) 
            {
                if ( $classe->getName() == $name )
                    return $classe;
            }
            return NULL;
        }

        public function addEleve( Eleve $eleve, string $nameClasse  )
        {
            $nameEleve = $eleve->getName();
            $this->addIndividus( $eleve );
            $this->affecterA( $nameEleve,  $nameClasse );
        }


        public function affecterA( string $nameIndividus, string $nameClasse )
        {
            $individus = $this->getIndividusByName( $nameIndividus );
            if ( $individus == NULL )
            {
                print( "l'individus n'existe pas.");
                return;
            }

            $classe = $this->getClasseByName( $nameClasse );
            if ( $classe ==  NULL )
            {
                print( "la classe $classeName n'existe pas.");
                return;
            }

            $individus->affecterALaClasse( $classe );
        }

        public function listerEleves( string $nameClasse = '' )
        {
            foreach ($this->listIndividus as $individus ) 
            {
                if ( get_class( $individus) == 'Eleve' )
                {
                    if ( $nameClasse == '' )
                        print( $individus.'<br>' );
                    else
                    {                    
                        $classe = $individus->getClasse();
                        if ( $classe != NULL && $classe->getName() == $nameClasse  )
                            print( $individus.'<br>' );
                    }                
                }
            }
        }
        
        public function afficherClasse( string $nameClasse)
        {
            $classe = $this->getClasseByName( $nameClasse );
            if ( $classe == NULL )
                return;
            print( 'Classe : '.$classe.'<br>' );
            print( 'Prof   : '.$classe->getEnseignant().'<br>' );
            $this->listerEleves( $nameClasse );
        }

        public function afficherClasses() //affiche toutes les classes
        {
            foreach ($this->listClasses as $classe ) 
            {
                $name=$classe->getName();
                $this->afficherClasse($name);
            
            }
            
        }
    }
?>
