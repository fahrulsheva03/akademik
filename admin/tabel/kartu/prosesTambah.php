<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nim = $_POST['nim'];
    $nomor_kartu = $_POST['nomor_kartu'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO kartu_ujian SET
     nim = '$nim',
     nomor_kartu = '$nomor_kartu'

    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../kartu.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}