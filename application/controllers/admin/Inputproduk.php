<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inputproduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m', 'home');

        is_logged_in();

        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('admin/pages/tres');
    }




    public function inputproduk()
    {
        $deskripsi = $this->input->post('deskripsi');
        $nama_p = $this->input->post('nama_p');
        $slug = $this->input->post('slug');
        $jenis_p = $this->input->post('jenis_p');
        $kategori = $this->input->post('kategori');
        $pembuatan = $this->input->post('pembuatan');
        $pemasangan = $this->input->post('pemasangan');
        $keterangan = $this->input->post('keterangan');
        $spesifikasi = $this->input->post('spesifikasi');
        $harga = $this->input->post('harga');
        $bahan = $this->input->post('bahan');
        $filter = $this->input->post('filter');



        $foto = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/frontend/img/upload/produk/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 4608;
            $config['max_height']           = 3456;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          upload gambar gagal cek file anda !.</div>');
                redirect('admin/Inputproduk');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'deskripsi' => $deskripsi,
            'nama_p' => $nama_p,
            'slug' => $slug,
            'jenis_p' => $jenis_p,
            'kategori' => $kategori,
            'pembuatan' => $pembuatan,
            'pemasangan' => $pemasangan,
            'keterangan' => $keterangan,
            'spesifikasi' => $spesifikasi,
            'harga' => $harga,
            'bahan' => $bahan,
            'filter' => $filter,

            'foto' => $foto,

        );
        // var_dump($data);
        // die;
        $this->home->inputproduk($data, 'produk');
        redirect(base_url('admin/Inputproduk'));
    }
}
