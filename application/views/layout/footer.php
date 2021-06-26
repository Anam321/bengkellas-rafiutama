<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="#"> <img src="<?= base_url(); ?>assets/frontend/img/upload/logo/<?= $logo ?>" alt=""> </a>
                    <p><b>BENGKEL LAS RAFI UTAMA</b> BERDIRI TAHUN 1999 dengan modal pengalaman kami di bidang bengkel las selama puluhan tahun, dan didukung dengan tenaga kerja yang profesional dan ahli dibidangnya, kami yakin akan bisa mengerjakan kebutuhan perlengkapan rumah anda dengan hasil yang maksimal, karena motto kami adalah "kepuasan konsumen adalah kebahagian kami" sehingga hasil akhir dari setiap pengerjaan akan kami jaga kualitasnya.</p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Best Services</h4>
                    <div class="contact_info">
                        <ul>
                            <li>
                                <a href="<?= base_url('admin/dashboard') ?>">Administrator</a>
                            </li>
                            <?php foreach ($kategori as $kat) : ?>
                                <li>
                                    <a href="#"><?= $kat['nama_kategori'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact info</h4>
                    <div class="contact_info">
                        <p><?= $alamat ?></p>
                        <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                        <p><span> Phone :</span> +62 <?= $telpon2 ?></p>

                        <p><span> Email : </span> <?= $email ?> </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Rafiutama.com by <a href="#" target="_blank">AnbomekerDev</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
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