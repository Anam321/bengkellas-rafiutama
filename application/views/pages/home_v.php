<style>
    .content {
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .hero {
        position: relative;
        background: #333333;
        color: white;
        height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .hero h1 {
        position: relative;
        z-index: 1;
        font-size: 4.5rem;
        margin: 0 0 10px;
        line-height: 1;
        color: rgba(255, 255, 255, 0.9);
        z-index: 1;
    }

    .hero p {
        position: relative;
        z-index: 1;
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.4;
        z-index: 1;
    }


    .heroText {
        text-align: center;
        color: #fff;
        margin-top: 150px;
        z-index: 1;
    }

    .heroText h1 {
        font-size: 3em;
        margin: 0;
    }

    .heroText button {
        color: #fff;
        background: transparent;
        border: solid 2px #fff;
        padding: 10px 30px;
        border-radius: 30px;
        margin: 5px;
        font-weight: bold;
        display: inline-block;
    }

    .heroText button:hover {
        cursor: pointer;
        background: #fff;
        border: solid 2px #fff;
        color: #333;

    }

    button.joinNow {
        background: rgb(0, 206, 93);
        border: solid 2px rgb(0, 206, 93);
    }

    button.joinNow:hover {
        color: #fff;
        background: rgb(1, 168, 76);
        border: solid 2px rgb(1, 168, 76);
    }

    /* ========================= */

    .waves {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 250px;
        background-color: var(--color);
        box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
        transition: 500ms;
    }

    .waves::before,
    .waves::after {
        content: '';
        position: absolute;
        width: 300vw;
        height: 300vw;
        top: -65vw;
        left: 50%;
        transform: translate(-50%, -75%);
    }

    .waves::before {
        border-radius: 44%;
        background: #001b5e;
        animation: waves 8s linear infinite;
    }

    .waves::after {
        border-radius: 44%;
        background: #ff5e13;
        animation: waves 15s linear infinite;
    }

    @keyframes waves {
        0% {
            transform: translate(-50%, -75%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -75%) rotate(360deg);
        }
    }

    .card-img-top {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
</style>






<section class="hero" style="background-image: url(<?= base_url(); ?>assets/frontend/img/upload/hero/<?= $foto_h ?>);">
    <div class=" content">
        <div class="heroText">
            <h1><span>Berkomitmen </span><?= $tittle ?></h1>
            <p>Push yourself, no one else is going to do it for you.</p>
            <a href="#" class="btn_1">View project </a>
        </div>

    </div>
    <div class="waves"></div>

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

                        <li> <a class="text-warning" href="<?= base_url('produk') ?>"> Lihat selengkapnya</a> </li>

                    </ul>
                    <!-- <ul>

                        <li data-filter=".K_las">Kontruksi Las</li>
                        <li data-filter=".Gorden">Gorden</li>

                    </ul> -->
                </div>
            </div>
        </div>

        <!-- <div class="filters-content">
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
        </div> -->
        <div class="row">

            <?php foreach ($produk as $p) : ?>
                <div class="col-md-3 mb-4">
                    <a href="<?= base_url() ?>produk/produk_detail/<?= $p['slug'] ?>" class="card shadow-sm">
                        <img src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $p['foto'] ?>" class="card-img-top mx-auto d-block" alt="Gambar Foto <?= $p['nama_p'] ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nama_p'] ?></h5>
                            <h4 class="card-title" style="color:#fa591d;">Rp <?= number_format($p['harga'], 0, ',', '.') ?></h4>
                            <p class="card-text"><small class="text-muted">Last updated
                                    <?php $selisih = time() - strtotime($p['update_at']);
                                    $detik = $selisih;
                                    $menit = round($selisih / 60);
                                    $jam = round($selisih / 3600);
                                    $hari = round($selisih / 86400);
                                    $minggu = round($selisih / 604800);
                                    $bulan = round($selisih / 2419200);
                                    $tahun = round($selisih / 29030400);
                                    if ($detik <= 60) {
                                        $waktu = $detik . ' detik yang lalu';
                                    } else if ($menit <= 60) {
                                        $waktu = $menit . ' menit yang lalu';
                                    } else if ($jam <= 24) {
                                        $waktu = $jam . ' jam yang lalu';
                                    } else if ($hari <= 7) {
                                        $waktu = $hari . ' hari yang lalu';
                                    } else if ($minggu <= 4) {
                                        $waktu = $minggu . ' minggu yang lalu';
                                    } else if ($bulan <= 12) {
                                        $waktu = $bulan . ' bulan yang lalu';
                                    } else {
                                        $waktu = $tahun . ' tahun yang lalu';
                                    }
                                    echo $waktu;
                                    ?>
                                </small></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>

        </div>
    </div>


</section>
<!-- our_project part end-->

<!-- member_counter counter start -->
<!-- <section class="member_counter padding_bottom">
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
</section> -->
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
                            <img src="<?= base_url(); ?>assets/frontend/img/upload/testimoni/<?= $testi['foto'] ?>" alt="">
                            <div class="tour_pack_content">
                                <p><?= $testi['testimoni'] ?></p>
                                <h4><?= $testi['nama'] ?></h4>
                            </div>
                        </div>

                    <?php endforeach ?>




                </div>
            </div>
        </div>





        <!-- <div class=" col-lg-4">
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
        </div> -->
    </div>
</section>
<!-- review part end-->

<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row ">
            <div class="col-xl-5">
                <div class="section_tittle ">
                    <h2>BLOG</h2>
                </div>
            </div>
        </div>
        <div class="row">


            <?php foreach ($blog as $b) : ?>
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_details">
                            <p>Posetd By : <?= $b['user_post'] ?></p>
                            <a class="d-inline-block" href="<?= base_url('blog/') ?><?= $b['slug'] ?>">
                                <h2><?= $b['judul'] ?></h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            <?php endforeach ?>


        </div>
    </div>
</section>