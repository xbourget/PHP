<?php
    include_once "Enseignant.php";

    $enseignant1= new Enseignant('Tournsesol',11);

    print($enseignant1);

    $enseignant1->travailler();
    $enseignant1->remunerer();
?>
