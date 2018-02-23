<?php
include_once "koneksi.php";

$nip_pegawai       = $_GET['nip_pegawai'];
$id_kelas_daftar   = $_GET['id_kelas_daftar'];
$id_mata_pelajaran = $_GET['id_mata_pelajaran'];

//SMT1
//pengetahuan1
$tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi1_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi1_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi1_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi1_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi1_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi2_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi2_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi2_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi2_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi2_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi3_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi3_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi3_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi3_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi3_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi4_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi4_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi4_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi4_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi4_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi5_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi5_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi5_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi5_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi5_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi6_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi6_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi6_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi6_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi6_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi7_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi7_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi7_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi7_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi7_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi8_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi8_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi8_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi8_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi8_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi9_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi9_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi9_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi9_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi9_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan'];
$observasi_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['observasi_nilai_siswa_transaksi10_smt1_pengetahuan'];
$penugasan_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi10_smt1_pengetahuan'];
$rerata_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['rerata_nilai_siswa_transaksi10_smt1_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'];
$nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan'];
$uas_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['uas_nilai_siswa_transaksi10_smt1_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan'];
$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi10_smt1_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan'];

//keterampilan1
$tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi1_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi1_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi1_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi1_smt1_keterampilan'];
$uas_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi1_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi1_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi2_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi2_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi2_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi2_smt1_keterampilan'];
$uas_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi2_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi2_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi3_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi3_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi3_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi3_smt1_keterampilan'];
$uas_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi3_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi3_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi4_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi4_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi4_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi4_smt1_keterampilan'];
$uas_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi4_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi4_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi5_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi5_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi5_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi5_smt1_keterampilan'];
$uas_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi5_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi5_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi6_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi6_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi6_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi6_smt1_keterampilan'];
$uas_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi6_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi6_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi7_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi7_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi7_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi7_smt1_keterampilan'];
$uas_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi7_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi7_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi8_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi8_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi8_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi8_smt1_keterampilan'];
$uas_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi8_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi8_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi9_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi9_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi9_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi9_smt1_keterampilan'];
$uas_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi9_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi9_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan'];
$observasi_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['observasi_nilai_siswa_transaksi10_smt1_keterampilan'];
$penugasan_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['penugasan_nilai_siswa_transaksi10_smt1_keterampilan'];
$rerata_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['rerata_nilai_siswa_transaksi10_smt1_keterampilan'];
$nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan'];
$nah_kd_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi10_smt1_keterampilan'];
$uas_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['uas_nilai_siswa_transaksi10_smt1_keterampilan'];
$uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan'];
$na_uas_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['na_uas_nilai_siswa_transaksi10_smt1_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan'];
//spiritual1
$tes_tulis_nilai_siswa_transaksi1_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi1_smt1_spiritual'];
$observasi_nilai_siswa_transaksi1_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi1_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi1_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi1_smt1_spiritual'];
$rerata_nilai_siswa_transaksi1_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi1_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi1_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi1_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi1_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi1_smt1_spiritual'];
$uas_nilai_siswa_transaksi1_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi1_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi1_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi1_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi1_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi1_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi2_smt1_spiritual'];
$observasi_nilai_siswa_transaksi2_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi2_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi2_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi2_smt1_spiritual'];
$rerata_nilai_siswa_transaksi2_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi2_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi2_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi2_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi2_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi2_smt1_spiritual'];
$uas_nilai_siswa_transaksi2_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi2_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi2_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi2_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi2_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi2_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi3_smt1_spiritual'];
$observasi_nilai_siswa_transaksi3_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi3_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi3_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi3_smt1_spiritual'];
$rerata_nilai_siswa_transaksi3_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi3_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi3_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi3_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi3_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi3_smt1_spiritual'];
$uas_nilai_siswa_transaksi3_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi3_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi3_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi3_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi3_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi3_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi4_smt1_spiritual'];
$observasi_nilai_siswa_transaksi4_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi4_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi4_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi4_smt1_spiritual'];
$rerata_nilai_siswa_transaksi4_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi4_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi4_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi4_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi4_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi4_smt1_spiritual'];
$uas_nilai_siswa_transaksi4_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi4_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi4_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi4_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi4_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi4_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi5_smt1_spiritual'];
$observasi_nilai_siswa_transaksi5_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi5_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi5_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi5_smt1_spiritual'];
$rerata_nilai_siswa_transaksi5_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi5_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi5_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi5_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi5_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi5_smt1_spiritual'];
$uas_nilai_siswa_transaksi5_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi5_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi5_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi5_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi5_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi5_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi6_smt1_spiritual'];
$observasi_nilai_siswa_transaksi6_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi6_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi6_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi6_smt1_spiritual'];
$rerata_nilai_siswa_transaksi6_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi6_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi6_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi6_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi6_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi6_smt1_spiritual'];
$uas_nilai_siswa_transaksi6_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi6_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi6_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi6_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi6_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi6_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi7_smt1_spiritual'];
$observasi_nilai_siswa_transaksi7_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi7_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi7_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi7_smt1_spiritual'];
$rerata_nilai_siswa_transaksi7_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi7_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi7_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi7_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi7_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi7_smt1_spiritual'];
$uas_nilai_siswa_transaksi7_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi7_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi7_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi7_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi7_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi7_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi8_smt1_spiritual'];
$observasi_nilai_siswa_transaksi8_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi8_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi8_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi8_smt1_spiritual'];
$rerata_nilai_siswa_transaksi8_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi8_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi8_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi8_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi8_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi8_smt1_spiritual'];
$uas_nilai_siswa_transaksi8_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi8_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi8_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi8_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi8_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi8_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi9_smt1_spiritual'];
$observasi_nilai_siswa_transaksi9_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi9_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi9_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi9_smt1_spiritual'];
$rerata_nilai_siswa_transaksi9_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi9_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi9_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi9_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi9_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi9_smt1_spiritual'];
$uas_nilai_siswa_transaksi9_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi9_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi9_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi9_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi9_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi9_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi10_smt1_spiritual'];
$observasi_nilai_siswa_transaksi10_smt1_spiritual = $_POST['observasi_nilai_siswa_transaksi10_smt1_spiritual'];
$penugasan_nilai_siswa_transaksi10_smt1_spiritual = $_POST['penugasan_nilai_siswa_transaksi10_smt1_spiritual'];
$rerata_nilai_siswa_transaksi10_smt1_spiritual = $_POST['rerata_nilai_siswa_transaksi10_smt1_spiritual'];
$nh_remidi_nilai_siswa_transaksi10_smt1_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi10_smt1_spiritual'];
$nah_kd_nilai_siswa_transaksi10_smt1_spiritual = $_POST['nah_kd_nilai_siswa_transaksi10_smt1_spiritual'];
$uas_nilai_siswa_transaksi10_smt1_spiritual = $_POST['uas_nilai_siswa_transaksi10_smt1_spiritual'];
$uas_remidi_nilai_siswa_transaksi10_smt1_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi10_smt1_spiritual'];
$na_uas_nilai_siswa_transaksi10_smt1_spiritual = $_POST['na_uas_nilai_siswa_transaksi10_smt1_spiritual'];
$rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual'];
//sosial1
$tes_tulis_nilai_siswa_transaksi1_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi1_smt1_sosial'];
$observasi_nilai_siswa_transaksi1_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi1_smt1_sosial'];
$penugasan_nilai_siswa_transaksi1_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi1_smt1_sosial'];
$rerata_nilai_siswa_transaksi1_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi1_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi1_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi1_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi1_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi1_smt1_sosial'];
$uas_nilai_siswa_transaksi1_smt1_sosial = $_POST['uas_nilai_siswa_transaksi1_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi1_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi1_smt1_sosial'];
$na_uas_nilai_siswa_transaksi1_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi1_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt1_sosial'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi2_smt1_sosial'];
$observasi_nilai_siswa_transaksi2_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi2_smt1_sosial'];
$penugasan_nilai_siswa_transaksi2_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi2_smt1_sosial'];
$rerata_nilai_siswa_transaksi2_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi2_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi2_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi2_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi2_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi2_smt1_sosial'];
$uas_nilai_siswa_transaksi2_smt1_sosial = $_POST['uas_nilai_siswa_transaksi2_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi2_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi2_smt1_sosial'];
$na_uas_nilai_siswa_transaksi2_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi2_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt1_sosial'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi3_smt1_sosial'];
$observasi_nilai_siswa_transaksi3_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi3_smt1_sosial'];
$penugasan_nilai_siswa_transaksi3_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi3_smt1_sosial'];
$rerata_nilai_siswa_transaksi3_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi3_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi3_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi3_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi3_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi3_smt1_sosial'];
$uas_nilai_siswa_transaksi3_smt1_sosial = $_POST['uas_nilai_siswa_transaksi3_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi3_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi3_smt1_sosial'];
$na_uas_nilai_siswa_transaksi3_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi3_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt1_sosial'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi4_smt1_sosial'];
$observasi_nilai_siswa_transaksi4_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi4_smt1_sosial'];
$penugasan_nilai_siswa_transaksi4_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi4_smt1_sosial'];
$rerata_nilai_siswa_transaksi4_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi4_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi4_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi4_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi4_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi4_smt1_sosial'];
$uas_nilai_siswa_transaksi4_smt1_sosial = $_POST['uas_nilai_siswa_transaksi4_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi4_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi4_smt1_sosial'];
$na_uas_nilai_siswa_transaksi4_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi4_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt1_sosial'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi5_smt1_sosial'];
$observasi_nilai_siswa_transaksi5_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi5_smt1_sosial'];
$penugasan_nilai_siswa_transaksi5_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi5_smt1_sosial'];
$rerata_nilai_siswa_transaksi5_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi5_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi5_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi5_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi5_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi5_smt1_sosial'];
$uas_nilai_siswa_transaksi5_smt1_sosial = $_POST['uas_nilai_siswa_transaksi5_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi5_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi5_smt1_sosial'];
$na_uas_nilai_siswa_transaksi5_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi5_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt1_sosial'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi6_smt1_sosial'];
$observasi_nilai_siswa_transaksi6_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi6_smt1_sosial'];
$penugasan_nilai_siswa_transaksi6_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi6_smt1_sosial'];
$rerata_nilai_siswa_transaksi6_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi6_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi6_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi6_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi6_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi6_smt1_sosial'];
$uas_nilai_siswa_transaksi6_smt1_sosial = $_POST['uas_nilai_siswa_transaksi6_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi6_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi6_smt1_sosial'];
$na_uas_nilai_siswa_transaksi6_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi6_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt1_sosial'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi7_smt1_sosial'];
$observasi_nilai_siswa_transaksi7_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi7_smt1_sosial'];
$penugasan_nilai_siswa_transaksi7_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi7_smt1_sosial'];
$rerata_nilai_siswa_transaksi7_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi7_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi7_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi7_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi7_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi7_smt1_sosial'];
$uas_nilai_siswa_transaksi7_smt1_sosial = $_POST['uas_nilai_siswa_transaksi7_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi7_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi7_smt1_sosial'];
$na_uas_nilai_siswa_transaksi7_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi7_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt1_sosial'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi8_smt1_sosial'];
$observasi_nilai_siswa_transaksi8_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi8_smt1_sosial'];
$penugasan_nilai_siswa_transaksi8_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi8_smt1_sosial'];
$rerata_nilai_siswa_transaksi8_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi8_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi8_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi8_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi8_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi8_smt1_sosial'];
$uas_nilai_siswa_transaksi8_smt1_sosial = $_POST['uas_nilai_siswa_transaksi8_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi8_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi8_smt1_sosial'];
$na_uas_nilai_siswa_transaksi8_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi8_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt1_sosial'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi9_smt1_sosial'];
$observasi_nilai_siswa_transaksi9_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi9_smt1_sosial'];
$penugasan_nilai_siswa_transaksi9_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi9_smt1_sosial'];
$rerata_nilai_siswa_transaksi9_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi9_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi9_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi9_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi9_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi9_smt1_sosial'];
$uas_nilai_siswa_transaksi9_smt1_sosial = $_POST['uas_nilai_siswa_transaksi9_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi9_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi9_smt1_sosial'];
$na_uas_nilai_siswa_transaksi9_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi9_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt1_sosial'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_sosial = $_POST['tes_tulis_nilai_siswa_transaksi10_smt1_sosial'];
$observasi_nilai_siswa_transaksi10_smt1_sosial = $_POST['observasi_nilai_siswa_transaksi10_smt1_sosial'];
$penugasan_nilai_siswa_transaksi10_smt1_sosial = $_POST['penugasan_nilai_siswa_transaksi10_smt1_sosial'];
$rerata_nilai_siswa_transaksi10_smt1_sosial = $_POST['rerata_nilai_siswa_transaksi10_smt1_sosial'];
$nh_remidi_nilai_siswa_transaksi10_smt1_sosial = $_POST['nh_remidi_nilai_siswa_transaksi10_smt1_sosial'];
$nah_kd_nilai_siswa_transaksi10_smt1_sosial = $_POST['nah_kd_nilai_siswa_transaksi10_smt1_sosial'];
$uas_nilai_siswa_transaksi10_smt1_sosial = $_POST['uas_nilai_siswa_transaksi10_smt1_sosial'];
$uas_remidi_nilai_siswa_transaksi10_smt1_sosial = $_POST['uas_remidi_nilai_siswa_transaksi10_smt1_sosial'];
$na_uas_nilai_siswa_transaksi10_smt1_sosial = $_POST['na_uas_nilai_siswa_transaksi10_smt1_sosial'];
$rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt1_sosial'];

