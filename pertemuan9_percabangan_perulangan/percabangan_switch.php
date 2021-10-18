<?php
$halaman = 'berita';
switch ($halaman){
    case 'home':
    //perintah yang dijalankan jika n=label1
    echo 'Anda memilih home';
    break;
    case 'berita':
    //perintah yang dijalankan jika n=label2
    echo 'Anda memilih berita';
    break;
    case 'artikel':
    //perintah yang dijalankan jika n=label3
    echo 'Anda memilih artikel';
    break;
    default:
    //perintah yang dijalankan jika n berbeda dari semua label
    echo 'Halaman tidak ditemukan';
}
    
?>