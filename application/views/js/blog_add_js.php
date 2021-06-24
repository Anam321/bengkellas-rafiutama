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

    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#created_at").value = today;

    var parameter = "<?= $this->uri->segment(4) ?>";
    if (parameter !== "") {
        get_data(parameter);
        ajax_list_label(parameter);
    } else {
        ajax_list_label();

        $("#judul").on("keyup change", function(e) {
            str = $(this).val().replace(/(\.|\s)|(\,)/g, (m, p1, p2) => p1 ? "-" : "-");
            slu = str.replace("/", "-");
            slug = slu.replace("--", "-");
            $("#slug").val(slug);
        });
    }

    function get_data(id) {
        save_method = 'update';

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/blog/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_artikel"]').val(data.id_artikel);
                $('[name="judul"]').val(data.judul);
                $('[name="slug"]').val(data.slug);
                $('#konten').summernote('code', data.konten);
                $('#slug').attr('readonly', true);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function ajax_list_label(id = null) {
        $('#getdatalabel').empty();
        $.ajax({
            url: "<?php echo site_url('admin/blog/ajax_list_label') ?>",
            type: "POST",
            data: {
                "id": id
            },
            dataType: "JSON",
            success: function(data) {
                $('#getdatalabel').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_new_label() {
        save_method = 'add';
        $('#form_label')[0].reset(); // reset form on modals
        $('#modal_form_label').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Label Baru'); // Set Title to Bootstrap modal title
    }

    $('#form_label').submit(function(e) {
        // alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form_label')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();

        $('#btnSavelabel').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSavelabel').attr('disabled', true); //set button disable 

        // ajax adding data to database
        $.ajax({
            url: "<?php echo site_url('admin/blog/ajax_add_label') ?>",
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
                    showAlert(data.type, data.mess);
                    ajax_list_label();
                    $('#modal_form_label').modal('hide');
                } else {
                    showAlert(data.type, data.mess);
                    ajax_list_label();
                }

                $('#btnSavelabel').text('Simpan'); //change button text
                $('#btnSavelabel').attr('disabled', false); //set button enable 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSavelabel').text('Simpan'); //change button text
                $('#btnSavelabel').attr('disabled', false); //set button enable 
            }
        });

    });

    function hapus_label(id) {
        if (confirm('Apakah Anda yakin menghapus label ini ?')) {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('admin/blog/ajax_delete_label') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.status == '00') {
                        // reload_list_produk();
                        showAlert(data.type, data.mess);
                        $('#getdatalabel').empty();
                        ajax_list_label();
                    } else {
                        ajax_list_label();
                        showAlert(data.type, data.mess);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });
        }
    }

    $('#form').submit(function(e) {
        // alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 

        // ajax adding data to database
        // console.log($('#form').serialize());

        // get parameter form url
        var parameter = "<?= $this->uri->segment(4) ?>";

        if (parameter == '') {
            url = "<?php echo site_url('admin/blog/ajax_save') ?>";
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
                    ajax_list_label();
                    showAlert(data.type, data.mess);
                    window.location = "<?= base_url('admin/blog') ?>";
                } else {
                    ajax_list_label();
                    showAlert(data.type, data.mess);
                    window.location = "<?= base_url('admin/blog') ?>";
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