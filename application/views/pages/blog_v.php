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

            <?php foreach ($blog as $b) : ?>

            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url() ; ?>assets/frontend/img/upload/blog/<?= $b['gambar'] ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= base_url('blog/read/'); ?><?= $b['slug'] ?>"><?= $b['judul'] ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $b['user_post'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= date('M d, Y', strtotime($b['created_at'])) ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 <?= preg_replace('#</?(p|img).*?>#is', '', $b['konten']);  ?>
                </p>
                
              </div>

            </article><!-- End blog entry -->
            <?php endforeach ?>

            <div class="blog-pagination">
              <?php echo $paging ?>
            </div>

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

  </main>