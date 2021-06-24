<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page has-sidebar has-sidebar-expand-xl">

            <!-- .page-inner -->
            <form id="form" method="POST" enctype="multipart/form-data">
                <div class="page-inner">
                    <div class="section-block">
                        <div class="card">
                            <div class="card-body">
                                <div class="publisher">
                                    <input type="hidden" name="id_artikel" id="id_artikel">
                                    <label for="judul" class="publisher-label">Judul artikel</label>
                                    <div class="publisher-input">
                                        <textarea id="judul" name="judul" class="form-control" placeholder="Tulis judul artikel" required></textarea>
                                    </div>
                                    <div class="publisher-actions">
                                        <div class="publisher-tools mr-auto"> </div>
                                        <button id="btnSave" type="submit" class="btn btn-primary mr-3">Publish</button>
                                        <a href="<?= base_url('admin/blog') ?>" class="btn btn-light">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-block">
                        <div class="card">
                            <div class="card card-fluid">
                                <textarea id="konten" name="konten" data-toggle="summernote" data-placeholder="Write here..." data-height="500"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-xl-none">
                    <button class="btn btn-warning btn-floated" type="button" title="Post settings" data-toggle="sidebar"><i class="fa fa-cog"></i></button>
                </div>


                <!-- .page-sidebar -->
                <div class="page-sidebar page-sidebar-fixed">
                    <!-- .sidebar-header -->
                    <header class="sidebar-header d-xl-none">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a class="prevent-default" href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                            </li>
                        </ol>
                    </header>
                    <nav id="nav-content" class="nav flex-column">
                        <div class="card card-reflow">
                            <div class="card-body">
                                <button type="button" class="close mt-n1 d-none d-xl-none d-sm-block" onclick="Looper.toggleSidebar()" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="card-title"> Post settings </h4>

                                <!-- process with ajax -->
                                <div class="form-group">
                                    <label class="d-flex justify-content-between" for="id_kategori"><span>Labels</span>
                                        <a href="javascript:void(0)" onclick="add_new_label()"><i class="fa fa-plus"></i> <span> Add new </span></a>
                                    </label>
                                    <div id="getdatalabel" class="todo-list todo-list-bordered">

                                    </div>
                                </div>
                                <!-- process with ajax -->

                                <div class="form-group">
                                    <label for="created_at">Published on</label>
                                    <div class="input-group input-group-alt">
                                        <input type="date" id="created_at" name="created_at" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="far fa-fw fa-clock mr-2"></i> <?= date('h:i') ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Custom link</label>
                                    <textarea type="text" id="slug" name="slug" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </form>
            <!-- #end page-sidebar -->

            <form id="form_label" method="POST">
                <div class="modal fade" id="modal_form_label" tabindex="-1" role="dialog" aria-labelledby="clientBillingEditModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h6 class="modal-title inline-editable"> Judul </h6>
                            </div>

                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_label">Nama label</label>
                                            <input type="text" id="nama_label" name="nama_label" class="form-control" placeholder="Input label baru" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" id="btnSavelabel" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</main>