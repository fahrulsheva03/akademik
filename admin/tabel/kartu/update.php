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
                $id = $_GET['id'];
                $sql = mysqli_query($koneksi , "SELECT * FROM kartu_ujian 
                JOIN
                mahasiswa
                ON
                kartu_ujian.nim = mahasiswa.id_mahasiswa 
                WHERE id = $id ");
                $d = mysqli_fetch_assoc($sql);
                ?> 
                  <form class="forms-sample" method="post" action="prosesUpdate.php">

                    <div class="form-group">
                      <!-- <label for="">Name</label> -->
                      <input type="text" name="id" value="<?= $d['id']; ?>" class="form-control" 
                      placeholder="Name" hidden>
                    </div>
                    <div class="form-group">
                      <label for="">Mahasiswa</label>
                      <select name="nim" id="" class="form-control">
                      <?php 
                         $sql2 = mysqli_query($koneksi , "SELECT * FROM mahasiswa");
                        while($data = mysqli_fetch_assoc($sql2)){
                          $selected = ($data['id_mahasiswa'] == $d['nim']) ? "selected" : "";
                        ?>
                        <option value="<?= $data['id_mahasiswa'] ?>" <?= $selected; ?> > <?= $data['nama'] ?> </option> 
                      <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Nomor Kartu</label>
                      <input type="text" name="nomor_kartu" value="<?= $d['nomor_kartu']; ?>" class="form-control" 
                      placeholder="Nomor Kartu">
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



