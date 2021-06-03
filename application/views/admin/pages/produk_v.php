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
                    <h1 class="page-title"> Produk <small class="badge">5 Totals</small></h1>
                </header>


                <!-- 
                <div class="col-lg-6 col-xl-4">
                    <div class="card card-fluid">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Finished"><span class="sr-only">Finished</span> <i class="fa fa-fw fa-check-circle text-teal"></i></span>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-arrow"></div>
                                        <a href="" onclick="" class="dropdown-item">Lihat Produk</a>
                                        <a href="" onclick="" class="dropdown-item">Tambah Foto</a>
                                        <a href="" onclick="" class="dropdown-item">Edit</a>
                                        <a href="" onclick="" class="dropdown-item">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="" class="user-avatar user-avatar-xxl mb-3"><img src="" alt=""></a>
                            <h5 class="card-title">
                                <a target="_blank" href=""></a>
                            </h5>
 
                            <div class="row">
                                <div class="col">
                                    <strong>Harga</strong> <span class="d-block">Rp. </span>
                                </div>
                                <div class="col">
                                    <strong>Views</strong> <span class="d-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 -->




                <!-- Modal Here -->
                <div class="modal fade" id="modal_form_produk" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 id="title" class="modal-title"> </h6>
                            </div>
                            <form action="" id="form_produk" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" id="id_kategori" name="id_kategori">
                                    <input type="hidden" id="old_foto" name="old_foto">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kategori">Nama Produk</label>
                                                <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Input Nama Produk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea id="deskripsi" name="deskripsi" data-toggle="summernote" data-placeholder="Tulis deskripsi..." class="form-control" placeholder="Input Deskripsi Produk" required></textarea>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="id_kategori">Kategori Produk</label>
                                                <select name="id_kategori" id="id_kategori" class="form-control"></select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="harga">Harga (Rp.)</label>
                                                <div class="input-group">
                                                    <label class="input-group-prepend" for="harga"><span class="badge">Rp. </span></label> <input type="number" class="form-control" name="harga" id="harga" placeholder="Input Harga Produk (per meter)" required> <label class="input-group-append"><span class="badge">.00</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="harga">Foto Produk</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="foto" id="foto" accept="image/x-png,image/gif,image/jpeg" />
                                                <label class="custom-file-label" for="foto">Upload Foto</label>
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

                <div class="modal fade" id="modal_form_foto_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form id="form_foto_produk" method="POST" enctype="multipart/form-data" class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title"> </h6>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="" name="id">
                                <input type="hidden" value="" name="idkategori">
                                <input type="hidden" value="" name="old_foto_produk">
                                <div class="alert alert-success alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert">×</button> <strong>Informasi !</strong> Mohon Upload foto dengan resolusi <b>bagus</b>, jangan yang buriq ! :D
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_produk">Nama Foto</label>
                                            <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Input Nama Produk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="harga">Foto Produk</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto_pro" id="foto_pro" accept="image/x-png,image/gif,image/jpeg" />
                                            <label class="custom-file-label" for="foto_pro">Upload Foto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btnSaveFoto" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>

                <button type="button" onclick="add_new()" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->

                <!-- <div class="page-section">
                    <div class="card card-fluid">
                        <div class="card-header"> Data Produk </div>
                        <div class="card-body">
                            <div class="form-group">

                                <div class="input-group has-clearable">
                                    <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                    </div><input id="table-search" type="text" class="form-control" placeholder="Cari produk">
                                </div>
                            </div>

                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th> Nama Produk </th>
                                        <th> Kategori </th>
                                        <th> Harga </th>
                                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->

                <div class="page-section">
                    <div id="list_produk" class="row">



                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-drawer fade has-shown" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="modal_detailLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-drawer-right" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-body-scrolled">
                        <button type="button" data-dismiss="modal" class="btn btn-light btn-icon"><i class="fa fa-angle-double-left"></i></button>
                        <h5 id="modal_detailLabel" class="modal-title"> N/A </h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">×</button> <strong>Informasi !</strong> Mohon Upload foto dengan resolusi <b>bagus</b>, jangan yang buriq ! :D
                        </div>

                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#team-profile" role="tab" aria-controls="team-profile" aria-selected="true">Detail Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#message-files" role="tab" aria-controls="message-files" aria-selected="false">Foto Produk</a>
                            </li>
                        </ul>
                        <div class="sidebar-section-fill">
                            <div class="tab-content">
                                <div id="team-profile" class="tab-pane fade active show" role="tabpanel" aria-labelledby="team-profile">
                                    <div class="list-group-header"> Thumbnail Produk </div>
                                    <img id="foto_produk" alt="" class="card-img-top img-fluid">
                                    <div class="list-group-header"> Deskripsi Produk : </div>
                                    <div id="detai_desc"></div>
                                </div>

                                <div id="message-files" class="tab-pane fade" role="tabpanel" aria-labelledby="message-files">
                                    <div class="list-group-header"> List Foto Produk </div>

                                    <div id="list_foto_produk"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>