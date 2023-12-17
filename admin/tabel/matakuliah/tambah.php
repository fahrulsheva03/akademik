<!DOCTYPE html>
<html lang="en">
<?php 
require '../head.php';
?>

<body>
  <div class="container-scroller"> 
    
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
                      <label for="">Matakuliah</label>
                      <input type="text" name="matakuliah" class="form-control" 
                      placeholder="Matakuliah">
                    </div>

                    <div class="form-group">
                      <label for="">SKS</label>
                      <input type="text" name="sks" class="form-control" 
                      placeholder="SKS">
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

