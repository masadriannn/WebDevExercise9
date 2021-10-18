<?php

// ini adalah array 2 dimensi
$cars = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Honda",5,2],
    ["Toyota",17,15],
];

// cara mengakses isinya
echo $cars[0][0].": In Stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In Stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In Stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In Stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// menampilkan array multidimensi
for ($row = 0; $row < 4; $row++){
    echo "<p><b>Row Number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}