<script src="frontend/login/js/index.js"></script>

<script src="frontend/jquery-3.2.0.min.js"></script>
<script src="frontend/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="adminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="frontend/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="frontend/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="frontend/adminLTE/plugins/fastclick/fastclick.js"></script>
<script src="frontend/adminLTE/dist/js/app.min.js"></script>
<script src="frontend/datatables/jquery.dataTables.min.js"></script>
<script src="frontend/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="frontend/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.id.js"></script>

</script>


<!--Datatables-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#tampilDataTables').DataTable();
		} );
</script>

<script type="text/javascript" charset="utf-8">
		//Panel
		function detailBarang(x){
			var id_dataBarang=x;
			$("#tampilDataBarang").modal("show");
			$("#tampil").load("detail_barang.php?id_dataBarang="+id_dataBarang);
		}
		function editBarang(x){
      var id_dataBarang=x;
			$("#editDataBarang").modal("show");
			$("#edit").load("edit_barang.php?id_dataBarang="+id_dataBarang);
		}
		function deleteBarang(x){
      var id_dataBarang=x;
			$("#deleteDataBarang").modal("show");
			$("#delete").load("delete_barang.php?id_dataBarang="+id_dataBarang);
		}
		function tambahStok(x){
      var id_dataBarang=x;
			$("#tambahStokBarang").modal("show");
			$("#tambahStok").load("tambah_stok.php?id_dataBarang="+id_dataBarang);
		}
		function tambahStokCustomer(x){
      var id_dataBarang=x;
			$("#tambahStokBarang").modal("show");
			$("#tambahStok").load("tambah_stok.php?id_dataBarang="+id_dataBarang);
		}
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
