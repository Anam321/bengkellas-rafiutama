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

   $("#filterby").on("change", function(e) {
      status = $(this).val();
      ajax_list(status);
   });

   function ajax_list(status = null) {
      $('#list_data').empty();
      $.ajax({
         url: "<?php echo site_url('admin/testimoni/ajax_list') ?>",
         type: "POST",
         data: {
            "filterby": status
         },
         dataType: "JSON",
         success: function(data) {
            $('#list_data').html(data);
         },
         error: function(jqXHR, textStatus, errorThrown) {
            type = 'error';
            msg = 'Error get data from ajax';
            showAlert(type, msg); //utk show alert
         }
      });
   }
   ajax_list();

   function count_status() {
      $('#all').empty();
      $('#acc').empty();
      $('#notacc').empty();
      // ajax get data status
      $.ajax({
         url: "<?php echo site_url('admin/testimoni/count_status') ?>",
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            $('#all').text("All (" + data.all + ")");
            $('#acc').text("Sudah ACC (" + data.acc + ")");
            $('#notacc').text("Belum ACC (" + data.notacc + ")");

         },
         error: function(jqXHR, textStatus, errorThrown) {
            type = 'error';
            msg = 'Error get data from ajax :(';
            showAlert(type, msg); //utk show alert
         }
      });
   }
   count_status();

   $(document).ready(function() {



   });

   // acc data testimoni
   function acc(id) {
      if (confirm('Apakah Anda yakin mengkonfirmasi testimoni ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/testimoni/ajax_acc') ?>",
            type: "POST",
            data: {
               "id_testi": id
            },
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  ajax_list();
                  count_status();
                  showAlert(data.type, data.mess);
               } else {
                  ajax_list();
                  count_status();
                  showAlert(data.type, data.mess);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               type = 'error';
               msg = 'Error deleting data testimoni :(';
               showAlert(type, msg); //utk show alert
            }
         });
      }
   }

   // hapus data testimoni
   function hapus(id) {
      if (confirm('Apakah Anda yakin menghapus testimoni ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/testimoni/ajax_delete') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  ajax_list();
                  count_status();
                  showAlert(data.type, data.mess);
               } else {
                  ajax_list();
                  count_status();
                  showAlert(data.type, data.mess);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               type = 'error';
               msg = 'Error deleting data testimoni :(';
               showAlert(type, msg); //utk show alert
            }
         });
      }
   }
</script>