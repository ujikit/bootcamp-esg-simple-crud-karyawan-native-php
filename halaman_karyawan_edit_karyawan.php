<?php
include_once "backend/koneksi.php";
$kd_karyawan = $_GET['kd_karyawan'];
$query = mysqli_query($connect, "SELECT * from karyawan where kd_karyawan='$kd_karyawan'");
$tampil = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Karyawan</h4>
    </div>
    <form class="form-signin" action="backend/karyawan_edit_karyawan.php" method="post" enctype="multipart/form-data">
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
                                    <div class="col-lg-5">
                                      <span class="label label-primary" style="font-size:15px">Foto Sebelumnya</span>
                                      <img src="frontend/img/foto/karyawan/<?php echo $kd_karyawan ?>" style="width:100px;padding:10px;margin-left:20px;" alt="">
                                    </div>
                                    <div class="col-lg-2">

                                    </div>
                                    <div class="col-lg-5">
                                      <div class="col-lg-6">
                                        <span class="label label-primary" style="font-size:15px">Ganti Foto </span>
                                          <input style="margin-top:20px" type="file" accept="image/*" name="foto_karyawan" onchange="loadFile(event)">
                                        </br></br>
                                      </div>
                                      <div class="col-lg-6">
                                        <img id="output" width="130px" style="padding:10px"/>
                                      </div>
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
                                   <input type="text" class="form-control" name="kd_karyawan" value="<?php echo $kd_karyawan ?>" required>
                                 </br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sel1">Nama Karyawan : </label>
                                      <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $tampil['nama_karyawan'] ?>" required>
                                    </br>
                                </div>
                                <div class="col-lg-4">
                                  <label for="sel1">Hak Akses : </label>
                                  <select class="form-control" name="hak_akses_karyawan" Onchange="getJabatanToMataPelajaran(this.value);" value="<?php echo $tampil['hak_akses_karyawan'] ?>">
                                    <option value="<?php echo $tampil['hak_akses_karyawan'] ?>"><?php echo ucwords($tampil['hak_akses_karyawan']) ?></option>
                                    <option value="admin">Admin</option>
                                    <option value="karyawan">Karyawan</option>
                                  </select>
                                 </br>
                                </div>
                              </div>
                              <div class="row" style="margin-top:15px;">
                                <div class="col-lg-4">
                                 <label for="sel1">Username : </label>
                                   <input type="text" class="form-control" name="username_karyawan" value="<?php echo $tampil['username_karyawan'] ?>" required>
                                 </br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sel1">Password : </label>
                                      <input type="text" style="background:#ffcccc" class="form-control" name="" value="<?php echo "-- Terenkripsi --" ?>" readonly>
                                    </br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sel1">Jenis Kelamin : </label>
                                      <select class="form-control" name="jenis_kelamin_karyawan" value="<?php echo $tampil['jenis_kelamin_karyawan'] ?>">
                                        <option value="<?php echo $tampil['jenis_kelamin_karyawan'] ?>">
                                        <?php
                                        if ($tampil['jenis_kelamin_karyawan'] == "L") {
                                          echo "Laki - Laki";
                                        }
                                        elseif ($tampil['jenis_kelamin_karyawan'] == "P") {
                                          echo "Perempuan";
                                        }
                                        ?>
                                       </option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                      </select>
                                    </br>
                                </div>
                              </div>
                              <div class="row" style="margin-top:15px;">
                                <div class="col-lg-4">
                                 <label for="sel1">Jabatan : </label>
                                   <select class="form-control" name="jabatan_karyawan" value="<?php echo $tampil['jabatan_karyawan'] ?>">
                                     <option value="<?php echo $tampil['jabatan_karyawan'] ?>"><?php echo ucwords($tampil['jabatan_karyawan']) ?></option>
                                     <option value="Programmer">Programmer</option>
                                     <option value="Analisis">Analisis</option>
                                     <option value="Android Dev">Android Dev</option>
                                     <option value="Bisnis Develop">Bisnis Develop</option>
                                   </select>
                                 </br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sel1">No HP : </label>
                                      <input type="text" class="form-control" name="no_hp_karyawan" value="<?php echo $tampil['no_hp_karyawan'] ?>" required>
                                    </br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sel1">Alamat : </label><br>
                                      <textarea name="alamat_karyawan" rows="6" cols="27"><?php echo $tampil['alamat_karyawan'] ?></textarea>
                                    </br>
                                </div>
                              </div>

                    </div>
                  </div>

              </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="submit">Edit Data Karyawan</button>
                    </div>
    </form>

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
