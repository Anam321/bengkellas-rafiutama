 <section class="breadcrumb breadcrumb_bg align-items-center">
     <div class="container">
         <div class="row align-items-center justify-content-between">
             <div class="col-sm-6">
                 <div class="breadcrumb_tittle text-left">
                     <h2>contact</h2>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="breadcrumb_content text-right">
                     <p>Home<span>/</span>contact</p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- breadcrumb start-->


 <!-- ================ contact section start ================= -->
 <section class="contact-section section_padding">
     <div class="container">
         <div class="d-sm-block mb-5 pb-4">
             <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                 <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                 <script>
                     (function() {
                         var setting = {
                             "height": 540,
                             "width": '100%',
                             "zoom": 17,
                             "queryString": "Bengkel Las Rafi Utama, Pondok Petir, Depok City, West Java, Indonesia",
                             "place_id": "ChIJ3T-2_VDvaS4R1bD4J6NBojQ",
                             "satellite": false,
                             "centerCoord": [-6.3757588906131515, 106.7316891609245],
                             "cid": "0x34a241a327f8b0d5",
                             "lang": "en",
                             "cityUrl": "/indonesia/jakarta",
                             "cityAnchorText": "Map of Jakarta, Java, Indonesia",
                             "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                             "embed_id": "534520"
                         };
                         var d = document;
                         var s = d.createElement('script');
                         s.src = 'https://1map.com/js/script-for-user.js?embed_id=534520';
                         s.async = true;
                         s.onload = function(e) {
                             window.OneMap.initMap(setting)
                         };
                         var to = d.getElementsByTagName('script')[0];
                         to.parentNode.insertBefore(s, to);
                     })();
                 </script>
             </div>

         </div>


         <div class="row">


             <div class="falsh-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
             <?php if ($this->session->flashdata('flash')) : ?>

                 <!-- <div class="alert alert-warning alert-success fade show" role="alert">
                     <strong>Holy guacamole!</strong> <?= $this->session->flashdata('flash'); ?>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div> -->

             <?php endif; ?>


             <div class="col-12">
                 <h2 class="contact-title">Get in Touch</h2>
             </div>
             <div class="col-lg-8">

                 <?= validation_errors() ?>
                 <form class="form-contact contact_form" action="<?= base_url('contact'); ?>" method="post" novalidate="novalidate">
                     <div class="row">
                         <div class="col-12">
                             <div class="form-group">

                                 <textarea class="form-control w-100" id="message" name="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message' required></textarea>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control" id="nama" name="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control" id="email" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-group">
                                 <input class="form-control" id="subject" name="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                             </div>
                         </div>

                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                     </div>
                 </form>
             </div>








             <div class="col-lg-4">
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-home"></i></span>
                     <div class="media-body">
                         <h3>Depok</h3>
                         <p><?= $alamat ?></p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                     <div class="media-body">
                         <h3>Phone number</h3>
                         <p><a href="https://api.whatsapp.com/send?phone=082124899677&amp;text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan" target="_blank">0821-2489-9677</a></p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-email"></i></span>
                     <div class="media-body">
                         <h3><?= $email ?></h3>
                         <p>Send us your query anytime!</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>