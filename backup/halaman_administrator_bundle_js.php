<script src="frontend/adminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="frontend/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="adminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="frontend/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="frontend/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="frontend/adminLTE/plugins/fastclick/fastclick.js"></script>
<script src="frontend/adminLTE/dist/js/app.min.js"></script>
<script src="frontend/datatables/jquery.dataTables.min.js"></script>
<script src="frontend/datatables/dataTables.bootstrap.min.js"></script>

<!--Event tombol main pegawai halaman_administrator.php (edit,delete,tampil)-->
<script type="text/javascript" charset="utf-8">
		//kelas
		function detailKelas(x){
			var id_kelas_transaksi=x;
			$("#tampilDataKelas").modal("show");
			$("#tampil").load("halaman_administrator_detail_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
		}
		function editKelas(x){
			var id_kelas_transaksi=x;
			$("#editDataKelas").modal("show");
			$("#edit").load("halaman_administrator_edit_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
		}
		function deleteKelas(x){
			var id_kelas_transaksi=x;
			$("#deleteDataKelas").modal("show");
			$("#delete").load("halaman_administrator_delete_kelas.php?id_kelas_transaksi="+id_kelas_transaksi);
		}
</script>

<!--Event tombol daftar pegawai (Tambah,edit,delete,tampil)-->
<script type="text/javascript" charset="utf-8">
		//Pegawai
		function detailPegawai(x){
			var id_pegawai=x;
			$("#tampilDataPegawai").modal("show");
			$("#tampil").load("halaman_administrator_detail_pegawai.php?id_pegawai="+id_pegawai);
		}
		function tambahPegawai(x){
			var id_pegawai=x;
			$("#tambahDataPegawai").modal("show");
			$("#tambah").load("halaman_administrator_tambah_pegawai.php");
		}
		function editPegawai(x){
			var id_pegawai=x;
			$("#editDataPegawai").modal("show");
			$("#edit").load("halaman_administrator_edit_pegawai.php?id_pegawai="+id_pegawai);
		}
		function deletePegawai(x){
			var id_pegawai=x;
			$("#deleteDataPegawai").modal("show");
			$("#delete").load("halaman_administrator_delete_pegawai.php?id_pegawai="+id_pegawai);
		}

</script>

<!--Datatables-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#tampilDataTables').DataTable();
		} );
</script>

<!--Upload Foto edit dan tambah pegawai-->
<script>
function noPreview() {
  $('#image-preview-div').css("display", "none");
  $('#preview-img').attr('src', 'noimage');
  $('upload-button').attr('disabled', '');
}

function selectImage(e) {
  $('#file').css("color", "green");
  $('#image-preview-div').css("display", "block");
  $('#preview-img').attr('src', e.target.result);
  $('#preview-img').css('max-width', '550px');
}

$(document).ready(function (e) {

  var maxsize = 500 * 1024; // 500 KB

  $('#max-size').html((maxsize/1024).toFixed(2));

  $('#upload-image-form').on('submit', function(e) {

    e.preventDefault();

    $('#message').empty();
    $('#loading').show();

    $.ajax({
      url: "upload-image.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data)
      {
        $('#loading').hide();
        $('#message').html(data);
      }
    });

  });

  $('#file').change(function() {

    $('#message').empty();

    var file = this.files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];

    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
    {
      noPreview();

      $('#message').html('<div class="alert alert-warning" role="alert">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>');

      return false;
    }

    if ( file.size > maxsize )
    {
      noPreview();

      $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is ' + (file.size/1024).toFixed(2) + ' KB, maximum size allowed is ' + (maxsize/1024).toFixed(2) + ' KB</div>');

      return false;
    }

    $('#upload-button').removeAttr("disabled");

    var reader = new FileReader();
    reader.onload = selectImage;
    reader.readAsDataURL(this.files[0]);

  });

});
</script>
