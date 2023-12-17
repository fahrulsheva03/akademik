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
                  <h4 class="card-title">Edit Data</h4>
                <?php
                require '../../koneksi.php';
                $id = $_GET['id'];
                $sql = mysqli_query($koneksi , "SELECT * FROM jadwalkuliah 
                JOIN
                matakuliah
                ON
                jadwalkuliah.kode = matakuliah.kode 
                JOIN
                mahasiswa
                ON
                jadwalkuliah.nim = mahasiswa.id_mahasiswa 
                WHERE id_jadwal = $id ");
                $d = mysqli_fetch_assoc($sql);
                ?>

                  <form class="forms-sample" method="post" action="prosesUpdate.php">

                    <div class="form-group">
                      <!-- <label for="">Name</label> -->
                      <input type="text" name="id" value="<?= $d['id_jadwal']; ?>" class="form-control" 
                      placeholder="Name" hidden>
                    </div>

                    <div class="form-group">
                      <label for="">Matakuliah</label>
                      <select name="kode" id="" class="form-control">
                        <?php 
                        $sql1 = mysqli_query($koneksi , "SELECT * FROM matakuliah");
                        while($data = mysqli_fetch_array($sql1)){
                        $selected = ($data['kode'] == $d['kode']) ? "selected" : "";
                        ?>
                      <option value="<?= $data['kode'] ?>" <?= $selected ?> ><?= $data['matakuliah'] ?> </option>
                      <?php } ?>
                    </select>
                    
                    </div>

                    <div class="form-group">
                      <label for="">Mahasiswa</label>
                      <select name="nim" id="" class="form-control">
                      <?php 
                         $sql2 = mysqli_query($koneksi , "SELECT * FROM mahasiswa");
                        while($data = mysqli_fetch_assoc($sql2)){
                          $selected = ($data['id_mahasiswa'] == $d['nim']) ? "selected" : "";
                        ?>
                        <option value="<?= $data['id_mahasiswa'] ?>" <?= $selected ?> > <?= $data['nama'] ?> </option> 
                      <?php } ?>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="">Mulai</label>
                      <input type="time" name="mulai" value="<?= $d['mulai']; ?>" class="form-control" 
                      placeholder="Mulai">
                    </div>
        
                    <div class="form-group">
                      <label for="">Selesai</label>
                      <input type="time" name="selesai" value="<?= $d['selesai']; ?>" class="form-control" 
                      placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="">Hari</label>
                      <input type="text" name="hari" value="<?= $d['hari']; ?>" class="form-control" 
                      placeholder="Hari">
                    </div>
                    <div class="form-group">
                      <label for="">Ruangan</label>
                      <input type="text" name="ruangan" value="<?= $d['ruangan']; ?>" class="form-control" 
                      placeholder="Name">
                    </div>

                    
                    <button type="submit" name="edit" class="btn btn-primary me-2">edit</button>
                    
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



