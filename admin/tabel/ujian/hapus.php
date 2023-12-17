<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM jadwalujian WHERE id = $id");

header('Location:../../ujian.php ');