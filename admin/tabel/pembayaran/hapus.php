<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "UPDATE mahasiswa SET
bayar = 0
WHERE 
id_mahasiswa = $id
");

mysqli_query($koneksi , "DELETE FROM pembayaran WHERE mahasiswa = $id");

header('Location:../../pembayaran.php ');