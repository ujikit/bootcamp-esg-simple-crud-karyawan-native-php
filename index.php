<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>

      <?php include_once "bundle_css.php" ?>
      <style>
      body {
                background: url(frontend/img/background.jpg) no-repeat center center fixed;
                -webkit-background-size: cover; /* For WebKit*/
                -moz-background-size: cover;    /* Mozilla*/
                -o-background-size: cover;      /* Opera*/
                background-size: cover;         /* Generic*/
                overflow-y: hidden;
                }
      </style>

</head>

<body>

<div class="row" style="margin-top:320px;">

  <div class="container">
  <div class="col-lg-8" style="margin-top:-90px;margin-bottom:240px;">
    <div class="row">
      <div class="row hidden-xs">
        <div class="col-lg-12">
        <h1 style="color:white;margin-top:-100px;"><b>Aplikasi Pendataan Karyawan</b></h1><br>
        <!-- Carousel
                 ================================================== -->
                 <div id="myCarousel" class="carousel slide" data-ride="carousel"  style="margin-bottom:20px;float:0px;">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img class="first-slide" src="frontend/img/gambar1.jpg" alt="First slide" style="width:700px;height:350px;margin:auto;">
                       <div class="container">
                       </div>
                     </div>
                     <div class="item">
                       <img class="second-slide" src="frontend/img/gambar2.jpg" alt="Second slide" style="width:700px;height:350px;margin:auto;">
                       <div class="container">
                       </div>
                     </div>
                     <div class="item">
                       <img class="third-slide" src="frontend/img/gambar3.jpg" alt="Third slide" style="width:700px;height:350px;margin:auto;">
                       <div class="container">
                       </div>
                     </div>
                   </div>
                   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div><!-- /.carousel -->
        </div>
        </div>
    </div>
  </div>

<div class="row xs" style="margin-top:-160px;">
  <div class="col-lg-4" style="margin-top:40px;">
    <form action="backend/cek_login.php" method="post">
    <div class="login-form">
      <h1 style="margin-top:-25px;font-size:30px;">Login</h1>
      <h1 style="margin-top:10px;font-size:20px;">Aplikasi Pendataan Karyawan</h1>
       <img src="frontend/img/logologin.png" style="display: block;margin: 0 auto;width:120px;margin-bottom:10px" />
       <div class="form-group ">
         <input type="text" name="username_karyawan" class="form-control" placeholder="Isikan Username" id="UserName">
         <i class="fa fa-user"></i>
       </div>
       <div class="form-group log-status">
         <input type="password" name="password_karyawan" class="form-control" placeholder="Isikan Password" id="Passwod">
         <i class="fa fa-lock"></i>
       </div>
        <span class="alert">Invalid Credentials</span>
       <button type="submit" class="log-btn" name="submit">Masuk !</button>
       <a style="margin-top:10px;" class="btn btn-danger pull-right"  data-toggle="modal" type="button" data-target="#lupaPasswordKaryawan">Lupa Password?</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

<div id="lupaPasswordKaryawan" class="modal fade">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Lupa Password</h4>
          </div>
      <form class="form-signin" action="backend/lupa_password.php" method="post" enctype="multipart/form-data">
       <div class="modal-body">
         <div class="row">
           <div class="col-lg-12">
             <input type="hidden" name="lupa_password" value="<?php echo "lupaPasswordKaryawan" ?>">
             <input type="hidden" name="tanggal_ganti_lupa_password" value="<?php echo date("Y-m-d") ?>">
             <input type="hidden" name="jam_ganti_lupa_password" value="<?php echo date("H:i:s") ?>">
             <label for="sel1">Masukan KD Karyawan : </label>
             <input type="text" class="form-control" name="kd_karyawan_lupa_password" required oninvalid="this.setCustomValidity('Masukan NIP')" oninput="setCustomValidity('')">
             <label for="sel1">Password Baru Karyawan : </label>
             <input type="password" class="form-control" name="password_baru_karyawan_lupa_password" required oninvalid="this.setCustomValidity('Masukan Password Baru')" oninput="setCustomValidity('')">
           </div>
         </div>
       </div>
       <div class="modal-footer">
           <button class="btn btn-success" type="submit" name="submit">Ganti Password</button>
       </div>
      </form>
     </div>
    </div>
</div>

<?php include_once "bundle_js.php" ?>
  <script type="text/javascript">
    $('input').on('input', function() {
    $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
    });
  </script>
</body>
</html>
