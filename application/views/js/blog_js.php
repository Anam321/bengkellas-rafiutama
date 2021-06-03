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

   function reload_table() {
      table.ajax.reload(null, false);;
   }

   function searchRecords() {
      $('#table-search').on('keyup change focus', function(e) {
         // var filterBy = $('#filterBy').val();
         // var hasFilter = filterBy !== '';
         var value = $('#table-search').val(); // clear selected rows

         table.search('').columns().search('').draw();
         table.search(value).draw();

      });
   }
   searchRecords();

   $(document).ready(function() {
      table = $('#myTable').DataTable({
         "searching": true,
         //"lengthChange": false,
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
            "url": "<?php echo site_url('admin/blog/ajax_list') ?>",
            "type": "POST",
            "dataType": "json",
         },

         //Set column definition initialisation properties.
         "columnDefs": [{
               "targets": [3], //last column
               "orderable": false, //set not orderable
            },
            // {
            //     "targets": [1],
            //     "visible": false,
            //     "searchable": false
            // },
         ],
      });

   });

   function add_new() {
      save_method = 'add';
      $('#form_blog')[0].reset(); // reset form on modals
      $('#image').empty();
      $('#modal_form_blog').modal('show'); // show bootstrap modal
      $('.modal-title').text('Tambah blog'); // Set Title to Bootstrap modal title
   }

   function edit(id) {
      save_method = 'update';
      $('#form_blog')[0].reset(); // reset form on modals
      $('#image').empty();
      // $('#modal_form_blog').modal('show');


      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/blog/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);

            $('[name="id_blog"]').val(data.id_blog);
            $('[name="judul_blog"]').val(data.judul_blog);
            $('[name="konten"]').val(data.konten).trigger('change');
            $('[name="old_foto"]').val(data.foto);

            $('#modal_form_blog').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Hero/Slider'); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function detail(id) {

      // $('#modal_detail').empty();
      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/blog/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);
            var nama = data.nama_blog;
            $('#title').val(nama);
            $('#foto_blog').attr('src', '<?= base_url('assets/uploads/blog/') ?>' + data.foto);
            $('#detai_desc').html(data.deskripsi);

            $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Detail blog ' + nama); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function delete_data(id) {
      if (confirm('Apakah Anda yakin menghapus data ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/blog/ajax_delete') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  // reload_list_blog();
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


   // function of form submitted
   $('#form_blog').submit(function(e) {
      // alert("Form submitted!");
      e.preventDefault();
      // Get form
      var form = $('#form_blog')[0];

      // Create an FormData object
      //var data = new FormData(form);
      var data = new FormData(form);
      //var data = $(this).serialize();

      if ($('[name="image"]').val() == '') {
         alert('Pilih Foto blog Yang Akan di Upload !');
         return false;
      }

      $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
      $('#btnSave').attr('disabled', true); //set button disable 

      // ajax adding data to database
      // console.log($('#form_blog').serialize());
      var url;

      if (save_method == 'add') {
         url = "<?php echo site_url('admin/blog/ajax_add') ?>";
      } else {
         url = "<?php echo site_url('admin/blog/ajax_update') ?>";
      }

      $.ajax({
         url: url,
         type: "POST",
         //contentType: 'multipart/form-data',
         cache: false,
         contentType: false,
         processData: false,
         method: 'POST',
         data: data,
         dataType: "JSON",

         success: function(data) {
            if (data.status == '00') //if success close modal and reload ajax table
            {
               reload_table();
               showAlert(data.type, data.mess);
               $('#modal_form_blog').modal('hide');
            } else {
               reload_table();
               showAlert(data.type, data.mess);

            }

            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         },
         error: function(jqXHR, textStatus, errorThrown) {
            type = 'error';
            msg = 'Error adding / update data';
            showAlert(type, msg); //utk show alert
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         }
      });

   });
</script>