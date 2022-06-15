<?php
require_once "../db/koneksi.php";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $posisi = $_POST['posisi'];

    $q = $conn->query("UPDATE kariawan SET fname='$fname', lname='$lname', email='$email', position='$posisi' WHERE id='$id'");

    if ($q) {
        echo "<script>
            alert('Update data berhasil');
            window.location.href='../index.php';
        </script>";
    }else{
        echo "<script>
            alert('gagal melakukan update data');
            window.location.href='../edit.php?id=$id';
        </script>";
    }
}else{
    header('Location: ../index.php');
}