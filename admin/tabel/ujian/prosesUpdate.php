<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nim = $_POST['nim'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $ruangan = $_POST['ruangan'];
    

    $sql = mysqli_query($koneksi , "UPDATE jadwalujian SET
    kode = '$kode',
    nim = '$nim',
    tanggal = '$tanggal',
    jam = '$jam',
    ruangan = '$ruangan'


    WHERE
    id = $id
    ");

if($sql){
    header('Location:../../ujian.php ');
}else{
}
}

