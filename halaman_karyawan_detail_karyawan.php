<?php
include_once "backend/koneksi.php";
$kd_karyawan = $_GET['kd_karyawan'];
$query = mysqli_query($connect, "SELECT * from karyawan where kd_karyawan='$kd_karyawan'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);

 ?>

 <!-- <div id="tampilDataPegawai" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content"> -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tampil Data Karyawan</h4>
    </div>
    <div class="modal-body">

      <div class="row">
        <div class="col-lg-12">
                    </br>
<form class="form-signin" action="backend/administrator_tambah_pegawai.php" method="post" enctype="multipart/form-data">
                    <div class="row" style="background:#66ff66">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                      <img  src="frontend/img/foto/karyawan/<?php echo $tampil['kd_karyawan']; ?>" class="img-circle" style="width:120px;margin-left:95px;padding:10px">
                    </div>

                    <div class="col-lg-4">
                    </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                      <div class="col-lg-4">
                       <label for="sel1">KD Karyawan : </label>
                         <input type="text" class="form-control" name="kd_karyawan" id="kd_karyawan" value="<?php echo $tampil['kd_karyawan']?>" readonly>
                       </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Nama Karyawan : </label>
                            <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $tampil['nama_karyawan']?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                        <label for="sel1">Hak Akses : </label>
                        <input type="text" class="form-control" name="kd_karyawan" id="kd_karyawan" value="<?php echo $tampil['hak_akses_karyawan']?>" readonly>
                       </br>
                      </div>
                    </div>
                    <div class="row" style="margin-top:15px;">
                      <div class="col-lg-4">
                       <label for="sel1">Username : </label>
                         <input type="text" class="form-control" name="kd_karyawan" id="kd_karyawan" value="<?php echo $tampil['username_karyawan']?>" readonly>
                       </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Password : </label>
                            <input type="text" style="background:#ffcccc" class="form-control" name="nama_karyawan" value="<?php echo "-- Terenkripsi --" ?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Jenis Kelamin : </label>
                            <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $tampil['jenis_kelamin_karyawan'] ?>" readonly>
                          </br>
                      </div>
                    </div>
                    <div class="row" style="margin-top:15px;">
                      <div class="col-lg-4">
                       <label for="sel1">Jabatan : </label>
                         <input type="text" class="form-control" name="kd_karyawan" id="kd_karyawan" value="<?php echo $tampil['jabatan_karyawan']?>" readonly>
                       </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">No HP : </label>
                            <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $tampil['no_hp_karyawan']?>" readonly>
                          </br>
                      </div>
                      <div class="col-lg-4">
                          <label for="sel1">Alamat : </label>
                          <textarea class="form-control" rows="5" readonly><?php echo $tampil['alamat_karyawan']?></textarea>
                          </br>
                      </div>
                    </div>

          </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
    </div>
