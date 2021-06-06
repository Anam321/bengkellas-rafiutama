<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/font-awesome-ie7.c">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <div class="col-lg-10">


                <?php echo form_open_multipart(base_url('admin/inputproduk/inputproduk/')); ?>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">

                            <textarea class="form-control w-100" id="deskripsi" name="deskripsi" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'deskripsi'" placeholder='deskripsi' required></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="nama_p" name="nama_p" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'" placeholder='name'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="slug" name="slug" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'slug'" placeholder='slug'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="jenis_p" name="jenis_p" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'jenis produk'" placeholder='jenis produk'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="kategori" name="kategori" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'kategori'" placeholder='kategori'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="pembuatan" name="pembuatan" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pembuatan'" placeholder='pembuatan'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="pemasangan" name="pemasangan" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pemasangan'" placeholder='pemasangan'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="keterangan" name="keterangan" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'keterangan'" placeholder='keterangan'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="spesifikasi" name="spesifikasi" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'spesifikasi'" placeholder='spesifikasi'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="harga" name="harga" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'harga'" placeholder='harga'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="bahan" name="bahan" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'bahan'" placeholder='bahan'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="filter" name="filter" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'filter'" placeholder='filter'>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="foto" name="foto" type="file">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">

                    <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                </div>


                <?php echo form_close(); ?>


            </div>

        </div>
    </div>


    <p>


    </p>










    <script src="<?= base_url(); ?>assets/frontend/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/frontend/js/jquery-1.12.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/frontend/js/myscript.js"></script>
    <!-- popper js -->
    <script src="<?= base_url(); ?>assets/frontend/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url(); ?>assets/frontend/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url(); ?>assets/frontend/js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="<?= base_url(); ?>assets/frontend/js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="<?= base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/frontend/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url(); ?>assets/frontend/js/slick.min.js"></script>
    <script src="<?= base_url(); ?>assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/frontend/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url(); ?>assets/frontend/js/custom.js"></script>

</body>

</html>