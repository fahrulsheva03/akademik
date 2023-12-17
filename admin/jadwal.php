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
                  <h4 class="card-title">Tabel Jadwal Kuliah</h4>
                  <a href="tabel/jadwal/tambah.php">
                      <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                  </a>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Matakuliah</th>
                          <th>Mahasiswa</th>
                          <th>Mulai</th>
                          <th>Selesai</th>
                          <th>Hari</th>
                          <th>Ruangan</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        require 'koneksi.php';
                        $sql = mysqli_query($koneksi , "SELECT * FROM jadwalkuliah 
                        JOIN
                        matakuliah
                        ON
                        jadwalkuliah.kode = matakuliah.kode 
                        JOIN
                        mahasiswa
                        ON
                        jadwalkuliah.nim = mahasiswa.id_mahasiswa
                        ");
                        while($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                          <td><?= $d['matakuliah'] ?></td>
                          <td><?= $d['nama'] ?></td>
                          <td><?= $d['mulai'] ?></td>
                          <td><?= $d['selesai'] ?></td>
                          <td><?= $d['hari'] ?></td>
                          <td><?= $d['ruangan'] ?></td>
                        <td>
                            <a href="tabel/jadwal/update.php?id=<?= $d['id_jadwal'] ?>">
                                <label class="badge badge-warning">Update</label>
                            </a>
                            <a href="tabel/jadwal/hapus.php?id=<?= $d['id_jadwal'] ?>">
                                <label class="badge badge-danger">Delete</label>
                            </a>
                        </td>
                        </tr>
                        <?php }?>
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

