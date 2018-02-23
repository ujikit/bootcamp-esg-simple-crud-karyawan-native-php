<?php
session_start();
include_once "backend/koneksi.php";
if ($_SESSION['karyawan']) {
$kd_karyawan = $_SESSION['karyawan'];
$tampilDataKaryawan = mysqli_query($connect, "SELECT * from karyawan where kd_karyawan='$kd_karyawan'");
$rowTampilDataKaryawan = mysqli_fetch_array($tampilDataKaryawan);
$hakAkses = $rowTampilDataKaryawan['hak_akses_karyawan'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "bundle_css.php" ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php include_once "halaman_karyawan_navbar_menu.php" ?>
  <?php include_once "halaman_karyawan_sidebar_menu.php" ?>
  <?php include_once "bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Pegawai</li>
      </ol>
    </section>

    <div class="row">
      <div class="col-lg-6">
        <?php
        if ($hakAkses == "admin") {
        ?>
          <h1>Selamat Datang Administrator</h1>
        <?php
        }
        elseif ($hakAkses == "karyawan") {
        ?>
          <h1>Selamat Datang Karyawan</h1>
        <?php
        }
        ?>
      </div>
      <div class="col-lg-6">
        <?php
        if ($hakAkses == "admin") {
        ?>

        <div class="row">
          <div class="container">
            <div class="col-lg-3" style="margin-top:20px;">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <?php
                      $jumlahKelas = "SELECT count(kd_karyawan) AS jumlah_karyawan FROM karyawan";
                      $query = mysqli_query($connect, $jumlahKelas);
                      $result = mysqli_fetch_array($query);
                      ?>
                      <p class="announcement-heading" style="font-size:45px;"><?php echo "{$result['jumlah_karyawan']}"; ?></p>
                    </div>
                  </div>
                </div>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6" style="font-size:14px;color:#a94442">
                        Total Karyawan
                      </div>
                    </div>
                  </div>
              </div>
            </div>

              <div class="col-lg-3" style="margin-top:20px;">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-tasks fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right">
                        <?php
                        $jumlahKelas = "SELECT count(kd_karyawan_kehadiran) AS jumlah_kehadiran FROM kehadiran where hari_tanggal_karyawan_kehadiran=CURDATE();";
                        $query = mysqli_query($connect, $jumlahKelas);
                        $result = mysqli_fetch_array($query);
                         ?>
                        <p class="announcement-heading" style="font-size:45px;"><?php echo "{$result['jumlah_kehadiran']}"; ?></p>
                      </div>
                    </div>
                  </div>
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-6" style="font-size:14px;color:green">
                          Total Karyawan Hadir Bekerja pada Hari Ini
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>

        <?php
        }
        elseif ($hakAkses == "karyawan") {
        ?>
        <!-- KOSONG -->
        <?php
        }
        ?>
      </div>
    </div>

    </div>

    <?php include_once "halaman_administrator_footer.php" ?>

    <div class="control-sidebar-bg"></div>
  </div>

<script type="text/javascript">
  $("#nip_pegawai").keyup(function(){
    $("#username_pegawai").val(this.value);
    $("#password_pegawai").val(this.value.slice(0, 5));
  });
</script>

</body>
</html>

<?php
}
else {
  header("location:index.php");
}
?>
