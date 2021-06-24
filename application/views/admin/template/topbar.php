<body>
    <!-- .app -->
    <div class="app">
        <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
        <!-- .app-header -->
        <header class="app-header app-header-dark">
            <!-- .top-bar -->
            <div class="top-bar">
                <!-- .top-bar-brand -->
                <div class="top-bar-brand">
                    <!-- toggle aside menu -->
                    <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
                    <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">
                        <h4 class="navbar-brand mt-2">Admin</h4>
                    </a>
                </div><!-- /.top-bar-brand -->
                <!-- .top-bar-list -->
                <div class="top-bar-list">
                    <!-- .top-bar-item -->
                    <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                        <!-- toggle menu -->
                        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    </div>
                    <!-- .top-bar-item -->
                    <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                        <!-- .btn-account -->
                        <div class="dropdown d-none d-md-flex">
                            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="user-avatar user-avatar-md">
                                    <img src="<?= base_url() ?>assets/frontend/img/upload/logo/2.png" alt="">
                                </span>
                                <span class="account-summary pr-lg-4 d-none d-lg-block">
                                    <span class="account-name">
                                        Rafiutama.com
                                    </span>
                                    <span class="account-description">
                                        Administrator
                                    </span>
                                </span>
                            </button> <!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                <h6 class="dropdown-header d-none d-md-block d-lg-none"> </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="<?= base_url('admin/auth/logout') ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                            </div><!-- /.dropdown-menu -->
                        </div><!-- /.btn-account -->
                    </div><!-- /.top-bar-item -->
                </div><!-- /.top-bar-list -->
            </div><!-- /.top-bar -->
        </header><!-- /.app-header -->