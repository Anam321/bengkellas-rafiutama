<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('admin/Produk_model', 'produk_m');
        // $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {
        $data = [
            // 'user' => $this->user,
            'judul' => 'Halaman Produk',
        ];

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/template/sidebar', $data);

        $this->load->view('admin/pages/produk_v', $data);
        // $this->load->view('js/produk_js');
        $this->load->view('js/produk_new_js');

        $this->load->view('admin/template/footer', $data);
    }

    public function get_list_produk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $list =  $this->produk_m->get_list_produk();
            $data = array();
            foreach ($list as $dd) {

                $data[] = '<div class="list-group-item" onclick="details_produk(' . "'" . $dd->id_produk . "'" . ')" data-toggle="sidebar" data-sidebar="show">
                            <a href="#" class="stretched-link"></a>
                            <div class="list-group-item-figure">
                                <a href="' . base_url() . 'assets/frontend/img/upload/produk/' . $dd->foto . '" class="user-avatar"><img src="' . base_url() . 'assets/frontend/img/upload/produk/' . $dd->foto . '" alt=""></a>
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> ' . $dd->nama_p . ' </h4>
                                <p class="list-group-item-text"> Rp. ' . number_format($dd->harga) . ' </p>
                            </div>
                        </div>';
            }
            echo json_encode($data);
        }
    }

    public function get_foto_produk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id_produk');
            $list =  $this->produk_m->get_foto_produk($id);
            $data = array();
            foreach ($list as $dd) {

                $data[] = '<div class="list-group-item">
                                <div class="list-group-item-figure align-items-start">
                                    <a target="_blank" href="' . base_url() . 'assets/frontend/img/upload/produk/' . $dd->file . '" class="user-avatar user-avatar-xl"><img src="' . base_url() . 'assets/frontend/img/upload/produk/' . $dd->file . '"></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">' . $dd->file_name . '</a>
                                    </h4>
                                    <p class="list-group-item-text"> ' . $dd->file . ' </p>
                                </div>
                                <div class="list-group-item-figure align-items-start">
                                    <a class="btn btn-sm btn-icon btn-secondary" href="javascript:void(0)" onclick="delete_foto(' . "'" . $dd->id . "'" . ', ' . "'" . $dd->id_produk . "'" . ')"><i class="far fa-trash-alt text-red"></i></a>
                                </div>
                            </div>';
            }

            echo json_encode($data);
        }
    }

    public function details_produk($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $list =  $this->produk_m->get_by_id($id);

            $data = '<header class="sidebar-header d-xl-none">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                                </li>
                            </ol>
                        </nav>
                    </header>
                    <div class="sidebar-section sidebar-section-fill">
                        <div class="list-group-item bg-secondary">
                            <div class="list-group-item-figure align-items-start">
                                <a target="_blank" href="' . base_url() . 'assets/frontend/img/upload/produk/' . $list->foto . '" class="user-avatar user-avatar-xl"><img src="' . base_url() . 'assets/frontend/img/upload/produk/' . $list->foto . '"></a>
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title">
                                    <h2 class="page-title"> ' . $list->nama_p . ' </h2>
                                </h4>
                                <p class="text-muted"> Rp. ' . number_format($list->harga) . ',00 </p>
                            </div>
                        </div>

                        <div class="nav-scroller border-bottom">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#client-billing-contact">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#client-invoices">Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" onclick="get_foto_produk(' . "'" . $list->id_produk . "'" . ')" href="#client-expenses">Foto Produk</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#aksi">Pilihan (Opsi)</a>
                            </li>
                            </ul>
                        </div>
                        <div class="tab-content pt-4" id="clientDetailsTabs">
                            <div class="tab-pane fade show active" id="client-billing-contact" role="tabpanel" aria-labelledby="client-billing-contact-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 id="client-billing-contact-tab" class="card-title"> Spesifikasi </h2>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="bahan">Bahan</label>
                                                    <input type="text" id="bahan" class="form-control" name="bahan" value="' . $list->bahan . '" placeholder="contoh : 1 alderon dll.." disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pembuatan">Pembuatan</label>
                                                    <input type="text" id="pembuatan" class="form-control" name="pembuatan" value="' . $list->pembuatan . '" placeholder="contoh : 1 minggu" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pemasangan">Pemasangan</label>
                                                    <input type="text" id="pemasangan" class="form-control" name="pemasangan" value="' . $list->pemasangan . '" placeholder="contoh : 2 hari" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 id="client-billing-contact-tab" class="card-title"> Keterangan </h2>
                                        </div>
                                        ' . $list->keterangan . '
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="client-invoices" role="tabpanel" aria-labelledby="client-invoices-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 id="client-billing-contact-tab" class="card-title"> Deskripsi Produk </h2>
                                        </div>
                                        ' . $list->deskripsi . '
                                     </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="client-expenses" role="tabpanel" aria-labelledby="client-expenses-tab">

                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h2 class="card-title mt-2">List Foto Produk</h2>
                                        <button id="client-expenses-tab" type="button" onclick="add_new_foto_produk(' . "'" . $list->id_produk . "'" . ')" class="btn btn-primary ml-auto">Tambah Foto</button>
                                    </div>

                                    <!-- foto produk here -->
                                    <div id="list_foto_produk"></div>
                                    <!-- #foto produk here -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="aksi" role="tabpanel" aria-labelledby="client-expenses-tab">

                                <div class="card">
                                    <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link show active" data-toggle="tab" href="#edit-tab"><span class="text-primary">Edit Produk</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#hapus-tab"><span class="text-danger">Hapus Produk</span></a>
                                        </li>
                                    </ul>
                                    </div>
                                    <div class="card-body">
                                        <div id="myTabCard" class="tab-content">
                                            <div class="tab-pane fade active show" id="edit-tab">
                                                <h5 class="card-title"> Informasi </h5>
                                                <p class="card-text"> Klik tombol di bawah untuk mulai mengedit data. </p>
                                                <a href="#" onclick="edit(' . "'" . $list->id_produk . "'" . ')" class="btn btn-primary">Yes Edit</a>
                                            </div>
                                            <div class="tab-pane fade" id="hapus-tab">
                                                <h5 class="card-title"> Peringatan </h5>
                                                <p class="card-text"> Pastikan dulu sebelum menghapus data. Karena data yang sudah di hapus tidak akan bisa di kembalikan lagi. </p>
                                                <a href="#" onclick="hapus(' . "'" . $list->id_produk . "'" . ')" class="btn btn-danger">Yes Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            echo json_encode($data);
        }
    }

    public function getKategori()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo $this->produk_m->getKategori();
        }
    }

    public function ajax_add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $slug = str_replace(' ', '-', $this->input->post('nama_p'));

            $config['upload_path'] = './assets/frontend/img/upload/produk/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = strtolower($slug) . '-' . time();
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $insert['status'] = '01';
                $insert['type'] = 'error';
                $insert['mess'] = $this->upload->display_errors();
                echo json_encode($insert);
            } else {
                $image_data = $this->upload->data();

                $data = array(
                    'nama_p'        => $this->input->post('nama_p'),
                    'slug'          => strtolower($slug),
                    'id_kategori'   => $this->input->post('id_kategori'),
                    // 'filter'        => $this->input->post('filter'),
                    // 'jenis_p'       => $this->input->post('jenis_p'),
                    'pembuatan'     => $this->input->post('pembuatan'),
                    'pemasangan'    => $this->input->post('pemasangan'),
                    'keterangan'    => $this->input->post('keterangan'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'harga'         => $this->input->post('harga'),
                    'bahan'         => $this->input->post('bahan'),
                    'foto'          => $image_data['file_name'],

                );
                // print_r($data);
                $insert = $this->produk_m->save($data);
                echo json_encode($insert);
            }
        }
    }

    public function ajax_add_foto()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $config['upload_path'] = './assets/frontend/img/upload/produk/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = time();
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $insert['status'] = '01';
                $insert['type'] = 'error';
                $insert['mess'] = $this->upload->display_errors();
                echo json_encode($insert);
            } else {
                $image_data = $this->upload->data();
                $data = array(
                    'file_name' => $this->input->post('file_name'),
                    'file' => $image_data['file_name'],
                    'id_produk' => $this->input->post('idproduk'),
                );
                // print_r($data);
                $insert = $this->produk_m->save_foto($data);
                echo json_encode($insert);
            }
        }
    }

    public function ajax_update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $slug = str_replace(' ', '-', $this->input->post('nama_p'));

            if (!empty($_FILES["foto"]["name"])) {
                $config['upload_path'] = './assets/frontend/img/upload/produk/';
                $config['file_name'] = strtolower($slug) . '-' . time();
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite'] = true;
                $config['max_size'] = 3024; // 1MB

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $insert['status'] = '01';
                    $insert['type'] = 'error';
                    $insert['mess'] = $this->upload->display_errors();
                    echo json_encode($insert);
                } else {
                    $image_data = $this->upload->data();
                    //direktori file
                    $path = 'assets/frontend/img/upload/produk/';
                    $filename = $this->input->post('old_foto');
                    //hapus file
                    if (file_exists($path . $filename)) {
                        unlink($path . $filename);
                    }

                    $data = array(
                        'nama_p'        => $this->input->post('nama_p'),
                        'slug'          => strtolower($slug),
                        'id_kategori'   => $this->input->post('id_kategori'),
                        // 'filter'        => $this->input->post('filter'),
                        // 'jenis_p'       => $this->input->post('jenis_p'),
                        'pembuatan'     => $this->input->post('pembuatan'),
                        'pemasangan'    => $this->input->post('pemasangan'),
                        'keterangan'    => $this->input->post('keterangan'),
                        'deskripsi'     => $this->input->post('deskripsi'),
                        'harga'         => $this->input->post('harga'),
                        'bahan'         => $this->input->post('bahan'),
                        'foto'          => $image_data['file_name'],
                    );
                }
            } else {
                $data = array(
                    'nama_p'        => $this->input->post('nama_p'),
                    'slug'          => strtolower($slug),
                    'id_kategori'   => $this->input->post('id_kategori'),
                    // 'filter'        => $this->input->post('filter'),
                    // 'jenis_p'       => $this->input->post('jenis_p'),
                    'pembuatan'     => $this->input->post('pembuatan'),
                    'pemasangan'    => $this->input->post('pemasangan'),
                    'keterangan'    => $this->input->post('keterangan'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'harga'         => $this->input->post('harga'),
                    'bahan'         => $this->input->post('bahan'),
                );
            }

            $update = $this->produk_m->update(array('id_produk' => $this->input->post('id_produk')), $data);
            echo json_encode($update);
        }
    }

    public function ajax_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $this->produk_m->delete_by_id($id);
        }
    }

    public function ajax_delete_foto($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $this->produk_m->ajax_delete_foto($id);
        }
    }

    public function ajax_edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $this->produk_m->get_by_id($id);
            echo json_encode($data);
        }
    }
}
