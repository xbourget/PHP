<?php
// développeur 2 créée une librairie fournissant une fonction sayHello( name ) qui retourne une chaîne avec l'heure
// sayHello( 'toto' ) -> hello toto il est 21 heures
// pour réaliser ça, il s'appuie sur la librairie développée par le développeur 1

require_once 'lib1_time.php';  // Assurez-vous d'ajuster le chemin selon la structure de votre projet
require_once 'lib1_hello.php';  // Assurez-vous d'ajuster le chemin selon la structure de votre projet
use PHPUnit\Framework\TestCase;
    

class TEST_lib1_hello extends PHPUnit\Framework\TestCase
{
    public function testHour()
    {
        // heure courante
        $now = new DateTime();
        $hour = $now->format("H");

        // extraction de l'heure fournie par la fonction
        $result = sayHello('zorro');
        //print( $result );
        $resultHour = substr($result, 19, 2);

        $this->assertEquals($hour, $resultHour);
    }

    public function testName()
    {
        $result = sayHello('zorro');
        //print( $result );
        // extraction du nom retourné dans la chaîne
        $name = substr($result, 6, 5);
        $this->assertEquals('zorro', $name);
    }
}
?>
