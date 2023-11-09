<?php
    include_once "enseignantM.php";
    include_once "surveillantM.php";
    include_once "personnelM.php";

    $enseignant1 = new Enseignant('Tournesol: ', 5);

    print($enseignant1);

    $enseignant1->travailler();

    $surveillant1 = new Surveillant('Bob: ', 10);
    print($surveillant1);
    $surveillant1->travailler();

    $enseignant1->remunerer();
    print($enseignant1);
   
?>
