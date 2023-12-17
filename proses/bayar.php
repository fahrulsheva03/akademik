<?php

require '../koneksi.php';

        $id = $_SESSION['user']['id_mahasiswa'];

        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa = $id ");
        $d = mysqli_fetch_assoc($data);

        if(isset($_POST["bayar"])){

        if($d['bayar'] == 3){
            mysqli_query($koneksi , "UPDATE mahasiswa SET
            bayar = 1
            WHERE
            id_mahasiswa = $id
            ");
            echo"
            <script>
            alert('Berhasil Tambah Pembayaran')
            location = '../index.php'
            </script>
            ";
        }else{
        
      
        $gambar =  upload();
        if( !$gambar ) {
            return false;
        }
        $sql = mysqli_query($koneksi , "INSERT INTO pembayaran SET

        mahasiswa = $id,
        tagihan = 10000000,
        gambar = '$gambar'
        ");

        echo"
        <script>
        alert('Berhasil Tambah Pembayaran')
        location = '../index.php'
        </script>
        ";

        mysqli_query($koneksi , "UPDATE mahasiswa SET
        bayar = 1
        WHERE
        id_mahasiswa = $id
        ");
        }

    }



function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlrbih dahulu');
            </script>";

        return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    //     echo "<script>
    //         alert('bukan gambar yang anda uoload');
    //         </script>";

    //     return false;
    // }

    //cek ukuran file jika besar

    //lolos pengecekan, gambar siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'; 
    $namaFileBaru .= $ekstensiGambar; 

    move_uploaded_file($tmpName, '../admin/assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}

