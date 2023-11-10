<?php
    abstract class Vehicule
    {
        public string $nom = '';
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

        public function getVitesse() 
        {
            return $this->vitesse;
        }

        public function accelerer( int $dv=10 )
        {
            $this->vitesse += $dv;

            if($this->vitesse > $this->vitesseMax) {
                print("oula, j'ai atteint ma vitesse max de $this->vitesseMax km/h!");
                $this->vitesse = $this->vitesseMax;
            } else {
                print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );
            }
        }

        abstract public function demarrer();
        abstract public function arreter(); 
        
        public function getVitesseResiduelle() {
            print("Ma vitesse résiduelle est de $this->vitesse km/h<br>");

            if ($this->vitesse >= $this->vitesseMax * 0.1) {
                print("Wesh ca secoue!<br>");
            }
        }
     }
?>