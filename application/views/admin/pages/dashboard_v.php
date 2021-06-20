<!-- .app-main -->
<main class="app-main">
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <div class="d-flex flex-column flex-md-row">
                        <p class="lead">
                            <span class="font-weight-bold">Hi,</span> <span class="d-block text-muted">Inilah yang terjadi dengan bisnis Anda hari ini.</span>
                        </p>
                    </div>
                </header>

                <div class="page-section">
                    <div class="section-block">
                        <div class="metric-row">
                            <div class="col-lg-9">
                                <div class="metric-row metric-flush">
                                    <div class="col">
                                        <a href="<?= base_url('admin/produk') ?>" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Produk </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fab fa-accusoft"></i></sub> <span class="value">8</span>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="<?= base_url('admin/blog') ?>" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Posts </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fas fa-newspaper"></i></sub> <span class="value">12</span>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a href="<?= base_url('admin/testimoni') ?>" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Testimoni </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-comment"></i></sub> <span class="value">64</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <a href="user-tasks.html" class="metric metric-bordered">
                                    <div class="metric-badge">
                                        <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> PESAN PELANGGAN </span>
                                    </div>
                                    <p class="metric-value h3">
                                        <sub><i class="fa fa-envelope"></i></sub> <span class="value">8</span>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="metric-row">
                            <div class="col-lg-12">
                                <div class="metric-row metric-flush">
                                    <div class="col">
                                        <div class="card-metric">
                                            <div class="metric metric-bordered align-items-center">
                                                <p class="metric-value h3">
                                                    <span class="value">8</span> <sub><i class="oi oi-eye"></i></sub>
                                                </p>
                                                <h2 class="metric-label"> Sepanjang Waktu </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-metric">
                                            <div class="metric metric-bordered align-items-center">
                                                <p class="metric-value h3">
                                                    <span class="value">8</span> <sub><i class="oi oi-eye"></i></sub>
                                                </p>
                                                <h2 class="metric-label"> Hari ini </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-metric">
                                            <div class="metric metric-bordered align-items-center">
                                                <p class="metric-value h3">
                                                    <span class="value">8</span> <sub><i class="oi oi-eye"></i></sub>
                                                </p>
                                                <h2 class="metric-label"> Kemarin </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-metric">
                                            <div class="metric metric-bordered align-items-center">
                                                <p class="metric-value h3">
                                                    <span class="value">8</span> <sub><i class="oi oi-eye"></i></sub>
                                                </p>
                                                <h2 class="metric-label"> Bulan ini </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-metric">
                                            <div class="metric metric-bordered align-items-center">
                                                <p class="metric-value h3">
                                                    <span class="value">8</span> <sub><i class="oi oi-eye"></i></sub>
                                                </p>
                                                <h2 class="metric-label"> Bulan lalu </h2>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section-block d-flex justify-content-between align-items-center my-3">
                        <h1 class="section-title mb-0"> Statistik Website </h1>
                        <div class="dropdown">
                            <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Month</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                                <div class="dropdown-arrow"></div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" value="0"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" value="1"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar 26</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" value="2"> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>This Week</span> <span class="text-muted">Mar 21-27</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" value="3" checked> <label class="custom-control-label d-flex justify-content-between" for="dpMonth"><span>This Month</span> <span class="text-muted">Mar 1-31</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" value="4"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" value="5"> <label class="custom-control-label" for="dpCustom">Custom</label>
                                    <div class="custom-control-hint my-1">

                                        <input type="text" class="form-control" data-toggle="flatpickr" data-mode="range" data-date-format="Y-m-d"> <!-- /datepicker:range -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body">
                            <h3 class="card-title mb-4"> Viewers </h3>
                            <div class="chartjs" style="height: 292px">
                                <canvas id="completion-tasks"></canvas>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>