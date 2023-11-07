<style>
        td { 
            border: 1px solid black;
        }
</style>

<?php

    require "myLib01.php";
$data = [
        ['jean', 'dupont'],
        ['sergent', 'garcia'],
        ['xavier','dupond'],
        ['jean','jean']

    ];
    print( '<br>' );
    print ('<table>');
for ($i=0 ; $i< count ($data); $i++)
{
    print ('<tr>');
    for ($j=0 ; $j< count ($data[$i]); $j++)
    print ('<td>' .$data [$i][$j]. '</td>');  //on encadre par des points ce que l'on doit concatener (ex : liste et tableau)
print ('<tr>');
}
print ('</table>');


   
    
    
    

    
    ?>