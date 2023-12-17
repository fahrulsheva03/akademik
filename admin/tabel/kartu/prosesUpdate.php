<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nomor_kartu = $_POST['nomor_kartu'];
    
    $sql = mysqli_query($koneksi , "UPDATE kartu_ujian SET
    nim = '$nim' ,
    nomor_kartu = '$nomor_kartu'


    WHERE
    id = $id
    ");

if($sql){
    header('Location:../../kartu.php ');
}else{
}
}

