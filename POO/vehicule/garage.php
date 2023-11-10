<?php

    include_once "vehicule.php";

    class Garage {

        private $listVehicules = [];
        private int $capacite;

        private $dbco;

        public function __construct(int $capacite) {
            $this->capacite = $capacite;
            $this->dbco = include "dbconfig.php";
        }   

        public function addVehicule(Vehicule $vehicule) {

            if (count($this->listVehicules) < $this->capacite) {

                $now = date("Y-m-d H:i:s");

                $sql = "INSERT INTO Vehicules (nom, dateEntree, dateSortie) VALUES (:nom, :dateEntree, NULL)";
                $stmt = $this->dbco->prepare($sql);
                $stmt->bindParam(':nom', $vehicule->nom);
                $stmt->bindParam(':dateEntree', $now);
                
                if ($stmt->execute()) {
                    array_push($this->listVehicules, $vehicule);
                    print("Véhicule $vehicule->nom ajouté au garage!<br>");
                } else {
                    print("Erreur lors de l'ajout du véhicule!<br>");
                }

            } else {
                print("Le garage est plein!");
            }

            print("<br>");
            
        }

        public function removeVehicule(Vehicule $vehicule) {
            
            $key = array_search($vehicule, $this->listVehicules);
    
            if ($key !== false) {
                unset($this->listVehicules[$key]);

                $now = date("Y-m-d H:i:s");

                $sql = "UPDATE Vehicules SET dateSortie = :dateSortie WHERE nom = :nom AND dateSortie = NULL";
                $stmt = $this->dbco->prepare($sql);
                $stmt->bindParam(':nom', $vehicule->nom);
                $stmt->bindParam(':dateSortie', $now);

                if ($stmt->execute()) {
                    print("Véhicule $vehicule->nom retiré du garage!<br>");
                } else {
                    print("Erreur lors du retrait du véhicule!<br>");
                }

            } else {
                print("Ce véhicule ne se trouve pas dans le garage!");
            }

            print("<br>");
        }

        public function listerVehicules() {

            print("Dans ce garage, il y a: <br>");

            if (!empty($this->listVehicules)) {
                foreach( $this->listVehicules as $vehicule ) {
                    print("• $vehicule->nom <br>");
                }
            } else {
                print("• aucun véhicule pour le moment");
            }

            print("<br>");

        }




    }

?>