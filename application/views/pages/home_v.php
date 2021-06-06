<section class="banner_part" style="background-image: url(<?= base_url(); ?>assets/frontend/img/upload/hero/<?= $foto_h ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1><span>Berkomitmen </span><?= $tittle ?></h1>

                        <a href="#" class="btn_1">View project </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="about_part_img">
                    <img src="<?= base_url(); ?>assets/frontend/img/upload/profile/visi.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_part_text">
                    <h2>Rancang Impian Anda Bersama Kami</h2>
                    <p><?= $keterangan_p ?></p>
                    <ul>
                        <li>
                            <span class="flaticon-drop"></span>
                            <h3>VISI</h3>
                            <p><?= $visi ?> </p>
                        </li>
                        <li>
                            <span class="flaticon-ui"></span>
                            <h3>MISI</h3>
                            <p><?= $misi ?> </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!-- our_service start-->
<section class="our_service padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <h2>PELAYANAN KAMI</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service">
                        <span class="flaticon-ui"></span>
                        <h4>Pengerjaan Cepat Dan Tepat</h4>
                        <p>Kami selalu mengerjakan dengan cepat, akurat dan tepat. Tentu nya dengan hasil yang baik. kami selalu teliti dengan pengerjaan kami, keselamatan dalam ruang lingkup kerja selalu di prioritaskan</p>
                        <a href="#" class="btn_3">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service">
                        <span class="flaticon-ui"></span>
                        <h4>Bahan Berkualitas</h4>
                        <p>Produk kami selalu mengguakan bahan-bahan yag berkualitas, kepuasan pelanggan adalah ke utamaan kami</p>
                        <br><br>
                        <a href="#" class="btn_3">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service single_service_2">
                        <span class="flaticon-ui"></span>
                        <h4>Good Service</h4>
                        <p>service kami selalu yang terbaik, pelayanan yang ter aplikasi kan dengan sangat sempurna</p>
                        <br><br><br><br>
                        <a href="#" class="btn_3">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our_service part end-->


<!-- about part start-->
<section class="about_part experiance_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="about_part_text">
                    <h2>Kami Berpengalaman dalam Pengerjaan</h2>

                    <p><?= $deskripsi ?></p>

                    <div class="about_text_iner">
                        <div class="about_text_counter">
                            <h2>10</h2>
                        </div>
                        <div class="about_iner_content">
                            <h3>Tahun <span>Kami Berdiri</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="about_part_img">
                    <img src="<?= base_url(); ?>assets/frontend/img/upload/profile/<?= $foto_2 ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!-- our_project part start-->
<section class="our_project section_padding" id="portfolio">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5 col-sm-10">
                <div class="section_tittle">
                    <h2>PRODUK KAMI</h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10">
                <div class="filters portfolio-filter project_menu_item">
                    <ul>

                        <li data-filter=".K_las">Kontruksi Las</li>
                        <li data-filter=".Gorden">Gorden</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">

                <?php foreach ($produk as $p) : ?>

                    <div class="col-lg-4 col-sm-6 mb-4 all <?= $p['filter'] ?>">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $p['foto'] ?>" alt="offer_img_1">
                                <div class="hover_text">
                                    <p><?= $p['nama_p'] ?></p>
                                    <a href="#" class="btn_1">View produk </a>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>


            </div>
        </div>
    </div>


</section>
<!-- our_project part end-->

<!-- member_counter counter start -->
<section class="member_counter padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_counter_icon">
                    <img src="<?= base_url(); ?>assets/frontend/img/icon/Icon_1.svg" alt="">
                </div>
                <div class="single_member_counter">
                    <span class="counter">60</span>
                    <h4> <span>Satisfied</span> Client</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_counter_icon">
                    <img src="<?= base_url(); ?>assets/frontend/img/icon/Icon_2.svg" alt="">
                </div>
                <div class="single_member_counter">
                    <span class="counter">10</span>
                    <h4> <span>Worldwide</span> Branches</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_counter_icon">
                    <img src="<?= base_url(); ?>assets/frontend/img/icon/Icon_3.svg" alt="">
                </div>
                <div class="single_member_counter">
                    <span class="counter">80</span>
                    <h4> <span>Total</span> Projects</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_counter_icon">
                    <img src="<?= base_url(); ?>assets/frontend/img/icon/Icon_4.svg" alt="">
                </div>
                <div class="single_member_counter">
                    <span class="counter">24</span>
                    <h4> <span>Work</span> Finished</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- member_counter counter end -->

<!-- review part start-->
<section class="review_part section_padding">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-5 col-xl-4">
                <div class="tour_pack_text">
                    <h2>Beberapa Umpan Balik Dari Klien</h2>

                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="review_part_cotent owl-carousel">

                    <?php foreach ($testimoni as $testi) : ?>

                        <div class="single_review_part">
                            <img src="<?= base_url(); ?>assets/frontend/img/testimoni/<?= $testi['foto'] ?>" alt="">
                            <div class="tour_pack_content">
                                <p><?= $testi['testimoni'] ?></p>
                                <h4><?= $testi['nama'] ?></h4>
                            </div>
                        </div>

                    <?php endforeach ?>




                </div>
            </div>
        </div>





        <div class=" col-lg-4">
            <div class="blog_right_sidebar">

                <aside class="single_sidebar_widget popular_post_widget">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Testimoni</h2>
                    </div>
                    <div class="col-12">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="col-lg-10">


                        <?php echo form_open_multipart(base_url('home/inputtesti')); ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" id="testmoni" name="testimoni" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message' required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="nama" name="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'" placeholder='name'>
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

                </aside>



            </div>
        </div>
    </div>
</section>
<!-- review part end-->

<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row ">
            <div class="col-xl-5">
                <div class="section_tittle ">
                    <h2>BERITA BARU</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($blog as $b) : ?>

                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/frontend/img/upload/blog/<?= $b['gambar'] ?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>

                                <h5 class="card-title"><?= $b['judul_artikel'] ?></h5>

                                <a href="<?= base_url('blog/blog_detail/'); ?><?= $b['id_artikel'] ?>" class="btn_3">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


        </div>
    </div>
</section>