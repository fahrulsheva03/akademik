<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nim = $_POST['nim'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $hari = $_POST['hari'];
    $ruangan = $_POST['ruangan'];
    

    $sql = mysqli_query($koneksi , "UPDATE jadwalkuliah SET
     kode = '$kode',
     nim = '$nim',
     mulai = '$mulai',
     selesai = '$selesai',
     hari = '$hari',
     ruangan = '$ruangan'

    WHERE
    id_jadwal = $id
    ");

if($sql){
    header('Location:../../jadwal.php ');
}else{
}
}

