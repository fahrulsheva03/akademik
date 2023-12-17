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
                  <h4 class="card-title">Update Data</h4>
                <?php
                require '../../koneksi.php';
                $id = $_GET['id'];
                $sql = mysqli_query($koneksi , "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id");
                $d = mysqli_fetch_assoc($sql);
                ?>
                  <form class="forms-sample" method="post" action="prosesUpdate.php">

                    <div class="form-group">
                      <!-- <label for="">Nim</label> -->
                      <input type="text" name="id" value="<?= $d['id_mahasiswa']; ?>" hidden class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="">Nim</label>
                      <input type="text" name="nim" value="<?= $d['nim']; ?>" class="form-control" 
                      placeholder="Nim">
                    </div>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" value="<?= $d['nama']; ?>" class="form-control" 
                      placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" name="alamat" value="<?= $d['alamat']; ?>" class="form-control" 
                      placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" value="<?= $d['email']; ?>" class="form-control" 
                      placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="">No Hp</label>
                      <input type="text" name="nohp" value="<?= $d['nohp']; ?>" class="form-control" 
                      placeholder="No Hp">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" value="<?= $d['password']; ?>" class="form-control" 
                      placeholder="Password">
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



