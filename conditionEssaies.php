<?php

    $age = 2;

    // 3-6 mat

    if($age < 3) {
        print("Maison<br>");
    }
    elseif($age < 6) {
        print("Maternelle<br>");
    }
    elseif($age < 11) {
        print("Primaire<br>");
    }
    elseif($age < 15){
        print("College<br>");
    }
    elseif($age < 18) {
        print("Lycée<br>");
    }
    elseif($age < 30) {
        print("fac<br>");
    }
    elseif($age > 99) {
        print("Retraite<br>");
    }
    else{
        print("Erreur<br>");
    }

    if($age == 18) {
        print("Permis<br>");
    }

?>