<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('A_produk_models', 'produk_m');
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
        $this->load->view('js/produk_js');

        $this->load->view('admin/template/footer', $data);
    }

    public function get_thumb_produk($id)
    {
        $result = $this->produk_m->get_thumb_produk($id);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        if (count($result)) {
            $data = array();
            foreach ($result as $row) {
                $data = '<a href="#" class="user-avatar"><img src="' . base_url() . 'assets/uploads/produk/' . $row->foto . '" alt=""></a>';
            };
            return $data;
        };
    }

    public function get_list_produk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $list =  $this->produk_m->get_list_produk();
            $data = array();
            foreach ($list as $dd) {

                $data[] = '<div class="col-lg-6 col-xl-4">
                                <div class="card card-fluid">
                                    <div class="card-header border-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-muted" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Finished"><span class="sr-only">Finished</span> <i class="fa fa-fw fa-check-circle text-teal"></i></span>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <div class="dropdown-arrow"></div>
                                                    <a href="javascript:void(0)" onclick="detail(' . "'" . $dd->id_kategori . "'" . ')" class="dropdown-item">Lihat Produk</a>
                                                    <a href="javascript:void(0)" onclick="add_foto(' . "'" . $dd->id_kategori . "'" . ',' . "'" . $dd->nama_p . "'" . ')" class="dropdown-item">Tambah Foto</a>
                                                    <a href="javascript:void(0)" onclick="edit(' . "'" . $dd->id_kategori . "'" . ')" class="dropdown-item">Edit</a>
                                                    <a href="javascript:void(0)" onclick="delete_data(' . "'" . $dd->id_kategori . "'" . ')" class="dropdown-item">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="' . base_url() . 'assets/uploads/produk/kategori/' . $dd->foto . '" class="user-avatar user-avatar-xxl mb-3"><img src="' . base_url() . 'assets/uploads/produk/kategori/' . $dd->foto . '" alt=""></a>
                                        <h5 class="card-title">
                                            <a target="_blank" href="' . base_url() . 'pages/produk_detail/' . $dd->nama_p . '">' . $dd->nama_p . '</a>
                                        </h5>
                                       <!-- <div class="my-3">
                                            <div class="avatar-group">
                                                ' . $this->get_thumb_produk($dd->id_kategori) . '
                                                <a class="tile tile-circle" href="javascript:void(0)" onclick="add_foto(' . "'" . $dd->id_kategori . "'" . ',' . "'" . $dd->nama_p . "'" . ')">+</a>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col">
                                                <strong>Harga</strong> <span class="d-block">Rp. ' . number_format($dd->harga) . '</span>
                                            </div>
                                            <div class="col">
                                                <strong>Views</strong> <span class="d-block">' . $dd->nama_p . '</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
            echo json_encode($data);
        }
    }

    public function get_foto_produk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id_kategori');
            $list =  $this->produk_m->get_foto_produk($id);
            $data = array();
            foreach ($list as $dd) {

                $data[] = '<div class="list-group-item">
                                <div class="list-group-item-figure align-items-start">
                                    <a href="' . base_url() . 'assets/uploads/produk/' . $dd->foto . '" class="user-avatar user-avatar-xl"><img src="' . base_url() . 'assets/uploads/produk/' . $dd->foto . '" alt="' . $dd->nama_produk . '"></a>
                                </div>
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <a href="#">' . $dd->nama_produk . '</a>
                                    </h4>
                                    <p class="list-group-item-text"> ' . $dd->foto . ' </p>
                                </div>
                                <div class="list-group-item-figure align-items-start">
                                    <a class="btn btn-sm btn-icon btn-secondary" href="javascript:void(0)" onclick="delete_foto(' . "'" . $dd->id_produk . "'" . ', ' . "'" . $dd->id_kategori . "'" . ')"><i class="far fa-trash-alt text-red"></i></a>
                                </div>
                            </div>';
            }

            echo json_encode($data);
        }
    }

    // public function ajax_list()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $id_skk = $this->input->post('id_skk');

    //         $list = $this->produk_m->get_datatables($id_skk);
    //         $data = array();
    //         $no = $_POST['start'];

    //         foreach ($list as $dd) {
    //             $no++;
    //             $row = array();

    //             $row[] = $no;
    //             $row[] = '<a href="javascript:void(0)" onclick="detail(' . "'" . $dd->id_produk . "'" . ')">' . $dd->nama_produk . ' <i class="fas fa-external-link-alt"></i></a>';
    //             $row[] = $dd->kategori;
    //             $row[] = 'Rp. ' . number_format($dd->harga);

    //             $row[] = '<a class="btn btn-sm btn-icon btn-primary" href="javascript:void(0)" onclick="edit(' . "'" . $dd->id_produk . "'" . ')"><i class="fa fa-pencil-alt"></i></a>
    //                       <a class="btn btn-sm btn-icon btn-secondary" href="javascript:void(0)" onclick="delete_data(' . "'" . $dd->id_produk . "'" . ')"><i class="far fa-trash-alt text-red"></i></a>';

    //             $data[] = $row;
    //         }

    //         $output = array(
    //             "draw" => $_POST['draw'],
    //             "recordsTotal" => $this->produk_m->count_all($id_skk),
    //             "recordsFiltered" => $this->produk_m->count_filtered($id_skk),
    //             "data" => $data,
    //         );
    //     } else {
    //         $output = array(
    //             "draw" => "",
    //             "recordsTotal" => "",
    //             "recordsFiltered" => "",
    //             "data" => 'Not Allowed',
    //         );
    //     }
    //     echo json_encode($output);
    // }

    public function ajax_add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $config['upload_path'] = './assets/uploads/produk/kategori/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = time();
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $insert['status'] = '01';
                $insert['type'] = 'error';
                $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
                echo json_encode($insert);
            } else {
                $image_data = $this->upload->data();

                // $config['source_image'] = $image_data['full_path'];
                // $config['wm_text'] = 'Manunggal-Jaya.com || WA : +6285793742404';
                // $config['wm_type'] = 'text';
                // $config['wm_font_path'] = './system/fonts/texb.ttf';
                // $config['wm_font_size'] = '16';
                // $config['wm_font_color'] = 'ffffff';
                // $config['wm_vrt_alignment'] = 'bottom';
                // $config['wm_hor_alignment'] = 'center';
                // $config['wm_padding'] = '20';

                // $this->load->library('image_lib', $config);
                // $this->image_lib->initialize($config);
                // $this->image_lib->watermark();
                $slug = str_replace(' ', '-', $this->input->post('kategori'));
                $data = array(
                    'kategori' => $this->input->post('kategori'),
                    'foto' => $image_data['file_name'],
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'slug' => strtolower($slug),
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

            $config['upload_path'] = './assets/uploads/produk/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = time();
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_pro')) {
                $insert['status'] = '01';
                $insert['type'] = 'error';
                $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
                echo json_encode($insert);
            } else {
                $image_data = $this->upload->data();
                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'foto' => $image_data['file_name'],
                    'id_kategori' => $this->input->post('idkategori'),
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

            if (!empty($_FILES["foto"]["name"])) {

                $config['upload_path'] = './assets/uploads/produk/kategori/';
                $config['file_name'] = time();
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = true;
                $config['max_size'] = 3024; // 1MB

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $insert['status'] = '01';
                    $insert['type'] = 'error';
                    $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
                    echo json_encode($insert);
                } else {
                    $image_data = $this->upload->data();
                    //direktori file
                    $path = 'assets/uploads/produk/kategori/';
                    $filename = $this->input->post('old_foto');
                    //hapus file
                    if (file_exists($path . $filename)) {
                        unlink($path . $filename);
                    }
                    $slug = str_replace(' ', '-', $this->input->post('kategori'));
                    $data = array(
                        'kategori' => $this->input->post('kategori'),
                        'foto' => $image_data['file_name'],
                        'harga' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'slug' => strtolower($slug),
                    );
                }
            } else {
                $slug = str_replace(' ', '-', $this->input->post('kategori'));
                $data = array(
                    'kategori' => $this->input->post('kategori'),
                    'foto' => $this->input->post('old_foto'),
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'slug' => strtolower($slug),
                );
            }

            $update = $this->produk_m->update(array('id_kategori' => $this->input->post('id_kategori')), $data);
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

    // public function get_kategori()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //         echo $this->produk_m->get_kategori();
    //     }
    // }

    public function ajax_edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $this->produk_m->get_by_id($id);
            echo json_encode($data);
        }
    }
}
