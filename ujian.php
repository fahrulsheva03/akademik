<!DOCTYPE html>
<html lang="en">
<?php
require 'components/header.php';
?>


<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php 
    require 'components/navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php 
    require 'components/sidebar.php';
    ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 

              
                     <div class="row">
                        <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Jadwal Matakuliah</h4>
                    <p class="card-description">
                        Daftar Matakuliah Anda : 
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Matakuliah</th>
                            <th>SKS</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Ruangan</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $data = mysqli_query($koneksi , "SELECT * FROM jadwalujian 
                            JOIN
                            matakuliah
                            ON
                            jadwalujian.kode = matakuliah.kode
                            WHERE nim = $id");
                            
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr class="table-danger">
                            <td><?= $d['matakuliah'] ?></td>
                            <td><?= $d['sks'] ?></td>
                            <td><?= $d['tanggal'] ?></td>
                            <td><?= $d['jam'] ?></td>
                            <td><?= $d['ruangan'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                        </div>
                    </div>

                  <!-- End 3 -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php 
    require 'components/footer.php';
    ?>
</body>

</html>



