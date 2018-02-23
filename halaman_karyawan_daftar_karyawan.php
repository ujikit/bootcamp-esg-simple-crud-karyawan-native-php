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
          <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDatakaryawan"><i class="fa fa-plus"></i> Tambah Karyawan</a>
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
                  $tampilDatakaryawan = "SELECT * from karyawan order by kd_karyawan";
                  $tampil = mysqli_query($connect, $tampilDatakaryawan);
                  while($row=mysqli_fetch_array($tampil)){
                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["kd_karyawan"] ?></td>
                  <td><?php echo $row["nama_karyawan"] ?></td>
                  <td><?php echo $row["hak_akses_karyawan"] ?></td>
                  <td><?php echo $row["jabatan_karyawan"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><img  src="frontend/img/foto/karyawan/<?php echo $row['kd_karyawan']; ?>" class="img-circle" style="width:50px;"></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <a type="button" class="btn btn-success" href="javascript:detailKaryawan('<?php echo $row['kd_karyawan'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-primary" href="javascript:editKaryawan('<?php echo $row['kd_karyawan'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-danger" href="javascript:deleteKaryawan('<?php echo $row['kd_karyawan'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

    <div id="detailKaryawan" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_detail_karyawan.php"
              ?>
            </div>
        </div>
    </div>

    <div id="tambahDatakaryawan" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Data Karyawan</h4>
              </div>

          <form class="form-signin" action="backend/karyawan_tambah_karyawan.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-12">
                                    </br>

                                    <div class="row" style="background:#66ff66">
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-4">

                                      <div style="max-width: 650px; margin: auto;">
                                        </br>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <span class="label label-primary" style="font-size:15px">Tambah Foto </span>
                                              <input style="margin-top:20px" type="file" accept="image/*" name="foto_karyawan" onchange="loadFile(event)">
                                            </br></br>
                                          </div>
                                          <div class="col-lg-6">
                                            <img id="output" width="130px" style="padding:10px"/>
                                          </div>
                                        </div>
                                      </div>

                                    </div>

                                    <div class="col-lg-4">
                                    </div>
                                    </div>

                                    <div class="row" style="margin-top:15px;">
                                      <div class="col-lg-4">
                                       <label for="sel1">KD Karyawan : </label>
                                         <input type="text" class="form-control" name="kd_karyawan" required>
                                       </br>
                                      </div>
                                      <div class="col-lg-4">
                                          <label for="sel1">Nama Karyawan : </label>
                                            <input type="text" class="form-control" name="nama_karyawan" required>
                                          </br>
                                      </div>
                                      <div class="col-lg-4">
                                        <label for="sel1">Hak Akses : </label>
                                        <select class="form-control" name="hak_akses_karyawan" Onchange="getJabatanToMataPelajaran(this.value);" required>
                                          <option value="">Pilih Jabatan : </option>
                                          <option value="admin">Admin</option>
                                          <option value="karyawan">Karyawan</option>
                                        </select>
                                       </br>
                                      </div>
                                    </div>
                                    <div class="row" style="margin-top:15px;">
                                      <div class="col-lg-4">
                                       <label for="sel1">Username : </label>
                                         <input type="text" class="form-control" name="username_karyawan" required>
                                       </br>
                                      </div>
                                      <div class="col-lg-4">
                                          <label for="sel1">Password : </label>
                                            <input type="password" class="form-control" name="password_karyawan" required>
                                          </br>
                                      </div>
                                      <div class="col-lg-4">
                                          <label for="sel1">Jenis Kelamin : </label>
                                            <select class="form-control" name="jenis_kelamin_karyawan" required>
                                              <option value="">Pilih Jenis Kelamin : </option>
                                              <option value="L">Laki - Laki</option>
                                              <option value="P">Perempuan</option>
                                            </select>
                                          </br>
                                      </div>
                                    </div>
                                    <div class="row" style="margin-top:15px;">
                                      <div class="col-lg-4">
                                       <label for="sel1">Jabatan : </label>
                                         <select class="form-control" name="jabatan_karyawan" required>
                                           <option value="">Pilih Jabatan : </option>
                                           <option value="Programmer">Programmer</option>
                                           <option value="Analisis">Analisis</option>
                                           <option value="Android Dev">Android Dev</option>
                                           <option value="Bisnis Develop">Bisnis Develop</option>
                                         </select>
                                       </br>
                                      </div>
                                      <div class="col-lg-4">
                                          <label for="sel1">No HP : </label>
                                            <input type="text" class="form-control" name="no_hp_karyawan" required>
                                          </br>
                                      </div>
                                      <div class="col-lg-4">
                                          <label for="sel1">Alamat : </label><br>
                                            <textarea name="alamat_karyawan" rows="6" cols="27"></textarea>
                                          </br>
                                      </div>
                                    </div>

                          </div>
                        </div>

                    </div>
                          <div class="modal-footer">
                              <button class="btn btn-success" type="submit" name="submit">Tambah Data Karyawan</button>
                          </div>
          </form>

            </div>
        </div>
    </div>

    <div id="editKaryawan" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="edit"></div>
              <?php
                // include_once "halaman_administrator_edit_karyawan.php"
              ?>
            </div>
        </div>
    </div>

    <div id="deleteKaryawan" class="modal fade">
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
