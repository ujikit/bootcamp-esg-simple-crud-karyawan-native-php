<?php
include_once "backend/koneksi.php";
$id_kehadiran_karyawan = $_GET['id_kehadiran_karyawan'];
$query = mysqli_query($connect, "SELECT * from kehadiran inner join karyawan on kehadiran.kd_karyawan_kehadiran = karyawan.kd_karyawan where id_kehadiran_karyawan='$id_kehadiran_karyawan'");
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
     <h4 class="modal-title">Verifikasi Pulang Karyawan</h4>
    </div>
    <form class="form-signin" action="backend/karyawan_verifikasi_pulang_karyawan.php" method="post" enctype="multipart/form-data">
     <div class="modal-body">
       <div class="col-lg-12">
         <input type="hidden" class="form-control" name="id_kehadiran_karyawan" value="<?php echo $id_kehadiran_karyawan ?>" readonly>
         <p>Apakah Anda Ingin Menset Kepulangan Karyawan Atas Nama : &nbsp<b style="font-size:17px;"><?php echo $tampil["nama_karyawan"]  ?></b> ? </p>
       </div>
     </div>
     <div class="modal-footer">
         <button class="btn btn-success" type="submit" name="submit">Set Pulang</button>
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
