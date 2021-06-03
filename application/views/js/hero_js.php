<script type="text/javascript">
    var save_method; //for save method string
    var id_hero;

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

    $(document).ready(function() { /// Wait till page is loaded
    });

    function add_new() {
        save_method = 'add';
        $('#form_hero')[0].reset(); // reset form on modals
        $('#image').empty();
        $('#modal_form_hero').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Hero/Slider'); // Set Title to Bootstrap modal title
    }

    function edit(id) {
        save_method = 'update';
        $('#form_hero')[0].reset(); // reset form on modals
        $('#image').empty();
        // $('#modal_form_hero').modal('show');


        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/set_hero/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                // console.log('edit', data);

                $('[name="id_hero"]').val(data.id_hero);
                $('[name="judul"]').val(data.judul);
                $('[name="deskripsi"]').val(data.deskripsi);

                $('[name="old_image"]').val(data.gambar);
                $('#modal_form_hero').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Hero/Slider'); // Set Title to Bootstrap modal title

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
                url: "<?php echo site_url('admin/set_hero/ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.status == '00') {
                        // reload_list_hero();
                        get_list_hero();
                        showAlert(data.type, data.mess);
                    } else {
                        get_list_hero();
                        showAlert(data.type, data.mess);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });
        }
    }

    function get_list_hero() {
        list_hero = $('#list_hero');
        $.ajax({
            url: "<?php echo site_url('admin/set_hero/ajax_list') ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                list_hero.html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });

    }
    get_list_hero();


    // function of form submitted
    $('#form_hero').submit(function(e) {
        // alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form_hero')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 

        // ajax adding data to database
        // console.log($('#form_hero').serialize());
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/set_hero/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('admin/set_hero/ajax_update') ?>";
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
                    get_list_hero();
                    showAlert(data.type, data.mess);
                    $('#modal_form_hero').modal('hide');
                } else {
                    get_list_hero();
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