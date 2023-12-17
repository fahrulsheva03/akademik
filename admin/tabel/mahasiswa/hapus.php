<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM mahasiswa WHERE id_mahasiswa = $id");

header('Location:../../mahasiswa.php ');