<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m', 'home');
    }
    public function index()
    {
        // $this->load->model('Home_m');
        // $data = $this->Home_m->proyek()->result();
        // var_dump($data);
        $data = [
            //title Page
            'judul' => 'Home | ' . $this->home->get_profile('nama_perusahaan'),
            'perusahaan' => $this->home->get_profile('nama_perusahaan'),
            'telpon' => $this->home->get_profile('no_telpon'),
            'telpon2' => $this->home->get_profile('no_telpon2'),
            'email' => $this->home->get_profile('email'),
            'alamat' => $this->home->get_profile('alamat'),
            'logo' => $this->home->get_profile('logo'),
            'tittle' => $this->home->get_profile('tittle'),
            'deskripsi' => $this->home->get_profile('deskripsi'),

            // konten

            //     'keterangan_p' => $this->home->get_profile('keterangan_perusahaan'),
            //     'foto_h' => $this->home->get_hero_f('foto'),
            //     'foto' => $this->home->get_profile('foto'),

            //     'produk' => $this->home->get_produk(),

            //     // 'projek' => $this->home->get_projek(),
            //     // 'hero' => $this->home->get_hero(),
            //     'testimoni' => $this->home->get_testimoni(),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/blog_v');
        $this->load->view('layout/footer', $data);
    }
}
