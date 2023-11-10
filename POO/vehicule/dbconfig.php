<?php

// IP address as URL
$_url = "http://192.168.1.60";

// MySQL credentials
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Garage";

try {
    $dbco = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS Vehicules(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(30) NOT NULL,
        dateEntree TIMESTAMP DEFAULT NULL,
        dateSortie TIMESTAMP DEFAULT NULL)
        ";
    $dbco->exec($sql);

    return $dbco;
}

catch(PDOException $e) {
  echo "Erreur : " . $e->getMessage();
  return null;
}

?>