<?php

    include_once "article01.php";

    class Facture
    {
        protected string $client;       // variable d'instance
        protected $articles = [];       // variable d'instance

        static int $nbrFacture = 0;
        
        public function __construct( $c ) 
        {
            $this->client  = $c; 
            Facture::$nbrFacture++;
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
<<<<<<< HEAD
            print(  " <br> numéro facture: ".Facture::$nbFacture.'<br>' );
=======
            print(  "<br>num Facture : ".Facture::$nbrFacture.'<br>' );

>>>>>>> origin/xavier

        }                   
    }
?>
