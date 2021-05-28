<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('About_m', 'about');
    }

    public function index()
    {

        $data = [
            //title Page
            'judul' => 'about | ' . $this->about->get_profile('nama_perusahaan'),
            'perusahaan' => $this->about->get_profile('nama_perusahaan'),
            'telpon' => $this->about->get_profile('no_telpon'),
            'telpon2' => $this->about->get_profile('no_telpon2'),
            'email' => $this->about->get_profile('email'),
            'alamat' => $this->about->get_profile('alamat'),
            'logo' => $this->about->get_profile('logo'),
            'tittle' => $this->about->get_profile('tittle'),
            'deskripsi' => $this->about->get_profile('deskripsi2'),

            // konten


            // 'testimoni' => $this->about->get_testimoni(),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/about_v', $data);
        $this->load->view('layout/footer', $data);
    }
}
