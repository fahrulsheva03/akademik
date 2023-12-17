<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $kode = $_POST['kode'];
    $nim = $_POST['nim'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $hari = $_POST['hari'];
    $ruangan = $_POST['ruangan'];
    
    $sql = mysqli_query($koneksi , "INSERT INTO jadwalkuliah SET
    kode = '$kode',
    nim = '$nim',
    mulai = '$mulai',
    selesai = '$selesai',
    hari = '$hari',
    ruangan = '$ruangan'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../jadwal.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}