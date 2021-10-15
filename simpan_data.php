<?php

// Mengaktifkan session php
session_start();

// menghubungkan koneksi php
include 'koneksi.php';

// mengambil data yang dikirim form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Menyeleksi data admin dengan username dan password yang sesuai
$simpan = "INSERT into register (nama, username, password) VALUES ('$nama', '$username', '$password')";

// Menghitung jumlah data yang ditemukan
$result = mysqli_query($conn, $simpan);

if ($result) {//jika simpan berhasil maka muncul pesan dan menuju ke halaman utama
    echo "<script>alert('Data Berhasil disimpan, mohon di catat !!!');document.location='index.php'</script>";
} else {//jika simpan gagal maka muncul pesan 
    echo "<script>alert('Proses simpan gagal, Cobalah Kembali');document.location='register.php'</script>";
}

?>