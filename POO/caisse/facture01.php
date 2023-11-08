<?php

    include_once "article01.php";

    class Facture
    {
        protecte string $client;       // variable d'instance
        protecte $articles = [];       // variable d'instance
    
        public function __construct( $c ) 
        {
            $this->client  = $c; 
        }                   

        public function addArticle( Article $art, int $qte ) 
        {
            array_push( $this->articles, [ 'art' => $art, 'qte' => $qte ] );
        }                   

        public function edit( ) 
        {
            print(  "client : ".$this->client.'<br>' );
            print(  '============================<br>' );

            $cpt = 0;
            foreach ( $this->articles as $line) 
            {
                print(  ++$cpt."  ".$line['art'].' X '.$line['qte'].'   = '.($line['art']->getPrix()*$line['qte']).'<br>' );
            }
            print( "<br>num facture :"<div class="Facture">::$nb.'<br>');
        }                   
    }
?>
