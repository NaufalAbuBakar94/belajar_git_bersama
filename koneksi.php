<?php
//sebagai host server
$host = "localhost";

//sebagai user login phpMyAdmin
$user = "root";

//sebagai pass login phpMyAdmin (isi bila kalian beri password)
$pass = "";

//nama databasenya (disesuaikan dengan nama databasenya)
$db = "projek_mini";

//sebagai kondisi
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi Gagal");
?>