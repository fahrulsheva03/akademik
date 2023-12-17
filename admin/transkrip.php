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
                  <h4 class="card-title">Tabel Transkrip Nilai</h4>
                  <a href="tabel/transkrip/tambah.php">
                      <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                  </a>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Mahasiswa</th>
                          <th>Matakuliah</th>
                          <th>Nilai</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        require 'koneksi.php';
                        $sql = mysqli_query($koneksi , "SELECT * FROM transkrip 
                        JOIN
                        matakuliah
                        ON
                        transkrip.kode = matakuliah.kode 
                        JOIN
                        mahasiswa
                        ON
                        transkrip.nim = mahasiswa.id_mahasiswa
                        ");
                        while($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                          <td><?= $d['nama'] ?></td>
                          <td><?= $d['matakuliah'] ?></td>
                          <td><?= $d['nilai'] ?></td>
                        <td>
                            <a href="tabel/transkrip/update.php?id=<?= $d['id'] ?>">
                                <label class="badge badge-warning">Update</label>
                            </a>
                            <a href="tabel/transkrip/hapus.php?id=<?= $d['id'] ?>">
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

