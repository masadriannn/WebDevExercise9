<?php

// membuat array
$hobi = [
    "Futsal", 
    "Badminton", 
    "Ngoding"
];

// menambahkan isi pada indeks ke 3
$hobi[3] = "Nyanyi";

// menambahkan isi pada indeks terakhir
$hobi[] = "Gosip";

// cetak array dengan perulangan
// foreach($hobi as $hobiku){
//     echo $hobiku."<br>";
// }

// menambahkan pada indeks yang sudah memiliki isi
$hobi[4] = "Masak";

// cetak array
echo "<pre>";
print_r($hobi);
echo "</pre>";
?>