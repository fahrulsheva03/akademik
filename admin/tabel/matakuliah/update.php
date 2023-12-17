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
                $sql = mysqli_query($koneksi , "SELECT * FROM matakuliah WHERE kode = $id");
                $d = mysqli_fetch_assoc($sql);
                ?>
                  <form class="forms-sample" method="post" action="prosesUpdate.php">

                    <div class="form-group">
                      <!-- <label for="">Name</label> -->
                      <input type="text" name="id" value="<?= $d['kode']; ?>" hidden class="form-control" 
                      placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="">Matakuliah</label>
                      <input type="text" value="<?= $d['matakuliah']; ?>" name="matakuliah" class="form-control" 
                      placeholder="Matakuliah">
                    </div>

                    <div class="form-group">
                      <label for="">SKS</label>
                      <input type="text" value="<?= $d['sks']; ?>" name="sks" class="form-control" 
                      placeholder="SKS">
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



