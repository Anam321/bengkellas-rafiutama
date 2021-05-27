<section class="banner_part" style="background-image: url(<?= base_url(); ?>assets/frontend/img/upload/hero/<?= $foto_h ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1><span>Berkomitmen </span><?= $tittle ?></h1>
                        <p><?= $deskripsi ?></p>
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
                    <img src="<?= base_url(); ?>assets/frontend/img/upload/profile/<?= $foto ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_part_text">
                    <h2>Rancang Impian Anda Bersama Kami</h2>
                    <p><?= $keterangan_p ?></p>
                    <ul>
                        <li>
                            <span class="flaticon-drop"></span>
                            <h3>Certified Company</h3>
                            <p>Be man air male shall under create light together grass fly dat also also his brought itself air abundantly </p>
                        </li>
                        <li>
                            <span class="flaticon-ui"></span>
                            <h3>Pengalaman Karyawan</h3>
                            <p>Be man air male shall under create light together grass fly do also also his brought itself air abundantly </p>
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
                        <p>Set have great you male grasses yielding yielding first their to
                            called deep abundantly Set have great you male</p>
                        <a href="#" class="btn_3">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service">
                        <span class="flaticon-ui"></span>
                        <h4>Bahan Berkualitas</h4>
                        <p>Set have great you male grasses yielding yielding first their to called
                            deep abundantly Set have great you male</p>
                        <a href="#" class="btn_3">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service single_service_2">
                        <span class="flaticon-ui"></span>
                        <h4>Good Service</h4>
                        <p>Set have great you male grasses yielding yielding first their to called deep
                            abundantly Set have great you male</p>
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
                    <p>Their whose made waters there our, air above first give dry fruit that second whose herb creeping it us light spirit appear mans. So green abundantly She'd. Greater divide dry bearing years ourends herb upon which open lights had blessed replenish Cattle give his. Abundantly over saying which beast dominion multiply behold to wateo.</p>
                    <div class="about_text_iner">
                        <div class="about_text_counter">
                            <h2>20</h2>
                        </div>
                        <div class="about_iner_content">
                            <h3>year <span>of Experience</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="about_part_img">
                    <img src="<?= base_url(); ?>assets/frontend/img/experiance_img.png" alt="">
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

        </div>
        <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">

                <?php foreach ($produk as $p) : ?>

                    <div class="col-lg-4 col-sm-6 mb-4 all buildings">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="<?= base_url(); ?>assets/frontend/img/project_1.png" alt="offer_img_1">
                                <div class="hover_text">
                                    <p><?= $p['nama_p'] ?></p>
                                    <a href="#" class="btn_1">View project </a>

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
                    <p>Which cattle fruitful he fly visi won not let above lesser stars fly form wonder every let third form two air seas after us said day won lso together midst two female she</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="review_part_cotent owl-carousel">

                    <?php foreach ($testimoni as $testi) : ?>

                        <div class="single_review_part">
                            <img src="<?= base_url(); ?>assets/frontend/img/client/<?= $testi['foto'] ?>" alt="">
                            <div class="tour_pack_content">
                                <p><?= $testi['testimoni'] ?></p>
                                <h4><?= $testi['nama'] ?></h4>
                            </div>
                        </div>

                    <?php endforeach ?>

                    <div class="single_review_part">
                        <img src="<?= base_url(); ?>assets/frontend/img/client/client_1.png" alt="">
                        <div class="tour_pack_content">
                            <p> Life open fifth midst lesser place light after unto move that make had void and whales. So after void called whose were cattle fourth seed Image yielding is given every own tree Image</p>
                            <h4>Sawpalo, Brasil</h4>
                        </div>
                    </div>
                    <div class="single_review_part">
                        <img src="<?= base_url(); ?>assets/frontend/img/client/client_2.png" alt="">
                        <div class="tour_pack_content">
                            <p>Life open fifth midst lesser place light after unto move that make had void and whales. So after void called whose were cattle fourth seed Image yielding is given every own tree Image</p>
                            <h4>Sawpalo, Brasil</h4>
                        </div>
                    </div>
                    <div class="single_review_part">
                        <img src="<?= base_url(); ?>assets/frontend/img/client/client_1.png" alt="">
                        <div class="tour_pack_content">
                            <p>Life open fifth midst lesser place light after unto move that make had void and whales. So after void called whose were cattle fourth seed Image yielding is given every own tree Image</p>
                            <h4>Sawpalo, Brasil</h4>
                        </div>
                    </div>
                </div>
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
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="<?= base_url(); ?>assets/frontend/img/blog/blog_1.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                            </a>
                            <a href="#" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="<?= base_url(); ?>assets/frontend/img/blog/blog_2.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                            </a>
                            <a href="#" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="<?= base_url(); ?>assets/frontend/img/blog/blog_3.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">Our two firmament called us kind in face midst</h5>
                            </a>
                            <a href="#" class="btn_3">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>