<?php

    include_once "fuseeM.php";
    include_once "bateauM.php";
    include_once "vehiculeM.php";

    class Garage
    {


        private $listVehicule = [];

        private string $nom;
        private string $vitesse;

        public function __construct( string $nom ) 
        {
            $this->nom  = $nom;
        }

        public function __toString() 
        {
            return $this->nom.'('.$this->vitesse.'km/h)'; 
        }

        public function ranger( Vehicule $vehicule  )
        {
            array_push( $this->listVehicule, $vehicule );
        }

        public function getVehiculeByName( $name )
        {
            foreach ($this->listVehicule as $vehicule ) 
            {
                if ( $vehicule->getName() == $name )
                    return $vehicule;
            }
            return NULL;
        }

        public function listerVehicules()
        {
            foreach ($this->listVehicule as $vehicule) 
            {
                print( $vehicule.'<br>');
    
            }

        }

        public function saveVehiclesToDatabase()
    {
        // Connexion à la base de données
        $db = new PDO('mysql:host=localhost;dbname=garage', 'root', '');

        // Préparation de la requête INSERT
        $sql = 'INSERT INTO rangement (vehicule, date) VALUES (?, ?)';
        $stmt = $db->prepare($sql);

        // Parcours des véhicules du garage
        foreach ($this->listVehicule as $vehicule) {
            // Exécution de la requête INSERT
            $stmt->execute([$vehicule->getName(), date('Y-m-d')]);
        }

        // Fermeture de la connexion à la base de données
        $db = null;
    }
        



    }
?>