//SMT2
//pengetahuan2
$tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi1_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi1_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi1_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi1_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi1_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi2_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi2_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi2_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi2_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi2_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi3_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi3_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi3_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi3_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi3_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi4_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi4_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi4_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi4_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi4_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi5_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi5_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi5_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi5_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi5_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi6_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi6_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi6_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi6_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi6_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi7_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi7_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi7_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi7_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi7_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi8_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi8_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi8_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi8_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi8_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi9_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi9_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi9_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi9_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi9_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan'];
$observasi_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['observasi_nilai_siswa_transaksi10_smt2_pengetahuan'];
$penugasan_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['penugasan_nilai_siswa_transaksi10_smt2_pengetahuan'];
$rerata_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['rerata_nilai_siswa_transaksi10_smt2_pengetahuan'];
$nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'];
$nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan'];
$uas_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['uas_nilai_siswa_transaksi10_smt2_pengetahuan'];
$uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan'];
$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['na_uas_nilai_siswa_transaksi10_smt2_pengetahuan'];
$rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan'];
//keterampilan2
$tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi1_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi1_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi1_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi1_smt2_keterampilan'];
$uas_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi1_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi1_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi2_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi2_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi2_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi2_smt2_keterampilan'];
$uas_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi2_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi2_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi3_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi3_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi3_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi3_smt2_keterampilan'];
$uas_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi3_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi3_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi4_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi4_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi4_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi4_smt2_keterampilan'];
$uas_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi4_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi4_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi5_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi5_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi5_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi5_smt2_keterampilan'];
$uas_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi5_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi5_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi6_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi6_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi6_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi6_smt2_keterampilan'];
$uas_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi6_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi6_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi7_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi7_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi7_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi7_smt2_keterampilan'];
$uas_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi7_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi7_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi8_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi8_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi8_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi8_smt2_keterampilan'];
$uas_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi8_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi8_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi9_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi9_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi9_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi9_smt2_keterampilan'];
$uas_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi9_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi9_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan'];
$observasi_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['observasi_nilai_siswa_transaksi10_smt2_keterampilan'];
$penugasan_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['penugasan_nilai_siswa_transaksi10_smt2_keterampilan'];
$rerata_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['rerata_nilai_siswa_transaksi10_smt2_keterampilan'];
$nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan'];
$nah_kd_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['nah_kd_nilai_siswa_transaksi10_smt2_keterampilan'];
$uas_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['uas_nilai_siswa_transaksi10_smt2_keterampilan'];
$uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan'];
$na_uas_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['na_uas_nilai_siswa_transaksi10_smt2_keterampilan'];
$rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan'];
//spiritual2
$tes_tulis_nilai_siswa_transaksi1_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi1_smt2_spiritual'];
$observasi_nilai_siswa_transaksi1_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi1_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi1_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi1_smt2_spiritual'];
$rerata_nilai_siswa_transaksi1_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi1_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi1_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi1_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi1_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi1_smt2_spiritual'];
$uas_nilai_siswa_transaksi1_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi1_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi1_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi1_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi1_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi1_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi2_smt2_spiritual'];
$observasi_nilai_siswa_transaksi2_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi2_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi2_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi2_smt2_spiritual'];
$rerata_nilai_siswa_transaksi2_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi2_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi2_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi2_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi2_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi2_smt2_spiritual'];
$uas_nilai_siswa_transaksi2_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi2_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi2_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi2_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi2_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi2_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi3_smt2_spiritual'];
$observasi_nilai_siswa_transaksi3_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi3_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi3_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi3_smt2_spiritual'];
$rerata_nilai_siswa_transaksi3_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi3_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi3_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi3_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi3_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi3_smt2_spiritual'];
$uas_nilai_siswa_transaksi3_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi3_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi3_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi3_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi3_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi3_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi4_smt2_spiritual'];
$observasi_nilai_siswa_transaksi4_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi4_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi4_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi4_smt2_spiritual'];
$rerata_nilai_siswa_transaksi4_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi4_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi4_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi4_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi4_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi4_smt2_spiritual'];
$uas_nilai_siswa_transaksi4_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi4_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi4_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi4_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi4_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi4_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi5_smt2_spiritual'];
$observasi_nilai_siswa_transaksi5_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi5_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi5_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi5_smt2_spiritual'];
$rerata_nilai_siswa_transaksi5_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi5_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi5_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi5_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi5_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi5_smt2_spiritual'];
$uas_nilai_siswa_transaksi5_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi5_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi5_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi5_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi5_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi5_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi6_smt2_spiritual'];
$observasi_nilai_siswa_transaksi6_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi6_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi6_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi6_smt2_spiritual'];
$rerata_nilai_siswa_transaksi6_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi6_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi6_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi6_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi6_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi6_smt2_spiritual'];
$uas_nilai_siswa_transaksi6_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi6_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi6_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi6_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi6_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi6_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi7_smt2_spiritual'];
$observasi_nilai_siswa_transaksi7_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi7_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi7_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi7_smt2_spiritual'];
$rerata_nilai_siswa_transaksi7_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi7_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi7_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi7_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi7_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi7_smt2_spiritual'];
$uas_nilai_siswa_transaksi7_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi7_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi7_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi7_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi7_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi7_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi8_smt2_spiritual'];
$observasi_nilai_siswa_transaksi8_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi8_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi8_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi8_smt2_spiritual'];
$rerata_nilai_siswa_transaksi8_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi8_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi8_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi8_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi8_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi8_smt2_spiritual'];
$uas_nilai_siswa_transaksi8_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi8_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi8_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi8_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi8_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi8_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi9_smt2_spiritual'];
$observasi_nilai_siswa_transaksi9_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi9_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi9_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi9_smt2_spiritual'];
$rerata_nilai_siswa_transaksi9_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi9_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi9_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi9_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi9_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi9_smt2_spiritual'];
$uas_nilai_siswa_transaksi9_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi9_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi9_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi9_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi9_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi9_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_spiritual = $_POST['tes_tulis_nilai_siswa_transaksi10_smt2_spiritual'];
$observasi_nilai_siswa_transaksi10_smt2_spiritual = $_POST['observasi_nilai_siswa_transaksi10_smt2_spiritual'];
$penugasan_nilai_siswa_transaksi10_smt2_spiritual = $_POST['penugasan_nilai_siswa_transaksi10_smt2_spiritual'];
$rerata_nilai_siswa_transaksi10_smt2_spiritual = $_POST['rerata_nilai_siswa_transaksi10_smt2_spiritual'];
$nh_remidi_nilai_siswa_transaksi10_smt2_spiritual = $_POST['nh_remidi_nilai_siswa_transaksi10_smt2_spiritual'];
$nah_kd_nilai_siswa_transaksi10_smt2_spiritual = $_POST['nah_kd_nilai_siswa_transaksi10_smt2_spiritual'];
$uas_nilai_siswa_transaksi10_smt2_spiritual = $_POST['uas_nilai_siswa_transaksi10_smt2_spiritual'];
$uas_remidi_nilai_siswa_transaksi10_smt2_spiritual = $_POST['uas_remidi_nilai_siswa_transaksi10_smt2_spiritual'];
$na_uas_nilai_siswa_transaksi10_smt2_spiritual = $_POST['na_uas_nilai_siswa_transaksi10_smt2_spiritual'];
$rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual'];
//sosial2
$tes_tulis_nilai_siswa_transaksi1_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi1_smt2_sosial'];
$observasi_nilai_siswa_transaksi1_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi1_smt2_sosial'];
$penugasan_nilai_siswa_transaksi1_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi1_smt2_sosial'];
$rerata_nilai_siswa_transaksi1_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi1_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi1_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi1_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi1_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi1_smt2_sosial'];
$uas_nilai_siswa_transaksi1_smt2_sosial = $_POST['uas_nilai_siswa_transaksi1_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi1_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi1_smt2_sosial'];
$na_uas_nilai_siswa_transaksi1_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi1_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi1_smt2_sosial'];
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi2_smt2_sosial'];
$observasi_nilai_siswa_transaksi2_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi2_smt2_sosial'];
$penugasan_nilai_siswa_transaksi2_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi2_smt2_sosial'];
$rerata_nilai_siswa_transaksi2_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi2_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi2_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi2_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi2_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi2_smt2_sosial'];
$uas_nilai_siswa_transaksi2_smt2_sosial = $_POST['uas_nilai_siswa_transaksi2_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi2_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi2_smt2_sosial'];
$na_uas_nilai_siswa_transaksi2_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi2_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi2_smt2_sosial'];
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi3_smt2_sosial'];
$observasi_nilai_siswa_transaksi3_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi3_smt2_sosial'];
$penugasan_nilai_siswa_transaksi3_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi3_smt2_sosial'];
$rerata_nilai_siswa_transaksi3_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi3_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi3_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi3_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi3_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi3_smt2_sosial'];
$uas_nilai_siswa_transaksi3_smt2_sosial = $_POST['uas_nilai_siswa_transaksi3_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi3_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi3_smt2_sosial'];
$na_uas_nilai_siswa_transaksi3_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi3_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi3_smt2_sosial'];
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi4_smt2_sosial'];
$observasi_nilai_siswa_transaksi4_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi4_smt2_sosial'];
$penugasan_nilai_siswa_transaksi4_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi4_smt2_sosial'];
$rerata_nilai_siswa_transaksi4_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi4_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi4_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi4_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi4_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi4_smt2_sosial'];
$uas_nilai_siswa_transaksi4_smt2_sosial = $_POST['uas_nilai_siswa_transaksi4_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi4_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi4_smt2_sosial'];
$na_uas_nilai_siswa_transaksi4_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi4_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi4_smt2_sosial'];
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi5_smt2_sosial'];
$observasi_nilai_siswa_transaksi5_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi5_smt2_sosial'];
$penugasan_nilai_siswa_transaksi5_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi5_smt2_sosial'];
$rerata_nilai_siswa_transaksi5_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi5_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi5_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi5_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi5_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi5_smt2_sosial'];
$uas_nilai_siswa_transaksi5_smt2_sosial = $_POST['uas_nilai_siswa_transaksi5_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi5_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi5_smt2_sosial'];
$na_uas_nilai_siswa_transaksi5_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi5_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi5_smt2_sosial'];
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi6_smt2_sosial'];
$observasi_nilai_siswa_transaksi6_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi6_smt2_sosial'];
$penugasan_nilai_siswa_transaksi6_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi6_smt2_sosial'];
$rerata_nilai_siswa_transaksi6_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi6_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi6_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi6_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi6_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi6_smt2_sosial'];
$uas_nilai_siswa_transaksi6_smt2_sosial = $_POST['uas_nilai_siswa_transaksi6_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi6_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi6_smt2_sosial'];
$na_uas_nilai_siswa_transaksi6_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi6_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi6_smt2_sosial'];
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi7_smt2_sosial'];
$observasi_nilai_siswa_transaksi7_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi7_smt2_sosial'];
$penugasan_nilai_siswa_transaksi7_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi7_smt2_sosial'];
$rerata_nilai_siswa_transaksi7_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi7_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi7_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi7_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi7_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi7_smt2_sosial'];
$uas_nilai_siswa_transaksi7_smt2_sosial = $_POST['uas_nilai_siswa_transaksi7_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi7_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi7_smt2_sosial'];
$na_uas_nilai_siswa_transaksi7_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi7_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi7_smt2_sosial'];
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi8_smt2_sosial'];
$observasi_nilai_siswa_transaksi8_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi8_smt2_sosial'];
$penugasan_nilai_siswa_transaksi8_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi8_smt2_sosial'];
$rerata_nilai_siswa_transaksi8_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi8_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi8_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi8_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi8_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi8_smt2_sosial'];
$uas_nilai_siswa_transaksi8_smt2_sosial = $_POST['uas_nilai_siswa_transaksi8_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi8_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi8_smt2_sosial'];
$na_uas_nilai_siswa_transaksi8_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi8_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi8_smt2_sosial'];
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi9_smt2_sosial'];
$observasi_nilai_siswa_transaksi9_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi9_smt2_sosial'];
$penugasan_nilai_siswa_transaksi9_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi9_smt2_sosial'];
$rerata_nilai_siswa_transaksi9_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi9_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi9_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi9_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi9_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi9_smt2_sosial'];
$uas_nilai_siswa_transaksi9_smt2_sosial = $_POST['uas_nilai_siswa_transaksi9_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi9_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi9_smt2_sosial'];
$na_uas_nilai_siswa_transaksi9_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi9_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi9_smt2_sosial'];
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_sosial = $_POST['tes_tulis_nilai_siswa_transaksi10_smt2_sosial'];
$observasi_nilai_siswa_transaksi10_smt2_sosial = $_POST['observasi_nilai_siswa_transaksi10_smt2_sosial'];
$penugasan_nilai_siswa_transaksi10_smt2_sosial = $_POST['penugasan_nilai_siswa_transaksi10_smt2_sosial'];
$rerata_nilai_siswa_transaksi10_smt2_sosial = $_POST['rerata_nilai_siswa_transaksi10_smt2_sosial'];
$nh_remidi_nilai_siswa_transaksi10_smt2_sosial = $_POST['nh_remidi_nilai_siswa_transaksi10_smt2_sosial'];
$nah_kd_nilai_siswa_transaksi10_smt2_sosial = $_POST['nah_kd_nilai_siswa_transaksi10_smt2_sosial'];
$uas_nilai_siswa_transaksi10_smt2_sosial = $_POST['uas_nilai_siswa_transaksi10_smt2_sosial'];
$uas_remidi_nilai_siswa_transaksi10_smt2_sosial = $_POST['uas_remidi_nilai_siswa_transaksi10_smt2_sosial'];
$na_uas_nilai_siswa_transaksi10_smt2_sosial = $_POST['na_uas_nilai_siswa_transaksi10_smt2_sosial'];
$rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = $_POST['rerata_akhir_nilai_siswa_transaksi10_smt2_sosial'];


