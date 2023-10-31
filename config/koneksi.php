<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "penggajian";

$koneksi = mysqli_connect($host, $user, $password, $db);

// if (!$koneksi) {
//     die("Gagal Konek Mas Bro!" . mysqli_connect_errno() . "-" . mysqli_connect_error());
//     exit();
// } else {
//     echo "Berhasil cuy!";
// }
