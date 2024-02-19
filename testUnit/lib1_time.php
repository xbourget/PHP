<?php
// developpeur 1 créée cette librairie qui permet de retourner une chaîne de caractères de forme hh:mm:ss

function getTheNow()
{
    $now = new DateTime();
    $ourExact = $now->format("A g:i:s");
    //$ourExact = $now->format("H:i:s");
    return $ourExact;
}

function getTheDate()
{
    $now = new DateTime();
    $date = $now->format("Y:m:d");
    return $date;
}
?>