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
             <div id="map" style="height: 480px;"></div>
             <script>
                 function initMap() {
                     var uluru = {
                         lat: -25.363,
                         lng: 131.044
                     };
                     var grayStyles = [{
                             featureType: "all",
                             stylers: [{
                                     saturation: -90
                                 },
                                 {
                                     lightness: 50
                                 }
                             ]
                         },
                         {
                             elementType: 'labels.text.fill',
                             stylers: [{
                                 color: '#ccdee9'
                             }]
                         }
                     ];
                     var map = new google.maps.Map(document.getElementById('map'), {
                         center: {
                             lat: -31.197,
                             lng: 150.744
                         },
                         zoom: 9,
                         styles: grayStyles,
                         scrollwheel: false
                     });
                 }
             </script>
             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap"></script>

         </div>


         <div class="row">
             <div class="col-12">
                 <h2 class="contact-title">Get in Touch</h2>
             </div>
             <div class="col-lg-8">

                 <form class="form-contact contact_form" action="<?= base_url('contact/inputcontact') ?>" method="post" novalidate="novalidate">
                     <div class="row">
                         <div class="col-12">
                             <div class="form-group">

                                 <textarea class="form-control w-100" name="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control" name="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-group">
                                 <input class="form-control" name="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
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
                         <h3>Indonesi</h3>
                         <p><?= $alamat ?></p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                     <div class="media-body">
                         <h3>+62 <?= $telpon ?></h3>
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