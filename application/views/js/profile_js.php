<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
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

    var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
    var csrfHash = $('.txt_csrfname').val(); // CSRF hash
    $(document).ready(function() {
        //datatables
        // generateToast();

        function get_profile() {

            $.ajax({
                url: "<?php echo site_url('admin/set_profile/ajax_edit') ?>",
                type: "POST",
                dataType: "JSON",
                data: {
                    'id_profil': '1',
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                success: function(data) {

                    $('[name="id_profil"]').val(data.id_profil);
                    $('[name="logo_old"]').val(data.logo);
                    $('[name="nama_perusahaan"]').val(data.nama_perusahaan);
                    $('[name="no_perusahaan"]').val(data.no_perusahaan);
                    $('[name="alamat"]').val(data.alamat);

                    $('#logo_image').attr('src', '<?= base_url() ?>assets/backend/dashboard/brand/logo/' + data.logo);
                    $('#link_logo').attr('href', '<?= base_url() ?>assets/backend/dashboard/brand/logo/' + data.logo);
                    $('#nama_p').text(data.nama_perusahaan);
                    $('#no_p').text(data.no_perusahaan);
                    $('#alamat_p').text(data.alamat);

                    $('[name="about"]').val(data.about);
                    $('[name="kontak"]').val(data.kontak);
                    $('[name="kontak2"]').val(data.kontak2);
                    $('[name="email"]').val(data.email);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
        get_profile();

        function get_sosmed() {

            $.ajax({
                url: "<?php echo site_url('admin/set_profile/get_sosmed') ?>",
                type: "POST",
                dataType: "JSON",
                data: {
                    'id_sosmed': '1',
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                success: function(data) {

                    $('[name="id_sosmed"]').val(data.id_sosmed);
                    $('[name="facebook"]').val(data.Facebook);
                    $('[name="twitter"]').val(data.Twitter);
                    $('[name="youtube"]').val(data.YouTube);
                    $('[name="instagram"]').val(data.Instagram);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }

            });
        }
        get_sosmed();


        $('#form').submit(function(e) {
            //alert("Form submitted!");
            e.preventDefault();
            // Get form
            var form = $('#form')[0];

            // Create an FormData object
            //var data = new FormData(form);
            var data = new FormData(form);
            //var data = $(this).serialize();
            if ($('[name="nama_perusahaan"]').val() == '') {
                alert('Nama Perusahaan Harus Di isi');
                return false;
            } else if ($('[name="no_perusahaan"]').val() == '') {
                alert('Nomor Perusahaan Harus Di isi');
                return false;
            } else if ($('[name="alamat"]').val() == '') {
                alert('Alamat Harus Di isi');
                return false;
            }

            $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 

            // ajax adding data to database
            // console.log($('#form').serialize());

            $.ajax({
                url: "<?php echo site_url('admin/set_profile/ajax_update') ?>",
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
                        //alert(data.mess);
                        // $('#form')[0].reset();
                        get_profile();
                        get_sosmed();
                        type = data.type;
                        msg = data.mess;
                        showAlert(type, msg);

                    } else {
                        //alert(data.mess);
                        // $('#form')[0].reset();
                        get_profile();
                        get_sosmed();
                        type = data.type;
                        msg = data.mess;
                        showAlert(type, msg);

                    }

                    $('#btnSave').append("<span class='oi oi-task mr-2'></span>"); //change button text
                    $('#btnSave').text('Update Profile'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    type = 'error';
                    msg = 'Error adding / update data';
                    showAlert(type, msg); //utk show alert
                    $('#btnSave').text('Update Profile'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 
                }
            });

        });

    });
</script>