<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM matakuliah WHERE kode = $id");

header('Location:../../matkul.php ');