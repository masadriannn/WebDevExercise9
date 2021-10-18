<?php

// membuat array
$colors = [
    "red", 
    "green", 
    "blue",
    "yellow"
];

// sort($colors);

// mengurutkan terbalik
rsort($colors);

foreach($colors as $value){
    echo "$value <br>";
}
?>