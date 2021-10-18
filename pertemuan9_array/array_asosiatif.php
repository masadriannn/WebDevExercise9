<?php

// // membuat array asosiatif
// $artikel = [
//     "judul" => "Belajar Pemrograman PHP", 
//     "penulis" => "Adrian Dwi Adinata", 
//     "view" => 1945,
// ];

// // mencetak isi array asosiatif
// echo "<h2>".$artikel["judul"]."</h2>";
// echo "<p>Oleh: ".$artikel["penulis"]."</p>";
// echo "<p>View: ".$artikel["view"]."</p>";

$email["subjek"] = "Apa Kabar?";
$email["pengirim"] = "Adrian Dwi Adinata";
$email["isi"] = "Apa Kabar? Lama tak jumpa.";

echo "<pre>";
print_r($email);
echo "</pre>";
?>