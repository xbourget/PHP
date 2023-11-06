<?php

$url = "https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/liste-des-arrets-du-reseau-astuce-metropole-rouen-normandie/records?limit=20";

$json = file_get_contents($url);
$jsonData = json_encode($json);
// print($json);

$dictionnaire = json_decode($json, true);


$listeResult = $dictionnaire['results'];
foreach($listeResult as $nom_arret)
{
    print($nom_arret['nom_arret'].'  ('.$nom_arret['commune'].')<br>');
}



// foreach( $liste as $mot )
    
//         if (  array_key_exists( $mot, $listeMotExamine ) == false )
        
//             $listeMotExamine[$mot] = 1;
//         else
//             $listeMotExamine[$mot]++;
        
//     foreach($listeMotExamine as $mot => $quantite)
//     {
//         print($mot. ':' .$quantite.'<br>');
//     }

// function compteMotInListe( $motATrouver, $liste )
// {
//     $cpt = 0;
//     foreach( $liste as $mot ) 
//         if ($mot == $motATrouver ) 
//             $cpt++;
//     return $cpt;
// }




?>