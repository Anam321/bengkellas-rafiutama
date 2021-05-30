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
        $hdr = [
            //title Page
            'judul' => 'produk | ' . $this->produk->get_profile('nama_perusahaan'),
            'logo' => $this->produk->get_profile('logo'),
        ];

        $footer = [
            'logo' => $this->produk->get_profile('logo'),
            'telpon' => $this->produk->get_profile('no_telpon'),
            'telpon2' => $this->produk->get_profile('no_telpon2'),
            'email' => $this->produk->get_profile('email'),
            'alamat' => $this->produk->get_profile('alamat'),
        ];


        // LOAD LIBERRY

        $this->load->library('pagination');

        // CONFIG PAGINTION

        $config['base_url'] = 'http://localhost/bengkellas-rafiutama/produk/index';
        $config = ['total_rows' => $this->produk->get_CountProdukLimit(),];
        $config['per_page'] = 8;
        // var_dump($config['total_rows']);
        // die;

        // INISIALISASI
        $this->pagination->initialize($config);

        $data = [

            'produk' => $this->produk->get_produkLimit($config['per_page'], 0),
        ];

        // LOAD TEMPLATE

        $this->load->view('layout/header', $hdr);
        $this->load->view('pages/produk_v', $data);
        $this->load->view('layout/footer', $footer);
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

            'produk' => $this->produk->get_produk(),
        ];



        // $data = [
        //     'pagination' => $this->produk->get_Pagproduk(16, 1),
        // ];



        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_produk_v', $data);
        $this->load->view('layout/footer', $data);
    }
}
