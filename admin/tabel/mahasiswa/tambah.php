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
                  <form class="forms-sample" method="post" action="prosesTambah.php">

                    <div class="form-group">
                      <label for="">Nim</label>
                      <input type="text" name="nim" class="form-control" 
                      placeholder="Nim">
                    </div>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control" 
                      placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" name="alamat" class="form-control" 
                      placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" 
                      placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="">No Hp</label>
                      <input type="text" name="nohp" class="form-control" 
                      placeholder="No Hp">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" 
                      placeholder="Password">
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

