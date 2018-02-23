<?php
session_start();
include_once "backend/koneksi.php";

$nis_siswa = $_SESSION['nis_siswa'];

if($_SESSION['nis_siswa']){


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Administrator Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "halaman_siswa_navbar_menu.php" ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once "halaman_siswa_sidebar_menu.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background:white;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

     <div class="row">
        <div class="container">

          <div class="panel panel-primary" style="margin-top:30px">
            <div class="panel-heading">
              <!--    <h3 class="panel-title">Kartu Hasil Studi | Tahun Akademik 2017/2018 - Semester Ganjil</h3> -->
              <h3 class="panel-title"> Kartu Hasil Studi </h3>
            </div>
          <div class="panel-body">
	           <div class='alert alert-dismissable alert-success'>
		             <button type='button' class='close' data-dismiss='alert'>×</button><i class="fa fa-exclamation-triangle fa-lg"></i> <b>Catatan !</b><br/>
		               <ol>
			                  <li>Data KHS mahasiswa merupakan data KHS semester Ganjil,Genap, dan Pendek.</li>
			                  <li>Nilai yang muncul pada menu KHS menampilkan <b>semua Data Nilai ( baik nilai matkul yang diambil 1 kali ataupun matkul yang di ambil lebih dari satu kali )</b>.</li>
			                  <li>Jika ingin mendapatkan Rekap Nilai yang valid, bisa menghubungi bagian Operasional.</li>
		              </ol>
	          </div>

            <!-- <div class="table-responsive">
              <table id="tampilDataTables" class="table table-bordered table-hover table-striped tablesorter" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">No</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Nama Mata Pelajaran</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tugas 1</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">UTS</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">Tugas 2</th>
                    <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">UAS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    //$id_kelas_daftar = $_GET["id_kelas_daftar"];
                    $no=1;
                    $tampilDataPegawai = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa'";
                    $tampil = mysqli_query($connect, $tampilDataPegawai);
                    while($row=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $no++ ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["tugas1_nilai_siswa_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["uts_nilai_siswa_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["tugas2_nilai_siswa_transaksi"] ?></td>
                    <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"><?php echo $row["uas_nilai_siswa_transaksi"] ?></td>
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div> -->



            <div id="pengetahuan1">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-success">Pengetahuan 1 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1Pengetahuan = "SELECT guru_kompetensi_dasar_pengetahuan_noDKD_smt1 from guru_kompetensi_dasar_smt1";
                      $tampil = mysqli_query($connect, $tampil_dataSem1Pengetahuan);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_pengetahuan_noDKD_smt1"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampilDataPegawai = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa'";
                    $tampil = mysqli_query($connect, $tampilDataPegawai);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi1_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan+$observasi_nilai_siswa_transaksi1_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi1_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi1_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi1_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = $uas_nilai_siswa_transaksi1_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi2_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan+$observasi_nilai_siswa_transaksi2_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi2_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi2_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi2_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = $uas_nilai_siswa_transaksi2_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi3_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan+$observasi_nilai_siswa_transaksi3_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi3_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi3_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi3_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = $uas_nilai_siswa_transaksi3_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi4_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan+$observasi_nilai_siswa_transaksi4_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi4_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi4_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi4_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = $uas_nilai_siswa_transaksi4_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi5_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan+$observasi_nilai_siswa_transaksi5_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi5_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi5_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi5_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = $uas_nilai_siswa_transaksi5_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi6_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan+$observasi_nilai_siswa_transaksi6_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi6_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi6_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi6_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = $uas_nilai_siswa_transaksi6_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi7_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan+$observasi_nilai_siswa_transaksi7_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi7_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi7_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi7_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = $uas_nilai_siswa_transaksi7_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi8_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan+$observasi_nilai_siswa_transaksi8_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi8_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi8_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi8_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = $uas_nilai_siswa_transaksi8_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi9_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan+$observasi_nilai_siswa_transaksi9_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi9_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi9_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi9_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = $uas_nilai_siswa_transaksi9_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            $observasi_nilai_siswa_transaksi10_smt1_pengetahuan = $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan = $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan+$observasi_nilai_siswa_transaksi10_smt1_pengetahuan+$penugasan_nilai_siswa_transaksi10_smt1_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = $nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt1_pengetahuan = $row["uas_nilai_siswa_transaksi10_smt1_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt1_pengetahuan = $row['uas_nilai_siswa_transaksi10_smt1_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan < $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = $uas_nilai_siswa_transaksi10_smt1_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt1_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="keterampilan1">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-danger">Keterampilan 1 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1keterampilan = "SELECT guru_kompetensi_dasar_keterampilan_noDKD_smt1 from guru_kompetensi_dasar_smt1";
                      $tampil = mysqli_query($connect, $tampil_dataSem1keterampilan);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_keterampilan_noDKD_smt1"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan inner join data_siswa on nilai_siswa_transaksi_smt1_keterampilan.nis_siswa_nilai_siswa_transaksi_smt1_keterampilan = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt1_keterampilan asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi1_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi1_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi1_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi1_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan+$observasi_nilai_siswa_transaksi1_smt1_keterampilan+$penugasan_nilai_siswa_transaksi1_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi1_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi1_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt1_keterampilan = $row["uas_nilai_siswa_transaksi1_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt1_keterampilan = $row['uas_nilai_siswa_transaksi1_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi1_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi1_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt1_keterampilan = $uas_nilai_siswa_transaksi1_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi1_smt1_keterampilan+$na_uas_nilai_siswa_transaksi1_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi1_smt1_keterampilan+$na_uas_nilai_siswa_transaksi1_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi2_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi2_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi2_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi2_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan+$observasi_nilai_siswa_transaksi2_smt1_keterampilan+$penugasan_nilai_siswa_transaksi2_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi2_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi2_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt1_keterampilan = $row["uas_nilai_siswa_transaksi2_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt1_keterampilan = $row['uas_nilai_siswa_transaksi2_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi2_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi2_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt1_keterampilan = $uas_nilai_siswa_transaksi2_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi2_smt1_keterampilan+$na_uas_nilai_siswa_transaksi2_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi2_smt1_keterampilan+$na_uas_nilai_siswa_transaksi2_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi3_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi3_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi3_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi3_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan+$observasi_nilai_siswa_transaksi3_smt1_keterampilan+$penugasan_nilai_siswa_transaksi3_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi3_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi3_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt1_keterampilan = $row["uas_nilai_siswa_transaksi3_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt1_keterampilan = $row['uas_nilai_siswa_transaksi3_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi3_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi3_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt1_keterampilan = $uas_nilai_siswa_transaksi3_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi3_smt1_keterampilan+$na_uas_nilai_siswa_transaksi3_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi3_smt1_keterampilan+$na_uas_nilai_siswa_transaksi3_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi4_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi4_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi4_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi4_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan+$observasi_nilai_siswa_transaksi4_smt1_keterampilan+$penugasan_nilai_siswa_transaksi4_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi4_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi4_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt1_keterampilan = $row["uas_nilai_siswa_transaksi4_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt1_keterampilan = $row['uas_nilai_siswa_transaksi4_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi4_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi4_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt1_keterampilan = $uas_nilai_siswa_transaksi4_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi4_smt1_keterampilan+$na_uas_nilai_siswa_transaksi4_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi4_smt1_keterampilan+$na_uas_nilai_siswa_transaksi4_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi5_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi5_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi5_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi5_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan+$observasi_nilai_siswa_transaksi5_smt1_keterampilan+$penugasan_nilai_siswa_transaksi5_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi5_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi5_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt1_keterampilan = $row["uas_nilai_siswa_transaksi5_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt1_keterampilan = $row['uas_nilai_siswa_transaksi5_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi5_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi5_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt1_keterampilan = $uas_nilai_siswa_transaksi5_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi5_smt1_keterampilan+$na_uas_nilai_siswa_transaksi5_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi5_smt1_keterampilan+$na_uas_nilai_siswa_transaksi5_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi6_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi6_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi6_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi6_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan+$observasi_nilai_siswa_transaksi6_smt1_keterampilan+$penugasan_nilai_siswa_transaksi6_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi6_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi6_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt1_keterampilan = $row["uas_nilai_siswa_transaksi6_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt1_keterampilan = $row['uas_nilai_siswa_transaksi6_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi6_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi6_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt1_keterampilan = $uas_nilai_siswa_transaksi6_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi6_smt1_keterampilan+$na_uas_nilai_siswa_transaksi6_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi6_smt1_keterampilan+$na_uas_nilai_siswa_transaksi6_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi7_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi7_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi7_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi7_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan+$observasi_nilai_siswa_transaksi7_smt1_keterampilan+$penugasan_nilai_siswa_transaksi7_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi7_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi7_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt1_keterampilan = $row["uas_nilai_siswa_transaksi7_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt1_keterampilan = $row['uas_nilai_siswa_transaksi7_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi7_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi7_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt1_keterampilan = $uas_nilai_siswa_transaksi7_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi7_smt1_keterampilan+$na_uas_nilai_siswa_transaksi7_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi7_smt1_keterampilan+$na_uas_nilai_siswa_transaksi7_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi8_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi8_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi8_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi8_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan+$observasi_nilai_siswa_transaksi8_smt1_keterampilan+$penugasan_nilai_siswa_transaksi8_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi8_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi8_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt1_keterampilan = $row["uas_nilai_siswa_transaksi8_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt1_keterampilan = $row['uas_nilai_siswa_transaksi8_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi8_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi8_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt1_keterampilan = $uas_nilai_siswa_transaksi8_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi8_smt1_keterampilan+$na_uas_nilai_siswa_transaksi8_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi8_smt1_keterampilan+$na_uas_nilai_siswa_transaksi8_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi9_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi9_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi9_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi9_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan+$observasi_nilai_siswa_transaksi9_smt1_keterampilan+$penugasan_nilai_siswa_transaksi9_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi9_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi9_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt1_keterampilan = $row["uas_nilai_siswa_transaksi9_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt1_keterampilan = $row['uas_nilai_siswa_transaksi9_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi9_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi9_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt1_keterampilan = $uas_nilai_siswa_transaksi9_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi9_smt1_keterampilan+$na_uas_nilai_siswa_transaksi9_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi9_smt1_keterampilan+$na_uas_nilai_siswa_transaksi9_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan = $row['tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan'];
                            $observasi_nilai_siswa_transaksi10_smt1_keterampilan = $row['observasi_nilai_siswa_transaksi10_smt1_keterampilan'];
                            $penugasan_nilai_siswa_transaksi10_smt1_keterampilan = $row['penugasan_nilai_siswa_transaksi10_smt1_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan+$observasi_nilai_siswa_transaksi10_smt1_keterampilan+$penugasan_nilai_siswa_transaksi10_smt1_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi10_smt1_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi10_smt1_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt1_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan = $row["nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan = $nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt1_keterampilan = $row["uas_nilai_siswa_transaksi10_smt1_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan = $row["uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan"];
                            if ($uas_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt1_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt1_keterampilan = $row['uas_nilai_siswa_transaksi10_smt1_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan = $row['uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan'];
                              if ($uas_nilai_siswa_transaksi10_smt1_keterampilan < $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan) {
                                $na_uas_nilai_siswa_transaksi10_smt1_keterampilan = $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt1_keterampilan = $uas_nilai_siswa_transaksi10_smt1_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt1_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt1_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $na_uas_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt1_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi10_smt1_keterampilan+$na_uas_nilai_siswa_transaksi10_smt1_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = (($nah_kd_nilai_siswa_transaksi10_smt1_keterampilan+$na_uas_nilai_siswa_transaksi10_smt1_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="spiritual1">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-info">Spiritual 1 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1spiritual = "SELECT guru_kompetensi_dasar_spiritual_noDKD_smt1 from guru_kompetensi_dasar_smt1";
                      $tampil = mysqli_query($connect, $tampil_dataSem1spiritual);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_spiritual_noDKD_smt1"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_spiritual inner join data_siswa on nilai_siswa_transaksi_smt1_spiritual.nis_siswa_nilai_siswa_transaksi_smt1_spiritual = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt1_spiritual='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt1_spiritual asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi1_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi1_smt1_spiritual = $row['observasi_nilai_siswa_transaksi1_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi1_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi1_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual+$observasi_nilai_siswa_transaksi1_smt1_spiritual+$penugasan_nilai_siswa_transaksi1_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi1_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi1_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi1_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi1_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi1_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi1_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt1_spiritual = $row["uas_nilai_siswa_transaksi1_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi1_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi1_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt1_spiritual = $row['uas_nilai_siswa_transaksi1_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi1_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi1_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi1_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt1_spiritual = $uas_nilai_siswa_transaksi1_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = $nah_kd_nilai_siswa_transaksi1_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi1_smt1_spiritual+$na_uas_nilai_siswa_transaksi1_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi1_smt1_spiritual+$na_uas_nilai_siswa_transaksi1_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi2_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi2_smt1_spiritual = $row['observasi_nilai_siswa_transaksi2_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi2_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi2_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual+$observasi_nilai_siswa_transaksi2_smt1_spiritual+$penugasan_nilai_siswa_transaksi2_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi2_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi2_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi2_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi2_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi2_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi2_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt1_spiritual = $row["uas_nilai_siswa_transaksi2_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi2_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi2_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt1_spiritual = $row['uas_nilai_siswa_transaksi2_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi2_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi2_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi2_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt1_spiritual = $uas_nilai_siswa_transaksi2_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = $nah_kd_nilai_siswa_transaksi2_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi2_smt1_spiritual+$na_uas_nilai_siswa_transaksi2_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi2_smt1_spiritual+$na_uas_nilai_siswa_transaksi2_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi3_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi3_smt1_spiritual = $row['observasi_nilai_siswa_transaksi3_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi3_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi3_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual+$observasi_nilai_siswa_transaksi3_smt1_spiritual+$penugasan_nilai_siswa_transaksi3_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi3_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi3_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi3_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi3_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi3_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi3_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt1_spiritual = $row["uas_nilai_siswa_transaksi3_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi3_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi3_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt1_spiritual = $row['uas_nilai_siswa_transaksi3_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi3_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi3_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi3_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt1_spiritual = $uas_nilai_siswa_transaksi3_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = $nah_kd_nilai_siswa_transaksi3_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi3_smt1_spiritual+$na_uas_nilai_siswa_transaksi3_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi3_smt1_spiritual+$na_uas_nilai_siswa_transaksi3_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi4_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi4_smt1_spiritual = $row['observasi_nilai_siswa_transaksi4_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi4_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi4_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual+$observasi_nilai_siswa_transaksi4_smt1_spiritual+$penugasan_nilai_siswa_transaksi4_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi4_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi4_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi4_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi4_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi4_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi4_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt1_spiritual = $row["uas_nilai_siswa_transaksi4_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi4_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi4_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt1_spiritual = $row['uas_nilai_siswa_transaksi4_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi4_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi4_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi4_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt1_spiritual = $uas_nilai_siswa_transaksi4_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = $nah_kd_nilai_siswa_transaksi4_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi4_smt1_spiritual+$na_uas_nilai_siswa_transaksi4_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi4_smt1_spiritual+$na_uas_nilai_siswa_transaksi4_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi5_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi5_smt1_spiritual = $row['observasi_nilai_siswa_transaksi5_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi5_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi5_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual+$observasi_nilai_siswa_transaksi5_smt1_spiritual+$penugasan_nilai_siswa_transaksi5_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi5_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi5_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi5_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi5_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi5_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi5_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt1_spiritual = $row["uas_nilai_siswa_transaksi5_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi5_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi5_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt1_spiritual = $row['uas_nilai_siswa_transaksi5_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi5_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi5_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi5_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt1_spiritual = $uas_nilai_siswa_transaksi5_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = $nah_kd_nilai_siswa_transaksi5_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi5_smt1_spiritual+$na_uas_nilai_siswa_transaksi5_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi5_smt1_spiritual+$na_uas_nilai_siswa_transaksi5_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi6_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi6_smt1_spiritual = $row['observasi_nilai_siswa_transaksi6_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi6_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi6_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual+$observasi_nilai_siswa_transaksi6_smt1_spiritual+$penugasan_nilai_siswa_transaksi6_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi6_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi6_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi6_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi6_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi6_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi6_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt1_spiritual = $row["uas_nilai_siswa_transaksi6_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi6_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi6_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt1_spiritual = $row['uas_nilai_siswa_transaksi6_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi6_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi6_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi6_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt1_spiritual = $uas_nilai_siswa_transaksi6_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = $nah_kd_nilai_siswa_transaksi6_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi6_smt1_spiritual+$na_uas_nilai_siswa_transaksi6_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi6_smt1_spiritual+$na_uas_nilai_siswa_transaksi6_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi7_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi7_smt1_spiritual = $row['observasi_nilai_siswa_transaksi7_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi7_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi7_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual+$observasi_nilai_siswa_transaksi7_smt1_spiritual+$penugasan_nilai_siswa_transaksi7_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi7_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi7_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi7_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi7_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi7_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi7_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt1_spiritual = $row["uas_nilai_siswa_transaksi7_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi7_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi7_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt1_spiritual = $row['uas_nilai_siswa_transaksi7_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi7_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi7_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi7_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt1_spiritual = $uas_nilai_siswa_transaksi7_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = $nah_kd_nilai_siswa_transaksi7_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi7_smt1_spiritual+$na_uas_nilai_siswa_transaksi7_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi7_smt1_spiritual+$na_uas_nilai_siswa_transaksi7_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi8_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi8_smt1_spiritual = $row['observasi_nilai_siswa_transaksi8_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi8_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi8_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual+$observasi_nilai_siswa_transaksi8_smt1_spiritual+$penugasan_nilai_siswa_transaksi8_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi8_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi8_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi8_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi8_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi8_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi8_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt1_spiritual = $row["uas_nilai_siswa_transaksi8_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi8_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi8_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt1_spiritual = $row['uas_nilai_siswa_transaksi8_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi8_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi8_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi8_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt1_spiritual = $uas_nilai_siswa_transaksi8_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = $nah_kd_nilai_siswa_transaksi8_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi8_smt1_spiritual+$na_uas_nilai_siswa_transaksi8_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi8_smt1_spiritual+$na_uas_nilai_siswa_transaksi8_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi9_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi9_smt1_spiritual = $row['observasi_nilai_siswa_transaksi9_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi9_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi9_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual+$observasi_nilai_siswa_transaksi9_smt1_spiritual+$penugasan_nilai_siswa_transaksi9_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi9_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi9_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi9_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi9_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi9_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi9_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt1_spiritual = $row["uas_nilai_siswa_transaksi9_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi9_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi9_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt1_spiritual = $row['uas_nilai_siswa_transaksi9_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi9_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi9_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi9_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt1_spiritual = $uas_nilai_siswa_transaksi9_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = $nah_kd_nilai_siswa_transaksi9_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi9_smt1_spiritual+$na_uas_nilai_siswa_transaksi9_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi9_smt1_spiritual+$na_uas_nilai_siswa_transaksi9_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt1_spiritual = $row['tes_tulis_nilai_siswa_transaksi10_smt1_spiritual'];
                            $observasi_nilai_siswa_transaksi10_smt1_spiritual = $row['observasi_nilai_siswa_transaksi10_smt1_spiritual'];
                            $penugasan_nilai_siswa_transaksi10_smt1_spiritual = $row['penugasan_nilai_siswa_transaksi10_smt1_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual+$observasi_nilai_siswa_transaksi10_smt1_spiritual+$penugasan_nilai_siswa_transaksi10_smt1_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi10_smt1_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi10_smt1_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt1_spiritual == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi10_smt1_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt1_spiritual = $row["nh_remidi_nilai_siswa_transaksi10_smt1_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt1_spiritual > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi10_smt1_spiritual = $nh_remidi_nilai_siswa_transaksi10_smt1_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt1_spiritual = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt1_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt1_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt1_spiritual = $row["uas_nilai_siswa_transaksi10_smt1_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual = $row["uas_remidi_nilai_siswa_transaksi10_smt1_spiritual"];
                            if ($uas_nilai_siswa_transaksi10_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt1_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt1_spiritual = $row['uas_nilai_siswa_transaksi10_smt1_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual = $row['uas_remidi_nilai_siswa_transaksi10_smt1_spiritual'];
                              if ($uas_nilai_siswa_transaksi10_smt1_spiritual < $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual) {
                                $na_uas_nilai_siswa_transaksi10_smt1_spiritual = $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt1_spiritual = $uas_nilai_siswa_transaksi10_smt1_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt1_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt1_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual == "0" && $na_uas_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = $nah_kd_nilai_siswa_transaksi10_smt1_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt1_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi10_smt1_spiritual+$na_uas_nilai_siswa_transaksi10_smt1_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = (($nah_kd_nilai_siswa_transaksi10_smt1_spiritual+$na_uas_nilai_siswa_transaksi10_smt1_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="sosial1">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-warning">Sosial 1 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1sosial = "SELECT guru_kompetensi_dasar_sosial_noDKD_smt1 from guru_kompetensi_dasar_smt1";
                      $tampil = mysqli_query($connect, $tampil_dataSem1sosial);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_sosial_noDKD_smt1"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt1_sosial inner join data_siswa on nilai_siswa_transaksi_smt1_sosial.nis_siswa_nilai_siswa_transaksi_smt1_sosial = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt1_sosial='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt1_sosial asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi1_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi1_smt1_sosial = $row['observasi_nilai_siswa_transaksi1_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi1_smt1_sosial = $row['penugasan_nilai_siswa_transaksi1_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi1_smt1_sosial+$observasi_nilai_siswa_transaksi1_smt1_sosial+$penugasan_nilai_siswa_transaksi1_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi1_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi1_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi1_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi1_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi1_smt1_sosial = $nh_remidi_nilai_siswa_transaksi1_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt1_sosial = $row["uas_nilai_siswa_transaksi1_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi1_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi1_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt1_sosial = $row['uas_nilai_siswa_transaksi1_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi1_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi1_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi1_smt1_sosial < $uas_remidi_nilai_siswa_transaksi1_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi1_smt1_sosial = $uas_remidi_nilai_siswa_transaksi1_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt1_sosial = $uas_nilai_siswa_transaksi1_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi1_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = $nah_kd_nilai_siswa_transaksi1_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = (($nah_kd_nilai_siswa_transaksi1_smt1_sosial+$na_uas_nilai_siswa_transaksi1_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = (($nah_kd_nilai_siswa_transaksi1_smt1_sosial+$na_uas_nilai_siswa_transaksi1_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi2_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi2_smt1_sosial = $row['observasi_nilai_siswa_transaksi2_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi2_smt1_sosial = $row['penugasan_nilai_siswa_transaksi2_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi2_smt1_sosial+$observasi_nilai_siswa_transaksi2_smt1_sosial+$penugasan_nilai_siswa_transaksi2_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi2_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi2_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi2_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi2_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi2_smt1_sosial = $nh_remidi_nilai_siswa_transaksi2_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt1_sosial = $row["uas_nilai_siswa_transaksi2_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi2_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi2_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt1_sosial = $row['uas_nilai_siswa_transaksi2_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi2_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi2_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi2_smt1_sosial < $uas_remidi_nilai_siswa_transaksi2_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi2_smt1_sosial = $uas_remidi_nilai_siswa_transaksi2_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt1_sosial = $uas_nilai_siswa_transaksi2_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi2_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = $nah_kd_nilai_siswa_transaksi2_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = (($nah_kd_nilai_siswa_transaksi2_smt1_sosial+$na_uas_nilai_siswa_transaksi2_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = (($nah_kd_nilai_siswa_transaksi2_smt1_sosial+$na_uas_nilai_siswa_transaksi2_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi3_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi3_smt1_sosial = $row['observasi_nilai_siswa_transaksi3_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi3_smt1_sosial = $row['penugasan_nilai_siswa_transaksi3_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi3_smt1_sosial+$observasi_nilai_siswa_transaksi3_smt1_sosial+$penugasan_nilai_siswa_transaksi3_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi3_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi3_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi3_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi3_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi3_smt1_sosial = $nh_remidi_nilai_siswa_transaksi3_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt1_sosial = $row["uas_nilai_siswa_transaksi3_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi3_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi3_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt1_sosial = $row['uas_nilai_siswa_transaksi3_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi3_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi3_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi3_smt1_sosial < $uas_remidi_nilai_siswa_transaksi3_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi3_smt1_sosial = $uas_remidi_nilai_siswa_transaksi3_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt1_sosial = $uas_nilai_siswa_transaksi3_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi3_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = $nah_kd_nilai_siswa_transaksi3_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = (($nah_kd_nilai_siswa_transaksi3_smt1_sosial+$na_uas_nilai_siswa_transaksi3_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = (($nah_kd_nilai_siswa_transaksi3_smt1_sosial+$na_uas_nilai_siswa_transaksi3_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi4_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi4_smt1_sosial = $row['observasi_nilai_siswa_transaksi4_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi4_smt1_sosial = $row['penugasan_nilai_siswa_transaksi4_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi4_smt1_sosial+$observasi_nilai_siswa_transaksi4_smt1_sosial+$penugasan_nilai_siswa_transaksi4_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi4_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi4_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi4_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi4_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi4_smt1_sosial = $nh_remidi_nilai_siswa_transaksi4_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt1_sosial = $row["uas_nilai_siswa_transaksi4_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi4_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi4_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt1_sosial = $row['uas_nilai_siswa_transaksi4_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi4_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi4_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi4_smt1_sosial < $uas_remidi_nilai_siswa_transaksi4_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi4_smt1_sosial = $uas_remidi_nilai_siswa_transaksi4_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt1_sosial = $uas_nilai_siswa_transaksi4_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi4_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = $nah_kd_nilai_siswa_transaksi4_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = (($nah_kd_nilai_siswa_transaksi4_smt1_sosial+$na_uas_nilai_siswa_transaksi4_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = (($nah_kd_nilai_siswa_transaksi4_smt1_sosial+$na_uas_nilai_siswa_transaksi4_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi5_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi5_smt1_sosial = $row['observasi_nilai_siswa_transaksi5_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi5_smt1_sosial = $row['penugasan_nilai_siswa_transaksi5_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi5_smt1_sosial+$observasi_nilai_siswa_transaksi5_smt1_sosial+$penugasan_nilai_siswa_transaksi5_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi5_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi5_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi5_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi5_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi5_smt1_sosial = $nh_remidi_nilai_siswa_transaksi5_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt1_sosial = $row["uas_nilai_siswa_transaksi5_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi5_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi5_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt1_sosial = $row['uas_nilai_siswa_transaksi5_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi5_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi5_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi5_smt1_sosial < $uas_remidi_nilai_siswa_transaksi5_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi5_smt1_sosial = $uas_remidi_nilai_siswa_transaksi5_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt1_sosial = $uas_nilai_siswa_transaksi5_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi5_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = $nah_kd_nilai_siswa_transaksi5_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = (($nah_kd_nilai_siswa_transaksi5_smt1_sosial+$na_uas_nilai_siswa_transaksi5_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = (($nah_kd_nilai_siswa_transaksi5_smt1_sosial+$na_uas_nilai_siswa_transaksi5_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi6_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi6_smt1_sosial = $row['observasi_nilai_siswa_transaksi6_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi6_smt1_sosial = $row['penugasan_nilai_siswa_transaksi6_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi6_smt1_sosial+$observasi_nilai_siswa_transaksi6_smt1_sosial+$penugasan_nilai_siswa_transaksi6_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi6_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi6_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi6_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi6_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi6_smt1_sosial = $nh_remidi_nilai_siswa_transaksi6_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt1_sosial = $row["uas_nilai_siswa_transaksi6_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi6_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi6_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt1_sosial = $row['uas_nilai_siswa_transaksi6_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi6_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi6_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi6_smt1_sosial < $uas_remidi_nilai_siswa_transaksi6_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi6_smt1_sosial = $uas_remidi_nilai_siswa_transaksi6_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt1_sosial = $uas_nilai_siswa_transaksi6_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi6_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = $nah_kd_nilai_siswa_transaksi6_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = (($nah_kd_nilai_siswa_transaksi6_smt1_sosial+$na_uas_nilai_siswa_transaksi6_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = (($nah_kd_nilai_siswa_transaksi6_smt1_sosial+$na_uas_nilai_siswa_transaksi6_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi7_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi7_smt1_sosial = $row['observasi_nilai_siswa_transaksi7_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi7_smt1_sosial = $row['penugasan_nilai_siswa_transaksi7_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi7_smt1_sosial+$observasi_nilai_siswa_transaksi7_smt1_sosial+$penugasan_nilai_siswa_transaksi7_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi7_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi7_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi7_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi7_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi7_smt1_sosial = $nh_remidi_nilai_siswa_transaksi7_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt1_sosial = $row["uas_nilai_siswa_transaksi7_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi7_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi7_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt1_sosial = $row['uas_nilai_siswa_transaksi7_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi7_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi7_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi7_smt1_sosial < $uas_remidi_nilai_siswa_transaksi7_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi7_smt1_sosial = $uas_remidi_nilai_siswa_transaksi7_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt1_sosial = $uas_nilai_siswa_transaksi7_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi7_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = $nah_kd_nilai_siswa_transaksi7_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = (($nah_kd_nilai_siswa_transaksi7_smt1_sosial+$na_uas_nilai_siswa_transaksi7_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = (($nah_kd_nilai_siswa_transaksi7_smt1_sosial+$na_uas_nilai_siswa_transaksi7_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi8_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi8_smt1_sosial = $row['observasi_nilai_siswa_transaksi8_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi8_smt1_sosial = $row['penugasan_nilai_siswa_transaksi8_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi8_smt1_sosial+$observasi_nilai_siswa_transaksi8_smt1_sosial+$penugasan_nilai_siswa_transaksi8_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi8_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi8_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi8_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi8_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi8_smt1_sosial = $nh_remidi_nilai_siswa_transaksi8_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt1_sosial = $row["uas_nilai_siswa_transaksi8_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi8_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi8_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt1_sosial = $row['uas_nilai_siswa_transaksi8_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi8_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi8_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi8_smt1_sosial < $uas_remidi_nilai_siswa_transaksi8_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi8_smt1_sosial = $uas_remidi_nilai_siswa_transaksi8_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt1_sosial = $uas_nilai_siswa_transaksi8_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi8_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = $nah_kd_nilai_siswa_transaksi8_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = (($nah_kd_nilai_siswa_transaksi8_smt1_sosial+$na_uas_nilai_siswa_transaksi8_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = (($nah_kd_nilai_siswa_transaksi8_smt1_sosial+$na_uas_nilai_siswa_transaksi8_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi9_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi9_smt1_sosial = $row['observasi_nilai_siswa_transaksi9_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi9_smt1_sosial = $row['penugasan_nilai_siswa_transaksi9_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi9_smt1_sosial+$observasi_nilai_siswa_transaksi9_smt1_sosial+$penugasan_nilai_siswa_transaksi9_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi9_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi9_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi9_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi9_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi9_smt1_sosial = $nh_remidi_nilai_siswa_transaksi9_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt1_sosial = $row["uas_nilai_siswa_transaksi9_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi9_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi9_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt1_sosial = $row['uas_nilai_siswa_transaksi9_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi9_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi9_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi9_smt1_sosial < $uas_remidi_nilai_siswa_transaksi9_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi9_smt1_sosial = $uas_remidi_nilai_siswa_transaksi9_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt1_sosial = $uas_nilai_siswa_transaksi9_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi9_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = $nah_kd_nilai_siswa_transaksi9_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = (($nah_kd_nilai_siswa_transaksi9_smt1_sosial+$na_uas_nilai_siswa_transaksi9_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = (($nah_kd_nilai_siswa_transaksi9_smt1_sosial+$na_uas_nilai_siswa_transaksi9_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt1_sosial = $row['tes_tulis_nilai_siswa_transaksi10_smt1_sosial'];
                            $observasi_nilai_siswa_transaksi10_smt1_sosial = $row['observasi_nilai_siswa_transaksi10_smt1_sosial'];
                            $penugasan_nilai_siswa_transaksi10_smt1_sosial = $row['penugasan_nilai_siswa_transaksi10_smt1_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt1 = (($tes_tulis_nilai_siswa_transaksi10_smt1_sosial+$observasi_nilai_siswa_transaksi10_smt1_sosial+$penugasan_nilai_siswa_transaksi10_smt1_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt1 = round($hasil_rerata_nilai1_smt1, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $hasil_rerata_nilai1_smt1 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['penugasan_nilai_siswa_transaksi10_smt1_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['observasi_nilai_siswa_transaksi10_smt1_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt1_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt1_sosial == "0"){
                              $hasil_rerata_nilai1_smt1 = $row['tes_tulis_nilai_siswa_transaksi10_smt1_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt1 = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt1 ?>">
                              <?php echo $hasil_rerata_nilai1_smt1 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt1_sosial = $row["nh_remidi_nilai_siswa_transaksi10_smt1_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt1_sosial > $hasil_rerata_nilai1_smt1){
                              $nah_kd_nilai_siswa_transaksi10_smt1_sosial = $nh_remidi_nilai_siswa_transaksi10_smt1_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt1_sosial = $hasil_rerata_nilai1_smt1;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt1_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt1_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt1_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt1_sosial = $row["uas_nilai_siswa_transaksi10_smt1_sosial"];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_sosial = $row["uas_remidi_nilai_siswa_transaksi10_smt1_sosial"];
                            if ($uas_nilai_siswa_transaksi10_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt1_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt1_sosial = $row['uas_nilai_siswa_transaksi10_smt1_sosial'];
                              $uas_remidi_nilai_siswa_transaksi10_smt1_sosial = $row['uas_remidi_nilai_siswa_transaksi10_smt1_sosial'];
                              if ($uas_nilai_siswa_transaksi10_smt1_sosial < $uas_remidi_nilai_siswa_transaksi10_smt1_sosial) {
                                $na_uas_nilai_siswa_transaksi10_smt1_sosial = $uas_remidi_nilai_siswa_transaksi10_smt1_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt1_sosial = $uas_nilai_siswa_transaksi10_smt1_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt1_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt1_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_sosial == "0" && $na_uas_nilai_siswa_transaksi10_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = $nah_kd_nilai_siswa_transaksi10_smt1_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt1_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt1_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = (($nah_kd_nilai_siswa_transaksi10_smt1_sosial+$na_uas_nilai_siswa_transaksi10_smt1_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = (($nah_kd_nilai_siswa_transaksi10_smt1_sosial+$na_uas_nilai_siswa_transaksi10_smt1_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt1_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt1_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>



            <!-- Semester 2 -->

            <div id="pengetahuan2">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-success">Pengetahuan 2 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1Pengetahuan = "SELECT guru_kompetensi_dasar_pengetahuan_noDKD_smt2 from guru_kompetensi_dasar_smt2";
                      $tampil = mysqli_query($connect, $tampil_dataSem1Pengetahuan);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_pengetahuan_noDKD_smt2"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt2_pengetahuan inner join data_siswa on nilai_siswa_transaksi_smt2_pengetahuan.nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi1_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan+$observasi_nilai_siswa_transaksi1_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi1_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi1_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi1_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = $uas_nilai_siswa_transaksi1_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi2_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan+$observasi_nilai_siswa_transaksi2_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi2_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi2_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi2_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = $uas_nilai_siswa_transaksi2_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi3_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan+$observasi_nilai_siswa_transaksi3_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi3_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi3_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi3_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = $uas_nilai_siswa_transaksi3_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi4_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan+$observasi_nilai_siswa_transaksi4_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi4_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi4_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi4_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = $uas_nilai_siswa_transaksi4_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi5_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan+$observasi_nilai_siswa_transaksi5_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi5_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi5_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi5_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = $uas_nilai_siswa_transaksi5_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi6_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan+$observasi_nilai_siswa_transaksi6_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi6_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi6_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi6_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = $uas_nilai_siswa_transaksi6_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi7_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan+$observasi_nilai_siswa_transaksi7_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi7_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi7_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi7_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = $uas_nilai_siswa_transaksi7_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi8_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan+$observasi_nilai_siswa_transaksi8_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi8_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi8_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi8_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = $uas_nilai_siswa_transaksi8_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi9_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan+$observasi_nilai_siswa_transaksi9_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi9_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi9_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi9_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = $uas_nilai_siswa_transaksi9_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan = $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            $observasi_nilai_siswa_transaksi10_smt2_pengetahuan = $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan = $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan+$observasi_nilai_siswa_transaksi10_smt2_pengetahuan+$penugasan_nilai_siswa_transaksi10_smt2_pengetahuan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row["nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = $nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt2_pengetahuan = $row["uas_nilai_siswa_transaksi10_smt2_pengetahuan"];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row["uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan"];
                            if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt2_pengetahuan = $row['uas_nilai_siswa_transaksi10_smt2_pengetahuan'];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $row['uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'];
                              if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan < $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan) {
                                $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = $uas_nilai_siswa_transaksi10_smt2_pengetahuan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt2_pengetahuan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = (($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan+$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="keterampilan2">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-danger">Keterampilan 2 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1keterampilan = "SELECT guru_kompetensi_dasar_keterampilan_noDKD_smt2 from guru_kompetensi_dasar_smt2";
                      $tampil = mysqli_query($connect, $tampil_dataSem1keterampilan);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_keterampilan_noDKD_smt2"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt2_keterampilan inner join data_siswa on nilai_siswa_transaksi_smt2_keterampilan.nis_siswa_nilai_siswa_transaksi_smt2_keterampilan = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt2_keterampilan='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt2_keterampilan asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi1_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi1_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi1_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi1_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan+$observasi_nilai_siswa_transaksi1_smt2_keterampilan+$penugasan_nilai_siswa_transaksi1_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi1_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi1_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi1_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt2_keterampilan = $row["uas_nilai_siswa_transaksi1_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt2_keterampilan = $row['uas_nilai_siswa_transaksi1_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi1_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi1_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt2_keterampilan = $uas_nilai_siswa_transaksi1_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi1_smt2_keterampilan+$na_uas_nilai_siswa_transaksi1_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi1_smt2_keterampilan+$na_uas_nilai_siswa_transaksi1_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi2_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi2_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi2_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi2_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan+$observasi_nilai_siswa_transaksi2_smt2_keterampilan+$penugasan_nilai_siswa_transaksi2_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi2_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi2_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi2_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt2_keterampilan = $row["uas_nilai_siswa_transaksi2_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt2_keterampilan = $row['uas_nilai_siswa_transaksi2_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi2_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi2_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt2_keterampilan = $uas_nilai_siswa_transaksi2_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi2_smt2_keterampilan+$na_uas_nilai_siswa_transaksi2_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi2_smt2_keterampilan+$na_uas_nilai_siswa_transaksi2_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi3_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi3_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi3_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi3_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan+$observasi_nilai_siswa_transaksi3_smt2_keterampilan+$penugasan_nilai_siswa_transaksi3_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi3_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi3_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi3_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt2_keterampilan = $row["uas_nilai_siswa_transaksi3_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt2_keterampilan = $row['uas_nilai_siswa_transaksi3_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi3_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi3_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt2_keterampilan = $uas_nilai_siswa_transaksi3_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi3_smt2_keterampilan+$na_uas_nilai_siswa_transaksi3_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi3_smt2_keterampilan+$na_uas_nilai_siswa_transaksi3_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi4_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi4_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi4_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi4_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan+$observasi_nilai_siswa_transaksi4_smt2_keterampilan+$penugasan_nilai_siswa_transaksi4_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi4_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi4_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi4_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt2_keterampilan = $row["uas_nilai_siswa_transaksi4_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt2_keterampilan = $row['uas_nilai_siswa_transaksi4_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi4_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi4_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt2_keterampilan = $uas_nilai_siswa_transaksi4_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi4_smt2_keterampilan+$na_uas_nilai_siswa_transaksi4_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi4_smt2_keterampilan+$na_uas_nilai_siswa_transaksi4_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi5_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi5_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi5_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi5_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan+$observasi_nilai_siswa_transaksi5_smt2_keterampilan+$penugasan_nilai_siswa_transaksi5_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi5_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi5_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi5_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt2_keterampilan = $row["uas_nilai_siswa_transaksi5_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt2_keterampilan = $row['uas_nilai_siswa_transaksi5_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi5_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi5_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt2_keterampilan = $uas_nilai_siswa_transaksi5_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi5_smt2_keterampilan+$na_uas_nilai_siswa_transaksi5_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi5_smt2_keterampilan+$na_uas_nilai_siswa_transaksi5_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi6_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi6_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi6_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi6_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan+$observasi_nilai_siswa_transaksi6_smt2_keterampilan+$penugasan_nilai_siswa_transaksi6_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi6_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi6_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi6_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt2_keterampilan = $row["uas_nilai_siswa_transaksi6_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt2_keterampilan = $row['uas_nilai_siswa_transaksi6_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi6_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi6_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt2_keterampilan = $uas_nilai_siswa_transaksi6_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi6_smt2_keterampilan+$na_uas_nilai_siswa_transaksi6_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi6_smt2_keterampilan+$na_uas_nilai_siswa_transaksi6_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi7_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi7_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi7_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi7_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan+$observasi_nilai_siswa_transaksi7_smt2_keterampilan+$penugasan_nilai_siswa_transaksi7_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi7_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi7_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi7_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt2_keterampilan = $row["uas_nilai_siswa_transaksi7_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt2_keterampilan = $row['uas_nilai_siswa_transaksi7_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi7_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi7_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt2_keterampilan = $uas_nilai_siswa_transaksi7_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi7_smt2_keterampilan+$na_uas_nilai_siswa_transaksi7_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi7_smt2_keterampilan+$na_uas_nilai_siswa_transaksi7_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi8_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi8_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi8_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi8_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan+$observasi_nilai_siswa_transaksi8_smt2_keterampilan+$penugasan_nilai_siswa_transaksi8_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi8_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi8_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi8_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt2_keterampilan = $row["uas_nilai_siswa_transaksi8_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt2_keterampilan = $row['uas_nilai_siswa_transaksi8_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi8_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi8_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt2_keterampilan = $uas_nilai_siswa_transaksi8_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi8_smt2_keterampilan+$na_uas_nilai_siswa_transaksi8_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi8_smt2_keterampilan+$na_uas_nilai_siswa_transaksi8_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi9_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi9_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi9_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi9_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan+$observasi_nilai_siswa_transaksi9_smt2_keterampilan+$penugasan_nilai_siswa_transaksi9_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi9_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi9_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi9_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt2_keterampilan = $row["uas_nilai_siswa_transaksi9_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt2_keterampilan = $row['uas_nilai_siswa_transaksi9_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi9_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi9_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt2_keterampilan = $uas_nilai_siswa_transaksi9_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi9_smt2_keterampilan+$na_uas_nilai_siswa_transaksi9_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi9_smt2_keterampilan+$na_uas_nilai_siswa_transaksi9_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan = $row['tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan'];
                            $observasi_nilai_siswa_transaksi10_smt2_keterampilan = $row['observasi_nilai_siswa_transaksi10_smt2_keterampilan'];
                            $penugasan_nilai_siswa_transaksi10_smt2_keterampilan = $row['penugasan_nilai_siswa_transaksi10_smt2_keterampilan'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan+$observasi_nilai_siswa_transaksi10_smt2_keterampilan+$penugasan_nilai_siswa_transaksi10_smt2_keterampilan)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi10_smt2_keterampilan'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi10_smt2_keterampilan'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $penugasan_nilai_siswa_transaksi10_smt2_keterampilan == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan = $row["nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan = $nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt2_keterampilan = $row["uas_nilai_siswa_transaksi10_smt2_keterampilan"];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan = $row["uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan"];
                            if ($uas_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt2_keterampilan = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt2_keterampilan = $row['uas_nilai_siswa_transaksi10_smt2_keterampilan'];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan = $row['uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan'];
                              if ($uas_nilai_siswa_transaksi10_smt2_keterampilan < $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan) {
                                $na_uas_nilai_siswa_transaksi10_smt2_keterampilan = $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt2_keterampilan = $uas_nilai_siswa_transaksi10_smt2_keterampilan;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt2_keterampilan ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt2_keterampilan; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $na_uas_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt2_keterampilan == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi10_smt2_keterampilan+$na_uas_nilai_siswa_transaksi10_smt2_keterampilan)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = (($nah_kd_nilai_siswa_transaksi10_smt2_keterampilan+$na_uas_nilai_siswa_transaksi10_smt2_keterampilan)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="spiritual2">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-info">Spiritual 2 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1spiritual = "SELECT guru_kompetensi_dasar_spiritual_noDKD_smt2 from guru_kompetensi_dasar_smt2";
                      $tampil = mysqli_query($connect, $tampil_dataSem1spiritual);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_spiritual_noDKD_smt2"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt2_spiritual inner join data_siswa on nilai_siswa_transaksi_smt2_spiritual.nis_siswa_nilai_siswa_transaksi_smt2_spiritual = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt2_spiritual='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt2_spiritual asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi1_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi1_smt2_spiritual = $row['observasi_nilai_siswa_transaksi1_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi1_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi1_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual+$observasi_nilai_siswa_transaksi1_smt2_spiritual+$penugasan_nilai_siswa_transaksi1_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi1_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi1_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi1_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi1_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi1_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi1_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi1_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt2_spiritual = $row["uas_nilai_siswa_transaksi1_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi1_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi1_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt2_spiritual = $row['uas_nilai_siswa_transaksi1_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi1_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi1_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi1_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt2_spiritual = $uas_nilai_siswa_transaksi1_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = $nah_kd_nilai_siswa_transaksi1_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi1_smt2_spiritual+$na_uas_nilai_siswa_transaksi1_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi1_smt2_spiritual+$na_uas_nilai_siswa_transaksi1_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi2_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi2_smt2_spiritual = $row['observasi_nilai_siswa_transaksi2_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi2_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi2_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual+$observasi_nilai_siswa_transaksi2_smt2_spiritual+$penugasan_nilai_siswa_transaksi2_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi2_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi2_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi2_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi2_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi2_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi2_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi2_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt2_spiritual = $row["uas_nilai_siswa_transaksi2_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi2_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi2_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt2_spiritual = $row['uas_nilai_siswa_transaksi2_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi2_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi2_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi2_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt2_spiritual = $uas_nilai_siswa_transaksi2_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = $nah_kd_nilai_siswa_transaksi2_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi2_smt2_spiritual+$na_uas_nilai_siswa_transaksi2_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi2_smt2_spiritual+$na_uas_nilai_siswa_transaksi2_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi3_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi3_smt2_spiritual = $row['observasi_nilai_siswa_transaksi3_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi3_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi3_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual+$observasi_nilai_siswa_transaksi3_smt2_spiritual+$penugasan_nilai_siswa_transaksi3_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi3_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi3_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi3_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi3_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi3_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi3_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi3_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt2_spiritual = $row["uas_nilai_siswa_transaksi3_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi3_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi3_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt2_spiritual = $row['uas_nilai_siswa_transaksi3_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi3_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi3_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi3_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt2_spiritual = $uas_nilai_siswa_transaksi3_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = $nah_kd_nilai_siswa_transaksi3_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi3_smt2_spiritual+$na_uas_nilai_siswa_transaksi3_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi3_smt2_spiritual+$na_uas_nilai_siswa_transaksi3_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi4_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi4_smt2_spiritual = $row['observasi_nilai_siswa_transaksi4_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi4_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi4_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual+$observasi_nilai_siswa_transaksi4_smt2_spiritual+$penugasan_nilai_siswa_transaksi4_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi4_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi4_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi4_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi4_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi4_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi4_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi4_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt2_spiritual = $row["uas_nilai_siswa_transaksi4_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi4_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi4_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt2_spiritual = $row['uas_nilai_siswa_transaksi4_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi4_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi4_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi4_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt2_spiritual = $uas_nilai_siswa_transaksi4_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = $nah_kd_nilai_siswa_transaksi4_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi4_smt2_spiritual+$na_uas_nilai_siswa_transaksi4_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi4_smt2_spiritual+$na_uas_nilai_siswa_transaksi4_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi5_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi5_smt2_spiritual = $row['observasi_nilai_siswa_transaksi5_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi5_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi5_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual+$observasi_nilai_siswa_transaksi5_smt2_spiritual+$penugasan_nilai_siswa_transaksi5_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi5_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi5_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi5_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi5_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi5_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi5_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi5_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt2_spiritual = $row["uas_nilai_siswa_transaksi5_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi5_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi5_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt2_spiritual = $row['uas_nilai_siswa_transaksi5_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi5_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi5_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi5_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt2_spiritual = $uas_nilai_siswa_transaksi5_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = $nah_kd_nilai_siswa_transaksi5_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi5_smt2_spiritual+$na_uas_nilai_siswa_transaksi5_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi5_smt2_spiritual+$na_uas_nilai_siswa_transaksi5_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi6_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi6_smt2_spiritual = $row['observasi_nilai_siswa_transaksi6_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi6_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi6_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual+$observasi_nilai_siswa_transaksi6_smt2_spiritual+$penugasan_nilai_siswa_transaksi6_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi6_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi6_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi6_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi6_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi6_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi6_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi6_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt2_spiritual = $row["uas_nilai_siswa_transaksi6_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi6_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi6_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt2_spiritual = $row['uas_nilai_siswa_transaksi6_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi6_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi6_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi6_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt2_spiritual = $uas_nilai_siswa_transaksi6_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = $nah_kd_nilai_siswa_transaksi6_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi6_smt2_spiritual+$na_uas_nilai_siswa_transaksi6_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi6_smt2_spiritual+$na_uas_nilai_siswa_transaksi6_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi7_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi7_smt2_spiritual = $row['observasi_nilai_siswa_transaksi7_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi7_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi7_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual+$observasi_nilai_siswa_transaksi7_smt2_spiritual+$penugasan_nilai_siswa_transaksi7_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi7_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi7_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi7_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi7_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi7_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi7_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi7_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt2_spiritual = $row["uas_nilai_siswa_transaksi7_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi7_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi7_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt2_spiritual = $row['uas_nilai_siswa_transaksi7_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi7_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi7_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi7_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt2_spiritual = $uas_nilai_siswa_transaksi7_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = $nah_kd_nilai_siswa_transaksi7_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi7_smt2_spiritual+$na_uas_nilai_siswa_transaksi7_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi7_smt2_spiritual+$na_uas_nilai_siswa_transaksi7_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi8_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi8_smt2_spiritual = $row['observasi_nilai_siswa_transaksi8_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi8_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi8_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual+$observasi_nilai_siswa_transaksi8_smt2_spiritual+$penugasan_nilai_siswa_transaksi8_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi8_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi8_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi8_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi8_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi8_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi8_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi8_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt2_spiritual = $row["uas_nilai_siswa_transaksi8_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi8_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi8_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt2_spiritual = $row['uas_nilai_siswa_transaksi8_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi8_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi8_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi8_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt2_spiritual = $uas_nilai_siswa_transaksi8_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = $nah_kd_nilai_siswa_transaksi8_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi8_smt2_spiritual+$na_uas_nilai_siswa_transaksi8_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi8_smt2_spiritual+$na_uas_nilai_siswa_transaksi8_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi9_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi9_smt2_spiritual = $row['observasi_nilai_siswa_transaksi9_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi9_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi9_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual+$observasi_nilai_siswa_transaksi9_smt2_spiritual+$penugasan_nilai_siswa_transaksi9_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi9_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi9_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi9_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi9_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi9_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi9_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi9_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt2_spiritual = $row["uas_nilai_siswa_transaksi9_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi9_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi9_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt2_spiritual = $row['uas_nilai_siswa_transaksi9_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi9_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi9_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi9_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt2_spiritual = $uas_nilai_siswa_transaksi9_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = $nah_kd_nilai_siswa_transaksi9_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi9_smt2_spiritual+$na_uas_nilai_siswa_transaksi9_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi9_smt2_spiritual+$na_uas_nilai_siswa_transaksi9_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt2_spiritual = $row['tes_tulis_nilai_siswa_transaksi10_smt2_spiritual'];
                            $observasi_nilai_siswa_transaksi10_smt2_spiritual = $row['observasi_nilai_siswa_transaksi10_smt2_spiritual'];
                            $penugasan_nilai_siswa_transaksi10_smt2_spiritual = $row['penugasan_nilai_siswa_transaksi10_smt2_spiritual'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual+$observasi_nilai_siswa_transaksi10_smt2_spiritual+$penugasan_nilai_siswa_transaksi10_smt2_spiritual)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $observasi_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi10_smt2_spiritual'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi10_smt2_spiritual'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_spiritual == "0" && $penugasan_nilai_siswa_transaksi10_smt2_spiritual == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi10_smt2_spiritual'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt2_spiritual = $row["nh_remidi_nilai_siswa_transaksi10_smt2_spiritual"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt2_spiritual > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi10_smt2_spiritual = $nh_remidi_nilai_siswa_transaksi10_smt2_spiritual;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt2_spiritual = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt2_spiritual ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt2_spiritual ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt2_spiritual'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt2_spiritual = $row["uas_nilai_siswa_transaksi10_smt2_spiritual"];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual = $row["uas_remidi_nilai_siswa_transaksi10_smt2_spiritual"];
                            if ($uas_nilai_siswa_transaksi10_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt2_spiritual = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt2_spiritual = $row['uas_nilai_siswa_transaksi10_smt2_spiritual'];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual = $row['uas_remidi_nilai_siswa_transaksi10_smt2_spiritual'];
                              if ($uas_nilai_siswa_transaksi10_smt2_spiritual < $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual) {
                                $na_uas_nilai_siswa_transaksi10_smt2_spiritual = $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt2_spiritual = $uas_nilai_siswa_transaksi10_smt2_spiritual;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt2_spiritual ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt2_spiritual; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual == "0" && $na_uas_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = $nah_kd_nilai_siswa_transaksi10_smt2_spiritual;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt2_spiritual == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi10_smt2_spiritual+$na_uas_nilai_siswa_transaksi10_smt2_spiritual)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = (($nah_kd_nilai_siswa_transaksi10_smt2_spiritual+$na_uas_nilai_siswa_transaksi10_smt2_spiritual)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>


            <div id="sosial2">
              <div style="margin-bottom:15px;font-size:28px;background:white">
                  <span class="label label-warning">Sosial 2 </span>
                  <button type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data</button>
              </div>
              <div class="table-responsive" style="background-color:#ceffe8; margin-bottom:35px">
                <table class="table table-bordered table-hover table-striped tablesorter" width="100%">
                    <tr>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "No."; ?></p></th>
                      <th rowspan="3" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><p style="margin-top:50px"><?php echo "Nama Mata Pelajaran"; ?></p></th>
                      <?php
                      for ($i=1; $i <= 10; $i++) {
                      ?>
                      <th colspan="10" style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;"><?php echo "KD".$i; ?></th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      $datas = array();
                      $tampil_dataSem1sosial = "SELECT guru_kompetensi_dasar_sosial_noDKD_smt2 from guru_kompetensi_dasar_smt2";
                      $tampil = mysqli_query($connect, $tampil_dataSem1sosial);
                      while($row = mysqli_fetch_array($tampil)){
                        $datas[] = $row;
                      }
                      $file = json_encode($datas, JSON_PRETTY_PRINT);
                      $json = json_decode($file, true);
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th colspan="10">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center" type="text" class="form-control" autocomplete="off" name="" value="<?php echo $json[$i-1]["guru_kompetensi_dasar_sosial_noDKD_smt2"] ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <tr>
                      <?php
                      for ($i=1; $i <= 10 ; $i++) {
                      ?>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Tes Tertulis" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Observasi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Penugasan" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>

                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff9999;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NH Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA-H  KD" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#ff6666;color:white" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "UAS Remidi" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "NA - UAS" ?>" readonly>
                      </th>
                      <th style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                        <input style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;width:50px;background:#33ff77" type="text" class="form-control" autocomplete="off" name="" value="<?php echo "Rerata" ?>" readonly>
                      </th>
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                    $no=1;
                    $tampil_dataNilaiSiswa = "SELECT * from nilai_siswa_transaksi_smt2_sosial inner join data_siswa on nilai_siswa_transaksi_smt2_sosial.nis_siswa_nilai_siswa_transaksi_smt2_sosial = data_siswa.nis_siswa where id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && nip_pegawai_nilai_siswa_transaksi_smt2_sosial='$nip_pegawai' order by nis_siswa_nilai_siswa_transaksi_smt2_sosial asc";
                    $tampil = mysqli_query($connect, $tampil_dataNilaiSiswa);
                    while($row=mysqli_fetch_array($tampil)){
                    ?>
                    <tr>

                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><?php echo $no++ ?></td>
                          <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center;font-weight: normal;"><p style="width:190px"><?php echo $row["nama_siswa"] ?></p></td>

                            <!-- SMT 1 -->
                            <!--KD 1-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi1_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi1_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi1_smt2_sosial = $row['observasi_nilai_siswa_transaksi1_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi1_smt2_sosial = $row['penugasan_nilai_siswa_transaksi1_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi1_smt2_sosial+$observasi_nilai_siswa_transaksi1_smt2_sosial+$penugasan_nilai_siswa_transaksi1_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi1_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi1_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi1_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi1_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi1_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi1_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi1_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi1_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi1_smt2_sosial = $nh_remidi_nilai_siswa_transaksi1_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi1_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi1_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi1_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi1_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi1_smt2_sosial = $row["uas_nilai_siswa_transaksi1_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi1_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi1_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi1_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi1_smt2_sosial = $row['uas_nilai_siswa_transaksi1_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi1_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi1_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi1_smt2_sosial < $uas_remidi_nilai_siswa_transaksi1_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi1_smt2_sosial = $uas_remidi_nilai_siswa_transaksi1_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi1_smt2_sosial = $uas_nilai_siswa_transaksi1_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi1_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi1_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi1_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi1_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = $nah_kd_nilai_siswa_transaksi1_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi1_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi1_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = (($nah_kd_nilai_siswa_transaksi1_smt2_sosial+$na_uas_nilai_siswa_transaksi1_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = (($nah_kd_nilai_siswa_transaksi1_smt2_sosial+$na_uas_nilai_siswa_transaksi1_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi1_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi1_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 2-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi2_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi2_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi2_smt2_sosial = $row['observasi_nilai_siswa_transaksi2_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi2_smt2_sosial = $row['penugasan_nilai_siswa_transaksi2_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi2_smt2_sosial+$observasi_nilai_siswa_transaksi2_smt2_sosial+$penugasan_nilai_siswa_transaksi2_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi2_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi2_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi2_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi2_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi2_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi2_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi2_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi2_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi2_smt2_sosial = $nh_remidi_nilai_siswa_transaksi2_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi2_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi2_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi2_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi2_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi2_smt2_sosial = $row["uas_nilai_siswa_transaksi2_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi2_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi2_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi2_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi2_smt2_sosial = $row['uas_nilai_siswa_transaksi2_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi2_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi2_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi2_smt2_sosial < $uas_remidi_nilai_siswa_transaksi2_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi2_smt2_sosial = $uas_remidi_nilai_siswa_transaksi2_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi2_smt2_sosial = $uas_nilai_siswa_transaksi2_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi2_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi2_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi2_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi2_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = $nah_kd_nilai_siswa_transaksi2_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi2_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi2_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = (($nah_kd_nilai_siswa_transaksi2_smt2_sosial+$na_uas_nilai_siswa_transaksi2_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = (($nah_kd_nilai_siswa_transaksi2_smt2_sosial+$na_uas_nilai_siswa_transaksi2_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi2_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi2_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 3-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi3_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi3_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi3_smt2_sosial = $row['observasi_nilai_siswa_transaksi3_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi3_smt2_sosial = $row['penugasan_nilai_siswa_transaksi3_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi3_smt2_sosial+$observasi_nilai_siswa_transaksi3_smt2_sosial+$penugasan_nilai_siswa_transaksi3_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi3_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi3_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi3_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi3_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi3_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi3_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi3_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi3_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi3_smt2_sosial = $nh_remidi_nilai_siswa_transaksi3_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi3_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi3_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi3_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi3_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi3_smt2_sosial = $row["uas_nilai_siswa_transaksi3_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi3_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi3_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi3_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi3_smt2_sosial = $row['uas_nilai_siswa_transaksi3_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi3_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi3_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi3_smt2_sosial < $uas_remidi_nilai_siswa_transaksi3_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi3_smt2_sosial = $uas_remidi_nilai_siswa_transaksi3_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi3_smt2_sosial = $uas_nilai_siswa_transaksi3_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi3_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi3_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi3_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi3_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = $nah_kd_nilai_siswa_transaksi3_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi3_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi3_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = (($nah_kd_nilai_siswa_transaksi3_smt2_sosial+$na_uas_nilai_siswa_transaksi3_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = (($nah_kd_nilai_siswa_transaksi3_smt2_sosial+$na_uas_nilai_siswa_transaksi3_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi3_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi3_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 4-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi4_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi4_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi4_smt2_sosial = $row['observasi_nilai_siswa_transaksi4_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi4_smt2_sosial = $row['penugasan_nilai_siswa_transaksi4_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi4_smt2_sosial+$observasi_nilai_siswa_transaksi4_smt2_sosial+$penugasan_nilai_siswa_transaksi4_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi4_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi4_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi4_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi4_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi4_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi4_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi4_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi4_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi4_smt2_sosial = $nh_remidi_nilai_siswa_transaksi4_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi4_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi4_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi4_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi4_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi4_smt2_sosial = $row["uas_nilai_siswa_transaksi4_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi4_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi4_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi4_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi4_smt2_sosial = $row['uas_nilai_siswa_transaksi4_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi4_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi4_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi4_smt2_sosial < $uas_remidi_nilai_siswa_transaksi4_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi4_smt2_sosial = $uas_remidi_nilai_siswa_transaksi4_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi4_smt2_sosial = $uas_nilai_siswa_transaksi4_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi4_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi4_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi4_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi4_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = $nah_kd_nilai_siswa_transaksi4_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi4_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi4_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = (($nah_kd_nilai_siswa_transaksi4_smt2_sosial+$na_uas_nilai_siswa_transaksi4_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = (($nah_kd_nilai_siswa_transaksi4_smt2_sosial+$na_uas_nilai_siswa_transaksi4_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi4_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi4_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 5-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi5_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi5_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi5_smt2_sosial = $row['observasi_nilai_siswa_transaksi5_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi5_smt2_sosial = $row['penugasan_nilai_siswa_transaksi5_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi5_smt2_sosial+$observasi_nilai_siswa_transaksi5_smt2_sosial+$penugasan_nilai_siswa_transaksi5_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi5_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi5_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi5_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi5_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi5_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi5_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi5_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi5_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi5_smt2_sosial = $nh_remidi_nilai_siswa_transaksi5_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi5_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi5_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi5_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi5_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi5_smt2_sosial = $row["uas_nilai_siswa_transaksi5_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi5_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi5_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi5_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi5_smt2_sosial = $row['uas_nilai_siswa_transaksi5_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi5_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi5_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi5_smt2_sosial < $uas_remidi_nilai_siswa_transaksi5_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi5_smt2_sosial = $uas_remidi_nilai_siswa_transaksi5_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi5_smt2_sosial = $uas_nilai_siswa_transaksi5_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi5_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi5_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi5_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi5_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = $nah_kd_nilai_siswa_transaksi5_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi5_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi5_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = (($nah_kd_nilai_siswa_transaksi5_smt2_sosial+$na_uas_nilai_siswa_transaksi5_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = (($nah_kd_nilai_siswa_transaksi5_smt2_sosial+$na_uas_nilai_siswa_transaksi5_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi5_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi5_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 6-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi6_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi6_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi6_smt2_sosial = $row['observasi_nilai_siswa_transaksi6_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi6_smt2_sosial = $row['penugasan_nilai_siswa_transaksi6_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi6_smt2_sosial+$observasi_nilai_siswa_transaksi6_smt2_sosial+$penugasan_nilai_siswa_transaksi6_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi6_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi6_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi6_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi6_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi6_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi6_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi6_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi6_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi6_smt2_sosial = $nh_remidi_nilai_siswa_transaksi6_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi6_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi6_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi6_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi6_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi6_smt2_sosial = $row["uas_nilai_siswa_transaksi6_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi6_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi6_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi6_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi6_smt2_sosial = $row['uas_nilai_siswa_transaksi6_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi6_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi6_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi6_smt2_sosial < $uas_remidi_nilai_siswa_transaksi6_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi6_smt2_sosial = $uas_remidi_nilai_siswa_transaksi6_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi6_smt2_sosial = $uas_nilai_siswa_transaksi6_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi6_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi6_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi6_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi6_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = $nah_kd_nilai_siswa_transaksi6_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi6_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi6_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = (($nah_kd_nilai_siswa_transaksi6_smt2_sosial+$na_uas_nilai_siswa_transaksi6_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = (($nah_kd_nilai_siswa_transaksi6_smt2_sosial+$na_uas_nilai_siswa_transaksi6_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi6_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi6_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 7-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi7_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi7_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi7_smt2_sosial = $row['observasi_nilai_siswa_transaksi7_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi7_smt2_sosial = $row['penugasan_nilai_siswa_transaksi7_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi7_smt2_sosial+$observasi_nilai_siswa_transaksi7_smt2_sosial+$penugasan_nilai_siswa_transaksi7_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi7_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi7_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi7_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi7_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi7_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi7_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi7_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi7_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi7_smt2_sosial = $nh_remidi_nilai_siswa_transaksi7_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi7_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi7_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi7_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi7_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi7_smt2_sosial = $row["uas_nilai_siswa_transaksi7_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi7_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi7_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi7_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi7_smt2_sosial = $row['uas_nilai_siswa_transaksi7_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi7_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi7_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi7_smt2_sosial < $uas_remidi_nilai_siswa_transaksi7_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi7_smt2_sosial = $uas_remidi_nilai_siswa_transaksi7_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi7_smt2_sosial = $uas_nilai_siswa_transaksi7_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi7_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi7_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi7_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi7_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = $nah_kd_nilai_siswa_transaksi7_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi7_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi7_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = (($nah_kd_nilai_siswa_transaksi7_smt2_sosial+$na_uas_nilai_siswa_transaksi7_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = (($nah_kd_nilai_siswa_transaksi7_smt2_sosial+$na_uas_nilai_siswa_transaksi7_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi7_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi7_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 8-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi8_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi8_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi8_smt2_sosial = $row['observasi_nilai_siswa_transaksi8_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi8_smt2_sosial = $row['penugasan_nilai_siswa_transaksi8_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi8_smt2_sosial+$observasi_nilai_siswa_transaksi8_smt2_sosial+$penugasan_nilai_siswa_transaksi8_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi8_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi8_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi8_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi8_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi8_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi8_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi8_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi8_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi8_smt2_sosial = $nh_remidi_nilai_siswa_transaksi8_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi8_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi8_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi8_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi8_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi8_smt2_sosial = $row["uas_nilai_siswa_transaksi8_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi8_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi8_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi8_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi8_smt2_sosial = $row['uas_nilai_siswa_transaksi8_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi8_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi8_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi8_smt2_sosial < $uas_remidi_nilai_siswa_transaksi8_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi8_smt2_sosial = $uas_remidi_nilai_siswa_transaksi8_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi8_smt2_sosial = $uas_nilai_siswa_transaksi8_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi8_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi8_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi8_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi8_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = $nah_kd_nilai_siswa_transaksi8_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi8_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi8_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = (($nah_kd_nilai_siswa_transaksi8_smt2_sosial+$na_uas_nilai_siswa_transaksi8_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = (($nah_kd_nilai_siswa_transaksi8_smt2_sosial+$na_uas_nilai_siswa_transaksi8_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi8_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi8_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 9-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi9_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi9_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi9_smt2_sosial = $row['observasi_nilai_siswa_transaksi9_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi9_smt2_sosial = $row['penugasan_nilai_siswa_transaksi9_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi9_smt2_sosial+$observasi_nilai_siswa_transaksi9_smt2_sosial+$penugasan_nilai_siswa_transaksi9_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi9_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi9_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi9_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi9_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi9_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi9_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi9_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi9_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi9_smt2_sosial = $nh_remidi_nilai_siswa_transaksi9_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi9_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi9_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi9_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi9_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi9_smt2_sosial = $row["uas_nilai_siswa_transaksi9_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi9_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi9_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi9_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi9_smt2_sosial = $row['uas_nilai_siswa_transaksi9_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi9_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi9_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi9_smt2_sosial < $uas_remidi_nilai_siswa_transaksi9_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi9_smt2_sosial = $uas_remidi_nilai_siswa_transaksi9_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi9_smt2_sosial = $uas_nilai_siswa_transaksi9_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi9_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi9_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi9_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi9_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = $nah_kd_nilai_siswa_transaksi9_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi9_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi9_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = (($nah_kd_nilai_siswa_transaksi9_smt2_sosial+$na_uas_nilai_siswa_transaksi9_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = (($nah_kd_nilai_siswa_transaksi9_smt2_sosial+$na_uas_nilai_siswa_transaksi9_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi9_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi9_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                            <!--KD 10-->
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!--tes tertulis-->
                              <input type="text" class="form-control" autocomplete="off" name="tes_tulis_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['tes_tulis_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- observasi-->
                              <input type="text" class="form-control" autocomplete="off" name="observasi_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['observasi_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="penugasan_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['penugasan_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $tes_tulis_nilai_siswa_transaksi10_smt2_sosial = $row['tes_tulis_nilai_siswa_transaksi10_smt2_sosial'];
                            $observasi_nilai_siswa_transaksi10_smt2_sosial = $row['observasi_nilai_siswa_transaksi10_smt2_sosial'];
                            $penugasan_nilai_siswa_transaksi10_smt2_sosial = $row['penugasan_nilai_siswa_transaksi10_smt2_sosial'];
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $bagi = 0;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $bagi = 1;
                            }
                            elseif ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($observasi_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            elseif ($penugasan_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $bagi = 2;
                            }
                            else {
                              $bagi = 3;
                            }
                            $hasil_rerata_nilai1_smt2 = (($tes_tulis_nilai_siswa_transaksi10_smt2_sosial+$observasi_nilai_siswa_transaksi10_smt2_sosial+$penugasan_nilai_siswa_transaksi10_smt2_sosial)/$bagi);
                            $hasil_rerata_nilai1_smt2 = round($hasil_rerata_nilai1_smt2, 0);
                            if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $hasil_rerata_nilai1_smt2 = "0";
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $observasi_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['penugasan_nilai_siswa_transaksi10_smt2_sosial'];
                            }
                            else if ($tes_tulis_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['observasi_nilai_siswa_transaksi10_smt2_sosial'];
                            }
                            else if ($observasi_nilai_siswa_transaksi10_smt2_sosial == "0" && $penugasan_nilai_siswa_transaksi10_smt2_sosial == "0"){
                              $hasil_rerata_nilai1_smt2 = $row['tes_tulis_nilai_siswa_transaksi10_smt2_sosial'];
                            }
                            else {
                              $hasil_rerata_nilai1_smt2 = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                              <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $hasil_rerata_nilai1_smt2 ?>">
                              <?php echo $hasil_rerata_nilai1_smt2 ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- nh remidi -->
                              <input type="text" class="form-control" autocomplete="off" name="nh_remidi_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['nh_remidi_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>
                            <?php
                            $nh_remidi_nilai_siswa_transaksi10_smt2_sosial = $row["nh_remidi_nilai_siswa_transaksi10_smt2_sosial"];
                            if ($nh_remidi_nilai_siswa_transaksi10_smt2_sosial > $hasil_rerata_nilai1_smt2){
                              $nah_kd_nilai_siswa_transaksi10_smt2_sosial = $nh_remidi_nilai_siswa_transaksi10_smt2_sosial;
                            }
                            else if ($nh_remidi_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $nah_kd_nilai_siswa_transaksi10_smt2_sosial = $hasil_rerata_nilai1_smt2;
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center">
                              <input type="hidden" class="form-control" autocomplete="off" name="nah_kd_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $nah_kd_nilai_siswa_transaksi10_smt2_sosial ?>">
                              <?php echo $nah_kd_nilai_siswa_transaksi10_smt2_sosial ?>
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- penugasan -->
                              <input type="text" class="form-control" autocomplete="off" name="uas_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['uas_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- uas remidi -->
                              <input class="form-control" autocomplete="off" name="uas_remidi_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $row['uas_remidi_nilai_siswa_transaksi10_smt2_sosial'] ?>">
                            </td>

                            <?php
                              $uas_nilai_siswa_transaksi10_smt2_sosial = $row["uas_nilai_siswa_transaksi10_smt2_sosial"];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_sosial = $row["uas_remidi_nilai_siswa_transaksi10_smt2_sosial"];
                            if ($uas_nilai_siswa_transaksi10_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_sosial == "0") {
                              $na_uas_nilai_siswa_transaksi10_smt2_sosial = 0;
                            }
                            else{
                              $uas_nilai_siswa_transaksi10_smt2_sosial = $row['uas_nilai_siswa_transaksi10_smt2_sosial'];
                              $uas_remidi_nilai_siswa_transaksi10_smt2_sosial = $row['uas_remidi_nilai_siswa_transaksi10_smt2_sosial'];
                              if ($uas_nilai_siswa_transaksi10_smt2_sosial < $uas_remidi_nilai_siswa_transaksi10_smt2_sosial) {
                                $na_uas_nilai_siswa_transaksi10_smt2_sosial = $uas_remidi_nilai_siswa_transaksi10_smt2_sosial;
                              }
                              else {
                                $na_uas_nilai_siswa_transaksi10_smt2_sosial = $uas_nilai_siswa_transaksi10_smt2_sosial;
                              }
                            }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- na_uas -->
                              <input type="hidden" class="form-control" autocomplete="off" name="na_uas_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo $na_uas_nilai_siswa_transaksi10_smt2_sosial ?>">
                              <?php echo $na_uas_nilai_siswa_transaksi10_smt2_sosial; ?>
                            </td>
                            <?php
                              if ($uas_nilai_siswa_transaksi10_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_sosial == "0" && $na_uas_nilai_siswa_transaksi10_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = $nah_kd_nilai_siswa_transaksi10_smt2_sosial;
                              }
                              elseif ($uas_nilai_siswa_transaksi10_smt2_sosial == "0" && $uas_remidi_nilai_siswa_transaksi10_smt2_sosial == "0") {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = (($nah_kd_nilai_siswa_transaksi10_smt2_sosial+$na_uas_nilai_siswa_transaksi10_smt2_sosial)/1);
                              }
                              else {
                                $rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = (($nah_kd_nilai_siswa_transaksi10_smt2_sosial+$na_uas_nilai_siswa_transaksi10_smt2_sosial)/2);
                              }
                            ?>
                            <td style="border-radius:0px;margin:0 auto;text-align:center;position:relative;float:center"> <!-- rerata akhir -->
                              <input type="hidden" class="form-control" autocomplete="off" name="rerata_akhir_nilai_siswa_transaksi10_smt2_sosial[]" value="<?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_sosial,0,PHP_ROUND_HALF_UP) ?>">
                              <?php echo round($rerata_akhir_nilai_siswa_transaksi10_smt2_sosial,0,PHP_ROUND_HALF_UP); ?>
                            </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </table>
              </div>
            </div>





          </div>

        </div>

        </div> <!--col-lg-12-->
      </div>
    </div>
      <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

<?php include_once "halaman_administrator_footer.php" ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!--Modal Tambah Kelas-->
<div id="tambahKelas" class="modal fade">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Kelas</h4>
            </div>
              <form class="form-signin" action="backend/administrator_tambah_kelas.php" method="post">
            <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12">
                    </br>
                    <div class="row" style="margin-top:15px;">
                                <div class="col-lg-12">
                                  <label for="sel1">Pilih Kelas : </label>
                                      <select class="form-control" name="nama_kelas_transaksi">
                                        <option value="">Pilih Kelas : </option>
                                        <?php
                                          $no=1;
                                          $tampilDataJabatan = "select * from kelas_daftar";
                                          $tampil = mysqli_query($connect, $tampilDataJabatan);
                                          while($row=mysqli_fetch_array($tampil)){
                                        ?>
                                        <option value="<?php echo $row["nama_kelas_daftar"] ?>"><?php echo $row["nama_kelas_daftar"] ?></option>
                                        <?php  } ?>
                                      </select>
                                    </br>
                                </div>
                                <div class="col-lg-12">
                                    <label for="sel1">Nama Wali Kelas </label>
                                    <select class="form-control" name="wali_kelas_transaksi">
                                      <option value="0">Pilih Wali Kelas : </option>
                                      <?php
                                        $no=1;
                                        $tampilDataPegawai = "select * from data_pegawai";
                                        $tampil = mysqli_query($connect, $tampilDataPegawai);
                                        while($row=mysqli_fetch_array($tampil)){
                                      ?>
                                      <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                                      <?php  } ?>
                                    </select>
                                    </br>
                                </div>
                                </div>
                      </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-success">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

    <div id="tampilDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="tampil"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>
    <div id="editDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="edit"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>
    <div id="deleteDataKelas" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div id="delete"></div>
              <?php
                // include_once "halaman_administrator_edit_pegawai.php"
              ?>
            </div>
        </div>
    </div>

<?php include_once "halaman_administrator_bundle_js.php" ?>

</body>
</html>

<?php
}
else {
  header("location:login_siswa.php");
}
 ?>
