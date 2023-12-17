<?php
require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "UPDATE mahasiswa SET
bayar = 3
WHERE 
id_mahasiswa = $id
");

echo "
<script>
alert('Document Ditolak')
location = '../../pembayaran.php'
</script>
";

