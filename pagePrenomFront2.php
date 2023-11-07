<?php

    session_start();
    include "myLib01.php";
    require_once 'ipconfig.php';
    
    myHeader("info prénom");
    createForm($myAddress."/PHP/pagePrenomBack2.php", "nom");

?>