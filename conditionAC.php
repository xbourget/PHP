<?php

$age = 15;
$nom = 'toto';

if($age >= 18 || $nom == 'toto') {
    print("tu peux te sauver en voiture<br>");
    print("bye bye $nom");
}
elseif($age < 5) {
    print("tu es à la maternelle<br>");
}
 else {
    print("tu prends le bus");
}

?>