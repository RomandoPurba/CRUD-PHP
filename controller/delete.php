<?php

require_once '../db/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = $conn->query("DELETE FROM kariawan WHERE id = '$id'");

    if ($q) {
        echo "<script>
            alert('Data berhasil di hapus');
            window.location.href='../index.php';
        </script>";
    }else{
        echo "<script>
            alert('Gagal menghapus data kariawan');
            window.location.href='../index.php';
        </script>";
    }
}else{
    header('Location: ../index.php');
}