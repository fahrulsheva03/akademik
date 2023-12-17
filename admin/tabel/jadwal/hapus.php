<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM jadwalkuliah WHERE id_jadwal = $id");

header('Location:../../jadwal.php ');