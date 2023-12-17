<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nim = $_POST['nim'];
    $kode = $_POST['kode'];
    $nilai = $_POST['nilai'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO transkrip SET
    nim = '$nim',
    kode = '$kode',
    nilai = '$nilai'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../transkrip.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}