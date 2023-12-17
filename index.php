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

                  <?php 
                  if($data['bayar'] == 0 ){
                  ?>                 
                     <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Anda belum melakukan pembayaran, Silahkan Tekan Tombol Untuk MeLakukan Pembayaran! </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5 text-center">
                                  <a href="pembayaran.php">
                                    <button type="button" class="btn btn-inverse-dark btn-lg">Pembayaran</button>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php } ?>

                    <?php 
                  if($data['bayar'] == 1 ){
                  ?>

                    <!-- 1 -->
                     <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Mohon menunggu, Pembayaran anda sedang di proses...</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5 text-center">
                                <h3 class="card-title card-title-dash">Pembayaran Sedang Diproses,Silahkan Menghubungi Admin </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php } elseif($data['bayar'] == 2) {  ?>
                  <!-- 2 -->
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Anda Sudah Membayar, Silahkan Lihat Jadwal Anda : </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5 text-center">
                                <a href="matakuliah.php">
                                    <button type="button" class="btn btn-inverse-warning btn-lg">Lihat Matakuliah</button>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } elseif($data['bayar'] == 3) {  ?>

                  <!-- 3 -->
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Pembayaran Anda Di Tolak, Silahkan Melakukan Pembayaran Lagi :  </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5 text-center">
                                <a href="pembayaran.php">
                                    <button type="button" class="btn btn-inverse-danger btn-lg">Pembayaran</button>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php   } ?>

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

