 <section class="blog_area section_padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 mb-5 mb-lg-0">
                 <div class="blog_left_sidebar">

                     <?php foreach ($blog as $b) : ?>
                         <article class="blog_item">
                             <div class="blog_item_img">
                                 <img class="card-img rounded-0" src="<?= base_url(); ?>assets/frontend/img/upload/blog/<?= $b['gambar'] ?>" alt="">
                                 <a href="#" class="blog_item_date">
                                     <h3><?= $b['time'] ?></h3>

                                 </a>
                             </div>

                             <div class="blog_details">
                                 <a class="d-inline-block" href="<?= base_url('blog/blog_detail/'); ?><?= $b['id_artikel'] ?>">
                                     <h2><?= $b['judul_artikel'] ?></h2>
                                 </a>
                                 <p><?= $b['konten'] ?></p>
                                 <ul class="blog-info-link">
                                     <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                     <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                 </ul>
                             </div>
                         </article>
                     <?php endforeach ?>


                 </div>
                 <?php echo $paging ?>
             </div>


             <div class="col-lg-4">
                 <div class="blog_right_sidebar">
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
                                     <p><?= $b['id_artikel'] ?></p>
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