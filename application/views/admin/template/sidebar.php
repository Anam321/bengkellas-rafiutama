<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="user-avatar user-avatar-lg">
                    <img src="<?= base_url() ?>assets/frontend/img/upload/logo/2.png" alt="">
                </span>
                <span class="account-icon">
                    <span class="fa fa-caret-down fa-lg"></span>
                </span>
                <span class="account-summary">
                    <span class="account-name">
                        Rafiutama.com
                    </span>
                    <span class="account-description">
                        Administrator
                    </span>
                </span>
            </button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="<?= base_url('admin/dashboard') ?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('admin/set_profile') ?>" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Setting Profile</span></a>
                    </li>
                    <!-- <li class="menu-item">
                        <a href="<?= base_url('admin/set_hero') ?>" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Set Hero</span></a>
                    </li> -->

                    <li class="menu-header">Konten Website </li>
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="<?= base_url('admin/produk') ?>" class="menu-link"><span class="menu-icon fab fa-accusoft"></span> <span class="menu-text">Produk </span></a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('admin/blog') ?>" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Blog/Artikel</span></a>
                    </li>
                    <li class="menu-header">Feedback </li>
                    <li class="menu-item">
                        <a href="<?= base_url('admin/Testimoni') ?>" class="menu-link"><span class="menu-icon fa fa-comment"></span> <span class="menu-text">Testimoni</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('admin/Kontak') ?>" class="menu-link"><span class="menu-icon fab fa-telegram-plane"></span> <span class="menu-text">Kontak </span></a>
                    </li>
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->
<!-- .app-aside -->