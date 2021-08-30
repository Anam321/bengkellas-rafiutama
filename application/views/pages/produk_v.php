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


 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>

               <?php foreach ($kategori as $kat) : ?>
              <li data-filter=".<?= $kat['id_kategori'] ?>"><?= $kat['nama_kategori'] ?></li>
               <?php endforeach ?>
           
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($produk as $p) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $kat['id_kategori'] ?>">
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
      <?php echo $paging ?>

    </section>
    