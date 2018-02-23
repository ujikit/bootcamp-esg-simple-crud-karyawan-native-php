<?php
session_start();
include_once "backend/koneksi.php";
if ($_SESSION['karyawan']) {
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
        <li class="active">Daftar karyawan</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDatakaryawan"><i class="fa fa-plus"></i> Tambah Kehadiran</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:20px;">
          <div class="table-responsive">
            <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Foto</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Karyawan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jabatan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tanggal Masuk</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Datang</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Pulang</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jam Bekerja</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  $tampilDatakaryawan = "SELECT * from kehadiran inner join karyawan on kehadiran.kd_karyawan_kehadiran=karyawan.kd_karyawan order by hari_tanggal_karyawan_kehadiran desc, jam_datang_karyawan_kehadiran desc";
                  $tampil = mysqli_query($connect, $tampilDatakaryawan);
                  while($row=mysqli_fetch_array($tampil)){
                    $jamPulang = $row['jam_pulang_karyawan_kehadiran'];
                    $jamHadir = $row['jam_datang_karyawan_kehadiran'];
                    $jumlahJamBekerja = $row['jam_pulang_karyawan_kehadiran'] - $row['jam_datang_karyawan_kehadiran'];

                    $jumlahMenitPulang = mysqli_query($connect, "SELECT TIME_FORMAT('$jamPulang', '%i') AS menitpulang");
                    $rowJumlahMenitPulang = mysqli_fetch_array($jumlahMenitPulang);
                    $jumlahMenitPulang = $rowJumlahMenitPulang['menitpulang'];
                    $jumlahMenitDatang = mysqli_query($connect, "SELECT TIME_FORMAT('$jamHadir', '%i') AS menitdatang");
                    $rowJumlahMenitDatang = mysqli_fetch_array($jumlahMenitDatang);
                    $jumlahMenitDatang = $rowJumlahMenitDatang['menitdatang'];
                    // echo $jumlahMenitPulang."</br>";
                    // echo $jumlahMenitDatang."</br>";
                    $totalMenit = $jumlahMenitPulang + $jumlahMenitDatang;
                    if ($totalMenit >= 60) {
                      $jumlahJamBekerja = $jumlahJamBekerja+1;
                    }
                    elseif ($totalMenit >= 60 && $totalMenit <= 120) {
                      $jumlahJamBekerja = $jumlahJamBekerja+2;
                    }
                    else {
                      $jumlahJamBekerja = $jumlahJamBekerja;
                    }

                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/karyawan/<?php echo $row['kd_karyawan']; ?>" class="img-circle" style="width:50px;"></td>
                  <td><?php echo $row["nama_karyawan"] ?></td>
                  <td><?php echo $row["jabatan_karyawan"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["hari_tanggal_karyawan_kehadiran"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jam_datang_karyawan_kehadiran"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["jam_pulang_karyawan_kehadiran"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                    <?php
                      if ($row["jam_pulang_karyawan_kehadiran"] !== Null ) {
                        echo $jumlahJamBekerja. " Jam";
                      }
                      else {
                      }
                    ?>
                  </td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <?php
                        if ($row["jam_pulang_karyawan_kehadiran"] !== NULL) {
                        ?>
                          <a type="button" class="btn btn-primary disabled" href="javascript:pulangKehadiranKaryawan('<?php echo $row['id_kehadiran_karyawan'] ?>')" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                        <?php
                        }
                        else {
                        ?>
                          <a type="button" class="btn btn-success" href="javascript:pulangKehadiranKaryawan('<?php echo $row['id_kehadiran_karyawan'] ?>')" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                        <?php
                        }
                        ?>
                        <a type="button" class="btn btn-danger" href="javascript:hapusKehadiranKaryawan('<?php echo $row['id_kehadiran_karyawan'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div id="tambahDatakaryawan" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Hadir Karyawan</h4>
            </div>

          <form class="form-signin" action="backend/karyawan_tambah_kehadiran_karyawan.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <label for="sel1">Nama Karyawan : </label>
                  <select class="form-control" name="kd_karyawan" required>
                    <option value="">Pilih Karyawan : </option>
                    <?php
                      $tampilDataJabatan = "SELECT * from karyawan";
                      $tampil = mysqli_query($connect, $tampilDataJabatan);
                      while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <option value="<?php echo $row["kd_karyawan"] ?>"><?php echo $row["nama_karyawan"] ?></option>
                    <?php  } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit" name="submit">Tambah Kehadiran</button>
            </div>
          </form>

          </div>
        </div>
    </div>

    <div id="pulangKehadiranKaryawan" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="pulang"></div>
              <?php
                // include_once "halaman_administrator_edit_karyawan.php"
              ?>
            </div>
        </div>
    </div>

    <div id="hapusKehadiranKaryawan" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="delete"></div>
              <?php
                // include_once "halaman_administrator_edit_karyawan.php"
              ?>
            </div>
        </div>
    </div>

    <!-- <?php include_once "halaman_administrator_footer.php" ?> -->

    <div class="control-sidebar-bg"></div>
  </div>

<script type="text/javascript">
  $("#nip_karyawan").keyup(function(){
    $("#username_karyawan").val(this.value);
    $("#password_karyawan").val(this.value.slice(0, 5));
  });

  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

</body>
</html>

<?php
}
else {
  header("location:index.php");
}
?>
