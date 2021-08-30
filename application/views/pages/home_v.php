 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?= base_url() ; ?>assets/frontend/img/upload/produk/IMG-20210521-WA0027.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di WEb <br> <span>Rafiutama.com</span></h2>
              <p class="animate__animated animate__fadeInUp">Nikmati kemudahan Dalam Transaksi, dan dapatkan Hasil produk yang bermutu dan berkualitas. Apa yang anda impikan kami siap mewujudkan. kepuasan pelanggan kepuasan kami juga.</p>
              <a href="<?= base_url('produk') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <?php foreach ($hero as $heros) : ?>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?= base_url() ; ?>assets/frontend/img/upload/hero/<?= $heros['foto'] ?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?= $heros['tittle'] ?></h2>
              <p class="animate__animated animate__fadeInUp"><?= $heros['deskripsi'] ?></p>
              <a href="<?= base_url('produk') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <?php endforeach ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Rancang Impian Anda Bersama Kami</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             <?= $keterangan_p ?>
            </p>
           
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            
            <ul>
              <li><i class="ri-check-double-line"></i>
              <h2>VISI</h2>
              <p><?= $visi ?></p>
            </li>
               
            <ul>
              <li><i class="ri-check-double-line"></i>
              <h2>MISI</h2>
              <p><?= $misi ?></p>
            </li>
            </ul>

           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?= base_url() ; ?>assets/frontend/img/upload/profile/visi.jpg");' data-aos="zoom-in" data-aos-delay="100">
            
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>Kami Berpengalaman dalam Pengerjaan</strong></h3>
             
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"> Pengenalan Perusahaan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      <?= $deskripsi ?>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>PELAYANAN KAMI</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Konstruksi</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Perbaikan</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Interior</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Gorden</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->




    <section id="skills" class="skills">
      <div class="container">
        <div class="section-title">
            <p>Produk Kami</p> 
            <div class="mt-5">
                <h2><a href="<?= base_url('produk') ?>">Lihat Selengkapnya</a></h2>   
            </div>
        </div>


                <style>
                    .main-section {
                        margin-top: 20px;
                    }

                    .add-sens {
                        position: absolute;
                        top: 0px;
                        right: 50px;
                    }

                    .img-section {
                        overflow: hidden;
                    }

                    .img-section img {
                        overflow: hidden;

                        height: 200px;
                    }

                    .img-section img:hover {
                        opacity: 0.6;
                        transition: 0.5s;
                        cursor: pointer;
                    }

                    .sectin-title h1 {
                        font-weight: 700;
                        font-size: 23px;
                        color: #ff5e13;
                    }

                    .section-detail p {
                        color: #756d6d;
                        letter-spacing: 1px;
                    }

                    .fa-star,
                    .fa-star-half-alt {
                        color: #ff5e13;
                    }

                    .fa-star-half-alt {
                        margin-right: 10px;
                    }

                    .card-img-top {
                        width: 100%;
                        height: 250px;
                        object-fit: cover;
                    }
                </style>



        <div class="row skills-content">
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

    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="https://api.whatsapp.com/send?phone=+6282124899677&text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan">Call To Action</a>
        </div>

      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Testimonials</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


           <?php foreach ($testimoni as $testi) : ?>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url(); ?>assets/frontend/img/upload/testimoni/<?= $testi['foto'] ?>" class="testimonial-img" alt="">
                  <h3><?= $testi['nama'] ?></h3>
                 
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $testi['testimoni'] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          <?php endforeach ?>

           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
  

   

  </main>