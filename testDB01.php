<?php
	
    require "parametreRB.php";
	require "myLib01.php";
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 


    // id   | nom      | id_espece | age  | poids  | id_pays | id_regime 

    $sql = "SELECT * FROM animal";

    $result = $connexion->query( $sql );

    $data = [];
	if ( $result )
    {
		while( $row = mysqli_fetch_array( $result ))
        //    array_push ($data, $row);
        print_r($row);
        
	}
    $connexion->close();

    myTableList ($data);
?>