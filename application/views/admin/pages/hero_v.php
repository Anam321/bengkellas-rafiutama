<main class="app-main">
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Hero/Slider </h1>
                    <p class="text-muted"> Hero/Slider adalah gambar yang perpindah otomatis yang terdapat di halaman awal web anda. </p>
                </header>

                <div class="modal fade" id="modal_form_hero" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 id="title" class="modal-title"> </h6>
                            </div>
                            <form action="" id="form_hero" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" id="id_hero" name="id_hero">
                                    <input type="hidden" id="old_image" name="old_image">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" id="judul" name="judul" class="form-control" placeholder="Input judul Hero">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Input Deskripsi Hero" required></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="number" name="urutan" id="urutan" class="form-control" placeholder="Urutan" required>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <label for="deskripsi">Upload Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" />
                                                <label class="custom-file-label" for="image">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btnSave" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="page-section">
                    <div class="row" data-toggle="sortable" data-draggable=".sortable-tile" data-handle=".drag-handle">
                        <!-- grid column -->
                        <div class="col-lg-12 sortable-tile">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <div class="card-header"> List Hero/Slider </div>
                                <div id="limits">
                                    <ul id="list_hero" class="sortable-lists list-group list-group-flush list-group-bordered" data-toggle="sortable" data-group="pages">

                                    </ul>
                                </div>
                                <!-- <div class="card-footer">
                                    <button type="button" class="btn btn-light btn-lg btn-block" onclick="add_new()">
                                        <span class="text-primary mt-2 mb-2">
                                            <i class="fa fa-plus-circle mr-1 text-primary"></i> Tambah Hero/Slider
                                        </span>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>