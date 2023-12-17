<!DOCTYPE html>
<html lang="en">
<?php 
require 'head.php';
?>

<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php require 'nav.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->  
      <!-- partial:partials/_sidebar.html -->
      <?php require 'side.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Kartu Peserta Ujian</h4>
                  <a href="tabel/kartu/tambah.php">
                      <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                  </a>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Mahasiswa</th>
                          <th>Nomor Kartu</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        require 'koneksi.php';
                        $sql = mysqli_query($koneksi , "SELECT * FROM kartu_ujian 
                        JOIN
                        mahasiswa
                        ON
                        kartu_ujian.nim = mahasiswa.id_mahasiswa
                        ");
                        while($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                          <td><?= $d['nama'] ?></td>
                          <td><?= $d['nomor_kartu'] ?></td>
                        <td>
                            <a href="tabel/kartu/update.php?id=<?= $d['id'] ?>">
                                <label class="badge badge-warning">Update</label>
                            </a>
                            <a href="tabel/kartu/hapus.php?id=<?= $d['id'] ?>">
                                <label class="badge badge-danger">Delete</label>
                            </a>
                        </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require 'foot.php'; ?>
</body>

</html>

