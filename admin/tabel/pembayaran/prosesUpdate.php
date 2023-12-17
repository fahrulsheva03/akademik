<?php
require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "UPDATE mahasiswa SET
bayar = 2
WHERE 
id_mahasiswa = $id
");

echo "
<script>
alert('Document Diterima')
location = '../../pembayaran.php'
</script>
";

