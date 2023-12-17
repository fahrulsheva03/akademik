<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM transkrip WHERE id = $id");

header('Location:../../transkrip.php ');