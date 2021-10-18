<?php

// membuat array
$hewan = [
    "Kucing", 
    "Marmut", 
    "Burung"];

// menghapus isi array
unset($hewan[1]);

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";

echo "<br>";

echo "<pre>";
print_r($hewan);
echo "</pre>";
?>