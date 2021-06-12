<style>
    img {
        max-width: 100%;
    }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        margin-top: 50px;
        background: #fff;
        padding: 3em;
        line-height: 1.5em;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #b36800;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .orange {
        background: #ff9f1a;
    }

    .green {
        background: #85ad00;
    }

    .blue {
        background: #0076ad;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    /* breadcubms */
</style>




<section class="our_project section_padding" id="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <h2><?= $produk['kategori'] ?></h2>
                </div>
            </div>
        </div>

        <div class="container-fliud">
            <div class="blog_details">
                <div class="wrapper row">





                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                             <?php foreach ($image as $img) : ?>
                            <div class="tab-pane active" id="pic-1"><img src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $img['foto'] ?>" /></div>
                            <?php endforeach ?>
                            <!-- 
                            <div class="tab-pane" id="pic-2"><img src="<?= base_url(); ?>assets/frontend/img/project_2.png" /></div>
                            <div class="tab-pane" id="pic-3"><img src="<?= base_url(); ?>assets/frontend/img/project_3.png" /></div>
                            <div class="tab-pane" id="pic-4"><img src="<?= base_url(); ?>assets/frontend/img/project_1.png" /></div>
                            <div class="tab-pane" id="pic-5"><img src="<?= base_url(); ?>assets/frontend/img/project_2.png" /></div> -->
                        </div>
                        
                        <ul class="preview-thumbnail nav nav-tabs">

                        <?php foreach ($image as $img) : ?>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $img['foto'] ?>" /></a></li>
                            <?php endforeach ?>
                            <!-- <li><a data-target="#pic-2" data-toggle="tab"><img src="<?= base_url(); ?>assets/frontend/img/project_2.png" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="<?= base_url(); ?>assets/frontend/img/project_3.png" /></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="<?= base_url(); ?>assets/frontend/img/project_1.png" /></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= base_url(); ?>assets/frontend/img/project_2.png" /></a></li> -->
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"></h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h2><?= $produk['slug'] ?></h2>
                            <span class="review-no">41 reviews</span>
                        </div>
                        <p class="product-description"><?= $produk['keterangan'] ?></p>
                        <h4 class="price">current price: <span>Rp. <?= $produk['harga'] ?></span></h4>
                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>


                        <div class="action">
                            <a href="https://api.whatsapp.com/send?phone=+6281321560099&text=Halo%20Rafi%20Utama,%20Saya%20mau%20order%20produk%20ini%20<?= base_url() ?>produk/produk_detail/<?= $produk['slug'] ?>"> <button class="add-to-cart btn btn-default" type="button">Order sekarang</button></a>
                            <a href="<?= base_url('produk'); ?>"> <button class="add-to-cart btn btn-danger" style="background:blue;" type="button">Produk Lain</button></a>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="blog_details">
                        <div style="width: 100%; height: 50px; background:#e4e4e4de;">
                            <div class="col">
                                <div style="padding-top: 10px;">
                                    <h3>Spesifikasi Produk</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <table>
                                <tr>
                                    <td>
                                        <h6 style="color: #5c5959c7;">Kategori</h6 style="color: #5c5959c7;">
                                    </td>
                                    <td style="padding-left: 70px;">
                                        <?= $produk['kategori'] ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <h6 style="color: #5c5959c7;">Bahan</h6 style="color: #5c5959c7;">
                                    </td>
                                    <td style="padding-top: 20px; padding-left: 70px;">
                                        <?= $produk['bahan'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <h6 style="color: #5c5959c7;">Pembuatan</h6 style="color: #5c5959c7;">
                                    </td>
                                    <td style="padding-top: 20px; padding-left: 70px;">
                                        <?= $produk['pembuatan'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <h6 style="color: #5c5959c7;">Pemasangan</h6 style="color: #5c5959c7;">
                                    </td>
                                    <td style="padding-top: 20px; padding-left: 70px;">
                                        <?= $produk['pemasangan'] ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="width: 100%; height: 50px; margin-top:80px; background:#e4e4e4de;">
                            <div class="col">
                                <div style="padding-top: 10px;">
                                    <h3>Deskripsi Produk</h3>
                                </div>

                            </div>
                        </div>
                        <div class="col mt-4">
                            <table>
                                <tr>
                                    <td>
                                        <p>
                                            <?= $produk['deskripsi'] ?>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="blog_details">

                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="<?= base_url(); ?>assets/frontend/img/comment/comment_1.png" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>Harvard milan</h4>
                                    </a>
                                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                        our dominion twon Second divided from</p>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h4>05 Comments</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?= base_url(); ?>assets/frontend/img/comment/comment_1.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Emilly Blunt</a>
                                                    </h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?= base_url(); ?>assets/frontend/img/comment/comment_2.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Emilly Blunt</a>
                                                    </h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?= base_url(); ?>assets/frontend/img/comment/comment_3.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Emilly Blunt</a>
                                                    </h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form class="form-contact comment_form" action="#" id="commentForm">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button btn_1 button-contactForm">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Konstruksi Las</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Gorden</p>
                                        <p>(10)</p>
                                    </a>
                                </li>

                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>

                            <?php foreach ($post as $b) : ?>

                                <div class="media post_item">
                                    <img style="widht:40px; height:40px;" src="<?= base_url(); ?>assets/frontend/img/upload/blog/<?= $b['gambar'] ?>" alt="post">
                                    <div class="media-body">
                                        <a href="<?= base_url('blog/blog_detail/'); ?><?= $b['id_artikel'] ?>">
                                            <h3><?= $b['judul_artikel'] ?></h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>

                            <?php endforeach ?>

                        </aside>

                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Subscribe</button>
                            </form>
                        </aside>
                </div>
            </div>
        </div>
    </div>
</section>