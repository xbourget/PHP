<?php
    include_once "eleve.php";
    include_once "college.php";
    include_once "Enseignant.php";
    include_once "surveillant.php";

    $college1= new College('Zavatta');

   // $college1->addClasse(new Classe ('5eme D'));
    
    $college1->addIndividus (new Enseignant ('maboulette',12));
   // $college1->affecterA('maboulette', '5eme D');
    $college1->addIndividus(new Eleve('toto','5eme D'));

   // $college1->listerClasse();
   // $college1->listerEleve();
      //  $college1->ListerEleve();
        $college1->listerIndividus();
       $individus= $college1->getIndividusByName('maboulette');
        print ($individus);




?>
