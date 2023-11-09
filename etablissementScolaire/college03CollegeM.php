<?php
    include_once "collegeM.php";
    include_once "eleveM.php";
    include_once "surveillantM.php";
    include_once "enseignantM.php";

    $college1 = new College('Zavatta');



    $college1 -> addClasse(new Classe ('5e D'));
    // $college1 -> addEleve(new Eleve('toto', '6e B'));

    $college1 -> addIndividus(new Enseignant ('maboulette', 12));
    $college1 -> addIndividus(new Eleve('toto', '6e B'));
    $college1 -> addIndividus(new Eleve('tata', '5e C'));
    $college1 -> addIndividus(new Surveillant('Jimmy', '35'));

    $college1  -> listerIndividus();

    print("************<br>");

    $individu = $college1->getIndividusNyName('maboulette');

    print("individu récup de la liste: ".$individu);

    // $college1 -> affecterA('maboulette', '5e D');
   
    // $college1 -> listerClasse();
    // $college1 -> listerEleve();
   
?>
