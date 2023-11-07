<?php

    session_start();
    include "myLib01.php";
    require_once 'ipconfig.php';

    myHeader("info nom");
    createForm($myAddress."/PHP/pagePrenomBack1.php", "prenom");

?>