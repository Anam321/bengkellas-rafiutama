<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-cover -->
            <header class="page-cover">
                <div class="text-center">
                    <a id="link_logo" target="_blank" class="user-avatar user-avatar-xl"><img id="logo_image" alt=""></a>
                    <h2 class="h4 mt-2 mb-0" id="nama_p"> </h2>
                    <div class="my-1">
                        <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
                    </div>
                    <p class="text-muted" id="no_p"> </p>
                    <p id="alamat_p"> . </p>
                </div>
            </header>

            <!-- .page-navs -->
            <nav class="page-navs">
                <!-- .nav-scroller -->
                <div class="nav-scroller">
                    <!-- .nav -->
                    <div class="nav nav-center nav-tabs">
                        <a class="nav-link active show" data-toggle="tab" href="#home">Pertinjau</a>
                        <a class="nav-link" data-toggle="tab" href="#about">About</a>
                        <a class="nav-link" data-toggle="tab" href="#kontak">Kontak</a>
                        <a class="nav-link" data-toggle="tab" href="#sosmed">Sosial Media <span class="badge">4</span></a>
                    </div>
                </div>
            </nav>
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <!-- grid row -->
                    <!-- form -->
                    <form method="post" id="form" enctype="multipart/form-data">
                        <!-- CRSF PROTECTION -->
                        <input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <!-- // CRSF PROTECTION -->
                        <input type="hidden" value="" name="id_profil" />
                        <input type="hidden" value="" name="logo_old" />
                        <div class="row">
                            <!-- grid column -->
                            <div class="col-lg-12">
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active show" id="home">
                                        <div class="card card-fluid">
                                            <h6 class="card-header"> Public Profile Perusahaan </h6><!-- .card-body -->
                                            <div class="card-body">


                                                <div class="form-row">
                                                    <label for="logo" class="col-md-3">Ubah Logo</label>
                                                    <div class="col-md-9 mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="logo" name="logo" accept="image/x-png,image/gif,image/jpeg" />
                                                            <label class="custom-file-label" for="input01">Pilih logo</label>
                                                        </div>
                                                        <small class="text-muted">Upload a new logo image, JPG 1200x300</small>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="nama_perusahaan" class="col-md-3">Nama Perusahaan</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Input Nama Perusahaan">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="no_perusahaan" class="col-md-3">Nomor Perusahaan</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="text" class="form-control" id="no_perusahaan" name="no_perusahaan" placeholder="Input Nomor Perusahaan">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="alamat" class="col-md-3">Alamat Perusahaan</label>
                                                    <div class="col-md-9 mb-3">
                                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Input Alamat">Huge fan of HTML, CSS and Javascript. Web design and open source lover.</textarea> <small class="text-muted">Appears on your profile page, 300 chars max.</small>
                                                    </div>
                                                </div>

                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" id="btnSave" class="btn btn-primary ml-auto">
                                                        <span class="oi oi-task mr-2"></span>
                                                        Update Profile
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="about">
                                        <div class="card card-fluid">
                                            <h6 class="card-header"> Update About </h6><!-- .card-body -->
                                            <div class="card-body">

                                                <div class="form-row">
                                                    <label for="about" class="col-md-3">About Website</label>
                                                    <div class="col-md-9 mb-3">
                                                        <textarea class="form-control" rows="10" id="about" name="about" placeholder="Input About Website">Huge fan of HTML, CSS and Javascript. Web design and open source lover.</textarea> <small class="text-muted">Appears on your profile page, 300 chars max.</small>
                                                    </div>
                                                </div>

                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" id="btnSave" class="btn btn-primary ml-auto">
                                                        <span class="oi oi-task mr-2"></span>
                                                        Update About
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="kontak">
                                        <div class="card card-fluid">
                                            <h6 class="card-header"> Kontak Owner </h6>

                                            <div class="list-group list-group-flush mt-3 mb-0">

                                                <div class="list-group-item">
                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-success">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Input Kontak WhatsApp">
                                                    </div>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-success">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="kontak2" id="kontak2" placeholder="Input Kontak WhatsApp lainnya">
                                                    </div>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-red">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Input email">
                                                    </div>
                                                </div>
                                            </div><!-- /.list-group -->
                                            <!-- .card-body -->
                                            <div class="card-body">
                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Update Kontak</button>
                                                </div><!-- /.form-actions -->
                                            </div><!-- /form -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="sosmed">
                                        <input type="hidden" name="id_sosmed">
                                        <div class="card card-fluid">
                                            <h6 class="card-header"> Social Networks </h6>

                                            <div class="list-group list-group-flush mt-3 mb-0">
                                                <div class="list-group-item">

                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-facebook">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook Username">
                                                    </div>
                                                </div>
                                                <div class="list-group-item">

                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-twitter">
                                                            <i class="fab fa-twitter"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter Username">
                                                    </div>
                                                </div>


                                                <div class="list-group-item">

                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-youtube">
                                                            <i class="fab fa-youtube"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="youtube" id="youtube" placeholder="YouTube Username">
                                                    </div>
                                                </div>

                                                <div class="list-group-item">

                                                    <div class="list-group-item-figure">
                                                        <div class="tile tile-md bg-instagram">
                                                            <i class="fab fa-instagram"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item-body">
                                                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram Username">
                                                    </div>
                                                </div>
                                            </div><!-- /.list-group -->
                                            <!-- .card-body -->
                                            <div class="card-body">
                                                <hr>
                                                <!-- .form-actions -->
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Update Socials</button>
                                                </div><!-- /.form-actions -->
                                            </div><!-- /form -->
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div><!-- /grid row -->
                    </form>
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
    </div>