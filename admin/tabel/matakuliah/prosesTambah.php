<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $matakuliah = $_POST['matakuliah'];
    $sks = $_POST['sks'];

    $sql = mysqli_query($koneksi , "INSERT INTO matakuliah SET
    matakuliah = '$matakuliah',
    sks = '$sks'
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../matkul.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}