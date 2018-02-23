<?php
include_once "backend/koneksi.php";
if(isset($_SESSION['karyawan'])){
  $kd_karyawan = $_SESSION['karyawan'];
  $query_tampilDataKaryawan = mysqli_query($connect, "SELECT * FROM karyawan where kd_karyawan='$kd_karyawan'");
  $row_tampilDataKaryawan = mysqli_fetch_array($query_tampilDataKaryawan);
  $nama_karyawan = $row_tampilDataKaryawan['nama_karyawan'];
  $hakAkses      = $row_tampilDataKaryawan['hak_akses_karyawan'];
?>

<!DOCTYPE html>
<html>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="text-center">
          <img style="width:85px" src="frontend/img/foto/karyawan/<?php echo $kd_karyawan ?>" alt="User Image">
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Navigasi Utama</li>

        <?php
        if ($hakAkses == "admin") {
        ?>
          <li class=""><a href="halaman_karyawan.php"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li>
          <!-- <li class=""><a href="halaman_administrator_konfigurasi_tampilan_index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Konfigurasi Tampilan Web</span></a></li> -->
          <li class=""><a href="halaman_karyawan_daftar_karyawan.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Karyawan</span></a></li>
          <li class=""><a href="halaman_karyawan_daftar_kehadiran_karyawan.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel Kehadiran Karyawan</span></a></li>
          <!--<li class=""><a href="halaman_administrator_daftar_pengampu_mata_pelajaran.php"><i class="glyphicon glyphicon-th-list"></i> <span>Panel MaPel & Pengampu</span></a></li>-->
          <li class="header">Navigasi Tambahan</li>
          <li><a href="halaman_karyawan_daftar_verifikasi_password_baru_karyawan.php"><i class="fa fa-key"></i> <span>Verifikasi Password Baru</span></a></li>
        <?php
        }
        elseif ($hakAkses == "karyawan") {
        ?>
          <li class=""><a href="halaman_karyawan.php"><i class="glyphicon glyphicon-home"></i> <span>Home</span></a></li>
        <?php
        }
        ?>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

</html>

<?php
}
else {
  header("location:index.php");
}
 ?>
