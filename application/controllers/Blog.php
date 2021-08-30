<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_m', 'blog');
    }

    public function index()
    {
        $hdr = [
            //title Page
            'judul' => 'Blog | ' . $this->blog->get_profile('nama_perusahaan'),
            'logo' => $this->blog->get_profile('logo'),
            'telpon' => $this->blog->get_profile('no_telpon'),
            'telpon2' => $this->blog->get_profile('no_telpon2'),
        ];

        $footer = [
            'logo' => $this->blog->get_profile('logo'),
            'telpon' => $this->blog->get_profile('no_telpon'),
            'telpon2' => $this->blog->get_profile('no_telpon2'),
            'email' => $this->blog->get_profile('email'),
            'alamat' => $this->blog->get_profile('alamat'),
        ];


        // LOAD LIBERRY

        $this->load->library('pagination');

        // CONFIG PAGINTION

        $config['base_url'] = base_url('blog/index');
        $config['total_rows'] = $this->blog->get_CountblogLimit();
        $config['per_page'] = 12;
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
        $data['start'] = $this->uri->segment('3');

        $data = [
            'post' => $this->blog->get_blogLimit(4, 0),
            'blog' => $this->blog->get_blogLimit($config['per_page'], $data['start']),
            'paging' => $this->pagination->create_links(),
            'kategori' => $this->blog->getKategoriProduk(),
            
        ];

        // LOAD VIEW

        $this->load->view('layout/header', $hdr);
        $this->load->view('pages/blog_v', $data);
        $this->load->view('layout/footer', $footer);
    }



    public function read($slug)
    {

        $blog = $this->blog->get_blog_by_slug($slug);
        $judul = $blog['judul'];


        $data = [
            //title Page
            'judul' => $judul,
            'perusahaan' => $this->blog->get_profile('nama_perusahaan'),
            'telpon' => $this->blog->get_profile('no_telpon'),
            'telpon2' => $this->blog->get_profile('no_telpon2'),
            'email' => $this->blog->get_profile('email'),
            'alamat' => $this->blog->get_profile('alamat'),
            'logo' => $this->blog->get_profile('logo'),

            // konten
            'post' => $this->blog->get_blogLimit(4, 0),
            'blog' => $blog,
            'kategori' => $this->blog->getKategoriProduk(),
            'produk' => $this->blog->get_produk(),


        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_blog_v', $data);
        $this->load->view('layout/footer', $data);
    }
}
