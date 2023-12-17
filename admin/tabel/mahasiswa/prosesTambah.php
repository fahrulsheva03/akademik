<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    

    $sql = mysqli_query($koneksi , "INSERT INTO mahasiswa SET
  
     nim = '$nim',
     nama = '$nama',
     alamat = '$alamat',
     email = '$email',
     nohp = '$nohp',
     password = '$password'
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../mahasiswa.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}