//JSON
//SMT1
//pengetahuan1
$tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi1_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi2_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi3_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi4_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi5_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi6_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi7_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi8_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi9_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$observasi_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($observasi_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($observasi_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$penugasan_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$rerata_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($rerata_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($rerata_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$uas_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($uas_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($uas_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi10_smt1_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan, true);
//keterampilan1
$tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi1_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi1_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi1_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi1_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi1_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi1_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi2_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi2_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi2_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi2_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi2_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi2_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi3_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi3_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi3_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi3_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi3_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi3_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi4_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi4_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi4_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi4_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi4_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi4_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi5_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi5_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi5_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi5_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi5_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi5_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi6_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi6_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi6_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi6_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi6_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi6_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi7_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi7_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi7_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi7_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi7_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi7_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi8_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi8_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi8_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi8_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi8_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi8_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi9_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi9_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi9_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi9_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi9_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi9_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan, true);
$observasi_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($observasi_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($observasi_nilai_siswa_transaksi10_smt1_keterampilan, true);
$penugasan_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($penugasan_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($penugasan_nilai_siswa_transaksi10_smt1_keterampilan, true);
$rerata_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($rerata_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($rerata_nilai_siswa_transaksi10_smt1_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan, true);
$nah_kd_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi10_smt1_keterampilan, true);
$uas_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($uas_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($uas_nilai_siswa_transaksi10_smt1_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan, true);
$na_uas_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($na_uas_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($na_uas_nilai_siswa_transaksi10_smt1_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan, true);
//spiritual1
$tes_tulis_nilai_siswa_transaksi1_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi1_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi1_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi1_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi1_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi1_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi1_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi1_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi1_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi1_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi1_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi1_smt1_spiritual, true);
$uas_nilai_siswa_transaksi1_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi1_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi1_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi1_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi1_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi1_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi2_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi2_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi2_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi2_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi2_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi2_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi2_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi2_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi2_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi2_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi2_smt1_spiritual, true);
$uas_nilai_siswa_transaksi2_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi2_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi2_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi2_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi2_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi2_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi3_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi3_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi3_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi3_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi3_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi3_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi3_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi3_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi3_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi3_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi3_smt1_spiritual, true);
$uas_nilai_siswa_transaksi3_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi3_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi3_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi3_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi3_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi3_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi4_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi4_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi4_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi4_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi4_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi4_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi4_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi4_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi4_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi4_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi4_smt1_spiritual, true);
$uas_nilai_siswa_transaksi4_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi4_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi4_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi4_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi4_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi4_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi5_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi5_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi5_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi5_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi5_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi5_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi5_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi5_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi5_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi5_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi5_smt1_spiritual, true);
$uas_nilai_siswa_transaksi5_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi5_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi5_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi5_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi5_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi5_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi6_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi6_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi6_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi6_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi6_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi6_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi6_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi6_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi6_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi6_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi6_smt1_spiritual, true);
$uas_nilai_siswa_transaksi6_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi6_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi6_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi6_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi6_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi6_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi7_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi7_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi7_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi7_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi7_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi7_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi7_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi7_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi7_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi7_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi7_smt1_spiritual, true);
$uas_nilai_siswa_transaksi7_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi7_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi7_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi7_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi7_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi7_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi8_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi8_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi8_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi8_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi8_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi8_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi8_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi8_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi8_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi8_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi8_smt1_spiritual, true);
$uas_nilai_siswa_transaksi8_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi8_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi8_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi8_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi8_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi8_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi9_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi9_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi9_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi9_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi9_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi9_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi9_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi9_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi9_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi9_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi9_smt1_spiritual, true);
$uas_nilai_siswa_transaksi9_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi9_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi9_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi9_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi9_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi9_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt1_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi10_smt1_spiritual, true);
$observasi_nilai_siswa_transaksi10_smt1_spiritual = json_encode($observasi_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt1_spiritual = json_decode($observasi_nilai_siswa_transaksi10_smt1_spiritual, true);
$penugasan_nilai_siswa_transaksi10_smt1_spiritual = json_encode($penugasan_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt1_spiritual = json_decode($penugasan_nilai_siswa_transaksi10_smt1_spiritual, true);
$rerata_nilai_siswa_transaksi10_smt1_spiritual = json_encode($rerata_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt1_spiritual = json_decode($rerata_nilai_siswa_transaksi10_smt1_spiritual, true);
$nh_remidi_nilai_siswa_transaksi10_smt1_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt1_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi10_smt1_spiritual, true);
$nah_kd_nilai_siswa_transaksi10_smt1_spiritual = json_encode($nah_kd_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt1_spiritual = json_decode($nah_kd_nilai_siswa_transaksi10_smt1_spiritual, true);
$uas_nilai_siswa_transaksi10_smt1_spiritual = json_encode($uas_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt1_spiritual = json_decode($uas_nilai_siswa_transaksi10_smt1_spiritual, true);
$uas_remidi_nilai_siswa_transaksi10_smt1_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt1_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi10_smt1_spiritual, true);
$na_uas_nilai_siswa_transaksi10_smt1_spiritual = json_encode($na_uas_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt1_spiritual = json_decode($na_uas_nilai_siswa_transaksi10_smt1_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual, true);
//sosial1
$tes_tulis_nilai_siswa_transaksi1_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi1_smt1_sosial, true);
$observasi_nilai_siswa_transaksi1_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi1_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi1_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi1_smt1_sosial, true);
$rerata_nilai_siswa_transaksi1_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi1_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi1_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi1_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi1_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi1_smt1_sosial, true);
$uas_nilai_siswa_transaksi1_smt1_sosial = json_encode($uas_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt1_sosial = json_decode($uas_nilai_siswa_transaksi1_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi1_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi1_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi1_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi1_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt1_sosial, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi2_smt1_sosial, true);
$observasi_nilai_siswa_transaksi2_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi2_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi2_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi2_smt1_sosial, true);
$rerata_nilai_siswa_transaksi2_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi2_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi2_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi2_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi2_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi2_smt1_sosial, true);
$uas_nilai_siswa_transaksi2_smt1_sosial = json_encode($uas_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt1_sosial = json_decode($uas_nilai_siswa_transaksi2_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi2_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi2_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi2_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi2_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt1_sosial, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi3_smt1_sosial, true);
$observasi_nilai_siswa_transaksi3_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi3_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi3_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi3_smt1_sosial, true);
$rerata_nilai_siswa_transaksi3_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi3_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi3_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi3_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi3_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi3_smt1_sosial, true);
$uas_nilai_siswa_transaksi3_smt1_sosial = json_encode($uas_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt1_sosial = json_decode($uas_nilai_siswa_transaksi3_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi3_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi3_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi3_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi3_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt1_sosial, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi4_smt1_sosial, true);
$observasi_nilai_siswa_transaksi4_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi4_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi4_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi4_smt1_sosial, true);
$rerata_nilai_siswa_transaksi4_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi4_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi4_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi4_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi4_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi4_smt1_sosial, true);
$uas_nilai_siswa_transaksi4_smt1_sosial = json_encode($uas_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt1_sosial = json_decode($uas_nilai_siswa_transaksi4_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi4_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi4_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi4_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi4_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt1_sosial, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi5_smt1_sosial, true);
$observasi_nilai_siswa_transaksi5_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi5_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi5_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi5_smt1_sosial, true);
$rerata_nilai_siswa_transaksi5_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi5_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi5_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi5_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi5_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi5_smt1_sosial, true);
$uas_nilai_siswa_transaksi5_smt1_sosial = json_encode($uas_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt1_sosial = json_decode($uas_nilai_siswa_transaksi5_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi5_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi5_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi5_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi5_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt1_sosial, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi6_smt1_sosial, true);
$observasi_nilai_siswa_transaksi6_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi6_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi6_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi6_smt1_sosial, true);
$rerata_nilai_siswa_transaksi6_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi6_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi6_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi6_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi6_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi6_smt1_sosial, true);
$uas_nilai_siswa_transaksi6_smt1_sosial = json_encode($uas_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt1_sosial = json_decode($uas_nilai_siswa_transaksi6_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi6_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi6_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi6_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi6_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt1_sosial, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi7_smt1_sosial, true);
$observasi_nilai_siswa_transaksi7_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi7_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi7_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi7_smt1_sosial, true);
$rerata_nilai_siswa_transaksi7_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi7_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi7_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi7_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi7_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi7_smt1_sosial, true);
$uas_nilai_siswa_transaksi7_smt1_sosial = json_encode($uas_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt1_sosial = json_decode($uas_nilai_siswa_transaksi7_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi7_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi7_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi7_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi7_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt1_sosial, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi8_smt1_sosial, true);
$observasi_nilai_siswa_transaksi8_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi8_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi8_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi8_smt1_sosial, true);
$rerata_nilai_siswa_transaksi8_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi8_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi8_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi8_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi8_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi8_smt1_sosial, true);
$uas_nilai_siswa_transaksi8_smt1_sosial = json_encode($uas_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt1_sosial = json_decode($uas_nilai_siswa_transaksi8_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi8_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi8_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi8_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi8_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt1_sosial, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi9_smt1_sosial, true);
$observasi_nilai_siswa_transaksi9_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi9_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi9_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi9_smt1_sosial, true);
$rerata_nilai_siswa_transaksi9_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi9_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi9_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi9_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi9_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi9_smt1_sosial, true);
$uas_nilai_siswa_transaksi9_smt1_sosial = json_encode($uas_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt1_sosial = json_decode($uas_nilai_siswa_transaksi9_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi9_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi9_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi9_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi9_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt1_sosial, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt1_sosial = json_encode($tes_tulis_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt1_sosial = json_decode($tes_tulis_nilai_siswa_transaksi10_smt1_sosial, true);
$observasi_nilai_siswa_transaksi10_smt1_sosial = json_encode($observasi_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt1_sosial = json_decode($observasi_nilai_siswa_transaksi10_smt1_sosial, true);
$penugasan_nilai_siswa_transaksi10_smt1_sosial = json_encode($penugasan_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt1_sosial = json_decode($penugasan_nilai_siswa_transaksi10_smt1_sosial, true);
$rerata_nilai_siswa_transaksi10_smt1_sosial = json_encode($rerata_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt1_sosial = json_decode($rerata_nilai_siswa_transaksi10_smt1_sosial, true);
$nh_remidi_nilai_siswa_transaksi10_smt1_sosial = json_encode($nh_remidi_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt1_sosial = json_decode($nh_remidi_nilai_siswa_transaksi10_smt1_sosial, true);
$nah_kd_nilai_siswa_transaksi10_smt1_sosial = json_encode($nah_kd_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt1_sosial = json_decode($nah_kd_nilai_siswa_transaksi10_smt1_sosial, true);
$uas_nilai_siswa_transaksi10_smt1_sosial = json_encode($uas_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt1_sosial = json_decode($uas_nilai_siswa_transaksi10_smt1_sosial, true);
$uas_remidi_nilai_siswa_transaksi10_smt1_sosial = json_encode($uas_remidi_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt1_sosial = json_decode($uas_remidi_nilai_siswa_transaksi10_smt1_sosial, true);
$na_uas_nilai_siswa_transaksi10_smt1_sosial = json_encode($na_uas_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt1_sosial = json_decode($na_uas_nilai_siswa_transaksi10_smt1_sosial, true);
$rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt1_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt1_sosial, true);


//JSON
//SMT2
//pengetahuan2
$tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi1_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi2_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi3_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi4_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi5_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi6_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi7_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi8_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi9_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$observasi_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($observasi_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($observasi_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$penugasan_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($penugasan_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($penugasan_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$rerata_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($rerata_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($rerata_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$uas_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($uas_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($uas_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($na_uas_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($na_uas_nilai_siswa_transaksi10_smt2_pengetahuan, true);
$rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan, true);

//keterampilan2
$tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi1_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi1_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi1_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi1_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi1_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi1_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi2_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi2_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi2_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi2_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi2_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi2_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi3_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi3_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi3_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi3_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi3_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi3_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi4_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi4_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi4_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi4_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi4_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi4_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi5_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi5_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi5_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi5_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi5_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi5_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi6_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi6_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi6_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi6_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi6_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi6_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi7_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi7_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi7_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi7_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi7_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi7_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi8_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi8_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi8_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi8_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi8_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi8_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi9_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi9_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi9_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi9_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi9_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi9_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan, true);
$observasi_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($observasi_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($observasi_nilai_siswa_transaksi10_smt2_keterampilan, true);
$penugasan_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($penugasan_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($penugasan_nilai_siswa_transaksi10_smt2_keterampilan, true);
$rerata_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($rerata_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($rerata_nilai_siswa_transaksi10_smt2_keterampilan, true);
$nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan, true);
$nah_kd_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($nah_kd_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($nah_kd_nilai_siswa_transaksi10_smt2_keterampilan, true);
$uas_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($uas_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($uas_nilai_siswa_transaksi10_smt2_keterampilan, true);
$uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan, true);
$na_uas_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($na_uas_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($na_uas_nilai_siswa_transaksi10_smt2_keterampilan, true);
$rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan, true);

//spiritual2
$tes_tulis_nilai_siswa_transaksi1_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi1_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi1_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi1_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi1_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi1_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi1_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi1_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi1_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi1_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi1_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi1_smt2_spiritual, true);
$uas_nilai_siswa_transaksi1_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi1_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi1_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi1_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi1_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi1_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi2_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi2_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi2_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi2_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi2_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi2_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi2_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi2_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi2_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi2_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi2_smt2_spiritual, true);
$uas_nilai_siswa_transaksi2_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi2_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi2_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi2_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi2_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi2_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi3_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi3_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi3_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi3_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi3_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi3_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi3_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi3_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi3_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi3_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi3_smt2_spiritual, true);
$uas_nilai_siswa_transaksi3_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi3_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi3_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi3_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi3_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi3_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi4_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi4_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi4_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi4_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi4_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi4_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi4_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi4_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi4_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi4_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi4_smt2_spiritual, true);
$uas_nilai_siswa_transaksi4_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi4_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi4_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi4_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi4_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi4_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi5_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi5_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi5_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi5_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi5_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi5_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi5_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi5_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi5_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi5_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi5_smt2_spiritual, true);
$uas_nilai_siswa_transaksi5_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi5_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi5_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi5_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi5_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi5_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi6_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi6_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi6_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi6_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi6_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi6_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi6_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi6_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi6_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi6_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi6_smt2_spiritual, true);
$uas_nilai_siswa_transaksi6_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi6_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi6_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi6_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi6_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi6_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi7_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi7_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi7_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi7_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi7_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi7_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi7_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi7_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi7_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi7_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi7_smt2_spiritual, true);
$uas_nilai_siswa_transaksi7_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi7_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi7_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi7_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi7_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi7_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi8_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi8_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi8_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi8_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi8_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi8_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi8_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi8_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi8_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi8_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi8_smt2_spiritual, true);
$uas_nilai_siswa_transaksi8_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi8_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi8_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi8_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi8_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi8_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi9_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi9_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi9_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi9_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi9_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi9_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi9_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi9_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi9_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi9_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi9_smt2_spiritual, true);
$uas_nilai_siswa_transaksi9_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi9_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi9_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi9_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi9_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi9_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_spiritual = json_encode($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt2_spiritual = json_decode($tes_tulis_nilai_siswa_transaksi10_smt2_spiritual, true);
$observasi_nilai_siswa_transaksi10_smt2_spiritual = json_encode($observasi_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt2_spiritual = json_decode($observasi_nilai_siswa_transaksi10_smt2_spiritual, true);
$penugasan_nilai_siswa_transaksi10_smt2_spiritual = json_encode($penugasan_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt2_spiritual = json_decode($penugasan_nilai_siswa_transaksi10_smt2_spiritual, true);
$rerata_nilai_siswa_transaksi10_smt2_spiritual = json_encode($rerata_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt2_spiritual = json_decode($rerata_nilai_siswa_transaksi10_smt2_spiritual, true);
$nh_remidi_nilai_siswa_transaksi10_smt2_spiritual = json_encode($nh_remidi_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt2_spiritual = json_decode($nh_remidi_nilai_siswa_transaksi10_smt2_spiritual, true);
$nah_kd_nilai_siswa_transaksi10_smt2_spiritual = json_encode($nah_kd_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt2_spiritual = json_decode($nah_kd_nilai_siswa_transaksi10_smt2_spiritual, true);
$uas_nilai_siswa_transaksi10_smt2_spiritual = json_encode($uas_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt2_spiritual = json_decode($uas_nilai_siswa_transaksi10_smt2_spiritual, true);
$uas_remidi_nilai_siswa_transaksi10_smt2_spiritual = json_encode($uas_remidi_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt2_spiritual = json_decode($uas_remidi_nilai_siswa_transaksi10_smt2_spiritual, true);
$na_uas_nilai_siswa_transaksi10_smt2_spiritual = json_encode($na_uas_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt2_spiritual = json_decode($na_uas_nilai_siswa_transaksi10_smt2_spiritual, true);
$rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual, true);

//sosial2
$tes_tulis_nilai_siswa_transaksi1_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi1_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi1_smt2_sosial, true);
$observasi_nilai_siswa_transaksi1_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi1_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi1_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi1_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi1_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi1_smt2_sosial, true);
$rerata_nilai_siswa_transaksi1_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi1_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi1_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi1_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi1_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi1_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi1_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi1_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi1_smt2_sosial, true);
$uas_nilai_siswa_transaksi1_smt2_sosial = json_encode($uas_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi1_smt2_sosial = json_decode($uas_nilai_siswa_transaksi1_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi1_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi1_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi1_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi1_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi1_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi1_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi1_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi1_smt2_sosial, true);
//2
$tes_tulis_nilai_siswa_transaksi2_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi2_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi2_smt2_sosial, true);
$observasi_nilai_siswa_transaksi2_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi2_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi2_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi2_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi2_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi2_smt2_sosial, true);
$rerata_nilai_siswa_transaksi2_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi2_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi2_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi2_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi2_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi2_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi2_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi2_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi2_smt2_sosial, true);
$uas_nilai_siswa_transaksi2_smt2_sosial = json_encode($uas_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi2_smt2_sosial = json_decode($uas_nilai_siswa_transaksi2_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi2_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi2_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi2_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi2_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi2_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi2_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi2_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi2_smt2_sosial, true);
//3
$tes_tulis_nilai_siswa_transaksi3_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi3_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi3_smt2_sosial, true);
$observasi_nilai_siswa_transaksi3_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi3_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi3_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi3_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi3_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi3_smt2_sosial, true);
$rerata_nilai_siswa_transaksi3_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi3_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi3_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi3_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi3_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi3_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi3_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi3_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi3_smt2_sosial, true);
$uas_nilai_siswa_transaksi3_smt2_sosial = json_encode($uas_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi3_smt2_sosial = json_decode($uas_nilai_siswa_transaksi3_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi3_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi3_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi3_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi3_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi3_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi3_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi3_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi3_smt2_sosial, true);
//4
$tes_tulis_nilai_siswa_transaksi4_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi4_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi4_smt2_sosial, true);
$observasi_nilai_siswa_transaksi4_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi4_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi4_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi4_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi4_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi4_smt2_sosial, true);
$rerata_nilai_siswa_transaksi4_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi4_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi4_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi4_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi4_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi4_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi4_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi4_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi4_smt2_sosial, true);
$uas_nilai_siswa_transaksi4_smt2_sosial = json_encode($uas_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi4_smt2_sosial = json_decode($uas_nilai_siswa_transaksi4_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi4_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi4_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi4_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi4_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi4_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi4_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi4_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi4_smt2_sosial, true);
//5
$tes_tulis_nilai_siswa_transaksi5_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi5_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi5_smt2_sosial, true);
$observasi_nilai_siswa_transaksi5_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi5_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi5_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi5_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi5_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi5_smt2_sosial, true);
$rerata_nilai_siswa_transaksi5_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi5_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi5_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi5_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi5_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi5_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi5_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi5_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi5_smt2_sosial, true);
$uas_nilai_siswa_transaksi5_smt2_sosial = json_encode($uas_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi5_smt2_sosial = json_decode($uas_nilai_siswa_transaksi5_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi5_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi5_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi5_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi5_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi5_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi5_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi5_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi5_smt2_sosial, true);
//6
$tes_tulis_nilai_siswa_transaksi6_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi6_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi6_smt2_sosial, true);
$observasi_nilai_siswa_transaksi6_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi6_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi6_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi6_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi6_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi6_smt2_sosial, true);
$rerata_nilai_siswa_transaksi6_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi6_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi6_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi6_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi6_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi6_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi6_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi6_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi6_smt2_sosial, true);
$uas_nilai_siswa_transaksi6_smt2_sosial = json_encode($uas_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi6_smt2_sosial = json_decode($uas_nilai_siswa_transaksi6_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi6_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi6_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi6_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi6_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi6_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi6_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi6_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi6_smt2_sosial, true);
//7
$tes_tulis_nilai_siswa_transaksi7_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi7_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi7_smt2_sosial, true);
$observasi_nilai_siswa_transaksi7_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi7_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi7_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi7_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi7_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi7_smt2_sosial, true);
$rerata_nilai_siswa_transaksi7_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi7_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi7_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi7_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi7_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi7_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi7_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi7_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi7_smt2_sosial, true);
$uas_nilai_siswa_transaksi7_smt2_sosial = json_encode($uas_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi7_smt2_sosial = json_decode($uas_nilai_siswa_transaksi7_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi7_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi7_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi7_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi7_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi7_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi7_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi7_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi7_smt2_sosial, true);
//8
$tes_tulis_nilai_siswa_transaksi8_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi8_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi8_smt2_sosial, true);
$observasi_nilai_siswa_transaksi8_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi8_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi8_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi8_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi8_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi8_smt2_sosial, true);
$rerata_nilai_siswa_transaksi8_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi8_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi8_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi8_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi8_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi8_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi8_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi8_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi8_smt2_sosial, true);
$uas_nilai_siswa_transaksi8_smt2_sosial = json_encode($uas_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi8_smt2_sosial = json_decode($uas_nilai_siswa_transaksi8_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi8_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi8_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi8_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi8_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi8_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi8_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi8_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi8_smt2_sosial, true);
//9
$tes_tulis_nilai_siswa_transaksi9_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi9_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi9_smt2_sosial, true);
$observasi_nilai_siswa_transaksi9_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi9_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi9_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi9_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi9_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi9_smt2_sosial, true);
$rerata_nilai_siswa_transaksi9_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi9_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi9_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi9_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi9_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi9_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi9_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi9_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi9_smt2_sosial, true);
$uas_nilai_siswa_transaksi9_smt2_sosial = json_encode($uas_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi9_smt2_sosial = json_decode($uas_nilai_siswa_transaksi9_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi9_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi9_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi9_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi9_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi9_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi9_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi9_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi9_smt2_sosial, true);
//10
$tes_tulis_nilai_siswa_transaksi10_smt2_sosial = json_encode($tes_tulis_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_tes_tulis_nilai_siswa_transaksi10_smt2_sosial = json_decode($tes_tulis_nilai_siswa_transaksi10_smt2_sosial, true);
$observasi_nilai_siswa_transaksi10_smt2_sosial = json_encode($observasi_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_observasi_nilai_siswa_transaksi10_smt2_sosial = json_decode($observasi_nilai_siswa_transaksi10_smt2_sosial, true);
$penugasan_nilai_siswa_transaksi10_smt2_sosial = json_encode($penugasan_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_penugasan_nilai_siswa_transaksi10_smt2_sosial = json_decode($penugasan_nilai_siswa_transaksi10_smt2_sosial, true);
$rerata_nilai_siswa_transaksi10_smt2_sosial = json_encode($rerata_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_nilai_siswa_transaksi10_smt2_sosial = json_decode($rerata_nilai_siswa_transaksi10_smt2_sosial, true);
$nh_remidi_nilai_siswa_transaksi10_smt2_sosial = json_encode($nh_remidi_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_nh_remidi_nilai_siswa_transaksi10_smt2_sosial = json_decode($nh_remidi_nilai_siswa_transaksi10_smt2_sosial, true);
$nah_kd_nilai_siswa_transaksi10_smt2_sosial = json_encode($nah_kd_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_nah_kd_nilai_siswa_transaksi10_smt2_sosial = json_decode($nah_kd_nilai_siswa_transaksi10_smt2_sosial, true);
$uas_nilai_siswa_transaksi10_smt2_sosial = json_encode($uas_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_nilai_siswa_transaksi10_smt2_sosial = json_decode($uas_nilai_siswa_transaksi10_smt2_sosial, true);
$uas_remidi_nilai_siswa_transaksi10_smt2_sosial = json_encode($uas_remidi_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_uas_remidi_nilai_siswa_transaksi10_smt2_sosial = json_decode($uas_remidi_nilai_siswa_transaksi10_smt2_sosial, true);
$na_uas_nilai_siswa_transaksi10_smt2_sosial = json_encode($na_uas_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_na_uas_nilai_siswa_transaksi10_smt2_sosial = json_decode($na_uas_nilai_siswa_transaksi10_smt2_sosial, true);
$rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = json_encode($rerata_akhir_nilai_siswa_transaksi10_smt2_sosial, JSON_PRETTY_PRINT);
$json_rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = json_decode($rerata_akhir_nilai_siswa_transaksi10_smt2_sosial, true);

// ENCODE DAN DECODE NILAI AKHIR
//PENGETAHUAN SMT 1
$nilai_akhir_siswa_transaksi_smt1_pengetahuan = $_POST['nilai_akhir_siswa_transaksi_smt1_pengetahuan'];
$nilai_akhir_siswa_transaksi_smt1_pengetahuan = json_encode($nilai_akhir_siswa_transaksi_smt1_pengetahuan, JSON_PRETTY_PRINT);
$json_nilai_akhir_siswa_transaksi_smt1_pengetahuan = json_decode($nilai_akhir_siswa_transaksi_smt1_pengetahuan, true);

$query_hitung_siswa_per_kelas = mysqli_query($connect, "SELECT count(nis_siswa) AS jumlah_siswa from data_siswa where id_kelas_daftar='$id_kelas_daftar'");
$rows = mysqli_fetch_array($query_hitung_siswa_per_kelas);
$jumlah_siswa = $rows['jumlah_siswa'];

$nis_siswa = Array();
$tampil_nisSiswa = mysqli_query($connect, "SELECT nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan from nilai_siswa_transaksi_smt1_pengetahuan where nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran' order by nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan asc");
while($tampil = mysqli_fetch_array($tampil_nisSiswa)){
  $nis_siswa[] = $tampil['nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan'];
}
$nis_siswa = json_encode($nis_siswa, JSON_PRETTY_PRINT);
$json_nis_siswa = json_decode($nis_siswa, JSON_PRETTY_PRINT);


//SMT1
//PENGETAHUAN
//KD1pengetahuanSMT1
for ($i=0; $i <$jumlah_siswa; $i++) {
  $tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $observasi_nilai_siswa_transaksi1_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $penugasan_nilai_siswa_transaksi1_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $rerata_nilai_siswa_transaksi1_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $uas_nilai_siswa_transaksi1_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $na_uas_nilai_siswa_transaksi1_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan[$i];
  $nis_siswa = $json_nis_siswa[$i];

  $update_nilaiSiswa  = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan', observasi_nilai_siswa_transaksi1_smt1_pengetahuan='$observasi_nilai_siswa_transaksi1_smt1_pengetahuan', penugasan_nilai_siswa_transaksi1_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi1_smt1_pengetahuan', rerata_nilai_siswa_transaksi1_smt1_pengetahuan='$rerata_nilai_siswa_transaksi1_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan', uas_nilai_siswa_transaksi1_smt1_pengetahuan='$uas_nilai_siswa_transaksi1_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan', na_uas_nilai_siswa_transaksi1_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi1_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
  if (mysqli_query($connect, $update_nilaiSiswa)) {
  }
  else {
    echo "Gagal update nilai";
    echo "</br>";
  }
}
// //KD2pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi2_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi2_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi2_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi2_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi2_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan', observasi_nilai_siswa_transaksi2_smt1_pengetahuan='$observasi_nilai_siswa_transaksi2_smt1_pengetahuan', penugasan_nilai_siswa_transaksi2_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi2_smt1_pengetahuan', rerata_nilai_siswa_transaksi2_smt1_pengetahuan='$rerata_nilai_siswa_transaksi2_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan', uas_nilai_siswa_transaksi2_smt1_pengetahuan='$uas_nilai_siswa_transaksi2_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan', na_uas_nilai_siswa_transaksi2_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi2_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi3_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi3_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi3_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi3_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi3_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan', observasi_nilai_siswa_transaksi3_smt1_pengetahuan='$observasi_nilai_siswa_transaksi3_smt1_pengetahuan', penugasan_nilai_siswa_transaksi3_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi3_smt1_pengetahuan', rerata_nilai_siswa_transaksi3_smt1_pengetahuan='$rerata_nilai_siswa_transaksi3_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan', uas_nilai_siswa_transaksi3_smt1_pengetahuan='$uas_nilai_siswa_transaksi3_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan', na_uas_nilai_siswa_transaksi3_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi3_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi4_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi4_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi4_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi4_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi4_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan', observasi_nilai_siswa_transaksi4_smt1_pengetahuan='$observasi_nilai_siswa_transaksi4_smt1_pengetahuan', penugasan_nilai_siswa_transaksi4_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi4_smt1_pengetahuan', rerata_nilai_siswa_transaksi4_smt1_pengetahuan='$rerata_nilai_siswa_transaksi4_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan', uas_nilai_siswa_transaksi4_smt1_pengetahuan='$uas_nilai_siswa_transaksi4_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan', na_uas_nilai_siswa_transaksi4_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi4_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi5_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi5_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi5_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi5_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi5_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan', observasi_nilai_siswa_transaksi5_smt1_pengetahuan='$observasi_nilai_siswa_transaksi5_smt1_pengetahuan', penugasan_nilai_siswa_transaksi5_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi5_smt1_pengetahuan', rerata_nilai_siswa_transaksi5_smt1_pengetahuan='$rerata_nilai_siswa_transaksi5_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan', uas_nilai_siswa_transaksi5_smt1_pengetahuan='$uas_nilai_siswa_transaksi5_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan', na_uas_nilai_siswa_transaksi5_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi5_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi6_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi6_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi6_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi6_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi6_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan', observasi_nilai_siswa_transaksi6_smt1_pengetahuan='$observasi_nilai_siswa_transaksi6_smt1_pengetahuan', penugasan_nilai_siswa_transaksi6_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi6_smt1_pengetahuan', rerata_nilai_siswa_transaksi6_smt1_pengetahuan='$rerata_nilai_siswa_transaksi6_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan', uas_nilai_siswa_transaksi6_smt1_pengetahuan='$uas_nilai_siswa_transaksi6_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan', na_uas_nilai_siswa_transaksi6_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi6_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi7_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi7_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi7_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi7_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi7_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set  tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan', observasi_nilai_siswa_transaksi7_smt1_pengetahuan='$observasi_nilai_siswa_transaksi7_smt1_pengetahuan', penugasan_nilai_siswa_transaksi7_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi7_smt1_pengetahuan', rerata_nilai_siswa_transaksi7_smt1_pengetahuan='$rerata_nilai_siswa_transaksi7_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan', uas_nilai_siswa_transaksi7_smt1_pengetahuan='$uas_nilai_siswa_transaksi7_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan', na_uas_nilai_siswa_transaksi7_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi7_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi8_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi8_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi8_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi8_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi8_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan', observasi_nilai_siswa_transaksi8_smt1_pengetahuan='$observasi_nilai_siswa_transaksi8_smt1_pengetahuan', penugasan_nilai_siswa_transaksi8_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi8_smt1_pengetahuan', rerata_nilai_siswa_transaksi8_smt1_pengetahuan='$rerata_nilai_siswa_transaksi8_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan', uas_nilai_siswa_transaksi8_smt1_pengetahuan='$uas_nilai_siswa_transaksi8_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan', na_uas_nilai_siswa_transaksi8_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi8_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi9_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi9_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi9_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi9_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi9_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan', observasi_nilai_siswa_transaksi9_smt1_pengetahuan='$observasi_nilai_siswa_transaksi9_smt1_pengetahuan', penugasan_nilai_siswa_transaksi9_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi9_smt1_pengetahuan', rerata_nilai_siswa_transaksi9_smt1_pengetahuan='$rerata_nilai_siswa_transaksi9_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan', uas_nilai_siswa_transaksi9_smt1_pengetahuan='$uas_nilai_siswa_transaksi9_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan', na_uas_nilai_siswa_transaksi9_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi9_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10pengetahuanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi10_smt1_pengetahuan    = $json_observasi_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi10_smt1_pengetahuan    = $json_penugasan_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi10_smt1_pengetahuan       = $json_rerata_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi10_smt1_pengetahuan          = $json_uas_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi10_smt1_pengetahuan       = $json_na_uas_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan', observasi_nilai_siswa_transaksi10_smt1_pengetahuan='$observasi_nilai_siswa_transaksi10_smt1_pengetahuan', penugasan_nilai_siswa_transaksi10_smt1_pengetahuan='$penugasan_nilai_siswa_transaksi10_smt1_pengetahuan', rerata_nilai_siswa_transaksi10_smt1_pengetahuan='$rerata_nilai_siswa_transaksi10_smt1_pengetahuan', nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan='$nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan', nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan='$nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan', uas_nilai_siswa_transaksi10_smt1_pengetahuan='$uas_nilai_siswa_transaksi10_smt1_pengetahuan', uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan='$uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan', na_uas_nilai_siswa_transaksi10_smt1_pengetahuan='$na_uas_nilai_siswa_transaksi10_smt1_pengetahuan', rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan='$rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
for ($i=0; $i <$jumlah_siswa; $i++) {
  $tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan    = $json_nilai_akhir_siswa_transaksi_smt1_pengetahuan[$i];
  $nis_siswa = $json_nis_siswa[$i];
  $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_pengetahuan set nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan='$tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='$id_mata_pelajaran'";
  if (mysqli_query($connect, $update_nilaiSiswa)) {
  }
  else {
    echo "Gagal update nilai";
    echo "</br>";
  }
}
//
// //KD1keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi1_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi1_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi1_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi1_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi1_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan', observasi_nilai_siswa_transaksi1_smt1_keterampilan='$observasi_nilai_siswa_transaksi1_smt1_keterampilan', penugasan_nilai_siswa_transaksi1_smt1_keterampilan='$penugasan_nilai_siswa_transaksi1_smt1_keterampilan', rerata_nilai_siswa_transaksi1_smt1_keterampilan='$rerata_nilai_siswa_transaksi1_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan', nah_kd_nilai_siswa_transaksi1_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi1_smt1_keterampilan', uas_nilai_siswa_transaksi1_smt1_keterampilan='$uas_nilai_siswa_transaksi1_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan', na_uas_nilai_siswa_transaksi1_smt1_keterampilan='$na_uas_nilai_siswa_transaksi1_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi2_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi2_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi2_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi2_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi2_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan', observasi_nilai_siswa_transaksi2_smt1_keterampilan='$observasi_nilai_siswa_transaksi2_smt1_keterampilan', penugasan_nilai_siswa_transaksi2_smt1_keterampilan='$penugasan_nilai_siswa_transaksi2_smt1_keterampilan', rerata_nilai_siswa_transaksi2_smt1_keterampilan='$rerata_nilai_siswa_transaksi2_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan', nah_kd_nilai_siswa_transaksi2_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi2_smt1_keterampilan', uas_nilai_siswa_transaksi2_smt1_keterampilan='$uas_nilai_siswa_transaksi2_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan', na_uas_nilai_siswa_transaksi2_smt1_keterampilan='$na_uas_nilai_siswa_transaksi2_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi3_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi3_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi3_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi3_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi3_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan', observasi_nilai_siswa_transaksi3_smt1_keterampilan='$observasi_nilai_siswa_transaksi3_smt1_keterampilan', penugasan_nilai_siswa_transaksi3_smt1_keterampilan='$penugasan_nilai_siswa_transaksi3_smt1_keterampilan', rerata_nilai_siswa_transaksi3_smt1_keterampilan='$rerata_nilai_siswa_transaksi3_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan', nah_kd_nilai_siswa_transaksi3_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi3_smt1_keterampilan', uas_nilai_siswa_transaksi3_smt1_keterampilan='$uas_nilai_siswa_transaksi3_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan', na_uas_nilai_siswa_transaksi3_smt1_keterampilan='$na_uas_nilai_siswa_transaksi3_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi4_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi4_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi4_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi4_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi4_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan', observasi_nilai_siswa_transaksi4_smt1_keterampilan='$observasi_nilai_siswa_transaksi4_smt1_keterampilan', penugasan_nilai_siswa_transaksi4_smt1_keterampilan='$penugasan_nilai_siswa_transaksi4_smt1_keterampilan', rerata_nilai_siswa_transaksi4_smt1_keterampilan='$rerata_nilai_siswa_transaksi4_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan', nah_kd_nilai_siswa_transaksi4_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi4_smt1_keterampilan', uas_nilai_siswa_transaksi4_smt1_keterampilan='$uas_nilai_siswa_transaksi4_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan', na_uas_nilai_siswa_transaksi4_smt1_keterampilan='$na_uas_nilai_siswa_transaksi4_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi5_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi5_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi5_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi5_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi5_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan', observasi_nilai_siswa_transaksi5_smt1_keterampilan='$observasi_nilai_siswa_transaksi5_smt1_keterampilan', penugasan_nilai_siswa_transaksi5_smt1_keterampilan='$penugasan_nilai_siswa_transaksi5_smt1_keterampilan', rerata_nilai_siswa_transaksi5_smt1_keterampilan='$rerata_nilai_siswa_transaksi5_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan', nah_kd_nilai_siswa_transaksi5_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi5_smt1_keterampilan', uas_nilai_siswa_transaksi5_smt1_keterampilan='$uas_nilai_siswa_transaksi5_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan', na_uas_nilai_siswa_transaksi5_smt1_keterampilan='$na_uas_nilai_siswa_transaksi5_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi6_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi6_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi6_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi6_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi6_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan', observasi_nilai_siswa_transaksi6_smt1_keterampilan='$observasi_nilai_siswa_transaksi6_smt1_keterampilan', penugasan_nilai_siswa_transaksi6_smt1_keterampilan='$penugasan_nilai_siswa_transaksi6_smt1_keterampilan', rerata_nilai_siswa_transaksi6_smt1_keterampilan='$rerata_nilai_siswa_transaksi6_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan', nah_kd_nilai_siswa_transaksi6_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi6_smt1_keterampilan', uas_nilai_siswa_transaksi6_smt1_keterampilan='$uas_nilai_siswa_transaksi6_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan', na_uas_nilai_siswa_transaksi6_smt1_keterampilan='$na_uas_nilai_siswa_transaksi6_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi7_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi7_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi7_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi7_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi7_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set  tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan', observasi_nilai_siswa_transaksi7_smt1_keterampilan='$observasi_nilai_siswa_transaksi7_smt1_keterampilan', penugasan_nilai_siswa_transaksi7_smt1_keterampilan='$penugasan_nilai_siswa_transaksi7_smt1_keterampilan', rerata_nilai_siswa_transaksi7_smt1_keterampilan='$rerata_nilai_siswa_transaksi7_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan', nah_kd_nilai_siswa_transaksi7_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi7_smt1_keterampilan', uas_nilai_siswa_transaksi7_smt1_keterampilan='$uas_nilai_siswa_transaksi7_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan', na_uas_nilai_siswa_transaksi7_smt1_keterampilan='$na_uas_nilai_siswa_transaksi7_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi8_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi8_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi8_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi8_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi8_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan', observasi_nilai_siswa_transaksi8_smt1_keterampilan='$observasi_nilai_siswa_transaksi8_smt1_keterampilan', penugasan_nilai_siswa_transaksi8_smt1_keterampilan='$penugasan_nilai_siswa_transaksi8_smt1_keterampilan', rerata_nilai_siswa_transaksi8_smt1_keterampilan='$rerata_nilai_siswa_transaksi8_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan', nah_kd_nilai_siswa_transaksi8_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi8_smt1_keterampilan', uas_nilai_siswa_transaksi8_smt1_keterampilan='$uas_nilai_siswa_transaksi8_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan', na_uas_nilai_siswa_transaksi8_smt1_keterampilan='$na_uas_nilai_siswa_transaksi8_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi9_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi9_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi9_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi9_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi9_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan', observasi_nilai_siswa_transaksi9_smt1_keterampilan='$observasi_nilai_siswa_transaksi9_smt1_keterampilan', penugasan_nilai_siswa_transaksi9_smt1_keterampilan='$penugasan_nilai_siswa_transaksi9_smt1_keterampilan', rerata_nilai_siswa_transaksi9_smt1_keterampilan='$rerata_nilai_siswa_transaksi9_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan', nah_kd_nilai_siswa_transaksi9_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi9_smt1_keterampilan', uas_nilai_siswa_transaksi9_smt1_keterampilan='$uas_nilai_siswa_transaksi9_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan', na_uas_nilai_siswa_transaksi9_smt1_keterampilan='$na_uas_nilai_siswa_transaksi9_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10keterampilanSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi10_smt1_keterampilan    = $json_observasi_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi10_smt1_keterampilan    = $json_penugasan_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi10_smt1_keterampilan       = $json_rerata_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt1_keterampilan       = $json_nah_kd_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $uas_nilai_siswa_transaksi10_smt1_keterampilan          = $json_uas_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi10_smt1_keterampilan       = $json_na_uas_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_keterampilan set tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan='$tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan', observasi_nilai_siswa_transaksi10_smt1_keterampilan='$observasi_nilai_siswa_transaksi10_smt1_keterampilan', penugasan_nilai_siswa_transaksi10_smt1_keterampilan='$penugasan_nilai_siswa_transaksi10_smt1_keterampilan', rerata_nilai_siswa_transaksi10_smt1_keterampilan='$rerata_nilai_siswa_transaksi10_smt1_keterampilan', nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan='$nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan', nah_kd_nilai_siswa_transaksi10_smt1_keterampilan='$nah_kd_nilai_siswa_transaksi10_smt1_keterampilan', uas_nilai_siswa_transaksi10_smt1_keterampilan='$uas_nilai_siswa_transaksi10_smt1_keterampilan', uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan='$uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan', na_uas_nilai_siswa_transaksi10_smt1_keterampilan='$na_uas_nilai_siswa_transaksi10_smt1_keterampilan', rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan='$rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi1_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi1_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi1_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi1_smt1_spiritual          = $json_uas_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi1_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi1_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi1_smt1_spiritual', observasi_nilai_siswa_transaksi1_smt1_spiritual='$observasi_nilai_siswa_transaksi1_smt1_spiritual', penugasan_nilai_siswa_transaksi1_smt1_spiritual='$penugasan_nilai_siswa_transaksi1_smt1_spiritual', rerata_nilai_siswa_transaksi1_smt1_spiritual='$rerata_nilai_siswa_transaksi1_smt1_spiritual', nh_remidi_nilai_siswa_transaksi1_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi1_smt1_spiritual', nah_kd_nilai_siswa_transaksi1_smt1_spiritual='$nah_kd_nilai_siswa_transaksi1_smt1_spiritual', uas_nilai_siswa_transaksi1_smt1_spiritual='$uas_nilai_siswa_transaksi1_smt1_spiritual', uas_remidi_nilai_siswa_transaksi1_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi1_smt1_spiritual', na_uas_nilai_siswa_transaksi1_smt1_spiritual='$na_uas_nilai_siswa_transaksi1_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi2_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi2_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi2_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi2_smt1_spiritual          = $json_uas_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi2_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi2_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi2_smt1_spiritual', observasi_nilai_siswa_transaksi2_smt1_spiritual='$observasi_nilai_siswa_transaksi2_smt1_spiritual', penugasan_nilai_siswa_transaksi2_smt1_spiritual='$penugasan_nilai_siswa_transaksi2_smt1_spiritual', rerata_nilai_siswa_transaksi2_smt1_spiritual='$rerata_nilai_siswa_transaksi2_smt1_spiritual', nh_remidi_nilai_siswa_transaksi2_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi2_smt1_spiritual', nah_kd_nilai_siswa_transaksi2_smt1_spiritual='$nah_kd_nilai_siswa_transaksi2_smt1_spiritual', uas_nilai_siswa_transaksi2_smt1_spiritual='$uas_nilai_siswa_transaksi2_smt1_spiritual', uas_remidi_nilai_siswa_transaksi2_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi2_smt1_spiritual', na_uas_nilai_siswa_transaksi2_smt1_spiritual='$na_uas_nilai_siswa_transaksi2_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi3_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi3_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi3_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi3_smt1_spiritual          = $json_uas_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi3_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi3_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi3_smt1_spiritual', observasi_nilai_siswa_transaksi3_smt1_spiritual='$observasi_nilai_siswa_transaksi3_smt1_spiritual', penugasan_nilai_siswa_transaksi3_smt1_spiritual='$penugasan_nilai_siswa_transaksi3_smt1_spiritual', rerata_nilai_siswa_transaksi3_smt1_spiritual='$rerata_nilai_siswa_transaksi3_smt1_spiritual', nh_remidi_nilai_siswa_transaksi3_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi3_smt1_spiritual', nah_kd_nilai_siswa_transaksi3_smt1_spiritual='$nah_kd_nilai_siswa_transaksi3_smt1_spiritual', uas_nilai_siswa_transaksi3_smt1_spiritual='$uas_nilai_siswa_transaksi3_smt1_spiritual', uas_remidi_nilai_siswa_transaksi3_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi3_smt1_spiritual', na_uas_nilai_siswa_transaksi3_smt1_spiritual='$na_uas_nilai_siswa_transaksi3_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi4_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi4_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi4_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi4_smt1_spiritual          = $json_uas_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi4_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi4_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi4_smt1_spiritual', observasi_nilai_siswa_transaksi4_smt1_spiritual='$observasi_nilai_siswa_transaksi4_smt1_spiritual', penugasan_nilai_siswa_transaksi4_smt1_spiritual='$penugasan_nilai_siswa_transaksi4_smt1_spiritual', rerata_nilai_siswa_transaksi4_smt1_spiritual='$rerata_nilai_siswa_transaksi4_smt1_spiritual', nh_remidi_nilai_siswa_transaksi4_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi4_smt1_spiritual', nah_kd_nilai_siswa_transaksi4_smt1_spiritual='$nah_kd_nilai_siswa_transaksi4_smt1_spiritual', uas_nilai_siswa_transaksi4_smt1_spiritual='$uas_nilai_siswa_transaksi4_smt1_spiritual', uas_remidi_nilai_siswa_transaksi4_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi4_smt1_spiritual', na_uas_nilai_siswa_transaksi4_smt1_spiritual='$na_uas_nilai_siswa_transaksi4_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi5_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi5_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi5_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi5_smt1_spiritual          = $json_uas_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi5_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi5_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi5_smt1_spiritual', observasi_nilai_siswa_transaksi5_smt1_spiritual='$observasi_nilai_siswa_transaksi5_smt1_spiritual', penugasan_nilai_siswa_transaksi5_smt1_spiritual='$penugasan_nilai_siswa_transaksi5_smt1_spiritual', rerata_nilai_siswa_transaksi5_smt1_spiritual='$rerata_nilai_siswa_transaksi5_smt1_spiritual', nh_remidi_nilai_siswa_transaksi5_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi5_smt1_spiritual', nah_kd_nilai_siswa_transaksi5_smt1_spiritual='$nah_kd_nilai_siswa_transaksi5_smt1_spiritual', uas_nilai_siswa_transaksi5_smt1_spiritual='$uas_nilai_siswa_transaksi5_smt1_spiritual', uas_remidi_nilai_siswa_transaksi5_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi5_smt1_spiritual', na_uas_nilai_siswa_transaksi5_smt1_spiritual='$na_uas_nilai_siswa_transaksi5_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi6_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi6_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi6_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi6_smt1_spiritual          = $json_uas_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi6_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi6_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi6_smt1_spiritual', observasi_nilai_siswa_transaksi6_smt1_spiritual='$observasi_nilai_siswa_transaksi6_smt1_spiritual', penugasan_nilai_siswa_transaksi6_smt1_spiritual='$penugasan_nilai_siswa_transaksi6_smt1_spiritual', rerata_nilai_siswa_transaksi6_smt1_spiritual='$rerata_nilai_siswa_transaksi6_smt1_spiritual', nh_remidi_nilai_siswa_transaksi6_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi6_smt1_spiritual', nah_kd_nilai_siswa_transaksi6_smt1_spiritual='$nah_kd_nilai_siswa_transaksi6_smt1_spiritual', uas_nilai_siswa_transaksi6_smt1_spiritual='$uas_nilai_siswa_transaksi6_smt1_spiritual', uas_remidi_nilai_siswa_transaksi6_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi6_smt1_spiritual', na_uas_nilai_siswa_transaksi6_smt1_spiritual='$na_uas_nilai_siswa_transaksi6_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi7_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi7_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi7_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi7_smt1_spiritual          = $json_uas_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi7_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set  tes_tulis_nilai_siswa_transaksi7_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi7_smt1_spiritual', observasi_nilai_siswa_transaksi7_smt1_spiritual='$observasi_nilai_siswa_transaksi7_smt1_spiritual', penugasan_nilai_siswa_transaksi7_smt1_spiritual='$penugasan_nilai_siswa_transaksi7_smt1_spiritual', rerata_nilai_siswa_transaksi7_smt1_spiritual='$rerata_nilai_siswa_transaksi7_smt1_spiritual', nh_remidi_nilai_siswa_transaksi7_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi7_smt1_spiritual', nah_kd_nilai_siswa_transaksi7_smt1_spiritual='$nah_kd_nilai_siswa_transaksi7_smt1_spiritual', uas_nilai_siswa_transaksi7_smt1_spiritual='$uas_nilai_siswa_transaksi7_smt1_spiritual', uas_remidi_nilai_siswa_transaksi7_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi7_smt1_spiritual', na_uas_nilai_siswa_transaksi7_smt1_spiritual='$na_uas_nilai_siswa_transaksi7_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi8_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi8_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi8_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi8_smt1_spiritual          = $json_uas_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi8_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi8_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi8_smt1_spiritual', observasi_nilai_siswa_transaksi8_smt1_spiritual='$observasi_nilai_siswa_transaksi8_smt1_spiritual', penugasan_nilai_siswa_transaksi8_smt1_spiritual='$penugasan_nilai_siswa_transaksi8_smt1_spiritual', rerata_nilai_siswa_transaksi8_smt1_spiritual='$rerata_nilai_siswa_transaksi8_smt1_spiritual', nh_remidi_nilai_siswa_transaksi8_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi8_smt1_spiritual', nah_kd_nilai_siswa_transaksi8_smt1_spiritual='$nah_kd_nilai_siswa_transaksi8_smt1_spiritual', uas_nilai_siswa_transaksi8_smt1_spiritual='$uas_nilai_siswa_transaksi8_smt1_spiritual', uas_remidi_nilai_siswa_transaksi8_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi8_smt1_spiritual', na_uas_nilai_siswa_transaksi8_smt1_spiritual='$na_uas_nilai_siswa_transaksi8_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi9_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi9_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi9_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi9_smt1_spiritual          = $json_uas_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi9_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi9_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi9_smt1_spiritual', observasi_nilai_siswa_transaksi9_smt1_spiritual='$observasi_nilai_siswa_transaksi9_smt1_spiritual', penugasan_nilai_siswa_transaksi9_smt1_spiritual='$penugasan_nilai_siswa_transaksi9_smt1_spiritual', rerata_nilai_siswa_transaksi9_smt1_spiritual='$rerata_nilai_siswa_transaksi9_smt1_spiritual', nh_remidi_nilai_siswa_transaksi9_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi9_smt1_spiritual', nah_kd_nilai_siswa_transaksi9_smt1_spiritual='$nah_kd_nilai_siswa_transaksi9_smt1_spiritual', uas_nilai_siswa_transaksi9_smt1_spiritual='$uas_nilai_siswa_transaksi9_smt1_spiritual', uas_remidi_nilai_siswa_transaksi9_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi9_smt1_spiritual', na_uas_nilai_siswa_transaksi9_smt1_spiritual='$na_uas_nilai_siswa_transaksi9_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10spiritualSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt1_spiritual    = $json_tes_tulis_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $observasi_nilai_siswa_transaksi10_smt1_spiritual    = $json_observasi_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi10_smt1_spiritual    = $json_penugasan_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $rerata_nilai_siswa_transaksi10_smt1_spiritual       = $json_rerata_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt1_spiritual    = $json_nh_remidi_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt1_spiritual       = $json_nah_kd_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $uas_nilai_siswa_transaksi10_smt1_spiritual          = $json_uas_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt1_spiritual   = $json_uas_remidi_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi10_smt1_spiritual       = $json_na_uas_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual = $json_rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_spiritual set tes_tulis_nilai_siswa_transaksi10_smt1_spiritual='$tes_tulis_nilai_siswa_transaksi10_smt1_spiritual', observasi_nilai_siswa_transaksi10_smt1_spiritual='$observasi_nilai_siswa_transaksi10_smt1_spiritual', penugasan_nilai_siswa_transaksi10_smt1_spiritual='$penugasan_nilai_siswa_transaksi10_smt1_spiritual', rerata_nilai_siswa_transaksi10_smt1_spiritual='$rerata_nilai_siswa_transaksi10_smt1_spiritual', nh_remidi_nilai_siswa_transaksi10_smt1_spiritual='$nh_remidi_nilai_siswa_transaksi10_smt1_spiritual', nah_kd_nilai_siswa_transaksi10_smt1_spiritual='$nah_kd_nilai_siswa_transaksi10_smt1_spiritual', uas_nilai_siswa_transaksi10_smt1_spiritual='$uas_nilai_siswa_transaksi10_smt1_spiritual', uas_remidi_nilai_siswa_transaksi10_smt1_spiritual='$uas_remidi_nilai_siswa_transaksi10_smt1_spiritual', na_uas_nilai_siswa_transaksi10_smt1_spiritual='$na_uas_nilai_siswa_transaksi10_smt1_spiritual', rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual='$rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual' where nis_siswa_nilai_siswa_transaksi_smt1_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi1_smt1_sosial    = $json_observasi_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi1_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi1_smt1_sosial       = $json_rerata_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi1_smt1_sosial          = $json_uas_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi1_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi1_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi1_smt1_sosial='$tes_tulis_nilai_siswa_transaksi1_smt1_sosial', observasi_nilai_siswa_transaksi1_smt1_sosial='$observasi_nilai_siswa_transaksi1_smt1_sosial', penugasan_nilai_siswa_transaksi1_smt1_sosial='$penugasan_nilai_siswa_transaksi1_smt1_sosial', rerata_nilai_siswa_transaksi1_smt1_sosial='$rerata_nilai_siswa_transaksi1_smt1_sosial', nh_remidi_nilai_siswa_transaksi1_smt1_sosial='$nh_remidi_nilai_siswa_transaksi1_smt1_sosial', nah_kd_nilai_siswa_transaksi1_smt1_sosial='$nah_kd_nilai_siswa_transaksi1_smt1_sosial', uas_nilai_siswa_transaksi1_smt1_sosial='$uas_nilai_siswa_transaksi1_smt1_sosial', uas_remidi_nilai_siswa_transaksi1_smt1_sosial='$uas_remidi_nilai_siswa_transaksi1_smt1_sosial', na_uas_nilai_siswa_transaksi1_smt1_sosial='$na_uas_nilai_siswa_transaksi1_smt1_sosial', rerata_akhir_nilai_siswa_transaksi1_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi1_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi2_smt1_sosial    = $json_observasi_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi2_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi2_smt1_sosial       = $json_rerata_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi2_smt1_sosial          = $json_uas_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi2_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi2_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi2_smt1_sosial='$tes_tulis_nilai_siswa_transaksi2_smt1_sosial', observasi_nilai_siswa_transaksi2_smt1_sosial='$observasi_nilai_siswa_transaksi2_smt1_sosial', penugasan_nilai_siswa_transaksi2_smt1_sosial='$penugasan_nilai_siswa_transaksi2_smt1_sosial', rerata_nilai_siswa_transaksi2_smt1_sosial='$rerata_nilai_siswa_transaksi2_smt1_sosial', nh_remidi_nilai_siswa_transaksi2_smt1_sosial='$nh_remidi_nilai_siswa_transaksi2_smt1_sosial', nah_kd_nilai_siswa_transaksi2_smt1_sosial='$nah_kd_nilai_siswa_transaksi2_smt1_sosial', uas_nilai_siswa_transaksi2_smt1_sosial='$uas_nilai_siswa_transaksi2_smt1_sosial', uas_remidi_nilai_siswa_transaksi2_smt1_sosial='$uas_remidi_nilai_siswa_transaksi2_smt1_sosial', na_uas_nilai_siswa_transaksi2_smt1_sosial='$na_uas_nilai_siswa_transaksi2_smt1_sosial', rerata_akhir_nilai_siswa_transaksi2_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi2_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi3_smt1_sosial    = $json_observasi_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi3_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi3_smt1_sosial       = $json_rerata_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi3_smt1_sosial          = $json_uas_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi3_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi3_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi3_smt1_sosial='$tes_tulis_nilai_siswa_transaksi3_smt1_sosial', observasi_nilai_siswa_transaksi3_smt1_sosial='$observasi_nilai_siswa_transaksi3_smt1_sosial', penugasan_nilai_siswa_transaksi3_smt1_sosial='$penugasan_nilai_siswa_transaksi3_smt1_sosial', rerata_nilai_siswa_transaksi3_smt1_sosial='$rerata_nilai_siswa_transaksi3_smt1_sosial', nh_remidi_nilai_siswa_transaksi3_smt1_sosial='$nh_remidi_nilai_siswa_transaksi3_smt1_sosial', nah_kd_nilai_siswa_transaksi3_smt1_sosial='$nah_kd_nilai_siswa_transaksi3_smt1_sosial', uas_nilai_siswa_transaksi3_smt1_sosial='$uas_nilai_siswa_transaksi3_smt1_sosial', uas_remidi_nilai_siswa_transaksi3_smt1_sosial='$uas_remidi_nilai_siswa_transaksi3_smt1_sosial', na_uas_nilai_siswa_transaksi3_smt1_sosial='$na_uas_nilai_siswa_transaksi3_smt1_sosial', rerata_akhir_nilai_siswa_transaksi3_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi3_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi4_smt1_sosial    = $json_observasi_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi4_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi4_smt1_sosial       = $json_rerata_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi4_smt1_sosial          = $json_uas_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi4_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi4_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi4_smt1_sosial='$tes_tulis_nilai_siswa_transaksi4_smt1_sosial', observasi_nilai_siswa_transaksi4_smt1_sosial='$observasi_nilai_siswa_transaksi4_smt1_sosial', penugasan_nilai_siswa_transaksi4_smt1_sosial='$penugasan_nilai_siswa_transaksi4_smt1_sosial', rerata_nilai_siswa_transaksi4_smt1_sosial='$rerata_nilai_siswa_transaksi4_smt1_sosial', nh_remidi_nilai_siswa_transaksi4_smt1_sosial='$nh_remidi_nilai_siswa_transaksi4_smt1_sosial', nah_kd_nilai_siswa_transaksi4_smt1_sosial='$nah_kd_nilai_siswa_transaksi4_smt1_sosial', uas_nilai_siswa_transaksi4_smt1_sosial='$uas_nilai_siswa_transaksi4_smt1_sosial', uas_remidi_nilai_siswa_transaksi4_smt1_sosial='$uas_remidi_nilai_siswa_transaksi4_smt1_sosial', na_uas_nilai_siswa_transaksi4_smt1_sosial='$na_uas_nilai_siswa_transaksi4_smt1_sosial', rerata_akhir_nilai_siswa_transaksi4_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi4_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi5_smt1_sosial    = $json_observasi_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi5_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi5_smt1_sosial       = $json_rerata_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi5_smt1_sosial          = $json_uas_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi5_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi5_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi5_smt1_sosial='$tes_tulis_nilai_siswa_transaksi5_smt1_sosial', observasi_nilai_siswa_transaksi5_smt1_sosial='$observasi_nilai_siswa_transaksi5_smt1_sosial', penugasan_nilai_siswa_transaksi5_smt1_sosial='$penugasan_nilai_siswa_transaksi5_smt1_sosial', rerata_nilai_siswa_transaksi5_smt1_sosial='$rerata_nilai_siswa_transaksi5_smt1_sosial', nh_remidi_nilai_siswa_transaksi5_smt1_sosial='$nh_remidi_nilai_siswa_transaksi5_smt1_sosial', nah_kd_nilai_siswa_transaksi5_smt1_sosial='$nah_kd_nilai_siswa_transaksi5_smt1_sosial', uas_nilai_siswa_transaksi5_smt1_sosial='$uas_nilai_siswa_transaksi5_smt1_sosial', uas_remidi_nilai_siswa_transaksi5_smt1_sosial='$uas_remidi_nilai_siswa_transaksi5_smt1_sosial', na_uas_nilai_siswa_transaksi5_smt1_sosial='$na_uas_nilai_siswa_transaksi5_smt1_sosial', rerata_akhir_nilai_siswa_transaksi5_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi5_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi6_smt1_sosial    = $json_observasi_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi6_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi6_smt1_sosial       = $json_rerata_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi6_smt1_sosial          = $json_uas_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi6_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi6_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi6_smt1_sosial='$tes_tulis_nilai_siswa_transaksi6_smt1_sosial', observasi_nilai_siswa_transaksi6_smt1_sosial='$observasi_nilai_siswa_transaksi6_smt1_sosial', penugasan_nilai_siswa_transaksi6_smt1_sosial='$penugasan_nilai_siswa_transaksi6_smt1_sosial', rerata_nilai_siswa_transaksi6_smt1_sosial='$rerata_nilai_siswa_transaksi6_smt1_sosial', nh_remidi_nilai_siswa_transaksi6_smt1_sosial='$nh_remidi_nilai_siswa_transaksi6_smt1_sosial', nah_kd_nilai_siswa_transaksi6_smt1_sosial='$nah_kd_nilai_siswa_transaksi6_smt1_sosial', uas_nilai_siswa_transaksi6_smt1_sosial='$uas_nilai_siswa_transaksi6_smt1_sosial', uas_remidi_nilai_siswa_transaksi6_smt1_sosial='$uas_remidi_nilai_siswa_transaksi6_smt1_sosial', na_uas_nilai_siswa_transaksi6_smt1_sosial='$na_uas_nilai_siswa_transaksi6_smt1_sosial', rerata_akhir_nilai_siswa_transaksi6_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi6_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi7_smt1_sosial    = $json_observasi_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi7_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi7_smt1_sosial       = $json_rerata_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi7_smt1_sosial          = $json_uas_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi7_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi7_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set  tes_tulis_nilai_siswa_transaksi7_smt1_sosial='$tes_tulis_nilai_siswa_transaksi7_smt1_sosial', observasi_nilai_siswa_transaksi7_smt1_sosial='$observasi_nilai_siswa_transaksi7_smt1_sosial', penugasan_nilai_siswa_transaksi7_smt1_sosial='$penugasan_nilai_siswa_transaksi7_smt1_sosial', rerata_nilai_siswa_transaksi7_smt1_sosial='$rerata_nilai_siswa_transaksi7_smt1_sosial', nh_remidi_nilai_siswa_transaksi7_smt1_sosial='$nh_remidi_nilai_siswa_transaksi7_smt1_sosial', nah_kd_nilai_siswa_transaksi7_smt1_sosial='$nah_kd_nilai_siswa_transaksi7_smt1_sosial', uas_nilai_siswa_transaksi7_smt1_sosial='$uas_nilai_siswa_transaksi7_smt1_sosial', uas_remidi_nilai_siswa_transaksi7_smt1_sosial='$uas_remidi_nilai_siswa_transaksi7_smt1_sosial', na_uas_nilai_siswa_transaksi7_smt1_sosial='$na_uas_nilai_siswa_transaksi7_smt1_sosial', rerata_akhir_nilai_siswa_transaksi7_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi7_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi8_smt1_sosial    = $json_observasi_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi8_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi8_smt1_sosial       = $json_rerata_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi8_smt1_sosial          = $json_uas_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi8_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi8_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi8_smt1_sosial='$tes_tulis_nilai_siswa_transaksi8_smt1_sosial', observasi_nilai_siswa_transaksi8_smt1_sosial='$observasi_nilai_siswa_transaksi8_smt1_sosial', penugasan_nilai_siswa_transaksi8_smt1_sosial='$penugasan_nilai_siswa_transaksi8_smt1_sosial', rerata_nilai_siswa_transaksi8_smt1_sosial='$rerata_nilai_siswa_transaksi8_smt1_sosial', nh_remidi_nilai_siswa_transaksi8_smt1_sosial='$nh_remidi_nilai_siswa_transaksi8_smt1_sosial', nah_kd_nilai_siswa_transaksi8_smt1_sosial='$nah_kd_nilai_siswa_transaksi8_smt1_sosial', uas_nilai_siswa_transaksi8_smt1_sosial='$uas_nilai_siswa_transaksi8_smt1_sosial', uas_remidi_nilai_siswa_transaksi8_smt1_sosial='$uas_remidi_nilai_siswa_transaksi8_smt1_sosial', na_uas_nilai_siswa_transaksi8_smt1_sosial='$na_uas_nilai_siswa_transaksi8_smt1_sosial', rerata_akhir_nilai_siswa_transaksi8_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi8_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi9_smt1_sosial    = $json_observasi_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi9_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi9_smt1_sosial       = $json_rerata_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi9_smt1_sosial          = $json_uas_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi9_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi9_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi9_smt1_sosial='$tes_tulis_nilai_siswa_transaksi9_smt1_sosial', observasi_nilai_siswa_transaksi9_smt1_sosial='$observasi_nilai_siswa_transaksi9_smt1_sosial', penugasan_nilai_siswa_transaksi9_smt1_sosial='$penugasan_nilai_siswa_transaksi9_smt1_sosial', rerata_nilai_siswa_transaksi9_smt1_sosial='$rerata_nilai_siswa_transaksi9_smt1_sosial', nh_remidi_nilai_siswa_transaksi9_smt1_sosial='$nh_remidi_nilai_siswa_transaksi9_smt1_sosial', nah_kd_nilai_siswa_transaksi9_smt1_sosial='$nah_kd_nilai_siswa_transaksi9_smt1_sosial', uas_nilai_siswa_transaksi9_smt1_sosial='$uas_nilai_siswa_transaksi9_smt1_sosial', uas_remidi_nilai_siswa_transaksi9_smt1_sosial='$uas_remidi_nilai_siswa_transaksi9_smt1_sosial', na_uas_nilai_siswa_transaksi9_smt1_sosial='$na_uas_nilai_siswa_transaksi9_smt1_sosial', rerata_akhir_nilai_siswa_transaksi9_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi9_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10sosialSMT1
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt1_sosial    = $json_tes_tulis_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $observasi_nilai_siswa_transaksi10_smt1_sosial    = $json_observasi_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $penugasan_nilai_siswa_transaksi10_smt1_sosial    = $json_penugasan_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $rerata_nilai_siswa_transaksi10_smt1_sosial       = $json_rerata_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt1_sosial    = $json_nh_remidi_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt1_sosial       = $json_nah_kd_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $uas_nilai_siswa_transaksi10_smt1_sosial          = $json_uas_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt1_sosial   = $json_uas_remidi_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $na_uas_nilai_siswa_transaksi10_smt1_sosial       = $json_na_uas_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt1_sosial = $json_rerata_akhir_nilai_siswa_transaksi10_smt1_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt1_sosial set tes_tulis_nilai_siswa_transaksi10_smt1_sosial='$tes_tulis_nilai_siswa_transaksi10_smt1_sosial', observasi_nilai_siswa_transaksi10_smt1_sosial='$observasi_nilai_siswa_transaksi10_smt1_sosial', penugasan_nilai_siswa_transaksi10_smt1_sosial='$penugasan_nilai_siswa_transaksi10_smt1_sosial', rerata_nilai_siswa_transaksi10_smt1_sosial='$rerata_nilai_siswa_transaksi10_smt1_sosial', nh_remidi_nilai_siswa_transaksi10_smt1_sosial='$nh_remidi_nilai_siswa_transaksi10_smt1_sosial', nah_kd_nilai_siswa_transaksi10_smt1_sosial='$nah_kd_nilai_siswa_transaksi10_smt1_sosial', uas_nilai_siswa_transaksi10_smt1_sosial='$uas_nilai_siswa_transaksi10_smt1_sosial', uas_remidi_nilai_siswa_transaksi10_smt1_sosial='$uas_remidi_nilai_siswa_transaksi10_smt1_sosial', na_uas_nilai_siswa_transaksi10_smt1_sosial='$na_uas_nilai_siswa_transaksi10_smt1_sosial', rerata_akhir_nilai_siswa_transaksi10_smt1_sosial='$rerata_akhir_nilai_siswa_transaksi10_smt1_sosial' where nis_siswa_nilai_siswa_transaksi_smt1_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt1_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi1_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi1_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi1_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi1_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi1_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan', observasi_nilai_siswa_transaksi1_smt2_pengetahuan='$observasi_nilai_siswa_transaksi1_smt2_pengetahuan', penugasan_nilai_siswa_transaksi1_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi1_smt2_pengetahuan', rerata_nilai_siswa_transaksi1_smt2_pengetahuan='$rerata_nilai_siswa_transaksi1_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan', uas_nilai_siswa_transaksi1_smt2_pengetahuan='$uas_nilai_siswa_transaksi1_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan', na_uas_nilai_siswa_transaksi1_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi1_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi2_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi2_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi2_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi2_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi2_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan', observasi_nilai_siswa_transaksi2_smt2_pengetahuan='$observasi_nilai_siswa_transaksi2_smt2_pengetahuan', penugasan_nilai_siswa_transaksi2_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi2_smt2_pengetahuan', rerata_nilai_siswa_transaksi2_smt2_pengetahuan='$rerata_nilai_siswa_transaksi2_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan', uas_nilai_siswa_transaksi2_smt2_pengetahuan='$uas_nilai_siswa_transaksi2_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan', na_uas_nilai_siswa_transaksi2_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi2_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi3_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi3_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi3_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi3_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi3_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan', observasi_nilai_siswa_transaksi3_smt2_pengetahuan='$observasi_nilai_siswa_transaksi3_smt2_pengetahuan', penugasan_nilai_siswa_transaksi3_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi3_smt2_pengetahuan', rerata_nilai_siswa_transaksi3_smt2_pengetahuan='$rerata_nilai_siswa_transaksi3_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan', uas_nilai_siswa_transaksi3_smt2_pengetahuan='$uas_nilai_siswa_transaksi3_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan', na_uas_nilai_siswa_transaksi3_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi3_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi4_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi4_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi4_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi4_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi4_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan', observasi_nilai_siswa_transaksi4_smt2_pengetahuan='$observasi_nilai_siswa_transaksi4_smt2_pengetahuan', penugasan_nilai_siswa_transaksi4_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi4_smt2_pengetahuan', rerata_nilai_siswa_transaksi4_smt2_pengetahuan='$rerata_nilai_siswa_transaksi4_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan', uas_nilai_siswa_transaksi4_smt2_pengetahuan='$uas_nilai_siswa_transaksi4_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan', na_uas_nilai_siswa_transaksi4_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi4_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi5_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi5_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi5_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi5_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi5_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan', observasi_nilai_siswa_transaksi5_smt2_pengetahuan='$observasi_nilai_siswa_transaksi5_smt2_pengetahuan', penugasan_nilai_siswa_transaksi5_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi5_smt2_pengetahuan', rerata_nilai_siswa_transaksi5_smt2_pengetahuan='$rerata_nilai_siswa_transaksi5_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan', uas_nilai_siswa_transaksi5_smt2_pengetahuan='$uas_nilai_siswa_transaksi5_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan', na_uas_nilai_siswa_transaksi5_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi5_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi6_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi6_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi6_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi6_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi6_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan', observasi_nilai_siswa_transaksi6_smt2_pengetahuan='$observasi_nilai_siswa_transaksi6_smt2_pengetahuan', penugasan_nilai_siswa_transaksi6_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi6_smt2_pengetahuan', rerata_nilai_siswa_transaksi6_smt2_pengetahuan='$rerata_nilai_siswa_transaksi6_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan', uas_nilai_siswa_transaksi6_smt2_pengetahuan='$uas_nilai_siswa_transaksi6_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan', na_uas_nilai_siswa_transaksi6_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi6_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi7_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi7_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi7_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi7_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi7_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set  tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan', observasi_nilai_siswa_transaksi7_smt2_pengetahuan='$observasi_nilai_siswa_transaksi7_smt2_pengetahuan', penugasan_nilai_siswa_transaksi7_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi7_smt2_pengetahuan', rerata_nilai_siswa_transaksi7_smt2_pengetahuan='$rerata_nilai_siswa_transaksi7_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan', uas_nilai_siswa_transaksi7_smt2_pengetahuan='$uas_nilai_siswa_transaksi7_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan', na_uas_nilai_siswa_transaksi7_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi7_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi8_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi8_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi8_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi8_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi8_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan', observasi_nilai_siswa_transaksi8_smt2_pengetahuan='$observasi_nilai_siswa_transaksi8_smt2_pengetahuan', penugasan_nilai_siswa_transaksi8_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi8_smt2_pengetahuan', rerata_nilai_siswa_transaksi8_smt2_pengetahuan='$rerata_nilai_siswa_transaksi8_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan', uas_nilai_siswa_transaksi8_smt2_pengetahuan='$uas_nilai_siswa_transaksi8_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan', na_uas_nilai_siswa_transaksi8_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi8_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi9_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi9_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi9_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi9_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi9_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan', observasi_nilai_siswa_transaksi9_smt2_pengetahuan='$observasi_nilai_siswa_transaksi9_smt2_pengetahuan', penugasan_nilai_siswa_transaksi9_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi9_smt2_pengetahuan', rerata_nilai_siswa_transaksi9_smt2_pengetahuan='$rerata_nilai_siswa_transaksi9_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan', uas_nilai_siswa_transaksi9_smt2_pengetahuan='$uas_nilai_siswa_transaksi9_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan', na_uas_nilai_siswa_transaksi9_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi9_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10pengetahuansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan    = $json_tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $observasi_nilai_siswa_transaksi10_smt2_pengetahuan    = $json_observasi_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $penugasan_nilai_siswa_transaksi10_smt2_pengetahuan    = $json_penugasan_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $rerata_nilai_siswa_transaksi10_smt2_pengetahuan       = $json_rerata_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan    = $json_nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan       = $json_nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $uas_nilai_siswa_transaksi10_smt2_pengetahuan          = $json_uas_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan   = $json_uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $na_uas_nilai_siswa_transaksi10_smt2_pengetahuan       = $json_na_uas_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan = $json_rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_pengetahuan set tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan='$tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan', observasi_nilai_siswa_transaksi10_smt2_pengetahuan='$observasi_nilai_siswa_transaksi10_smt2_pengetahuan', penugasan_nilai_siswa_transaksi10_smt2_pengetahuan='$penugasan_nilai_siswa_transaksi10_smt2_pengetahuan', rerata_nilai_siswa_transaksi10_smt2_pengetahuan='$rerata_nilai_siswa_transaksi10_smt2_pengetahuan', nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan='$nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan', nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan='$nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan', uas_nilai_siswa_transaksi10_smt2_pengetahuan='$uas_nilai_siswa_transaksi10_smt2_pengetahuan', uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan='$uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan', na_uas_nilai_siswa_transaksi10_smt2_pengetahuan='$na_uas_nilai_siswa_transaksi10_smt2_pengetahuan', rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan='$rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan' where nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi1_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi1_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi1_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi1_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi1_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan', observasi_nilai_siswa_transaksi1_smt2_keterampilan='$observasi_nilai_siswa_transaksi1_smt2_keterampilan', penugasan_nilai_siswa_transaksi1_smt2_keterampilan='$penugasan_nilai_siswa_transaksi1_smt2_keterampilan', rerata_nilai_siswa_transaksi1_smt2_keterampilan='$rerata_nilai_siswa_transaksi1_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan', nah_kd_nilai_siswa_transaksi1_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi1_smt2_keterampilan', uas_nilai_siswa_transaksi1_smt2_keterampilan='$uas_nilai_siswa_transaksi1_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan', na_uas_nilai_siswa_transaksi1_smt2_keterampilan='$na_uas_nilai_siswa_transaksi1_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi2_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi2_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi2_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi2_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi2_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan', observasi_nilai_siswa_transaksi2_smt2_keterampilan='$observasi_nilai_siswa_transaksi2_smt2_keterampilan', penugasan_nilai_siswa_transaksi2_smt2_keterampilan='$penugasan_nilai_siswa_transaksi2_smt2_keterampilan', rerata_nilai_siswa_transaksi2_smt2_keterampilan='$rerata_nilai_siswa_transaksi2_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan', nah_kd_nilai_siswa_transaksi2_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi2_smt2_keterampilan', uas_nilai_siswa_transaksi2_smt2_keterampilan='$uas_nilai_siswa_transaksi2_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan', na_uas_nilai_siswa_transaksi2_smt2_keterampilan='$na_uas_nilai_siswa_transaksi2_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi3_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi3_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi3_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi3_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi3_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan', observasi_nilai_siswa_transaksi3_smt2_keterampilan='$observasi_nilai_siswa_transaksi3_smt2_keterampilan', penugasan_nilai_siswa_transaksi3_smt2_keterampilan='$penugasan_nilai_siswa_transaksi3_smt2_keterampilan', rerata_nilai_siswa_transaksi3_smt2_keterampilan='$rerata_nilai_siswa_transaksi3_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan', nah_kd_nilai_siswa_transaksi3_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi3_smt2_keterampilan', uas_nilai_siswa_transaksi3_smt2_keterampilan='$uas_nilai_siswa_transaksi3_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan', na_uas_nilai_siswa_transaksi3_smt2_keterampilan='$na_uas_nilai_siswa_transaksi3_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi4_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi4_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi4_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi4_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi4_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan', observasi_nilai_siswa_transaksi4_smt2_keterampilan='$observasi_nilai_siswa_transaksi4_smt2_keterampilan', penugasan_nilai_siswa_transaksi4_smt2_keterampilan='$penugasan_nilai_siswa_transaksi4_smt2_keterampilan', rerata_nilai_siswa_transaksi4_smt2_keterampilan='$rerata_nilai_siswa_transaksi4_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan', nah_kd_nilai_siswa_transaksi4_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi4_smt2_keterampilan', uas_nilai_siswa_transaksi4_smt2_keterampilan='$uas_nilai_siswa_transaksi4_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan', na_uas_nilai_siswa_transaksi4_smt2_keterampilan='$na_uas_nilai_siswa_transaksi4_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi5_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi5_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi5_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi5_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi5_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan', observasi_nilai_siswa_transaksi5_smt2_keterampilan='$observasi_nilai_siswa_transaksi5_smt2_keterampilan', penugasan_nilai_siswa_transaksi5_smt2_keterampilan='$penugasan_nilai_siswa_transaksi5_smt2_keterampilan', rerata_nilai_siswa_transaksi5_smt2_keterampilan='$rerata_nilai_siswa_transaksi5_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan', nah_kd_nilai_siswa_transaksi5_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi5_smt2_keterampilan', uas_nilai_siswa_transaksi5_smt2_keterampilan='$uas_nilai_siswa_transaksi5_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan', na_uas_nilai_siswa_transaksi5_smt2_keterampilan='$na_uas_nilai_siswa_transaksi5_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi6_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi6_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi6_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi6_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi6_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan', observasi_nilai_siswa_transaksi6_smt2_keterampilan='$observasi_nilai_siswa_transaksi6_smt2_keterampilan', penugasan_nilai_siswa_transaksi6_smt2_keterampilan='$penugasan_nilai_siswa_transaksi6_smt2_keterampilan', rerata_nilai_siswa_transaksi6_smt2_keterampilan='$rerata_nilai_siswa_transaksi6_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan', nah_kd_nilai_siswa_transaksi6_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi6_smt2_keterampilan', uas_nilai_siswa_transaksi6_smt2_keterampilan='$uas_nilai_siswa_transaksi6_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan', na_uas_nilai_siswa_transaksi6_smt2_keterampilan='$na_uas_nilai_siswa_transaksi6_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi7_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi7_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi7_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi7_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi7_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set  tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan', observasi_nilai_siswa_transaksi7_smt2_keterampilan='$observasi_nilai_siswa_transaksi7_smt2_keterampilan', penugasan_nilai_siswa_transaksi7_smt2_keterampilan='$penugasan_nilai_siswa_transaksi7_smt2_keterampilan', rerata_nilai_siswa_transaksi7_smt2_keterampilan='$rerata_nilai_siswa_transaksi7_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan', nah_kd_nilai_siswa_transaksi7_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi7_smt2_keterampilan', uas_nilai_siswa_transaksi7_smt2_keterampilan='$uas_nilai_siswa_transaksi7_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan', na_uas_nilai_siswa_transaksi7_smt2_keterampilan='$na_uas_nilai_siswa_transaksi7_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi8_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi8_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi8_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi8_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi8_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan', observasi_nilai_siswa_transaksi8_smt2_keterampilan='$observasi_nilai_siswa_transaksi8_smt2_keterampilan', penugasan_nilai_siswa_transaksi8_smt2_keterampilan='$penugasan_nilai_siswa_transaksi8_smt2_keterampilan', rerata_nilai_siswa_transaksi8_smt2_keterampilan='$rerata_nilai_siswa_transaksi8_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan', nah_kd_nilai_siswa_transaksi8_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi8_smt2_keterampilan', uas_nilai_siswa_transaksi8_smt2_keterampilan='$uas_nilai_siswa_transaksi8_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan', na_uas_nilai_siswa_transaksi8_smt2_keterampilan='$na_uas_nilai_siswa_transaksi8_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi9_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi9_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi9_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi9_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi9_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan', observasi_nilai_siswa_transaksi9_smt2_keterampilan='$observasi_nilai_siswa_transaksi9_smt2_keterampilan', penugasan_nilai_siswa_transaksi9_smt2_keterampilan='$penugasan_nilai_siswa_transaksi9_smt2_keterampilan', rerata_nilai_siswa_transaksi9_smt2_keterampilan='$rerata_nilai_siswa_transaksi9_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan', nah_kd_nilai_siswa_transaksi9_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi9_smt2_keterampilan', uas_nilai_siswa_transaksi9_smt2_keterampilan='$uas_nilai_siswa_transaksi9_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan', na_uas_nilai_siswa_transaksi9_smt2_keterampilan='$na_uas_nilai_siswa_transaksi9_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10keterampilansmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan    = $json_tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $observasi_nilai_siswa_transaksi10_smt2_keterampilan    = $json_observasi_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $penugasan_nilai_siswa_transaksi10_smt2_keterampilan    = $json_penugasan_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $rerata_nilai_siswa_transaksi10_smt2_keterampilan       = $json_rerata_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan    = $json_nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt2_keterampilan       = $json_nah_kd_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $uas_nilai_siswa_transaksi10_smt2_keterampilan          = $json_uas_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan   = $json_uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $na_uas_nilai_siswa_transaksi10_smt2_keterampilan       = $json_na_uas_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan = $json_rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_keterampilan set tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan='$tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan', observasi_nilai_siswa_transaksi10_smt2_keterampilan='$observasi_nilai_siswa_transaksi10_smt2_keterampilan', penugasan_nilai_siswa_transaksi10_smt2_keterampilan='$penugasan_nilai_siswa_transaksi10_smt2_keterampilan', rerata_nilai_siswa_transaksi10_smt2_keterampilan='$rerata_nilai_siswa_transaksi10_smt2_keterampilan', nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan='$nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan', nah_kd_nilai_siswa_transaksi10_smt2_keterampilan='$nah_kd_nilai_siswa_transaksi10_smt2_keterampilan', uas_nilai_siswa_transaksi10_smt2_keterampilan='$uas_nilai_siswa_transaksi10_smt2_keterampilan', uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan='$uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan', na_uas_nilai_siswa_transaksi10_smt2_keterampilan='$na_uas_nilai_siswa_transaksi10_smt2_keterampilan', rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan='$rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan' where nis_siswa_nilai_siswa_transaksi_smt2_keterampilan='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_keterampilan='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi1_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi1_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi1_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi1_smt2_spiritual          = $json_uas_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi1_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi1_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi1_smt2_spiritual', observasi_nilai_siswa_transaksi1_smt2_spiritual='$observasi_nilai_siswa_transaksi1_smt2_spiritual', penugasan_nilai_siswa_transaksi1_smt2_spiritual='$penugasan_nilai_siswa_transaksi1_smt2_spiritual', rerata_nilai_siswa_transaksi1_smt2_spiritual='$rerata_nilai_siswa_transaksi1_smt2_spiritual', nh_remidi_nilai_siswa_transaksi1_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi1_smt2_spiritual', nah_kd_nilai_siswa_transaksi1_smt2_spiritual='$nah_kd_nilai_siswa_transaksi1_smt2_spiritual', uas_nilai_siswa_transaksi1_smt2_spiritual='$uas_nilai_siswa_transaksi1_smt2_spiritual', uas_remidi_nilai_siswa_transaksi1_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi1_smt2_spiritual', na_uas_nilai_siswa_transaksi1_smt2_spiritual='$na_uas_nilai_siswa_transaksi1_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi2_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi2_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi2_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi2_smt2_spiritual          = $json_uas_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi2_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi2_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi2_smt2_spiritual', observasi_nilai_siswa_transaksi2_smt2_spiritual='$observasi_nilai_siswa_transaksi2_smt2_spiritual', penugasan_nilai_siswa_transaksi2_smt2_spiritual='$penugasan_nilai_siswa_transaksi2_smt2_spiritual', rerata_nilai_siswa_transaksi2_smt2_spiritual='$rerata_nilai_siswa_transaksi2_smt2_spiritual', nh_remidi_nilai_siswa_transaksi2_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi2_smt2_spiritual', nah_kd_nilai_siswa_transaksi2_smt2_spiritual='$nah_kd_nilai_siswa_transaksi2_smt2_spiritual', uas_nilai_siswa_transaksi2_smt2_spiritual='$uas_nilai_siswa_transaksi2_smt2_spiritual', uas_remidi_nilai_siswa_transaksi2_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi2_smt2_spiritual', na_uas_nilai_siswa_transaksi2_smt2_spiritual='$na_uas_nilai_siswa_transaksi2_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi3_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi3_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi3_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi3_smt2_spiritual          = $json_uas_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi3_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi3_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi3_smt2_spiritual', observasi_nilai_siswa_transaksi3_smt2_spiritual='$observasi_nilai_siswa_transaksi3_smt2_spiritual', penugasan_nilai_siswa_transaksi3_smt2_spiritual='$penugasan_nilai_siswa_transaksi3_smt2_spiritual', rerata_nilai_siswa_transaksi3_smt2_spiritual='$rerata_nilai_siswa_transaksi3_smt2_spiritual', nh_remidi_nilai_siswa_transaksi3_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi3_smt2_spiritual', nah_kd_nilai_siswa_transaksi3_smt2_spiritual='$nah_kd_nilai_siswa_transaksi3_smt2_spiritual', uas_nilai_siswa_transaksi3_smt2_spiritual='$uas_nilai_siswa_transaksi3_smt2_spiritual', uas_remidi_nilai_siswa_transaksi3_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi3_smt2_spiritual', na_uas_nilai_siswa_transaksi3_smt2_spiritual='$na_uas_nilai_siswa_transaksi3_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi4_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi4_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi4_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi4_smt2_spiritual          = $json_uas_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi4_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi4_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi4_smt2_spiritual', observasi_nilai_siswa_transaksi4_smt2_spiritual='$observasi_nilai_siswa_transaksi4_smt2_spiritual', penugasan_nilai_siswa_transaksi4_smt2_spiritual='$penugasan_nilai_siswa_transaksi4_smt2_spiritual', rerata_nilai_siswa_transaksi4_smt2_spiritual='$rerata_nilai_siswa_transaksi4_smt2_spiritual', nh_remidi_nilai_siswa_transaksi4_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi4_smt2_spiritual', nah_kd_nilai_siswa_transaksi4_smt2_spiritual='$nah_kd_nilai_siswa_transaksi4_smt2_spiritual', uas_nilai_siswa_transaksi4_smt2_spiritual='$uas_nilai_siswa_transaksi4_smt2_spiritual', uas_remidi_nilai_siswa_transaksi4_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi4_smt2_spiritual', na_uas_nilai_siswa_transaksi4_smt2_spiritual='$na_uas_nilai_siswa_transaksi4_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi5_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi5_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi5_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi5_smt2_spiritual          = $json_uas_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi5_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi5_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi5_smt2_spiritual', observasi_nilai_siswa_transaksi5_smt2_spiritual='$observasi_nilai_siswa_transaksi5_smt2_spiritual', penugasan_nilai_siswa_transaksi5_smt2_spiritual='$penugasan_nilai_siswa_transaksi5_smt2_spiritual', rerata_nilai_siswa_transaksi5_smt2_spiritual='$rerata_nilai_siswa_transaksi5_smt2_spiritual', nh_remidi_nilai_siswa_transaksi5_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi5_smt2_spiritual', nah_kd_nilai_siswa_transaksi5_smt2_spiritual='$nah_kd_nilai_siswa_transaksi5_smt2_spiritual', uas_nilai_siswa_transaksi5_smt2_spiritual='$uas_nilai_siswa_transaksi5_smt2_spiritual', uas_remidi_nilai_siswa_transaksi5_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi5_smt2_spiritual', na_uas_nilai_siswa_transaksi5_smt2_spiritual='$na_uas_nilai_siswa_transaksi5_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi6_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi6_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi6_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi6_smt2_spiritual          = $json_uas_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi6_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi6_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi6_smt2_spiritual', observasi_nilai_siswa_transaksi6_smt2_spiritual='$observasi_nilai_siswa_transaksi6_smt2_spiritual', penugasan_nilai_siswa_transaksi6_smt2_spiritual='$penugasan_nilai_siswa_transaksi6_smt2_spiritual', rerata_nilai_siswa_transaksi6_smt2_spiritual='$rerata_nilai_siswa_transaksi6_smt2_spiritual', nh_remidi_nilai_siswa_transaksi6_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi6_smt2_spiritual', nah_kd_nilai_siswa_transaksi6_smt2_spiritual='$nah_kd_nilai_siswa_transaksi6_smt2_spiritual', uas_nilai_siswa_transaksi6_smt2_spiritual='$uas_nilai_siswa_transaksi6_smt2_spiritual', uas_remidi_nilai_siswa_transaksi6_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi6_smt2_spiritual', na_uas_nilai_siswa_transaksi6_smt2_spiritual='$na_uas_nilai_siswa_transaksi6_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi7_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi7_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi7_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi7_smt2_spiritual          = $json_uas_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi7_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set  tes_tulis_nilai_siswa_transaksi7_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi7_smt2_spiritual', observasi_nilai_siswa_transaksi7_smt2_spiritual='$observasi_nilai_siswa_transaksi7_smt2_spiritual', penugasan_nilai_siswa_transaksi7_smt2_spiritual='$penugasan_nilai_siswa_transaksi7_smt2_spiritual', rerata_nilai_siswa_transaksi7_smt2_spiritual='$rerata_nilai_siswa_transaksi7_smt2_spiritual', nh_remidi_nilai_siswa_transaksi7_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi7_smt2_spiritual', nah_kd_nilai_siswa_transaksi7_smt2_spiritual='$nah_kd_nilai_siswa_transaksi7_smt2_spiritual', uas_nilai_siswa_transaksi7_smt2_spiritual='$uas_nilai_siswa_transaksi7_smt2_spiritual', uas_remidi_nilai_siswa_transaksi7_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi7_smt2_spiritual', na_uas_nilai_siswa_transaksi7_smt2_spiritual='$na_uas_nilai_siswa_transaksi7_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi8_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi8_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi8_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi8_smt2_spiritual          = $json_uas_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi8_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi8_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi8_smt2_spiritual', observasi_nilai_siswa_transaksi8_smt2_spiritual='$observasi_nilai_siswa_transaksi8_smt2_spiritual', penugasan_nilai_siswa_transaksi8_smt2_spiritual='$penugasan_nilai_siswa_transaksi8_smt2_spiritual', rerata_nilai_siswa_transaksi8_smt2_spiritual='$rerata_nilai_siswa_transaksi8_smt2_spiritual', nh_remidi_nilai_siswa_transaksi8_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi8_smt2_spiritual', nah_kd_nilai_siswa_transaksi8_smt2_spiritual='$nah_kd_nilai_siswa_transaksi8_smt2_spiritual', uas_nilai_siswa_transaksi8_smt2_spiritual='$uas_nilai_siswa_transaksi8_smt2_spiritual', uas_remidi_nilai_siswa_transaksi8_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi8_smt2_spiritual', na_uas_nilai_siswa_transaksi8_smt2_spiritual='$na_uas_nilai_siswa_transaksi8_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi9_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi9_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi9_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi9_smt2_spiritual          = $json_uas_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi9_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi9_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi9_smt2_spiritual', observasi_nilai_siswa_transaksi9_smt2_spiritual='$observasi_nilai_siswa_transaksi9_smt2_spiritual', penugasan_nilai_siswa_transaksi9_smt2_spiritual='$penugasan_nilai_siswa_transaksi9_smt2_spiritual', rerata_nilai_siswa_transaksi9_smt2_spiritual='$rerata_nilai_siswa_transaksi9_smt2_spiritual', nh_remidi_nilai_siswa_transaksi9_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi9_smt2_spiritual', nah_kd_nilai_siswa_transaksi9_smt2_spiritual='$nah_kd_nilai_siswa_transaksi9_smt2_spiritual', uas_nilai_siswa_transaksi9_smt2_spiritual='$uas_nilai_siswa_transaksi9_smt2_spiritual', uas_remidi_nilai_siswa_transaksi9_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi9_smt2_spiritual', na_uas_nilai_siswa_transaksi9_smt2_spiritual='$na_uas_nilai_siswa_transaksi9_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10spiritualsmt2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt2_spiritual    = $json_tes_tulis_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $observasi_nilai_siswa_transaksi10_smt2_spiritual    = $json_observasi_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $penugasan_nilai_siswa_transaksi10_smt2_spiritual    = $json_penugasan_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $rerata_nilai_siswa_transaksi10_smt2_spiritual       = $json_rerata_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt2_spiritual    = $json_nh_remidi_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt2_spiritual       = $json_nah_kd_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $uas_nilai_siswa_transaksi10_smt2_spiritual          = $json_uas_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt2_spiritual   = $json_uas_remidi_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $na_uas_nilai_siswa_transaksi10_smt2_spiritual       = $json_na_uas_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual = $json_rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_spiritual set tes_tulis_nilai_siswa_transaksi10_smt2_spiritual='$tes_tulis_nilai_siswa_transaksi10_smt2_spiritual', observasi_nilai_siswa_transaksi10_smt2_spiritual='$observasi_nilai_siswa_transaksi10_smt2_spiritual', penugasan_nilai_siswa_transaksi10_smt2_spiritual='$penugasan_nilai_siswa_transaksi10_smt2_spiritual', rerata_nilai_siswa_transaksi10_smt2_spiritual='$rerata_nilai_siswa_transaksi10_smt2_spiritual', nh_remidi_nilai_siswa_transaksi10_smt2_spiritual='$nh_remidi_nilai_siswa_transaksi10_smt2_spiritual', nah_kd_nilai_siswa_transaksi10_smt2_spiritual='$nah_kd_nilai_siswa_transaksi10_smt2_spiritual', uas_nilai_siswa_transaksi10_smt2_spiritual='$uas_nilai_siswa_transaksi10_smt2_spiritual', uas_remidi_nilai_siswa_transaksi10_smt2_spiritual='$uas_remidi_nilai_siswa_transaksi10_smt2_spiritual', na_uas_nilai_siswa_transaksi10_smt2_spiritual='$na_uas_nilai_siswa_transaksi10_smt2_spiritual', rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual='$rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual' where nis_siswa_nilai_siswa_transaksi_smt2_spiritual='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_spiritual='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD1sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi1_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi1_smt2_sosial    = $json_observasi_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi1_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi1_smt2_sosial       = $json_rerata_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi1_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi1_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi1_smt2_sosial          = $json_uas_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi1_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi1_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi1_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi1_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi1_smt2_sosial='$tes_tulis_nilai_siswa_transaksi1_smt2_sosial', observasi_nilai_siswa_transaksi1_smt2_sosial='$observasi_nilai_siswa_transaksi1_smt2_sosial', penugasan_nilai_siswa_transaksi1_smt2_sosial='$penugasan_nilai_siswa_transaksi1_smt2_sosial', rerata_nilai_siswa_transaksi1_smt2_sosial='$rerata_nilai_siswa_transaksi1_smt2_sosial', nh_remidi_nilai_siswa_transaksi1_smt2_sosial='$nh_remidi_nilai_siswa_transaksi1_smt2_sosial', nah_kd_nilai_siswa_transaksi1_smt2_sosial='$nah_kd_nilai_siswa_transaksi1_smt2_sosial', uas_nilai_siswa_transaksi1_smt2_sosial='$uas_nilai_siswa_transaksi1_smt2_sosial', uas_remidi_nilai_siswa_transaksi1_smt2_sosial='$uas_remidi_nilai_siswa_transaksi1_smt2_sosial', na_uas_nilai_siswa_transaksi1_smt2_sosial='$na_uas_nilai_siswa_transaksi1_smt2_sosial', rerata_akhir_nilai_siswa_transaksi1_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi1_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD2sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi2_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi2_smt2_sosial    = $json_observasi_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi2_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi2_smt2_sosial       = $json_rerata_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi2_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi2_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi2_smt2_sosial          = $json_uas_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi2_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi2_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi2_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi2_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi2_smt2_sosial='$tes_tulis_nilai_siswa_transaksi2_smt2_sosial', observasi_nilai_siswa_transaksi2_smt2_sosial='$observasi_nilai_siswa_transaksi2_smt2_sosial', penugasan_nilai_siswa_transaksi2_smt2_sosial='$penugasan_nilai_siswa_transaksi2_smt2_sosial', rerata_nilai_siswa_transaksi2_smt2_sosial='$rerata_nilai_siswa_transaksi2_smt2_sosial', nh_remidi_nilai_siswa_transaksi2_smt2_sosial='$nh_remidi_nilai_siswa_transaksi2_smt2_sosial', nah_kd_nilai_siswa_transaksi2_smt2_sosial='$nah_kd_nilai_siswa_transaksi2_smt2_sosial', uas_nilai_siswa_transaksi2_smt2_sosial='$uas_nilai_siswa_transaksi2_smt2_sosial', uas_remidi_nilai_siswa_transaksi2_smt2_sosial='$uas_remidi_nilai_siswa_transaksi2_smt2_sosial', na_uas_nilai_siswa_transaksi2_smt2_sosial='$na_uas_nilai_siswa_transaksi2_smt2_sosial', rerata_akhir_nilai_siswa_transaksi2_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi2_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD3sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi3_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi3_smt2_sosial    = $json_observasi_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi3_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi3_smt2_sosial       = $json_rerata_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi3_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi3_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi3_smt2_sosial          = $json_uas_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi3_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi3_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi3_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi3_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi3_smt2_sosial='$tes_tulis_nilai_siswa_transaksi3_smt2_sosial', observasi_nilai_siswa_transaksi3_smt2_sosial='$observasi_nilai_siswa_transaksi3_smt2_sosial', penugasan_nilai_siswa_transaksi3_smt2_sosial='$penugasan_nilai_siswa_transaksi3_smt2_sosial', rerata_nilai_siswa_transaksi3_smt2_sosial='$rerata_nilai_siswa_transaksi3_smt2_sosial', nh_remidi_nilai_siswa_transaksi3_smt2_sosial='$nh_remidi_nilai_siswa_transaksi3_smt2_sosial', nah_kd_nilai_siswa_transaksi3_smt2_sosial='$nah_kd_nilai_siswa_transaksi3_smt2_sosial', uas_nilai_siswa_transaksi3_smt2_sosial='$uas_nilai_siswa_transaksi3_smt2_sosial', uas_remidi_nilai_siswa_transaksi3_smt2_sosial='$uas_remidi_nilai_siswa_transaksi3_smt2_sosial', na_uas_nilai_siswa_transaksi3_smt2_sosial='$na_uas_nilai_siswa_transaksi3_smt2_sosial', rerata_akhir_nilai_siswa_transaksi3_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi3_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD4sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi4_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi4_smt2_sosial    = $json_observasi_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi4_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi4_smt2_sosial       = $json_rerata_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi4_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi4_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi4_smt2_sosial          = $json_uas_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi4_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi4_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi4_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi4_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi4_smt2_sosial='$tes_tulis_nilai_siswa_transaksi4_smt2_sosial', observasi_nilai_siswa_transaksi4_smt2_sosial='$observasi_nilai_siswa_transaksi4_smt2_sosial', penugasan_nilai_siswa_transaksi4_smt2_sosial='$penugasan_nilai_siswa_transaksi4_smt2_sosial', rerata_nilai_siswa_transaksi4_smt2_sosial='$rerata_nilai_siswa_transaksi4_smt2_sosial', nh_remidi_nilai_siswa_transaksi4_smt2_sosial='$nh_remidi_nilai_siswa_transaksi4_smt2_sosial', nah_kd_nilai_siswa_transaksi4_smt2_sosial='$nah_kd_nilai_siswa_transaksi4_smt2_sosial', uas_nilai_siswa_transaksi4_smt2_sosial='$uas_nilai_siswa_transaksi4_smt2_sosial', uas_remidi_nilai_siswa_transaksi4_smt2_sosial='$uas_remidi_nilai_siswa_transaksi4_smt2_sosial', na_uas_nilai_siswa_transaksi4_smt2_sosial='$na_uas_nilai_siswa_transaksi4_smt2_sosial', rerata_akhir_nilai_siswa_transaksi4_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi4_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD5sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi5_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi5_smt2_sosial    = $json_observasi_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi5_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi5_smt2_sosial       = $json_rerata_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi5_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi5_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi5_smt2_sosial          = $json_uas_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi5_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi5_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi5_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi5_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi5_smt2_sosial='$tes_tulis_nilai_siswa_transaksi5_smt2_sosial', observasi_nilai_siswa_transaksi5_smt2_sosial='$observasi_nilai_siswa_transaksi5_smt2_sosial', penugasan_nilai_siswa_transaksi5_smt2_sosial='$penugasan_nilai_siswa_transaksi5_smt2_sosial', rerata_nilai_siswa_transaksi5_smt2_sosial='$rerata_nilai_siswa_transaksi5_smt2_sosial', nh_remidi_nilai_siswa_transaksi5_smt2_sosial='$nh_remidi_nilai_siswa_transaksi5_smt2_sosial', nah_kd_nilai_siswa_transaksi5_smt2_sosial='$nah_kd_nilai_siswa_transaksi5_smt2_sosial', uas_nilai_siswa_transaksi5_smt2_sosial='$uas_nilai_siswa_transaksi5_smt2_sosial', uas_remidi_nilai_siswa_transaksi5_smt2_sosial='$uas_remidi_nilai_siswa_transaksi5_smt2_sosial', na_uas_nilai_siswa_transaksi5_smt2_sosial='$na_uas_nilai_siswa_transaksi5_smt2_sosial', rerata_akhir_nilai_siswa_transaksi5_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi5_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD6sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi6_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi6_smt2_sosial    = $json_observasi_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi6_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi6_smt2_sosial       = $json_rerata_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi6_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi6_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi6_smt2_sosial          = $json_uas_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi6_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi6_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi6_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi6_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi6_smt2_sosial='$tes_tulis_nilai_siswa_transaksi6_smt2_sosial', observasi_nilai_siswa_transaksi6_smt2_sosial='$observasi_nilai_siswa_transaksi6_smt2_sosial', penugasan_nilai_siswa_transaksi6_smt2_sosial='$penugasan_nilai_siswa_transaksi6_smt2_sosial', rerata_nilai_siswa_transaksi6_smt2_sosial='$rerata_nilai_siswa_transaksi6_smt2_sosial', nh_remidi_nilai_siswa_transaksi6_smt2_sosial='$nh_remidi_nilai_siswa_transaksi6_smt2_sosial', nah_kd_nilai_siswa_transaksi6_smt2_sosial='$nah_kd_nilai_siswa_transaksi6_smt2_sosial', uas_nilai_siswa_transaksi6_smt2_sosial='$uas_nilai_siswa_transaksi6_smt2_sosial', uas_remidi_nilai_siswa_transaksi6_smt2_sosial='$uas_remidi_nilai_siswa_transaksi6_smt2_sosial', na_uas_nilai_siswa_transaksi6_smt2_sosial='$na_uas_nilai_siswa_transaksi6_smt2_sosial', rerata_akhir_nilai_siswa_transaksi6_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi6_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD7sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi7_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi7_smt2_sosial    = $json_observasi_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi7_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi7_smt2_sosial       = $json_rerata_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi7_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi7_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi7_smt2_sosial          = $json_uas_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi7_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi7_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi7_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi7_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set  tes_tulis_nilai_siswa_transaksi7_smt2_sosial='$tes_tulis_nilai_siswa_transaksi7_smt2_sosial', observasi_nilai_siswa_transaksi7_smt2_sosial='$observasi_nilai_siswa_transaksi7_smt2_sosial', penugasan_nilai_siswa_transaksi7_smt2_sosial='$penugasan_nilai_siswa_transaksi7_smt2_sosial', rerata_nilai_siswa_transaksi7_smt2_sosial='$rerata_nilai_siswa_transaksi7_smt2_sosial', nh_remidi_nilai_siswa_transaksi7_smt2_sosial='$nh_remidi_nilai_siswa_transaksi7_smt2_sosial', nah_kd_nilai_siswa_transaksi7_smt2_sosial='$nah_kd_nilai_siswa_transaksi7_smt2_sosial', uas_nilai_siswa_transaksi7_smt2_sosial='$uas_nilai_siswa_transaksi7_smt2_sosial', uas_remidi_nilai_siswa_transaksi7_smt2_sosial='$uas_remidi_nilai_siswa_transaksi7_smt2_sosial', na_uas_nilai_siswa_transaksi7_smt2_sosial='$na_uas_nilai_siswa_transaksi7_smt2_sosial', rerata_akhir_nilai_siswa_transaksi7_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi7_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD8sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi8_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi8_smt2_sosial    = $json_observasi_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi8_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi8_smt2_sosial       = $json_rerata_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi8_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi8_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi8_smt2_sosial          = $json_uas_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi8_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi8_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi8_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi8_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi8_smt2_sosial='$tes_tulis_nilai_siswa_transaksi8_smt2_sosial', observasi_nilai_siswa_transaksi8_smt2_sosial='$observasi_nilai_siswa_transaksi8_smt2_sosial', penugasan_nilai_siswa_transaksi8_smt2_sosial='$penugasan_nilai_siswa_transaksi8_smt2_sosial', rerata_nilai_siswa_transaksi8_smt2_sosial='$rerata_nilai_siswa_transaksi8_smt2_sosial', nh_remidi_nilai_siswa_transaksi8_smt2_sosial='$nh_remidi_nilai_siswa_transaksi8_smt2_sosial', nah_kd_nilai_siswa_transaksi8_smt2_sosial='$nah_kd_nilai_siswa_transaksi8_smt2_sosial', uas_nilai_siswa_transaksi8_smt2_sosial='$uas_nilai_siswa_transaksi8_smt2_sosial', uas_remidi_nilai_siswa_transaksi8_smt2_sosial='$uas_remidi_nilai_siswa_transaksi8_smt2_sosial', na_uas_nilai_siswa_transaksi8_smt2_sosial='$na_uas_nilai_siswa_transaksi8_smt2_sosial', rerata_akhir_nilai_siswa_transaksi8_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi8_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD9sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi9_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi9_smt2_sosial    = $json_observasi_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi9_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi9_smt2_sosial       = $json_rerata_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi9_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi9_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi9_smt2_sosial          = $json_uas_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi9_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi9_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi9_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi9_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi9_smt2_sosial='$tes_tulis_nilai_siswa_transaksi9_smt2_sosial', observasi_nilai_siswa_transaksi9_smt2_sosial='$observasi_nilai_siswa_transaksi9_smt2_sosial', penugasan_nilai_siswa_transaksi9_smt2_sosial='$penugasan_nilai_siswa_transaksi9_smt2_sosial', rerata_nilai_siswa_transaksi9_smt2_sosial='$rerata_nilai_siswa_transaksi9_smt2_sosial', nh_remidi_nilai_siswa_transaksi9_smt2_sosial='$nh_remidi_nilai_siswa_transaksi9_smt2_sosial', nah_kd_nilai_siswa_transaksi9_smt2_sosial='$nah_kd_nilai_siswa_transaksi9_smt2_sosial', uas_nilai_siswa_transaksi9_smt2_sosial='$uas_nilai_siswa_transaksi9_smt2_sosial', uas_remidi_nilai_siswa_transaksi9_smt2_sosial='$uas_remidi_nilai_siswa_transaksi9_smt2_sosial', na_uas_nilai_siswa_transaksi9_smt2_sosial='$na_uas_nilai_siswa_transaksi9_smt2_sosial', rerata_akhir_nilai_siswa_transaksi9_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi9_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }
// //KD10sosialSMT2
// for ($i=0; $i <$jumlah_siswa; $i++) {
//   $tes_tulis_nilai_siswa_transaksi10_smt2_sosial    = $json_tes_tulis_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $observasi_nilai_siswa_transaksi10_smt2_sosial    = $json_observasi_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $penugasan_nilai_siswa_transaksi10_smt2_sosial    = $json_penugasan_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $rerata_nilai_siswa_transaksi10_smt2_sosial       = $json_rerata_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $nh_remidi_nilai_siswa_transaksi10_smt2_sosial    = $json_nh_remidi_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $nah_kd_nilai_siswa_transaksi10_smt2_sosial       = $json_nah_kd_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $uas_nilai_siswa_transaksi10_smt2_sosial          = $json_uas_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $uas_remidi_nilai_siswa_transaksi10_smt2_sosial   = $json_uas_remidi_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $na_uas_nilai_siswa_transaksi10_smt2_sosial       = $json_na_uas_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $rerata_akhir_nilai_siswa_transaksi10_smt2_sosial = $json_rerata_akhir_nilai_siswa_transaksi10_smt2_sosial[$i];
//   $nis_siswa = $json_nis_siswa[$i];
//   $update_nilaiSiswa = "UPDATE nilai_siswa_transaksi_smt2_sosial set tes_tulis_nilai_siswa_transaksi10_smt2_sosial='$tes_tulis_nilai_siswa_transaksi10_smt2_sosial', observasi_nilai_siswa_transaksi10_smt2_sosial='$observasi_nilai_siswa_transaksi10_smt2_sosial', penugasan_nilai_siswa_transaksi10_smt2_sosial='$penugasan_nilai_siswa_transaksi10_smt2_sosial', rerata_nilai_siswa_transaksi10_smt2_sosial='$rerata_nilai_siswa_transaksi10_smt2_sosial', nh_remidi_nilai_siswa_transaksi10_smt2_sosial='$nh_remidi_nilai_siswa_transaksi10_smt2_sosial', nah_kd_nilai_siswa_transaksi10_smt2_sosial='$nah_kd_nilai_siswa_transaksi10_smt2_sosial', uas_nilai_siswa_transaksi10_smt2_sosial='$uas_nilai_siswa_transaksi10_smt2_sosial', uas_remidi_nilai_siswa_transaksi10_smt2_sosial='$uas_remidi_nilai_siswa_transaksi10_smt2_sosial', na_uas_nilai_siswa_transaksi10_smt2_sosial='$na_uas_nilai_siswa_transaksi10_smt2_sosial', rerata_akhir_nilai_siswa_transaksi10_smt2_sosial='$rerata_akhir_nilai_siswa_transaksi10_smt2_sosial' where nis_siswa_nilai_siswa_transaksi_smt2_sosial='$nis_siswa' && nama_kelas_nilai_siswa_transaksi_smt2_sosial='$id_kelas_daftar' && id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial='$id_mata_pelajaran'";
//   if (mysqli_query($connect, $update_nilaiSiswa)) {
//   }
//   else {
//     echo "Gagal update nilai";
//     echo "</br>";
//   }
// }

header('location:../halaman_guru_daftar_mengampu_kelas.php');
