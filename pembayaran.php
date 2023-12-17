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
            <?php if($data['bayar'] == 1 ) { ?>
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Mohon Menunggu :  </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                
                                <div class="chartjs-wrapper mt-5 text-center">
                                <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <h3 class="text-white upgrade-info mb-0">
                                             <span class="fw-bold">Mohon Tunggu Pembayaran Anda Dalam Proses</span>
                                        </h3>
                                        </div>
                                </div>
                              </div>
                            </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php }elseif($data['bayar'] == 0 )  { ?>

                        <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lanjutkan Pembayaran : </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                
                                <div class="chartjs-wrapper mt-5 text-center">
                                <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                    <form  class="forms-sample" action="proses/bayar.php" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        
                                        <h3 class="text-white upgrade-info mb-0">
                                            Tagihan Anda <span class="fw-bold">Rp 10,000,000.00</span>
                                            <h5 class="card-subtitle card-subtitle-dash">Pilih Bukti Pembayaran : </h5>

                                        </h3>
                                        <label for=""></label>
                                        <label for=""></label>
                                        <input type="file" name="gambar" class="form-control" 
                                        placeholder="gambar" require>
                                        </div>
                                        <button class="btn btn-info upgrade-btn btn-lg mt-5" name="bayar" type="submit" >Kirimkan Bukti Pembayaran </button>
                                    </form>
                                </div>
                              </div>
                            </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        <?php  }elseif(($data['bayar'] == 2 )){ ?>
          <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Pembayaran Anda Di ACC :  </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                
                                <div class="chartjs-wrapper mt-5 text-center">
                                <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                        
                                        <h3 class="text-white upgrade-info mb-0">
                                            <span class="fw-bold">Selamat Pembayaran Anda Di Terima </span>
                                            <h5 class="card-subtitle card-subtitle-dash"> Silahkan Cek Matkul Anda : </h5>
                                        </h3>
                                        <a href="matakuliah.php">
                                          <button class="btn btn-info upgrade-btn btn-lg mt-5" type="submit" >Jadwal Matakuliah </button>
                                        </a>
                                    </form>
                                </div>
                              </div>
                            </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php }elseif($data['bayar'] == 3 )  { ?>

            <div class="col-lg-12 d-flex flex-column">
            <div class="row flex-grow">
              <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                      <div>
                      <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                      <h5 class="card-subtitle card-subtitle-dash">Pembayaran Anda Di Tolak : </h5>
                      </div>
                      <div id="performance-line-legend"></div>
                    </div>
                    
                    <div class="chartjs-wrapper mt-5 text-center">
                    <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="col-sm-8">
                        <form  class="forms-sample" action="proses/bayar.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                
                <h3 class="text-white upgrade-info mb-0">
                    <span class="fw-bold"> Document Ditolak, Silahkan Masukan Ulang Foto Bukti Pembayaran  </span>
                    <h5 class="card-subtitle card-subtitle-dash">Pilih Bukti Pembayaran : </h5>

                </h3>
                <label for=""></label>
                <label for=""></label>
                <input type="file" name="gambar" class="form-control" 
                placeholder="gambar" require>
                </div>
                <button class="btn btn-info upgrade-btn btn-lg mt-5" name="bayar" type="submit" >Kirimkan Bukti Pembayaran </button>
            </form>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <?php } ?>
                  </div>

        <!-- content-wrapper ends -->
        <?php 
    require 'components/footer.php';
    ?>
</body>

</html>

