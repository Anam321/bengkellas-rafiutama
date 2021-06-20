<main class="app-main">
    <div class="wrapper">
        <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">
            <div class="page-inner page-inner-fill position-relative">
                <header class="page-navs bg-light shadow-sm">
                    <div class="input-group has-clearable">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                        <label class="input-group-prepend" for="searchClients"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label>
                        <input type="text" class="form-control" id="searchClients" data-filter=".board .list-group-item" placeholder="Pencarian produk">
                    </div>
                </header>
                <button type="button" class="btn btn-primary btn-floated position-absolute" onclick="add_new()" title="Add new client"><i class="fa fa-plus"></i></button>

                <div class="board p-0 perfect-scrollbar">
                    <!-- list produk in here process with ajax -->
                    <div id="list_produk" class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist"> </div>
                    <!-- # list produk in here process with ajax  -->
                </div>

            </div>

            <!-- Keep in mind that modals should be placed outsite of page sidebar detail produk -->
            <div id="detail_produk" class="page-sidebar bg-light"></div>
            <!-- Keep in mind that modals should be placed outsite of page sidebar detail produk -->

            <form id="form_produk" method="POST">
                <div class="modal fade" id="modal_form_produk" tabindex="-1" role="dialog" aria-labelledby="modal_form_produkLabel" aria-hidden="true">

                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 id="modal_form_produkLabel" class="modal-title inline-editable">
                                    Tambah Produk Baru
                                </h6>
                            </div>

                            <div class="modal-body">
                                <input type="hidden" id="id_produk" name="id_produk">
                                <input type="hidden" id="old_foto" name="old_foto">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_p">Nama Produk</label>
                                            <input type="text" id="nama_p" name="nama_p" class="form-control" placeholder="Input nama produk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <div class="input-group">
                                                <label class="input-group-prepend" for="harga"><span class="badge">Rp. </span></label>
                                                <input type="number" class="form-control" name="harga" id="harga" placeholder="Input Harga Produk (per meter)" required>
                                                <label class="input-group-append"><span class="badge">.00</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="d-flex justify-content-between" for="id_kategori"><span>Kategori</span>
                                                <a href="#" onclick="add_new_kategori()"><i class="fa fa-plus"></i> <span> Tambah Kategori</span></a>
                                            </label>
                                            <select id="id_kategori" name="id_kategori" class="custom-select d-block w-100" required></select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea cols="8" id="deskripsi" name="deskripsi" data-toggle="summernote" data-placeholder="Tulis deskripsi..." class="form-control" placeholder="Input Deskripsi Produk" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea cols="8" id="keterangan" name="keterangan" class="form-control" placeholder="Input Deskripsi (opsional)"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <legend>Spesifikasi</legend>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bahan">Bahan</label>
                                            <input type="text" id="bahan" class="form-control" name="bahan" placeholder="contoh : 1 alderon dll.." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pembuatan">Pembuatan</label>
                                            <input type="text" id="pembuatan" class="form-control" name="pembuatan" placeholder="contoh : 1 minggu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pemasangan">Pemasangan</label>
                                            <input type="text" id="pemasangan" class="form-control" name="pemasangan" placeholder="contoh : 2 hari" required>
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
                                <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form id="form_kategori" method="POST">
                <div class="modal fade" id="modal_form_kategori" tabindex="-1" role="dialog" aria-labelledby="clientBillingEditModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h6 class="modal-title inline-editable"> Judul </h6>
                            </div>

                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_kategori">Kategori Produk</label>
                                            <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Input kategori baru" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal fade" id="modal_form_foto_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form id="form_foto_produk" method="POST" enctype="multipart/form-data" class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title"> </h6>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="" name="id">
                            <input type="hidden" value="" id="idproduk" name="idproduk">
                            <input type="hidden" value="" name="old_file">
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">×</button> <strong>Informasi !</strong> Mohon Upload foto dengan resolusi <b>bagus</b>, jangan yang buriq ! :D
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="file_name">Nama Foto</label>
                                        <input type="text" id="file_name" name="file_name" class="form-control" placeholder="Input nama foto" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="harga">Foto Produk</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="file" accept="image/x-png,image/gif,image/jpeg" />
                                        <label class="custom-file-label" for="file">Upload Foto</label>
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


        </div>
    </div>
</main>