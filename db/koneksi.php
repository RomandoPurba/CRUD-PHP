<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "kariawan";//ubah sesuai dengan nama database yang anda buat.

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke server gagal" .mysqli_connect_error());
}
