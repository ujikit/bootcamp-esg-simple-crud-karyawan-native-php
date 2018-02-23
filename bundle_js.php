
<!-- homepage custom -->
<script src="frontend/index_template/vendor/jquery/jquery.min.js"></script>
<script src="frontend/index_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="frontend/index_template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="frontend/index_template/js/new-age.min.js"></script>
<!--  -->
<script src="frontend/adminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Validasi Input Nilai (Tidak boleh huruf dan angka maksimal 3) -->
<script src="frontend/custom/inputmask.js"></script>
<script src="frontend/custom/jquery.inputmask.js"></script>
<script src="frontend/custom/inputmask.extensions.js"></script>
<script src="frontend/custom/inputmask.numeric.extensions.js"></script>
<!-- batas -->
<script src="frontend/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="frontend/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="adminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="frontend/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="frontend/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="frontend/adminLTE/plugins/fastclick/fastclick.js"></script>
<script src="frontend/adminLTE/dist/js/app.min.js"></script>
<script src="frontend/datatables/jquery.dataTables.min.js"></script>
<script src="frontend/datatables/dataTables.bootstrap.min.js"></script>
<script src="frontend/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="frontend/timeago_jquery/jquery.timeago.js"></script>
<script src="frontend/sweetalert2/sweetalert2.min.js"></script>
<script src="frontend/jquery-flexdatalist-autocomplete-2.1.3/jquery.flexdatalist.min.js"></script><!--Untuk autocomplete textbox pada pesan guru ke siswa-->
<!-- <script src="frontend/jquery-onepage-scroll/jquery.onepage-scroll.js"></script> -->

</script>

<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#tampilDataTables').DataTable(); //<!--frontend/Datatables-->
			$('time.timeago').timeago(); //<!--frontend/timeago : untuk mengetahui waktu minutes / hours ago-->
		} );
</script>

<!--frontend/datepicker-->
<script type="text/javascript">
$('.datepicker').datepicker({
	format: 'mm/dd/yyyy',
	startDate: '-3d'
});
</script>

<!--KARYAWAN-->

<!--Event tombol daftar karyawan (Tambah,edit,delete,tampil)-->
<script type="text/javascript" charset="utf-8">
		//karyawan
		function detailKaryawan(x){
			var kd_karyawan=x;
			$("#detailKaryawan").modal("show");
			$("#tampil").load("halaman_karyawan_detail_karyawan.php?kd_karyawan="+kd_karyawan);
		}
		function editKaryawan(x){
			var kd_karyawan=x;
			$("#editKaryawan").modal("show");
			$("#edit").load("halaman_karyawan_edit_karyawan.php?kd_karyawan="+kd_karyawan);
		}
		function deleteKaryawan(x){
			var kd_karyawan=x;
			$("#deleteKaryawan").modal("show");
			$("#delete").load("halaman_karyawan_delete_karyawan.php?kd_karyawan="+kd_karyawan);
		}
		//kehadiran karyawan
		function pulangKehadiranKaryawan(x){
			var id_kehadiran_karyawan=x;
			$("#pulangKehadiranKaryawan").modal("show");
			$("#pulang").load("halaman_karyawan_pulang_kehadiran_karyawan.php?id_kehadiran_karyawan="+id_kehadiran_karyawan);
		}
		function hapusKehadiranKaryawan(x){
			var id_kehadiran_karyawan=x;
			$("#hapusKehadiranKaryawan").modal("show");
			$("#delete").load("halaman_karyawan_delete_kehadiran_karyawan.php?id_kehadiran_karyawan="+id_kehadiran_karyawan);
		}
		//verifikasi password baru karyawan
		function verifikasiPasswordBaru(x){
			var id_lupa_password=x;
			$("#verifikasiPasswordBaru").modal("show");
			$("#verifikasi").load("halaman_karyawan_verifikasi_password_baru_karyawan.php?id_lupa_password="+id_lupa_password);
		}
		function deleteVerifikasiPasswordBaru(x){
			var id_lupa_password=x;
			$("#deleteVerifikasiPasswordBaru").modal("show");
			$("#delete").load("halaman_karyawan_verifikasi_password_baru_karyawan.php?id_lupa_password="+id_lupa_password);
		}
</script>
