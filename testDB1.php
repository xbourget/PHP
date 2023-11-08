<?php
	
    require "parametres.php";
	
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 


    // id   | nom      | id_espece | age  | poids  | id_pays | id_regime 

    $sql = "SELECT * FROM animal";

    $result = $connexion->query( $sql );

	if ( $result )
    {
		while( $row = mysqli_fetch_array( $result ))
        {
            foreach($row as $elem)
            print($elem.'---');
            print( '<br>');
            print_r( $row );
            print( '<br>');
        }

	}
    $connexion->close();
?>