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
            <!-- Data -->
          <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halo , <?= $data['nama'] ?></h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Silahkan Lihat Kartu Ujian Anda :  </h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                
                                <div class="chartjs-wrapper mt-5 text-center">
                                <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">

                                <?php  
                                $kartu = mysqli_query($koneksi , "SELECT * FROM kartu_ujian WHERE nim = $id");
                                $nomor = mysqli_fetch_assoc($kartu);
                                ?>
                                        
                                        <h3 class="text-white upgrade-info mb-0">
                                            KARTU UJIAN ANDA 
                                            <span class="fw-bold">"<?=  $nomor['nomor_kartu'] ?>"</span>

                                            <h5 class="card-subtitle card-subtitle-dash"> Silahkan Cek Jadwal Ujian Anda : </h5>
                                        </h3>
                                        
                                        <a href="ujian.php">
                                          <button class="btn btn-danger upgrade-btn btn-lg mt-5" type="submit" >Jadwal Ujian </button>
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
                    <!-- End Data -->
                    
                  </div>

        <!-- content-wrapper ends -->
        <?php 
    require 'components/footer.php';
    ?>
</body>

</html>

