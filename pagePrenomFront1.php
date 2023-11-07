<?php

    session_start();
    include "myLib01.php";
    require_once 'ipconfig.php';

    myHeader("info nom");
    createForm($_url."/PHP/pagePrenomBack1.php", "prenom");

?>