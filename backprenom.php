<?php
    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        $nom = $_POST[ 'nom' ];

        if ( $prenom != "" and $nom != ""  )
         
        
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            $_SESSION[ 'nom'  ] = $nom;
            header( 'location: http://192.168.1.126/PHP/pagePrenomFront2.html'   );
        }    

        
            
        else
            header( 'location: http://192.168.1.126/PHP/pagePrenomFront1.html'   );
    }

   
    
?>