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
                  <h4 class="card-title">Tabel Pembayaran</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Mahasiswa</th>
                          <th>Tagihan</th>
                          <th>Gambar</th>
                          <th>Status</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <?php
                        require 'koneksi.php';
                        $sql = mysqli_query($koneksi , "SELECT * FROM pembayaran 
                        JOIN
                        mahasiswa
                        ON
                        pembayaran.mahasiswa = mahasiswa.id_mahasiswa
                        ");
                        while($d = mysqli_fetch_array($sql)){
                        ?>
                      <tbody>
                        <tr>
                          <td><?= $d['nama'] ?></td>
                          <td><?= $d['tagihan'] ?></td>
                          <td><img src="assets/img/<?= $d['gambar'] ?>" alt="">  </td>
                          <?php 
                          if($d['bayar'] == 1 ){
                          ?>
                          <td>Diproses</td>
                          <td>
                            <a href="tabel/pembayaran/prosesupdate.php?id=<?= $d['mahasiswa'] ?>">
                                <label class="badge badge-warning">Terima</label>
                            </a>
                            <a href="tabel/pembayaran/prosesTolak.php?id=<?= $d['mahasiswa'] ?>">
                                <label class="badge badge-danger">Tolak</label>
                            </a>
                        </td>
                          <?php }elseif($d['bayar'] == 2){ ?>
                          <td>Diterima</td>
                          <td>Terima</td>
                          <?php }elseif($d['bayar'] == 3){ ?>
                          <td>Ditolak</td>
                          <td>
                            <a href="tabel/pembayaran/hapus.php?id=<?= $d['mahasiswa'] ?>">
                                <label class="badge badge-danger">Hapus</label>
                            </a>
                        </td>
                          <?php } ?>
                        
                          
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

