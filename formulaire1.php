<?php
    if(!empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        print( "<h1>hello $nom</h1>");
        exit(); 
    }
    //$_SERVER['REQUEST_URI']
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='ton nom' /> 
    <input type="submit" name="submit" value="OK" />
</form>
  