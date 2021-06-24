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
<!-- <section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>Produk</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p>Home<span>/</span>Produk</p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="our_project mt-4 mb-4" id="portfolio">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-sm-10">
                <div class="section_tittle">
                    <h2>Our Produk</h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10">
                <div class="filters portfolio-filter project_menu_item">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php foreach ($kategori as $kat) : ?>
                            <li data-filter=".<?= $kat['id_kategori'] ?>"><?= $kat['nama_kategori'] ?></li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">

                <?php foreach ($produk as $p) : ?>
                    <div class="col-md-3 mb-4 all <?= $p['id_kategori'] ?>">
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

        <!-- <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">

                <?php // foreach ($produk as $p) :
                ?>

                    <div class="col-lg-3 mb-5 col-sm-6 all <?= $p['filter'] ?>">
                        <div class="section border bg-white rounded p-2">
                            <div class="row">
                                <div class="col-lg-12 img-section">




                                </div>
                                <div class="col-lg-12 sectin-title">
                                    <h1 class="pt-2"><?= $p['nama_p'] ?></h1>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <span class="badge badge-success p-2">Rp <?= $p['harga'] ?></span>
                                        </div>
                                        <div class="col-lg-10 text-right">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star-half-alt"></i></span><br>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-lg-12 pb-2">
                                    <div class="row" style="justify-content: center;">
                                        <div class="col-lg-6">
                                            <a href="<?= base_url('produk/produk_detail/'); ?><?= $p['slug'] ?>" class="btn btn-primary btn-block btn-sm">VIEW PRODUK</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php // endforeach
                ?>

            </div>
        </div> -->
    </div>

    <?php echo $paging ?>


</section>