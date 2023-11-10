<?php
    include_once "fusee.php";

    $fusee1 = new Fusee( "licorne", 'space', 40 );
    
    $fusee1->demarrer();
    $fusee1->accelerer();
    $fusee1->accelerer( 15 );
    $fusee1->accelerer( -10);
    $fusee1->accelerer( -10);
    $fusee1->arreter();  
?>