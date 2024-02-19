<?php
// développeur 2 créée une librairie fournissant une fonction sayHello( name ) qui retourne une chaîne avec l'heure
// sayHello( 'toto' ) -> hello toto il est 21 heures
// pour réaliser ça, il s'appuie sur la librairie développée par le développeur 1

require_once 'lib1_time.php';  // Assurez-vous d'ajuster le chemin selon la structure de votre projet

function sayHello($name)
{
    $ourExact = getTheNow();

    //$now = new DateTime();
    //$ourExact = $now->format("H");

    $hour = substr($ourExact, 0, 2);  // Modification pour obtenir l'heure au bon format
    return 'hello ' . $name . ' il est ' . $hour . ' heures';
}

?>
