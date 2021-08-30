<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container-xl" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            

            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url() ; ?>assets/frontend/img/upload/blog/" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <?= $blog['judul'] ?>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"> <?= $blog['user_post'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= date('M d, Y', strtotime($blog['created_at'])) ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 <?= $blog['konten'] ?>
                </p>
                
              </div>

            </article><!-- End blog entry -->
           

          

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">

              <?php foreach ($post as $b) : ?>
                <div class="post-item clearfix">
                  <img src="<?= base_url() ; ?>assets/frontend/img/upload/blog/<?= $b['gambar'] ?>" alt="">
                  <h4><a href="<?= base_url('blog/read/'); ?><?= $b['slug'] ?>"><?= $b['judul'] ?></a></h4>
                  <time datetime="2020-01-01"><?= date('M d, Y', strtotime($b['created_at'])) ?>0</time>
                </div>
            <?php endforeach ?>
                

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->


    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Model</p>
        </div>

        <div class="row">
 <?php foreach ($produk as $produks): ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img style="overflow: hidden; width: 100%;
        height: 250px;
        object-fit: cover;" src="<?= base_url() ; ?>assets/frontend/img/upload/produk/<?= $produks['foto'] ?>" class="card-img-top mx-auto d-block" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?= $produks['nama_p'] ?></h4>
                  <span><?= $produks['keterangan'] ?></span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
<?php endforeach ?>
         

         

        </div>

      </div>
    </section>
  </main>