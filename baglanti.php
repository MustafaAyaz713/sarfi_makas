<?php
$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "sarfimakasuyelik";

$connection = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($connection, "UTF8");

if (!$connection) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

?>