<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Produk detail</li>
        </ol>
        <h2>Produk Detail</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">


             <?php 
              foreach ($image as $img1) : ?>
                <div class="swiper-slide">
                    <div style="">
                        <img class="card-img-top mx-auto d-block" src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $img1->file ?>" alt="">    
                    </div>  
                </div>

               <?php endforeach ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?= $produk['nama_p'] ?></h3>
              <ul>
                <li><strong>Bahan</strong>: <?= $produk['bahan'] ?></li>
                <li><strong>Pembuatan</strong>: <?= $produk['pembuatan'] ?></li>
                <li><strong>Pemasangan</strong>: <?= $produk['pemasangan'] ?></li>
                <li><strong>Harga</strong>: <a href="#">Rp <?= number_format($produk['harga'], 0, '.', '.') ?></a></li>
              </ul>
              <div class="action">
                            <a href=""> <button class=" btn btn-default" type="button"></button></a>

                            <a href="https://api.whatsapp.com/send?phone=<?= $telpon2 ?>&text=Halo%20Rafi%20Utama,%20Saya%20mau%20order%20produk%20ini%20<?= base_url() ?>produk/produk_detail/<?= $produk['slug'] ?>"> <button class="add-to-cart btn btn-danger"  type="button">Order sekarang</button></a>
                            <a href="<?= base_url('produk'); ?>"> <button class="add-to-cart btn btn-danger" style="background:blue;" type="button">Produk Lain</button></a>



                        </div>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <p>
               <?= $produk['deskripsi'] ?>
              </p>
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
          <p><?= $produk['nama_p'] ?></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
           
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($image as $img1) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item ">
            
                            <img src="<?= base_url(); ?>assets/frontend/img/upload/produk/<?= $img1->file ?>" class="card-img-top mx-auto d-block" alt="Gambar Foto">

                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <h4 class="card-title" style="color:#fa591d;"></h4>
                                
                            </div>
                      
          </div>
        <?php endforeach ?>
        
        </div>

      </div>
      

    </section>
    


  </main>
  