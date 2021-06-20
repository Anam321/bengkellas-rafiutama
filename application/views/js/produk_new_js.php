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

    function get_list_produk() {
        $('#list_produk').empty();
        $.ajax({
            url: "<?php echo site_url('admin/produk/get_list_produk') ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('#list_produk').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
    get_list_produk();

    function get_foto_produk(id) {
        //Ajax Load data from ajax
        $('#list_foto_produk').empty();
        $.ajax({
            url: "<?php echo site_url('admin/produk/get_foto_produk') ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                'id_produk': id
            },
            success: function(data) {
                $('#list_foto_produk').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    // function details_produk(params) {
    //     $('#v_foto').empty();
    //     $('#v_produk').empty();
    //     $('#v_harga').empty();
    //     $('#v_bahan').empty();
    //     $('#v_pembuatan').empty();
    //     $('#v_pemasangan').empty();
    //     $('#v_keterangan').empty();
    //     $('#v_deskripsi').empty();
    //     $('#v_keterangan').empty();
    //     $.ajax({
    //         url: "<?php echo site_url('admin/produk/ajax_edit') ?>/" + params,
    //         type: "GET",
    //         dataType: "JSON",
    //         success: function(data) {
    //             $('#v_foto').html("<a target='_blank' href='<?= base_url() ?>assets/frontend/img/upload/produk/" + data.foto + " class='user-avatar user-avatar-xl'><img src='<?= base_url() ?>assets/frontend/img/upload/produk/" + data.foto + "'></a>");
    //             $('#v_produk').val(data.nama_p);
    //             $('#v_harga').text(data.harga);
    //             $('#v_bahan').val(data.harga);
    //             $('#v_pembuatan').val(data.pembuatan);
    //             $('#v_pemasangan').val('data.pemasangan');
    //             $('#v_keterangan').text(data.keterangan);
    //             $('#v_deskripsi').html(data.deskripsi);
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             alert('Error get data from ajax');
    //         }
    //     });
    // }

    function details_produk(params) {
        $('#detail_produk').empty();
        $.ajax({
            url: "<?php echo site_url('admin/produk/details_produk') ?>/" + params,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('#detail_produk').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function getKategori() {
        let dropdown_group = $('#id_kategori');
        dropdown_group.empty();
        dropdown_group.append('<option selected="true" value="" >--Pilih Kategori--</option>');
        dropdown_group.prop('selectedIndex', 0);
        const url = '<?php echo site_url('admin/produk/getKategori') ?>';
        $.getJSON(url, function(data) {
            //console.log(data);
            $.each(data, function(key, isi) {
                dropdown_group.append($('<option></option>').attr('value', isi.id).text(isi.nama));
            });
        });
    }
    getKategori();

    function add_new() {
        save_method = 'add';
        $('#deskripsi').summernote('code', '');
        $('#form_produk')[0].reset(); // reset form on modals
        getKategori();
        $('#modal_form_produk').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Produk'); // Set Title to Bootstrap modal title
    }

    function add_new_kategori() {
        save_method = 'add';
        $('#form_kategori')[0].reset(); // reset form on modals
        $('#modal_form_produk').modal('hide');
        $('#modal_form_kategori').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Kategori Produk'); // Set Title to Bootstrap modal title
    }

    function add_new_foto_produk() {
        save_method = 'add';
        $('#form_foto_produk')[0].reset(); // reset form on modals
        $('#modal_form_foto_produk').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Foto Produk'); // Set Title to Bootstrap modal title
    }

    $('#form_produk').submit(function(e) {
        // alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form_produk')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();

        if ($('[name="foto"]').val() == '') {
            alert('Pilih Foto Produk Yang Akan di Upload !');
            return false;
        }

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 

        // ajax adding data to database
        // console.log($('#form_produk').serialize());
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/produk/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('admin/produk/ajax_update') ?>";
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
                    get_list_produk();
                    showAlert(data.type, data.mess);
                    $('#modal_form_produk').modal('hide');
                } else {
                    get_list_produk();
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