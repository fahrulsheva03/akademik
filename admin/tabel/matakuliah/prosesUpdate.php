<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $matakuliah = $_POST['matakuliah'];
    $sks = $_POST['sks'];
    

    $sql = mysqli_query($koneksi , "UPDATE matakuliah SET
    matakuliah = '$matakuliah',
    sks = '$sks'
    WHERE
    kode = $id
    ");

if($sql){
    header('Location:../../matkul.php ');
}else{
}
}

