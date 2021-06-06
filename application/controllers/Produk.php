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

        $config['base_url'] = base_url('produk/index');
        $config['total_rows'] = $this->produk->get_CountProdukLimit();
        $config['per_page'] = 8;
        $config['num_links'] = 3;

        // var_dump($config['total_rows']); 
        // die;

        // STAYLIING PAGINATION

        $config['full_tag_open'] = '<nav class="justify-content-center d-flex"><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a href="#" class="page-link" aria-label="Previous">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');

        // INISIALISASI
        $this->pagination->initialize($config);

        $data = [

            'produk' => $this->produk->get_produkLimit($config['per_page'], 0),
            'paging' => $this->pagination->create_links(),
        ];

        // LOAD VIEW

        $this->load->view('layout/header', $hdr);
        $this->load->view('pages/produk_v', $data);
        $this->load->view('layout/footer', $footer);
    }



    public function produk_detail($slug)
    {

        $produk = $this->produk->get_produk_by_slug($slug);



        $data = [
            //title Page
            'judul' => 'Jasa Pembuatan & Pemasangan ',
            'perusahaan' => $this->produk->get_profile('nama_perusahaan'),
            'telpon' => $this->produk->get_profile('no_telpon'),
            'telpon2' => $this->produk->get_profile('no_telpon2'),
            'email' => $this->produk->get_profile('email'),
            'alamat' => $this->produk->get_profile('alamat'),
            'logo' => $this->produk->get_profile('logo'),

            // konten

            'produk' => $produk,
            'post' => $this->produk->get_blogLimit(4, 0),


        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_produk_v', $data);
        $this->load->view('layout/footer', $data);
    }


    public function blog_detail($id_artikel)
    {

        $blog = $this->blog->get_blog_by_id($id_artikel);



        $data = [
            //title Page
            'judul' => 'Blog Detail',
            'perusahaan' => $this->produk->get_profile('nama_perusahaan'),
            'telpon' => $this->produk->get_profile('no_telpon'),
            'telpon2' => $this->produk->get_profile('no_telpon2'),
            'email' => $this->produk->get_profile('email'),
            'alamat' => $this->produk->get_profile('alamat'),
            'logo' => $this->produk->get_profile('logo'),

            // konten

            'blog' => $blog,



        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_blog_v', $data);
        $this->load->view('layout/footer', $data);
    }
}
