<section class="breadcrumb breadcrumb_bg align-items-center">
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
</section>


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
        width: 100%;
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
</style>


<section class="our_project section_padding" id="portfolio">
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
                        <li data-filter=".K_las">Kontruksi Las</li>
                        <li data-filter=".Gorden">Gorden</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row justify-content-between portfolio-grid">

                <?php foreach ($produk as $p) : ?>

                    <div class="col-lg-3 mb-4 col-sm-6 all <?= $p['filter'] ?>">
                        <div class="section border bg-white rounded p-2">
                            <div class="row">
                                <div class="col-lg-12 img-section">
                                    <img src="<?= base_url(); ?>assets/frontend/img/<?= $p['foto'] ?>" class="p-0 m-0 res-ponsive">
                                    <!--Ganti Gambar Sendiri/ Script PHP Produk-->
                                    <span class="badge badge-danger add-sens p-2 rounded-0">NOW</span>
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
                                <div class="col-lg-12 section-detail">
                                    <p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor.</p>
                                    <hr>
                                </div>
                                <div class="col-lg-12 pb-2">
                                    <div class="row" style="justify-content: center;">
                                        <div class="col-lg-6">
                                            <a href="<?= base_url(); ?>produk/detailproduk" class="btn btn-danger btn-block btn-sm">VIEW PRODUK</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>

    <?php echo $this->pagination->create_links(); ?>

    <!-- <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav> -->
</section>