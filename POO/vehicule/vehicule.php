<?php
    abstract class Vehicule
    {
        protected string    $nom        = '';
        protected int       $vitesseMax = 0;
        protected int       $vitesse    = 0;

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

        public function getVitesse( ) 
        {
            return $this->vitesse;
        }

        public function getVitesseMax( ) 
        {
            return $this->vitesseMax;
        }

        public function getNom( ) 
        {
            return $this->nom;
        }

        public function accelerer( int $dv=10 )
        {
            if( $this->vitesse + $dv >= $this->vitesseMax)
            {
                $this->vitesse = $this->vitesseMax;
                print( "$this->nom : la limitte est atteinte  $this->vitesse km/h <br>" );
            }
            else
            {
            $this->vitesse += $dv;
            print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );
            }
        }

        abstract public function demarrer();

        public function arreter()
        {
            print( "$this->nom : Vitesse résiduelle : $this->vitesse km/h <br>" );
            if ($this->vitesse > $this->vitesseMax * 0.1)
                print ("Oups !  ça secoue...<br>");

        }       
     }
?>