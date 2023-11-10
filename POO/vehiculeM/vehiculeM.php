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

        public function getName( int $nom ) 
        {
            return $this->nom;
        }

        public function getVitesse( int $vitesse ) 
        {
            return $this->vitesse;
        }

        public function accelerer( int $dv=10 )
        {
            $this->vitesse += $dv;
            print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );

            if ($this->vitesse >= $this->vitesseMax)
                print("Attention, vous avez dépassez la limite de $this->vitesseMax <br>");
        }

        abstract public function demarrer();
        abstract public function arreter();        
     }
?>