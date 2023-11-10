<?php
include_once "vehicule.php";
class Garage 
{
    protected $vehicules = [];  

    public function __construct( ) 
    {
        
    }   
    
    public function ranger( Vehicule $vehicule) 
    {
        $this->vehicules[] = $vehicule;
    }                   

    public function listerVehicules( ) 
    {
        print(  "garage: <br>" );
        print(  '============================<br>' );

        $cpt = 0;
        foreach ( $this->vehicules as $line) 
        {
            print(  ++$cpt."  ".$line->getNom().' : vitesseMax: '.$line->getVitesseMax().'<br>' );
        }
    }                   

}