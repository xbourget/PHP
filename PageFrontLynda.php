<?php
    include "malibrairie.php";
    include "parametres.php";

    myHeader( 'info nom' );
    
    ?>
    <form action="http://192.168.1.126/PHP/backprenom.php" method="post">
        <input type="text" name="nom" placeholder='ton nom'  /> 
        <br>
    
        <input type="text" name="prenom" placeholder='ton prenom'   /> 
        <br>

        <input type="text" name="age" placeholder='ton age'  /> 
        <br>

        <input type="submit" name="submit" value="OK" />
    </form>
    <?php

   

    myFooter();
?>