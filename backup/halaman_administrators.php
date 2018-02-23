<?php
session_start();
$title = "Dashboard Administrator";
include "backend/koneksi.php";

if($_SESSION['nip_administrator']){

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


<?php $nama_kelas_transaksi = $_GET["nama_kelas_transaksi"];

echo $nama_kelas_transaksi;

  ?>

</body>
</html>

<?php
}
else {
  header("location:index.php");
}
 ?>
