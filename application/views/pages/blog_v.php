 <section class="blog_area section_padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 mb-5 mb-lg-0">
                 <div class="blog_left_sidebar">

                     <?php foreach ($blog as $b) : ?>
                         <article class="blog_item">
                             <div class="blog_details">
                                 <p>Posted By : <?= $b['user_post'] ?></p>
                                 <a class="d-inline-block" href="<?= base_url('blog/read/'); ?><?= $b['slug'] ?>">
                                     <h2><?= $b['judul'] ?></h2>
                                 </a>
                                 <p><?= preg_replace('#</?(p|img).*?>#is', '', $b['konten']);  ?></p>
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
                     <aside class="single_sidebar_widget tag_cloud_widget">
                         <h4 class="widget_title">Labels Clouds</h4>
                         <ul class="list">
                             <li>
                                 <a href="#">project</a>
                             </li>
                             <li>
                                 <a href="#">love</a>
                             </li>
                             <li>
                                 <a href="#">technology</a>
                             </li>
                             <li>
                                 <a href="#">travel</a>
                             </li>
                             <li>
                                 <a href="#">restaurant</a>
                             </li>
                             <li>
                                 <a href="#">life style</a>
                             </li>
                             <li>
                                 <a href="#">design</a>
                             </li>
                             <li>
                                 <a href="#">illustration</a>
                             </li>
                         </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                         <h3 class="widget_title">Recent Post</h3>

                         <?php foreach ($post as $b) : ?>

                             <div class="media post_item">
                                 <div class="media-body">
                                     <a href="<?= base_url('blog/read/'); ?><?= $b['slug'] ?>">
                                         <h3><?= $b['judul'] ?></h3>
                                     </a>
                                     <p><?= date('M d, Y', strtotime($b['created_at'])) ?></p>
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