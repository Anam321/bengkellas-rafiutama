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

    // function reload_table() {
    //     table.ajax.reload(null, false);;
    // }

    // function searchRecords() {
    //     $('#table-search').on('keyup change focus', function(e) {
    //         // var filterBy = $('#filterBy').val();
    //         // var hasFilter = filterBy !== '';
    //         var value = $('#table-search').val(); // clear selected rows

    //         table.search('').columns().search('').draw();
    //         table.search(value).draw();

    //     });
    // }
    // searchRecords();

    // $(document).ready(function() {
    //     table = $('#myTable').DataTable({
    //         "searching": true,
    //         //"lengthChange": false,
    //         "processing": true, //Feature control the processing indicator.
    //         "serverSide": true, //Feature control DataTables' server-side processing mode.
    //         "order": [], //Initial no order.

    //         // Load data for the table's content from an Ajax source
    //         "ajax": {
    //             "url": "<?php echo site_url('admin/produk/ajax_list') ?>",
    //             "type": "POST",
    //             "dataType": "json",
    //         },

    //         //Set column definition initialisation properties.
    //         "columnDefs": [{
    //                 "targets": [4], //last column
    //                 "orderable": false, //set not orderable
    //             },
    //             // {
    //             //     "targets": [1],
    //             //     "visible": false,
    //             //     "searchable": false
    //             // },
    //         ],
    //     });

    // });

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

    function add_new() {
        save_method = 'add';
        $('#form_produk')[0].reset(); // reset form on modals
        $('#deskripsi').summernote('code', '');
        $('#modal_form_produk').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Produk'); // Set Title to Bootstrap modal title
    }

    function add_foto(id, nama) {
        save_method = 'add';
        $('#form_foto_produk')[0].reset(); // reset form on modals
        $('[name="idkategori"]').val(id);
        $('#modal_form_foto_produk').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Foto Produk ' + nama); // Set Title to Bootstrap modal title
    }

    function edit(id) {
        save_method = 'update';
        $('#form_produk')[0].reset(); // reset form on modals
        $('#deskripsi').summernote('code', '');
        // $('#modal_form_produk').modal('show');


        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/produk/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                // console.log('edit', data);
                $('[name="id_kategori"]').val(data.id_kategori);
                $('[name="kategori"]').val(data.kategori);
                $('#deskripsi').summernote('code', data.deskripsi);
                $('[name="harga"]').val(data.harga);

                $('[name="old_foto"]').val(data.foto);

                $('#modal_form_produk').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Data Produk'); // Set Title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }


    // function get_kategori() {
    //     let dropdown = $('#id_kategori');
    //     dropdown.empty();
    //     dropdown.append('<option value="" selected="true">-- pilih Kategori --</option>');
    //     const url = '<?php echo site_url('admin/produk/get_kategori') ?>';
    //     $.getJSON(url, function(data) {
    //         ////console.log(data);
    //         $.each(data, function(key, isi) {
    //             dropdown.append($('<option></option>').attr('value', isi.id).text(isi.nama));
    //         });
    //     });
    // }
    // get_kategori();

    function detail(id) {

        $('#foto_produk').empty();
        $('#detai_desc').empty();
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/produk/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                // console.log('edit', data);
                var nama = data.kategori;
                $('#title').val(nama);
                $('#foto_produk').attr('src', '<?= base_url('assets/uploads/produk/kategori/') ?>' + data.foto);
                $('#detai_desc').html(data.deskripsi);
                get_foto_produk(id);

                $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Detail Produk ' + nama); // Set Title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function get_foto_produk(id) {
        //Ajax Load data from ajax
        $('#list_foto_produk').empty();
        $.ajax({
            url: "<?php echo site_url('admin/produk/get_foto_produk') ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                'id_kategori': id
            },
            success: function(data) {
                $('#list_foto_produk').html(data);
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
                url: "<?php echo site_url('admin/produk/ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.status == '00') {
                        // reload_list_produk();
                        get_list_produk();
                        showAlert(data.type, data.mess);
                    } else {
                        get_list_produk();
                        showAlert(data.type, data.mess);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });
        }
    }

    function delete_foto(id, idkategori) {
        if (confirm('Apakah Anda yakin menghapus data ini ?')) {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('admin/produk/ajax_delete_foto') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.status == '00') {
                        get_foto_produk(idkategori);
                        get_list_produk();
                        showAlert(data.type, data.mess);
                    } else {
                        get_foto_produk(idkategori);
                        get_list_produk();
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

    $('#form_foto_produk').submit(function(e) {
        // alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form_foto_produk')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();

        if ($('[name="foto_produk"]').val() == '') {
            alert('Pilih Foto Produk Yang Akan di Upload !');
            return false;
        }

        $('#btnSaveFoto').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSaveFoto').attr('disabled', true); //set button disable 

        // ajax adding data to database
        // console.log($('#form_produk').serialize());
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('admin/produk/ajax_add_foto') ?>";
        } else {
            url = "<?php echo site_url('admin/produk/ajax_update_foto') ?>";
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
                    $('#modal_form_foto_produk').modal('hide');
                } else {
                    get_list_produk();
                    showAlert(data.type, data.mess);

                }

                $('#btnSaveFoto').text('Simpan'); //change button text
                $('#btnSaveFoto').attr('disabled', false); //set button enable 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSaveFoto').text('Simpan'); //change button text
                $('#btnSaveFoto').attr('disabled', false); //set button enable 
            }
        });

    });
</script>