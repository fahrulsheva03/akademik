<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $kode = $_POST['kode'];
    $nim = $_POST['nim'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $ruangan = $_POST['ruangan'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO jadwalujian SET
    kode = '$kode',
    nim = '$nim',
    tanggal = '$tanggal',
    jam = '$jam',
    ruangan = '$ruangan'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../ujian.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}