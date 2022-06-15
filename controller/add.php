<?php
require_once "../db/koneksi.php";
if (isset($_POST['add'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $posisi = $_POST['posisi'];

  $q = $conn->query("INSERT INTO kariawan VALUES('', '$fname', '$lname', '$email', '$posisi')");

  if ($q) {
    echo "<script>
            alert('Data berhasil ditambah ke database');
            window.location.href='../tambah.php';
          </script>";
  }else {
    echo "<script>
            alert('Input data gagal');
            window.location.href='../tambah.php';
          </script>";
  }
}else{
    header('Location:../index.php');
}