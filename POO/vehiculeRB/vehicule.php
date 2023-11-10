<?php
    abstract class Vehicule
    {
        protected string $nom = '';
        protected int $vitesseMax = 0;
        protected int $vitesse = 0;

        public function __construct( string $nom, int $vitesseMax ) 
        {
            $this->nom = $nom;
            $this->vitesseMax = $vitesseMax;
        }                   

        public function __toString() 
        {
            return $this->nom.'('.$this->vitesse.'km/h)'; 
        }

        public function setVitesse( int $vitesse ) 
        {
            $this->vitesse = $vitesse;
        }

        public function getVitesse( int $vitesse ) 
        {
            return $this->vitesse;
        }
        public function getName( ) 
        {
            return $this->nom;
        }
        public function accelerer( int $dv=10 ) //la fonction accelerer est à 10km/h si je ne rentre pas de valeur entre les parenthèses
        {
            $this->vitesse += $dv;                  // la vitesse augmente de 10km/h
            if ($this->vitesse>$this->vitesseMax)   //$this est lié à l'instance(fusée1) de l'objet (Fusee) 
            {
                $this->vitesse=$this->vitesseMax;
                print("la vitesse max est atteinte, la vitesse est de $this->vitesse km/h<br>");        
            
            }
            print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );
        }

        abstract public function demarrer(); //abstract oblige les enfants de la classe vehicule à avoir cette méthode dans leur code
        abstract public function arreter();    
     }
?>