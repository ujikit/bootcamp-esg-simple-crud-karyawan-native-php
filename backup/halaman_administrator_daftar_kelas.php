<?php
session_start();
$title = "Dashboard Administrator";
include_once "backend/koneksi.php";

if($_SESSION['nip_administrator']){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "halaman_administrator_bundle_css.php" ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php include_once "halaman_administrator_navbar_menu.php" ?>
  <?php include_once "halaman_administrator_sidebar_menu.php" ?>
  <?php include_once "halaman_administrator_bundle_js.php" ?>

  <div class="content-wrapper" style="background:white;">
    <section class="content-header">
      <h1> Dashboard  <small>Daftar Pengampu Mata Pelajaran</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <div class="row">
      <div class="container">
        <div class="col-lg-12" style="margin-top:50px;">
          <a  href="" data-toggle="modal" type="button" class="btn btn-success" data-target="#tambahDataPengampuMataPelajaran"><i class="fa fa-plus"></i> Tambah Data Pengampu Mata Pelajaran</a>
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
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Kelas</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Mata Pelajaran</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Guru Pengampu</th>
                  <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  $tampilDataPegawai = "select * from mata_pelajaran_transaksi";
                  $tampil = mysqli_query($connect, $tampilDataPegawai);
                  while($row=mysqli_fetch_array($tampil)){
                ?>
                <tr>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_kelas_mata_pelajaran_transaksi"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_mata_pelajaran_transaksi"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_guru_mata_pelajaran_transaksi"] ?></td>
                  <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <a type="button" class="btn btn-success" href="javascript:detailKelas('<?php echo $row['id_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-primary" href="javascript:editKelas('<?php echo $row['id_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-danger" href="javascript:deleteKelas('<?php echo $row['id_mata_pelajaran_transaksi'] ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

    <div id="tambahDataPengampuMataPelajaran" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Data Pengampu Mata Pelajaran</h4>
              </div>

          <form class="form-signin" action="backend/administrator_tambah_pengampu_mata_pelajaran.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-12">
                                  <label for="sel1">Nama Kelas : </label>
                                  <select class="form-control" name="nama_kelas_mata_pelajaran_transaksi" required>
                                  <option value="">Pilih Kelas </option>
                                  <?php
                                    $tampilDataKelas = "select * from kelas_daftar";
                                    $tampil = mysqli_query($connect, $tampilDataKelas);
                                    while($row=mysqli_fetch_array($tampil)){
                                  ?>
                                  <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                                  <?php  } ?>
                                  </select>
                                  </br>
                            </div>
                            <div class="col-lg-12">
                                    <label for="sel1">Nama Mata Pelajaran : </label>
                                    <select class="form-control" name="nama_mata_pelajaran_transaksi" Onchange="getMataPelajaranToGuru(this.value);" required>
                                    <option value="">Pilih Mata Pelajaran </option>
                                    <?php
                                      $tampilDataMataPelajaran = "select * from mata_pelajaran";
                                      $tampil = mysqli_query($connect, $tampilDataMataPelajaran);
                                      while($row=mysqli_fetch_array($tampil)){
                                    ?>
                                    <option value="<?php echo $row["nama_mata_pelajaran"] ?>"><?php echo $row["nama_mata_pelajaran"] ?></option>
                                    <?php  } ?>
                                    </select>
                                    </br>
                            </div>
                            <div class="col-lg-12">
                                    <label for="sel1">Nama Guru Pengampu : </label>
                                    <select class="form-control" id="mataGuruByPelajaran" name="nama_guru_mata_pelajaran_transaksi" required>
                                    <option value="">Nama Guru Pengampu </option>
                                    </select>
                                    </br>
                            </div>
                          </div>
                          </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                              <button class="btn btn-success" type="submit" name="submit">Tambah Data</button>
                    </div>
          </form>
            </div>
        </div>
    </div>

    <div id="tampilPengampuMataPelajaran" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_detail_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <div id="editPengampuMataPelajaran" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div id="edit"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <div id="deletePengampuMataPelajaran" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="delete"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

    <?php include_once "halaman_administrator_footer.php" ?>

    <div class="control-sidebar-bg"></div>
  </div>



</body>
</html>

<?php } else {
  header("location:index.php");
} ?>
