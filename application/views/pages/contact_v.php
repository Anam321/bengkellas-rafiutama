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
         <div class="d-none d-sm-block mb-5 pb-4">
             <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Duren%20Mekar,%20Kec.%20Bojongsari,%20Kota%20Depok,%20Jawa%20Barat,%20Indonesia+(https://www.google.com/maps/place/Depok,+Duren+Mekar,+Kec.+Bojongsari,+Kota+Depok,+Jawa+Barat,+Indonesia/@-6.4127142,106.7467403,19z/data=!4m9!1m3!11m2!2sHCrN9mqFR9bG0n7xs2O34CTAft6AwA!3e2!3m4!1s0x2e69e8ed34aeedf7:0xd4287d7007cd5a84!8m2!3d-6.4127235!4d106.7470809?hl=id-ID)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>


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
                         <p>+62 <?= $telpon2 ?></p>
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