<?php
	
    require "config.php";
	
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname); 

    // id | nom | id_espece | age | poids | id_pays | id_regime

    $sql = "SELECT * FROM animal";

    $result = $connexion -> query( $sql );

	if ( $result )
    {
		foreach(mysqli_fetch_array($result) as $row)
        {
            print($row);
            print("<br>");
        }

	}
    $connexion -> close();
?>