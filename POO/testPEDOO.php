<?php
    

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        
        //On Ã©tablit la connexion
        $connexion = new PDO("mysql:host=$servername;dbname=zoo", $username, $password);        

        $sql = "SELECT * FROM animal WHERE nom = :var1";
        $sth = $connexion->prepare( $sql );
        $sth->execute( ['var1' => $nom] );
    
        $result = $red = $sth->fetchAll();
        foreach ($result as $line ) 
        {
            print_r( $line );
        }
        
        exit();
    }
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='nom animal' /> 
    <input type="submit" name="submit" value="OK" />
</form>
