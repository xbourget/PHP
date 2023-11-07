<?php
	
    require "parametre.php";
	
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 


    // id   | nom      | id_espece | age  | poids  | id_pays | id_regime 

    $sql = "SELECT * FROM animal";

    $result = $connexion->query( $sql );

    $listData = [];
	if ( $result )
    {
		while( $row = mysqli_fetch_assoc( $result ))
        {   
            array_push($listData, $row);
            foreach ( $row as $elem)
                print ($elem.' - ');
            print( '<br>');
        }

	}
    $connexion->close();
?>
