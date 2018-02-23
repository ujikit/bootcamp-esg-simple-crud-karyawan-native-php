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
          <span class="label label-success" style="font-size:21px;float:left">Halaman Verifikasi Password Baru </span>
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
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">KD Karyawan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Karyawan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Hak Akses</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Jabatan</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Foto</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  $tampilDatakaryawan = "SELECT * from lupa_password inner join karyawan on lupa_password.kd_karyawan_lupa_password = karyawan.kd_karyawan order by tanggal_ganti_lupa_password asc, jam_ganti_lupa_password asc";
                  $tampil = mysqli_query($connect, $tampilDatakaryawan);
                  while($row=mysqli_fetch_array($tampil)){
                    $kd_karyawan = $row["kd_karyawan"];
                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_karyawan"] ?></td>
                  <td><?php echo $row["nama_karyawan"] ?></td>
                  <td><?php echo $row["hak_akses_karyawan"] ?></td>
                  <td><?php echo $row["jabatan_karyawan"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/karyawan/<?php echo $row['kd_karyawan']; ?>" class="img-circle" style="width:50px;"></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">

                    <?php
                    $query_tampilSiswaBelumValid = "SELECT * from lupa_password where kd_karyawan_lupa_password='$kd_karyawan' and status_terpakai_lupa_password='N'";
                    $query = mysqli_query($connect, $query_tampilSiswaBelumValid);
                    $mysqli_num_rows = mysqli_num_rows($query);
                    if ($mysqli_num_rows>0) {
                    ?>
                      <a type="button" class="btn btn-success" href="javascript:verifikasiPasswordBaru('<?php echo $row['id_lupa_password'] ?>')" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                    <?php
                    }
                    else {
                    ?>
                      <a type="button" class="btn btn-primary disabled" href="javascript:verifikasiPasswordBaru('<?php echo $row['id_lupa_password'] ?>')" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                    <?php
                    }
                    ?>
                      <a type="button" class="btn btn-danger" href="javascript:deleteVerifikasiPasswordBaru('<?php echo $row['id_lupa_password'] ?>')" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
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

    <div id="verifikasiPasswordBaru" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="verifikasi"></div>
              <?php
                // include_once "halaman_administrator_detail_karyawan.php"
              ?>
            </div>
        </div>
    </div>

    <div id="deleteVerifikasiPasswordBaru" class="modal fade">
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
