<?php

function tableFill() {
    $fill = "[=]";
    return $fill;
}

function myTable($width, $height) {

    print("<table>");
    for ($i = 0; $i < $height; $i++) {
        print("<tr>");
        for ($j = 0; $j < $width; $j++) {
           print("<td>");
           print(tableFill());
           print("</td>"); 
        }
        print("</tr>");
    }
    print("</table>");
}

function myTable2($data) {

    print("<table>");

    for ($i = 0; $i < count($data); $i++) {

        print("<tr>");

        for ($j = 0; $j < count($data[$i]); $j++) {

           print("<td>");

           print(ucfirst($data[$i][$j]));

           print("</td>");

        }

        print("</tr>");

    }
    print("</table>");
}

myTable(8, 8);
print("<br>");
myTable(16,16);
print("<br>");

$data = [
    ['jean', 'bon'],
    ['beurre', 'salé'],
    ['john', 'johnson', 'johns'],
    ['casse', 'croûte'],
    ['james', 'bond'],
];
myTable2($data);

?>