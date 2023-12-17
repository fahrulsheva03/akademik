<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="pembayaran.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Pembayaran</span>
            </a>
          </li>

          <?php
          if ($data['bayar']  == 2){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="matakuliah.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Jadwal Kuliah</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="ujian.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Jadwal Ujian</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="kartu.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Kartu Peserta Ujian</span>
            </a>
          </li>
          
          <!-- <li class="nav-item">
            <a class="nav-link" href="transkrip.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Transkrip</span>
            </a>
          </li> -->

          <?php }  ?>
          
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Keluar</span>
            </a>
          </li>

        </ul>
      </nav>