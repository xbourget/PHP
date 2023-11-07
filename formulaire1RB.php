<?php
    if(!empty($_POST))          // la boucle de fait uniquement quand la variable post n'est pas vide
        {
        $nom = $_POST[ 'nom' ]; //cad quand lutilisateur à rentrer qqch ds le formulaire
        $prenom = $_POST[ 'prenom' ];
        print( "<h1>hello $nom $prenom</h1>");
        exit(); 
    }
    //$_SERVER['REQUEST_URI']
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='ton nom' /> 
    <input type="text" name="prenom" placeholder='ton prenom' /> 
    <input type="submit" name="submit" value="OK" />
</form>
