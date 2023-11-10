<?php
    require "parametre__AC.php";
    require "myLib.php";

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];

        $connexion = mysqli_connect( $hostname, $username, $password, $dbname );  

        $sql = "SELECT * FROM animal WHERE nom = '$nom'";
        print( $sql );
        $result = $connexion->query( $sql );
        $listData = [];
        if ( $result )
        {
            while( $row = mysqli_fetch_array( $result ))
                array_push( $listData, $row );
        }
        $connexion->close();
        myTableList( $listData );
        exit();
    }
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='nom animal' /> 
    <input type="submit" name="submit" value="OK" />
</form>





