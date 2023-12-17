<?php
require '../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($koneksi , "UPDATE mahasiswa SET

    nim = '$nim',
    nama = '$nama',
    alamat = '$alamat',
    email = '$email',
    nohp = '$nohp',
    password = '$password'

    WHERE
    id_mahasiswa = $id
    ");

if($sql){
    echo"
        <script>
        alert('Berhasil Edit Profile')
        location = '../profile.php'
        </script>
        ";

}else{
}
}

