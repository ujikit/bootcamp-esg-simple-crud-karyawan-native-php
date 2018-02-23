<?php
session_start();
include "backend/koneksi.php";

if($_SESSION['nama_guru']){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAN2YK | Guru Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include_once "halaman_administrator_bundle_css.php" ?>

</head>
<body>

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



      <div class="row" style="margin-bottom:-75px;margin-top:40px;">
        <div class="col-lg-12">
          <div class="container">
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary" style="float:left;margin-top:5px;margin-right:10px;" id="smt1"><i class="glyphicon glyphicon-book"></i> KD 1</button>
              <button type="submit" class="btn btn-primary" style="float:left;margin-top:5px;margin-right:10px;" id="smt2"><i class="glyphicon glyphicon-book"></i> KD 2</button>
            </div>
            <div class="col-lg-12" style="margin-top:5px;">
              <button id="Segarkan" type="submit" class="btn btn-primary" style="float:right;margin-top:4px;margin-right:10px;"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
            </div>
          </div>
        </div>
      </div>
      <div id="loadDataKD">

      </div>

  <?php include_once "halaman_administrator_footer.php" ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include_once "halaman_administrator_bundle_js.php" ?>

<script type="text/javascript">
  $(document).ready(function(data){
    loadData();

    $('#Segarkan').click(function(){
    $('#loadDataKD').load('halaman_guru_input_kd_mapel.php');
    });

    $('form').on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type:$(this).attr('method'),
        url:$(this).attr('action'),
        data:$(this).serialize(),
        success:function(){
          loadData();
        }
      });
    })

    $('#smt1').on('click',function(){
    $('#semester1').html($('#static').html()).show().siblings('div').hide();
    });

    $('#smt2').on('click',function(){
    $('#semester2').html($('#static').html()).show().siblings('div').hide();
    });

  })

  function loadData(){
    $.get('halaman_guru_input_kd_mapel_load_data.php',function(data){
      $('#loadDataKD').html(data);
    })
  }
</script>

</body>
</html>

<?php
}
else {
  header("location:login_guru_atau_bk .php");
}
 ?>
