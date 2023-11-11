<?php
	
    require "parametre.php";
	
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 


    /* Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int         | NO   | PRI | NULL    | auto_increment |
| vehicule | varchar(50) | YES  |     | NULL    |                |
| date     | date        | YES  |     | NULL    | */

    $sql = "SELECT * FROM rangement";

    $result = $connexion->query( $sql );

    $listeVehicules = [];
	if ( $result )
    {
		while( $row = mysqli_fetch_assoc( $result ))
        {   
            array_push($listeVehicules, $row);
            foreach ( $row as $elem)
                print ($elem.' - ');
            print( '<br>');
        }

	}
    $connexion->close();
?>
