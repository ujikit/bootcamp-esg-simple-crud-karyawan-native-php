<?php

if($_SESSION['nama_guru']){

    //inialisasi semester

    $query_dataSekolah = "SELECT * from data_sekolah";
    $result_dataSekolah = mysqli_query($connect, $query_dataSekolah);
    $row_dataSekolah = mysqli_fetch_array($result_dataSekolah);

    $query_pegawai = "SELECT * from data_pegawai where nama_pegawai='$nama_guru'";
    $result_pegawai = mysqli_query($connect, $query_pegawai);
    $row_pegawai = mysqli_fetch_array($result_pegawai);
    $nip_pegawai = $row_pegawai['nip_pegawai'];

    $query_dataSiswa = "SELECT * from data_siswa where nis_siswa='$nis_siswa'";
    $result = mysqli_query($connect, $query_dataSiswa);
    $row = mysqli_fetch_array($result);

  if ($kelas_daftar_kelas == "10" || $kelas_daftar_kelas == "11") {

    //inisiasi makul bertanda petik
    $alquran = "a. Al Qur'an Hadits";

    //Create a new PDF file
    $pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
    $pdf->SetFont('Arial','B',16);
    $pdf->AddPage("P","A4"); //A3,A4,A5,Letter,Legal

    //Menambahkan Gambar
    //$pdf->Image('../foto/logo.png',10,10,-175);

    $pdf->SetFont('Arial','',9.3);
    $pdf->text(18,15,'Nama Sekolah ');
    $pdf->text(60,15,':');
    $pdf->text(65,15,$row_dataSekolah['nama_sekolah_data_sekolah']);

    $pdf->text(18,20,'Alamat Sekolah ');
    $pdf->text(60,20,':');
    $pdf->text(65,20,$row_dataSekolah['alamat_sekolah_data_sekolah']);

    $pdf->text(18,25,'Nama Peserta Didik ');
    $pdf->text(60,25,':');
    $pdf->text(65,25,$row['nama_siswa']);

    $pdf->text(18,30,'No Induk / NISN ');
    $pdf->text(60,30,':');
    $pdf->text(65,30,$row['nisn_siswa']);

    $pdf->text(130,15,'Kelas ');
    $pdf->text(160,15,':');
    $pdf->text(165,15,$kelas_siswa);

    $pdf->text(130,20,'Semester ');
    $pdf->text(160,20,':');
    $pdf->text(165,20,$semester_angka);
    $pdf->text(168,20,"/");
    $pdf->text(170,20,$semester_huruf);

    $pdf->text(130,25,'Tahun Pelajaran ');
    $pdf->text(160,25,':');
    $pdf->text(165,25,$row_dataSekolah['tahun_pelajaran_sekolah_data_sekolah']);

    //First create each Field Name
    //Gray color filling each Field Name box
    $pdf->SetFillColor(110,180,230);
    //Bold Font for Field Name

    // $pdf->text(18,40,$no++.'.');
    // $pdf->text(18,40,'00000000000000000');
    $pdf->SetFont('Arial','B',9);
    $pdf->text(18,40,'B. Pengetahuan dan Keterampilan');
    // $pdf->text(85,40, $row['nisn_siswa']);

    //First create each Field Name
    //Gray color filling each Field Name box
    $pdf->SetFillColor(110,180,230);
    //Bold Font for Field Name
    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(51);
    $pdf->SetX(18);
    $pdf->Cell(85,4,'Kelompok A',1,0,'');
    //pengetahuan
    $pdf->SetY(47);
    $pdf->SetX(118);
    $pdf->Cell(35,3.9,'Angka',1,0,'C');//awalnya lebar kolom 17
    // $pdf->Cell(18,3.9,'Predikat',1,0,'C');
    $pdf->SetY(51);
    $pdf->SetX(118);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(35,3.9,'1 - 100',1,0,'C');//awalnya lebar kolom 17
    // $pdf->Cell(18,3.9,'A/B/C/D',1,0,'C');
    //keterampilan
    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(47);
    $pdf->SetX(153);
    $pdf->Cell(35,3.9,'Angka',1,0,'C');
    // $pdf->Cell(18,3.9,'Predikat',1,0,'C');
    $pdf->SetY(51);
    $pdf->SetX(153);
    $pdf->SetFont('Arial','',7.5);
    $pdf->Cell(35,3.9,'1 - 100',1,0,'C');
    // $pdf->Cell(18,3.9,'A/B/C/D',1,0,'C');
    //1. pendidikan agama dan budi pekerti

    // $query_pengetahuan1 = "SELECT * from nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa='$nis_siswa'";
    // $result_pengetahuan1 = mysqli_query($connect, $query_pengetahuan1);
    // $row_pengetahuan1 = mysqli_fetch_array($result_pengetahuan1);
    //
    // $query_keterampilan1 = "SELECT * from nama_kelas_nilai_siswa_transaksi_smt1_keterampilan where nis_siswa='$nis_siswa'";
    // $result_keterampilan1 = mysqli_query($connect, $query_keterampilan1);
    // $row_keterampilan1 = mysqli_fetch_array($result_keterampilan1);

    $query_kkm = "SELECT * from mata_pelajaran_transaksi where id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm = mysqli_query($connect, $query_kkm);
    $row_kkm = mysqli_fetch_array($result_kkm);

    $pdf->SetY(55);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Agama & Budi Pekerti',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,'',1,0,'C');//ukuran awal 17
    // //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    // $pdf->Cell(18,3.9,'asd',1,0,'');

    //a. alquran
    $query_kkm_aqh = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='aqh' and id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_aqh = mysqli_query($connect, $query_kkm_aqh);
    $row_kkm_aqh = mysqli_fetch_array($result_kkm_aqh);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='aqh' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='aqh' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(59);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,$alquran,1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_aqh['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    // //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    // //$pdf->Cell(18,3.9,'',1,0,'C');

    //b. akidah akhlak
    $query_kkm_aa = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='aa' and id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_aa = mysqli_query($connect, $query_kkm_aa);
    $row_kkm_aa = mysqli_fetch_array($result_kkm_aa);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='aa' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='aa' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(63);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'b. Akidah Akhlak',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_aa['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //c. fikih
    $query_kkm_fqh = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='fqh' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_fqh = mysqli_query($connect, $query_kkm_fqh);
    $row_kkm_fqh = mysqli_fetch_array($result_kkm_fqh);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='fqh' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='fqh' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(67);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'c. Fikih',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_fqh['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //d. sejarah kebudayaan islam
    $query_kkm_ski = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ski' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ski = mysqli_query($connect, $query_kkm_ski);
    $row_kkm_ski = mysqli_fetch_array($result_kkm_ski);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ski' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ski' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(71);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'d. Sejarah Kebudayaan Islam',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_ski['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. pendidikan Pancasila
    $query_kkm_pkn = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='pkn' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_pkn = mysqli_query($connect, $query_kkm_pkn);
    $row_kkm_pkn = mysqli_fetch_array($result_kkm_pkn);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='pkn' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='pkn' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(75);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Pancasila dan Kewarganegaraan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_pkn['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. bahasa indonesia
    $query_kkm_bi = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bi' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bi = mysqli_query($connect, $query_kkm_bi);
    $row_kkm_bi = mysqli_fetch_array($result_kkm_bi);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bi' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bi' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(79);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Indonesia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bi['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. bahasa Arab
    $query_kkm_barab = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='barab' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_barab = mysqli_query($connect, $query_kkm_barab);
    $row_kkm_barab = mysqli_fetch_array($result_kkm_barab);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='barab' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='barab' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(83);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Arab',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_barab['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //5. matematika
    $query_kkm_mtk = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='mtk' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_mtk = mysqli_query($connect, $query_kkm_mtk);
    $row_kkm_mtk = mysqli_fetch_array($result_kkm_mtk);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(87);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'5',1,0,'C');
    $pdf->Cell(80,3.9,'Matematika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_mtk['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //6. Sejarah Indonesia
    $query_kkm_si = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='si' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_si = mysqli_query($connect, $query_kkm_si);
    $row_kkm_si = mysqli_fetch_array($result_kkm_si);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='si' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='si' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(91);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'6',1,0,'C');
    $pdf->Cell(80,3.9,'Sejarah Indonesia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_si['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //7. Bahasa inggris
    $query_kkm_bing = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bing' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bing = mysqli_query($connect, $query_kkm_bing);
    $row_kkm_bing = mysqli_fetch_array($result_kkm_bing);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bing' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bing' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(95);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'7',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Inggris',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bing['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //kelompok b

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(99);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Kelompok B',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Seni Budaya
    $query_kkm_senbud = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='senbud' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_senbud = mysqli_query($connect, $query_kkm_senbud);
    $row_kkm_senbud = mysqli_fetch_array($result_kkm_senbud);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='senbud' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='senbud' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(103);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Seni Budaya',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_senbud['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Pendidikan Jasmani, Olahraga dan Kesehatan
    $query_kkm_penjas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='penjas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_penjas = mysqli_query($connect, $query_kkm_penjas);
    $row_kkm_penjas = mysqli_fetch_array($result_kkm_penjas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='penjas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='penjas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(107);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Jasmani, Olahraga dan Kesehatan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_penjas['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. Prakarya dan Kewirausahaan
    $query_kkm_prakarya = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='prakarya' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_prakarya = mysqli_query($connect, $query_kkm_prakarya);
    $row_kkm_prakarya = mysqli_fetch_array($result_kkm_prakarya);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='prakarya' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='prakarya' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(111);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Prakarya dan Kewirausahaan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_prakarya['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. Bahasa Jawa
    $query_kkm_bjawa = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bjawa' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bjawa = mysqli_query($connect, $query_kkm_bjawa);
    $row_kkm_bjawa = mysqli_fetch_array($result_kkm_bjawa);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bjawa' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bjawa' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(115);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Jawa',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bjawa['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //5. PPMB
    $query_kkm_ppmb = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ppmb' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ppmb = mysqli_query($connect, $query_kkm_ppmb);
    $row_kkm_ppmb = mysqli_fetch_array($result_kkm_ppmb);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ppmb' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ppmb' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(119);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'5',1,0,'C');
    $pdf->Cell(80,3.9,'PPMB',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_ppmb['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //kelompok c

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(123);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Kelompok C',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //I. Peminatan

    $pdf->SetY(127);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'I. Peminatan',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Matematika
    $query_kkm_mtk = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='mtk' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_mtk = mysqli_query($connect, $query_kkm_mtk);
    $row_kkm_mtk = mysqli_fetch_array($result_kkm_mtk);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(131);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Matematika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_mtk['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Kimia
    $query_kkm_kim = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='kim' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_kim = mysqli_query($connect, $query_kkm_kim);
    $row_kkm_kim = mysqli_fetch_array($result_kkm_kim);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='kim' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='kim' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(135);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Kimia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_kim['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. Fisika
    $query_kkm_fis = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='fis' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_fis = mysqli_query($connect, $query_kkm_fis);
    $row_kkm_fis = mysqli_fetch_array($result_kkm_fis);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='fis' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='fis' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(139);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Fisika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_fis['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. Biologi
    $query_kkm_bio = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bio' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bio = mysqli_query($connect, $query_kkm_bio);
    $row_kkm_bio = mysqli_fetch_array($result_kkm_bio);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bio' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bio' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(143);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Biologi',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bio['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //II. Lintas Minat

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(147);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Lintas Minat / atau Pendalaman Minat',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Bahasa Inggris
    $query_kkm_binglintas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='binglintas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_binglintas = mysqli_query($connect, $query_kkm_binglintas);
    $row_kkm_binglintas = mysqli_fetch_array($result_kkm_binglintas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='binglintas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='binglintas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(151);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Inggris Lintas Minat',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_binglintas['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Ekonomi Lintas Minat
    $query_kkm_ekolintas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ekolintas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ekolintas = mysqli_query($connect, $query_kkm_ekolintas);
    $row_kkm_ekolintas = mysqli_fetch_array($result_kkm_ekolintas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ekolintas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ekolintas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(155);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Ekonomi Lintas Minat',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_ekolintas['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    $query_dataSiswa = "SELECT * from mata_pelajaran_transaksi";
    $result = mysqli_query($connect, $query_dataSiswa);
    $row = mysqli_fetch_array($result);

    // // Tabel Interval
    // $pdf->text(18,164,'Tabel Interval Predikat Berdasarkan KKM');
    // $pdf->SetY(167);
    // $pdf->SetX(18);
    // $pdf->Cell(5,13,'',1,0,'C');
    // $pdf->SetFont('Arial','B',7);
    // $pdf->TextWithDirection(21.5,176.5,'KKM','U');
    // $pdf->SetFont('Arial','',7);
    // $pdf->Cell(165,4,'PREDIKAT',1,0,'C');
    // $pdf->SetY(171);
    // $pdf->SetX(23);
    // $pdf->Cell(41.25,9,'D = Kurang',1,0,'C');
    // $pdf->Cell(41.25,9,'C = Cukup',1,0,'C');
    // $pdf->Cell(41.25,9,'B = Baik',1,0,'C');
    // $pdf->Cell(41.25,9,'A = Sangat Baik',1,0,'C');
    // $pdf->SetY(180);
    // $pdf->SetX(18);
    // $pdf->Cell(5,5,'00',1,0,'C');
    // $pdf->Cell(41.25,5,'< 00',1,0,'C');
    // $pdf->Cell(41.25,5,'00 <= n < 00',1,0,'C');
    // $pdf->Cell(41.25,5,'00 <= n <= 00',1,0,'C');
    // $pdf->Cell(41.25,5,'> 00',1,0,'C');

    $pdf->text(45,205,'Mengetahui');
    $pdf->text(45,209,'Orang tua / Wali');
    $pdf->text(45,230,'(...............................)');

    $date =new DateTime($row_dataSekolah['tanggal_jadi_kepala_sekolah_sekolah']); //this returns the current date time
    $date = date_format($date, ' j F Y');
    $pdf->text(130,205,$row_dataSekolah['asal_kota_sekolah_sekolah'].', '.$date);
    $pdf->text(130,209,'Wali Kelas, ');

    $query_dataSiswa = "SELECT * from kelas_transaksi inner join data_pegawai on kelas_transaksi.wali_kelas_transaksi = data_pegawai.nama_pegawai  where id_kelas_daftar='$id_kelas_daftar'";
    $result = mysqli_query($connect, $query_dataSiswa);
    $row = mysqli_fetch_array($result);
    $nip_pegawai = $row['nip_pegawai'];

    $pdf->text(130,230,$row['wali_kelas_transaksi']);
    $pdf->text(130,234,'NIP. '.$nip_pegawai);

    $pdf->text(90,240,'Kepala Madrasah');
    $pdf->text(90,260,$row_dataSekolah['nama_kepala_sekolah_data_sekolah']);
    $pdf->text(90,264,'NIP. '.$row_dataSekolah['nip_kepala_sekolah_data_sekolah']);

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(43);
    $pdf->SetX(18);
    $pdf->Cell(85,8,'MATA PELAJARAN',1,0,'C');
    $pdf->Cell(15,12,'KKM',1,0,'C');
    $pdf->Cell(35,3.9,'Pengetahuan',1,0,'C');
    $pdf->Cell(35,3.9,'Keterampilan',1,0,'C');

      // foreach($result as $row) {
      // 	$pdf->SetFont('Arial','',10);
      // 	$pdf->Ln();
      // 	foreach($row as $column)
      //     $pdf->SetX(25);
      // 		$pdf->Cell(15,8,$no++,1,0,'C');
      //     $pdf->SetX(40);
      // 		$pdf->Cell(70,8,$column,1,0,'C');
      // }

      $pdf->Output();

  }
  elseif ($kelas_daftar_kelas == "12") {

    //inisiasi makul bertanda petik
    $alquran = "a. Al Qur'an Hadits";

    //Create a new PDF file
    $pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
    $pdf->SetFont('Arial','B',16);
    $pdf->AddPage("P","A4"); //A3,A4,A5,Letter,Legal

    //Menambahkan Gambar
    //$pdf->Image('../foto/logo.png',10,10,-175);

    $pdf->SetFont('Arial','',9.3);
    $pdf->text(18,15,'Nama Sekolah ');
    $pdf->text(60,15,':');
    $pdf->text(65,15,$row_dataSekolah['nama_sekolah_data_sekolah']);

    $pdf->text(18,20,'Alamat Sekolah ');
    $pdf->text(60,20,':');
    $pdf->text(65,20,$row_dataSekolah['alamat_sekolah_data_sekolah']);

    $pdf->text(18,25,'Nama Peserta Didik ');
    $pdf->text(60,25,':');
    $pdf->text(65,25,$row['nama_siswa']);

    $pdf->text(18,30,'No Induk / NISN ');
    $pdf->text(60,30,':');
    $pdf->text(65,30,$row['nisn_siswa']);

    $pdf->text(130,15,'Kelas ');
    $pdf->text(160,15,':');
    $pdf->text(165,15,$kelas_siswa);

    $pdf->text(130,20,'Semester ');
    $pdf->text(160,20,':');
    $pdf->text(165,20,$semester_angka);
    $pdf->text(168,20,"/");
    $pdf->text(170,20,$semester_huruf);

    $pdf->text(130,25,'Tahun Pelajaran ');
    $pdf->text(160,25,':');
    $pdf->text(165,25,$row_dataSekolah['tahun_pelajaran_sekolah_data_sekolah']);

    //First create each Field Name
    //Gray color filling each Field Name box
    $pdf->SetFillColor(110,180,230);
    //Bold Font for Field Name

    // $pdf->text(18,40,$no++.'.');
    // $pdf->text(18,40,'00000000000000000');
    $pdf->SetFont('Arial','B',9);
    $pdf->text(18,40,'B. Pengetahuan dan Keterampilan');
    // $pdf->text(85,40, $row['nisn_siswa']);

    //First create each Field Name
    //Gray color filling each Field Name box
    $pdf->SetFillColor(110,180,230);
    //Bold Font for Field Name
    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(51);
    $pdf->SetX(18);
    $pdf->Cell(85,4,'Kelompok A',1,0,'');
    //pengetahuan
    $pdf->SetY(47);
    $pdf->SetX(118);
    $pdf->Cell(35,3.9,'Angka',1,0,'C');//awalnya lebar kolom 17
    // $pdf->Cell(18,3.9,'Predikat',1,0,'C');
    $pdf->SetY(51);
    $pdf->SetX(118);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(35,3.9,'1 - 100',1,0,'C');//awalnya lebar kolom 17
    // $pdf->Cell(18,3.9,'A/B/C/D',1,0,'C');
    //keterampilan
    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(47);
    $pdf->SetX(153);
    $pdf->Cell(35,3.9,'Angka',1,0,'C');
    // $pdf->Cell(18,3.9,'Predikat',1,0,'C');
    $pdf->SetY(51);
    $pdf->SetX(153);
    $pdf->SetFont('Arial','',7.5);
    $pdf->Cell(35,3.9,'1 - 100',1,0,'C');
    // $pdf->Cell(18,3.9,'A/B/C/D',1,0,'C');
    //1. pendidikan agama dan budi pekerti

    // $query_pengetahuan1 = "SELECT * from nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa='$nis_siswa'";
    // $result_pengetahuan1 = mysqli_query($connect, $query_pengetahuan1);
    // $row_pengetahuan1 = mysqli_fetch_array($result_pengetahuan1);
    //
    // $query_keterampilan1 = "SELECT * from nama_kelas_nilai_siswa_transaksi_smt1_keterampilan where nis_siswa='$nis_siswa'";
    // $result_keterampilan1 = mysqli_query($connect, $query_keterampilan1);
    // $row_keterampilan1 = mysqli_fetch_array($result_keterampilan1);

    $query_kkm = "SELECT * from mata_pelajaran_transaksi where id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm = mysqli_query($connect, $query_kkm);
    $row_kkm = mysqli_fetch_array($result_kkm);

    $pdf->SetY(55);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Agama & Budi Pekerti',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,'',1,0,'C');//ukuran awal 17
    // //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    // $pdf->Cell(18,3.9,'asd',1,0,'');

    //a. alquran
    $query_kkm_aqh = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='aqh' and id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_aqh = mysqli_query($connect, $query_kkm_aqh);
    $row_kkm_aqh = mysqli_fetch_array($result_kkm_aqh);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='aqh' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='aqh' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(59);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,$alquran,1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_aqh['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    // //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    // //$pdf->Cell(18,3.9,'',1,0,'C');

    //b. akidah akhlak
    $query_kkm_aa = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='aa' and id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_aa = mysqli_query($connect, $query_kkm_aa);
    $row_kkm_aa = mysqli_fetch_array($result_kkm_aa);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='aa' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='aa' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(63);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'b. Akidah Akhlak',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_aa['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //c. fikih
    $query_kkm_fqh = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='fqh' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_fqh = mysqli_query($connect, $query_kkm_fqh);
    $row_kkm_fqh = mysqli_fetch_array($result_kkm_fqh);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='fqh' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='fqh' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(67);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'c. Fikih',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_fqh['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //d. sejarah kebudayaan islam
    $query_kkm_ski = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ski' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ski = mysqli_query($connect, $query_kkm_ski);
    $row_kkm_ski = mysqli_fetch_array($result_kkm_ski);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ski' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ski' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(71);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'',1,0,'C');
    $pdf->Cell(80,3.9,'d. Sejarah Kebudayaan Islam',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_ski['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. pendidikan Pancasila
    $query_kkm_pkn = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='pkn' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_pkn = mysqli_query($connect, $query_kkm_pkn);
    $row_kkm_pkn = mysqli_fetch_array($result_kkm_pkn);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='pkn' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='pkn' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(75);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Pancasila dan Kewarganegaraan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_pkn['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. bahasa indonesia
    $query_kkm_bi = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bi' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bi = mysqli_query($connect, $query_kkm_bi);
    $row_kkm_bi = mysqli_fetch_array($result_kkm_bi);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bi' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bi' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(79);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Indonesia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bi['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. bahasa Arab
    $query_kkm_barab = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='barab' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_barab = mysqli_query($connect, $query_kkm_barab);
    $row_kkm_barab = mysqli_fetch_array($result_kkm_barab);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='barab' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='barab' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(83);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Arab',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_barab['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //5. matematika
    $query_kkm_mtk = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='mtk' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_mtk = mysqli_query($connect, $query_kkm_mtk);
    $row_kkm_mtk = mysqli_fetch_array($result_kkm_mtk);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(87);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'5',1,0,'C');
    $pdf->Cell(80,3.9,'Matematika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_mtk['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //6. Sejarah Indonesia
    $query_kkm_si = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='si' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_si = mysqli_query($connect, $query_kkm_si);
    $row_kkm_si = mysqli_fetch_array($result_kkm_si);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='si' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='si' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(91);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'6',1,0,'C');
    $pdf->Cell(80,3.9,'Sejarah Indonesia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_si['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //7. Bahasa inggris
    $query_kkm_bing = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bing' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bing = mysqli_query($connect, $query_kkm_bing);
    $row_kkm_bing = mysqli_fetch_array($result_kkm_bing);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bing' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bing' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(95);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'7',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Inggris',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bing['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //kelompok b

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(99);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Kelompok B',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Seni Budaya
    $query_kkm_senbud = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='senbud' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_senbud = mysqli_query($connect, $query_kkm_senbud);
    $row_kkm_senbud = mysqli_fetch_array($result_kkm_senbud);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='senbud' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='senbud' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(103);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Seni Budaya',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_senbud['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Pendidikan Jasmani, Olahraga dan Kesehatan
    $query_kkm_penjas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='penjas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_penjas = mysqli_query($connect, $query_kkm_penjas);
    $row_kkm_penjas = mysqli_fetch_array($result_kkm_penjas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='penjas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='penjas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(107);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Pendidikan Jasmani, Olahraga dan Kesehatan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_penjas['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. Prakarya dan Kewirausahaan
    $query_kkm_prakarya = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='prakarya' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_prakarya = mysqli_query($connect, $query_kkm_prakarya);
    $row_kkm_prakarya = mysqli_fetch_array($result_kkm_prakarya);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='prakarya' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='prakarya' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(111);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Prakarya dan Kewirausahaan',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_prakarya['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. Bahasa Jawa
    $query_kkm_bjawa = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bjawa' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bjawa = mysqli_query($connect, $query_kkm_bjawa);
    $row_kkm_bjawa = mysqli_fetch_array($result_kkm_bjawa);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bjawa' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bjawa' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(115);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Bahasa Jawa',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bjawa['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //5. PPMB
    $query_kkm_ppmb = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ppmb' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ppmb = mysqli_query($connect, $query_kkm_ppmb);
    $row_kkm_ppmb = mysqli_fetch_array($result_kkm_ppmb);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ppmb' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ppmb' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(119);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'5',1,0,'C');
    $pdf->Cell(80,3.9,'PPMB',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_ppmb['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //kelompok c

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(123);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Kelompok C',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //I. Peminatan

    $pdf->SetY(127);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'I. Peminatan',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Matematika
    $query_kkm_mtk = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='mtk' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_mtk = mysqli_query($connect, $query_kkm_mtk);
    $row_kkm_mtk = mysqli_fetch_array($result_kkm_mtk);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='mtk' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(131);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'Matematika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_mtk['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Kimia
    $query_kkm_kim = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='kim' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_kim = mysqli_query($connect, $query_kkm_kim);
    $row_kkm_kim = mysqli_fetch_array($result_kkm_kim);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='kim' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='kim' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(135);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'Kimia',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_kim['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //3. Fisika
    $query_kkm_fis = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='fis' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_fis = mysqli_query($connect, $query_kkm_fis);
    $row_kkm_fis = mysqli_fetch_array($result_kkm_fis);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='fis' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='fis' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(139);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'3',1,0,'C');
    $pdf->Cell(80,3.9,'Fisika',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_fis['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //4. Biologi
    $query_kkm_bio = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='bio' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_bio = mysqli_query($connect, $query_kkm_bio);
    $row_kkm_bio = mysqli_fetch_array($result_kkm_bio);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='bio' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='bio' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(143);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'4',1,0,'C');
    $pdf->Cell(80,3.9,'Biologi',1,0,'');
    $pdf->Cell(15,3.9,$row_kkm_bio['kkm_rendah_mata_pelajaran_transaksi'],1,0,'C');
    $pdf->Cell(35,3.9,$row_pengetahuan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,$row_keterampilan_smt1['nilai_akhir_nilai_siswa_transaksi_smt1_keterampilan'],1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //II. Lintas Minat

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(147);
    $pdf->SetX(18);
    $pdf->Cell(85,3.9,'Lintas Minat / atau Pendalaman Minat',1,0,'');
    $pdf->Cell(15,3.9,'',1,0,'');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //1. Bahasa Inggris
    $query_kkm_binglintas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='binglintas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_binglintas = mysqli_query($connect, $query_kkm_binglintas);
    $row_kkm_binglintas = mysqli_fetch_array($result_kkm_binglintas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='binglintas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='binglintas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetFont('Arial','',7);
    $pdf->SetY(151);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'1',1,0,'C');
    $pdf->Cell(80,3.9,'',1,0,''); //bahasa inggris lintas minat
    $pdf->Cell(15,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    //2. Ekonomi Lintas Minat
    $query_kkm_ekolintas = "SELECT * from mata_pelajaran_transaksi where kd_mata_pelajaran_mata_pelajaran_transaksi='ekolintas' && id_kelas_daftar='$id_kelas_daftar'";
    $result_kkm_ekolintas = mysqli_query($connect, $query_kkm_ekolintas);
    $row_kkm_ekolintas = mysqli_fetch_array($result_kkm_ekolintas);

    $query_pengetahuan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_pengetahuan where nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan='ekolintas' and nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan='$nip_pegawai'";
    $result_pengetahuan_smt1 = mysqli_query($connect, $query_pengetahuan_smt1);
    $row_pengetahuan_smt1 = mysqli_fetch_array($result_pengetahuan_smt1);

    $query_keterampilan_smt1 = "SELECT * from nilai_siswa_transaksi_smt1_keterampilan where nis_siswa_nilai_siswa_transaksi_smt1_keterampilan='$nis_siswa' and id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan='ekolintas' and nama_kelas_nilai_siswa_transaksi_smt1_keterampilan='$id_kelas_daftar' and nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan='$nip_pegawai'";
    $result_keterampilan_smt1 = mysqli_query($connect, $query_keterampilan_smt1);
    $row_keterampilan_smt1 = mysqli_fetch_array($result_keterampilan_smt1);

    $pdf->SetY(155);
    $pdf->SetX(18);
    $pdf->Cell(5,3.9,'2',1,0,'C');
    $pdf->Cell(80,3.9,'',1,0,''); //ekonomi lintas minat
    $pdf->Cell(15,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');
    $pdf->Cell(35,3.9,'',1,0,'C');
    //$pdf->Cell(18,3.9,'',1,0,'C');

    $query_dataSiswa = "SELECT * from mata_pelajaran_transaksi";
    $result = mysqli_query($connect, $query_dataSiswa);
    $row = mysqli_fetch_array($result);

    // // Tabel Interval
    // $pdf->text(18,164,'Tabel Interval Predikat Berdasarkan KKM');
    // $pdf->SetY(167);
    // $pdf->SetX(18);
    // $pdf->Cell(5,13,'',1,0,'C');
    // $pdf->SetFont('Arial','B',7);
    // $pdf->TextWithDirection(21.5,176.5,'KKM','U');
    // $pdf->SetFont('Arial','',7);
    // $pdf->Cell(165,4,'PREDIKAT',1,0,'C');
    // $pdf->SetY(171);
    // $pdf->SetX(23);
    // $pdf->Cell(41.25,9,'D = Kurang',1,0,'C');
    // $pdf->Cell(41.25,9,'C = Cukup',1,0,'C');
    // $pdf->Cell(41.25,9,'B = Baik',1,0,'C');
    // $pdf->Cell(41.25,9,'A = Sangat Baik',1,0,'C');
    // $pdf->SetY(180);
    // $pdf->SetX(18);
    // $pdf->Cell(5,5,'00',1,0,'C');
    // $pdf->Cell(41.25,5,'< 00',1,0,'C');
    // $pdf->Cell(41.25,5,'00 <= n < 00',1,0,'C');
    // $pdf->Cell(41.25,5,'00 <= n <= 00',1,0,'C');
    // $pdf->Cell(41.25,5,'> 00',1,0,'C');

    $pdf->text(45,205,'Mengetahui');
    $pdf->text(45,209,'Orang tua / Wali');
    $pdf->text(45,230,'(...............................)');

    $date =new DateTime($row_dataSekolah['tanggal_jadi_kepala_sekolah_sekolah']); //this returns the current date time
    $date = date_format($date, ' j F Y');
    $pdf->text(130,205,$row_dataSekolah['asal_kota_sekolah_sekolah'].', '.$date);
    $pdf->text(130,209,'Wali Kelas, ');

    $query_dataSiswa = "SELECT * from kelas_transaksi inner join data_pegawai on kelas_transaksi.wali_kelas_transaksi = data_pegawai.nama_pegawai  where id_kelas_daftar='$id_kelas_daftar'";
    $result = mysqli_query($connect, $query_dataSiswa);
    $row = mysqli_fetch_array($result);
    $nip_pegawai = $row['nip_pegawai'];

    $pdf->text(130,230,$row['wali_kelas_transaksi']);
    $pdf->text(130,234,'NIP. '.$nip_pegawai);

    $pdf->text(90,240,'Kepala Madrasah');
    $pdf->text(90,260,$row_dataSekolah['nama_kepala_sekolah_data_sekolah']);
    $pdf->text(90,264,'NIP. '.$row_dataSekolah['nip_kepala_sekolah_data_sekolah']);

    $pdf->SetFont('Arial','B',7);
    $pdf->SetY(43);
    $pdf->SetX(18);
    $pdf->Cell(85,8,'MATA PELAJARAN',1,0,'C');
    $pdf->Cell(15,12,'KKM',1,0,'C');
    $pdf->Cell(35,3.9,'Pengetahuan',1,0,'C');
    $pdf->Cell(35,3.9,'Keterampilan',1,0,'C');

      // foreach($result as $row) {
      // 	$pdf->SetFont('Arial','',10);
      // 	$pdf->Ln();
      // 	foreach($row as $column)
      //     $pdf->SetX(25);
      // 		$pdf->Cell(15,8,$no++,1,0,'C');
      //     $pdf->SetX(40);
      // 		$pdf->Cell(70,8,$column,1,0,'C');
      // }

      $pdf->Output();

  }

}
else {
  header("location:index.php");
} ?>
