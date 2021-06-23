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

   $(document).ready(function() {



   });


   function add_new() {
      save_method = 'add';
      $('#form_testimoni')[0].reset(); // reset form on modals
      $('#image').empty();
      $('#modal_form_testimoni').modal('show'); // show bootstrap modal
      $('.modal-title').text('Acc'); // Set Title to Bootstrap modal title
   }

   function konfir(id) {
      save_method = 'update';
      $('#form_testimoni')[0].reset(); // reset form on modals
      $('#image').empty();
   }

   function detail(id) {

      // $('#modal_detail').empty();
      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/produk/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);
            var nama = data.nama_produk;
            $('#title').val(nama);
            $('#foto_produk').attr('src', '<?= base_url('assets/uploads/produk/') ?>' + data.foto);
            $('#detai_desc').html(data.deskripsi);

            $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Detail Produk ' + nama); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function confirm(id) {
      save_method = 'update';
      $('#form_acc')[0].reset(); // reset form on modals
      $('#image').empty();
      // $('#modal_form_acc').modal('show');


      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/produk/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);

            $('[name="id_testi"]').val(data.id_testi);
            $('[name="nama_pelanggan"]').val(data.nama_pelanggan);
            $('[name="komentar"]').val(data.komentar).trigger('change');
            $('[name="status"]').val(data.status);


            $('[name="old_foto"]').val(data.foto);

            $('#modal_form_acc').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Hero/Slider'); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }


   // edit data
   function edit(id) {
      save_method = 'update';
      $('#form_acc')[0].reset(); // reset form on modals
      $('#image').empty();

      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/testimoni/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);

            $('[name="id_testi"]').val(data.id_testi);
            $('[name="nama_pelanggan"]').val(data.nama_pelanggan);
            $('[name="komentar"]').val(data.komentar).trigger('change');

            $('[name="status"]').val(data.status);

            $('[name="old_foto"]').val(data.foto);

            $('#modal_form_acc').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Hero/Slider'); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   // delet data

   function delete_data(id) {
      if (confirm('Apakah Anda yakin menghapus data ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/testimoni/ajax_delete') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  // reload_list_testimoni();
                  reload_table();
                  showAlert(data.type, data.mess);
               } else {
                  reload_table();
                  showAlert(data.type, data.mess);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               alert('Error deleting data');
            }
         });
      }
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
</script>