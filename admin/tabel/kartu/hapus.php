<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM kartu_ujian WHERE id = $id");

header('Location:../../kartu.php ');