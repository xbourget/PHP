<?php

    include_once "article01.php";

    class Facture
    {
        protected string $client;       // variable d'instance
        protected $articles = [];       // variable d'instance
        protected static int $numFacture = 0;
        protected static string $idPrefixFacture = "GH";
        protected static string $idFacture = "";
    
        public function __construct( $c ) 
        {
            $this->client  = $c; 
            Facture::$numFacture++;
            Facture::$idFacture = Facture::$idPrefixFacture . sprintf('%08d', Facture::$numFacture);
        }                   

        public function addArticle( Article $art, int $qte ) 
        {
            array_push( $this->articles, [ 'art' => $art, 'qte' => $qte ] );
        }                   

        public function edit( ) 
        {
            print(  "Facture : ".Facture::$idFacture.'<br>' );
            print(  "client : ".$this->client.'<br>' );
            print(  '============================<br>' );

            $cpt = 0;
            $total = 0;
            foreach ( $this->articles as $line) 
            {
                $prix = $line['art']->getPrix() * $line['qte'];
                print(  ++$cpt."  ".$line['art'].' X '.$line['qte'].' = '.$prix.'<br>' );
                $total += $prix;
            };
            print(  '============================<br>' );
            print('TOTAL: '. $total .' EUROS');
        }                   
    }
?>
