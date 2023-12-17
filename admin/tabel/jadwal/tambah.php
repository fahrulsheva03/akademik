<!DOCTYPE html>
<html lang="en">
<?php 
require '../head.php';
?>

<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php require '../nav.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php require '../side.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data</h4>

                  <?php
                    require '../../koneksi.php';
                    $sql = mysqli_query($koneksi , "SELECT * FROM matakuliah");
                    $sql1 = mysqli_query($koneksi , "SELECT * FROM mahasiswa");
                    
                  ?>
                  <form class="forms-sample" method="post" action="prosesTambah.php">

                    <div class="form-group">
                      <label for="">Matakuliah</label>
                      <select name="kode" id="" class="form-control">
                        <?php 
                        while($d = mysqli_fetch_array($sql)){
                        ?>
                      <option value="<?= $d['kode'] ?>"><?= $d['matakuliah'] ?> </option>
                      <?php } ?>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="">Mahasiswa</label>
                      <select name="nim" id="" class="form-control">
                      <?php 
                        while($d = mysqli_fetch_array($sql1)){
                        ?>
                        <option value="<?= $d['id_mahasiswa'] ?>"> <?= $d['nama'] ?> </option> 
                      <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="">Mulai</label>
                      <input type="time" name="mulai" class="form-control" 
                      placeholder="Mulai">
                    </div>
                    <div class="form-group">
                      <label for="selesa">Selesai</label>
                      <input type="time" name="selesai" id="selesai" class="form-control" 
                      placeholder="Selesai">
                    </div>
                    <div class="form-group">
                      <label for="">Hari</label>
                      <input type="text" name="hari" class="form-control" 
                      placeholder="Hari">
                    </div>
                    <div class="form-group">
                      <label for="">Ruangan</label>
                      <input type="text" name="ruangan" class="form-control" 
                      placeholder="Ruangan">
                    </div>

                    
                    <button type="submit" name="tambah" class="btn btn-primary me-2">Tambah</button>
                    
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require '../foot.php'; ?>
</body>

</html>

