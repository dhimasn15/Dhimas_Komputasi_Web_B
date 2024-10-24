<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "portofolio_dhimas";

// Menggunakan parameter yang benar di dalam fungsi mysqli_connect
$koneksi    = mysqli_connect($host, $user, $pass, $db,3308);

if(!$koneksi){
    die("Gagal koneksi");
} else{
    echo "";
}
?>
