<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_m', 'produk');
    }
    public function index()
    {
        // $this->load->model('produk_m');
        // $data = $this->produk_m->proyek()->result();
        // var_dump($data);
        $data = [
            //title Page
            'judul' => 'produk | ' . $this->produk->get_profile('nama_perusahaan'),
            'perusahaan' => $this->produk->get_profile('nama_perusahaan'),
            'telpon' => $this->produk->get_profile('no_telpon'),
            'telpon2' => $this->produk->get_profile('no_telpon2'),
            'email' => $this->produk->get_profile('email'),
            'alamat' => $this->produk->get_profile('alamat'),
            'logo' => $this->produk->get_profile('logo'),
            'tittle' => $this->produk->get_profile('tittle'),
            'deskripsi' => $this->produk->get_profile('deskripsi'),

            // konten

            // 'keterangan_p' => $this->produk->get_profile('keterangan_perusahaan'),
            // 'foto_h' => $this->produk->get_hero_f('foto'),
            // 'foto' => $this->produk->get_profile('foto'),

            'produk' => $this->produk->get_produk(),

            // // 'projek' => $this->produk->get_projek(),
            // // 'hero' => $this->produk->get_hero(),
            // 'testimoni' => $this->produk->get_testimoni(),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/produk_v', $data);
        $this->load->view('layout/footer', $data);
    }

    public function DetailProduk()
    {
        // $this->load->model('produk_m');
        // $data = $this->produk_m->proyek()->result();
        // var_dump($data);
        $data = [
            //title Page
            'judul' => 'produk | ' . $this->produk->get_profile('nama_perusahaan'),
            'perusahaan' => $this->produk->get_profile('nama_perusahaan'),
            'telpon' => $this->produk->get_profile('no_telpon'),
            'telpon2' => $this->produk->get_profile('no_telpon2'),
            'email' => $this->produk->get_profile('email'),
            'alamat' => $this->produk->get_profile('alamat'),
            'logo' => $this->produk->get_profile('logo'),
            'tittle' => $this->produk->get_profile('tittle'),
            'deskripsi' => $this->produk->get_profile('deskripsi'),

            // konten

            // 'keterangan_p' => $this->produk->get_profile('keterangan_perusahaan'),
            // 'foto_h' => $this->produk->get_hero_f('foto'),
            // 'foto' => $this->produk->get_profile('foto'),

            'produk' => $this->produk->get_produk(),

            // // 'projek' => $this->produk->get_projek(),
            // // 'hero' => $this->produk->get_hero(),
            // 'testimoni' => $this->produk->get_testimoni(),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_produk_v', $data);
        $this->load->view('layout/footer', $data);
    }
}
