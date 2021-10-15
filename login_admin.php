<?php

// Mengaktifkan session php
session_start();

// menghubungkan koneksi php
include 'koneksi.php';

// mengambil data yang dikirim form
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' AND password = '$password'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    //Mengarahkan ke halaman utama admin sebagai halaman utamanya 
    header("location:utama.php");
} else {
    header("location:index.php?pesan=gagal/pastikan_anda_memasukan_data_dengan_benar");
}
?>