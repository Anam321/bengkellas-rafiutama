<script type="text/javascript">
   var save_method; //for save method string
   var table;

   var type, msg; // for alert

   function showAlert(type, msg) {

      toastr.options.closeButton = true;
      toastr.options.progressBar = true;
      toastr.options.extendedTimeOut = 1000; //1000

      toastr.options.timeOut = 3000;
      toastr.options.fadeOut = 250;
      toastr.options.fadeIn = 250;

      toastr.options.positionClass = 'toast-top-full-width';
      toastr[type](msg);
   }

   function ajax_list() {
      $('#list_data').empty();
      $.ajax({
         url: "<?php echo site_url('admin/blog/ajax_list') ?>",
         type: "POST",
         dataType: "JSON",
         success: function(data) {
            $('#list_data').html(data);
         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }
   ajax_list();

   function post() {
      window.location = "<?= base_url('admin/blog/post') ?>";
   }

   function edit(id) {
      save_method = 'update';
      $('#form_produk')[0].reset(); // reset form on modals
      $('#deskripsi').summernote('code', '');
      // $('#modal_form_produk').modal('show');


      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/blog/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            $('[name="id_produk"]').val(data.id_produk);
            $('[name="nama_p"]').val(data.nama_p);
            $('[name="id_kategori"]').val(data.id_kategori);
            $('[name="pembuatan"]').val(data.pembuatan);
            $('[name="pemasangan"]').val(data.pemasangan);
            $('[name="keterangan"]').val(data.keterangan);
            $('#deskripsi').summernote('code', data.deskripsi);
            $('[name="harga"]').val(data.harga);
            $('[name="bahan"]').val(data.bahan);

            $('[name="old_foto"]').val(data.foto);

            $('#modal_form_produk').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Produk'); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function hapus(id) {
      if (confirm('Apakah Anda yakin menghapus artikel ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/blog/ajax_delete') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  // reload_list_produk();
                  ajax_list();
                  showAlert(data.type, data.mess);
                  $('#detail_produk').empty();
               } else {
                  ajax_list();
                  showAlert(data.type, data.mess);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               alert('Error deleting data');
            }
         });
      }
   }
</script>