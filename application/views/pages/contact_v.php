<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Kontak</li>
        </ol>
        

      </div>
    </section><!-- End Breadcrumbs -->

<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>kontak</p>
        </div>
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
            <div class="col-lg-6">

            <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Alamat</h3>
                        <p><?= $alamat ?></p> <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p><?= $email ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="info-box mt-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p><a href="https://api.whatsapp.com/send?phone=<?= $telpon ?>&amp;text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan" target="_blank"><?= $telpon ?></a> <br>
                    <a href="https://api.whatsapp.com/send?phone=<?= $telpon2 ?>&amp;text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan" target="_blank"><?= $telpon2 ?></a>
                </p>
                </div>
                </div>
            </div>

            </div>

        <div class="col-lg-6">

            <?= validation_errors() ?>
            <form action="<?= base_url('contact'); ?>" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" id="nama" name="nama" class="form-control" id="name" placeholder="Nama Kamu" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" id="email" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>