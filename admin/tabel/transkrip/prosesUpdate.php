<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $kode = $_POST['kode'];
    $nilai = $_POST['nilai'];
    

    $sql = mysqli_query($koneksi , "UPDATE transkrip SET

    nim = '$nim',
    kode = '$kode',
    nilai = '$nilai'

    WHERE
    id = $id
    ");

if($sql){
    header('Location:../../transkrip.php ');
}else{
}
}

