<?php


include "mylib01M.php";
include "parametreM.php";

myHeader('info nom');
createForm( $url."/PHP/pagePrenomBack1M.php", "nom", "prenom");
myFooter();


?>

