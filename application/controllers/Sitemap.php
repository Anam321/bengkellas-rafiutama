<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sitemap_model', 'sitemap');
    }

    public function index()
    {

        $data = [
            'produk'   => $this->sitemap->create()
        ];

        $this->load->view('sitemap_v', $data);
    }
}
