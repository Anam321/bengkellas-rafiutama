<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_m', 'home');


        $this->load->library('session');
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


            'visi' => $this->home->get_profile('visi'),
            'misi' => $this->home->get_profile('misi'),
            'foto' => $this->home->get_profile('foto'),
            'foto_2' => $this->home->get_profile('foto'),
            'foto_h' => $this->home->get_hero_f('foto'),

            'keterangan_p' => $this->home->get_profile('keterangan_perusahaan'),



            'produk' => $this->home->get_produkLimit(3, 0),
            'blog' => $this->home->get_blogLimit(3, 0),

            // 'projek' => $this->home->get_projek(),
            // 'hero' => $this->home->get_hero(),
            'testimoni' => $this->home->get_testimoni(),
        ];



        $this->load->view('layout/header', $data);
        $this->load->view('pages/home_v', $data);
        $this->load->view('layout/footer', $data);
    }


    public function blog_detail($id_artikel)
    {

        $blog = $this->home->get_blog_by_id($id_artikel);



        $data = [
            //title Page
            'judul' => 'Blog Detail',
            'perusahaan' => $this->home->get_profile('nama_perusahaan'),
            'telpon' => $this->home->get_profile('no_telpon'),
            'telpon2' => $this->home->get_profile('no_telpon2'),
            'email' => $this->home->get_profile('email'),
            'alamat' => $this->home->get_profile('alamat'),
            'logo' => $this->home->get_profile('logo'),

            // konten

            'blog' => $blog,



        ];


        $this->load->view('layout/header', $data);
        $this->load->view('pages/d_blog_v', $data);
        $this->load->view('layout/footer', $data);
    }



    public function inputtesti()
    {
        $nama = $this->input->post('nama');
        $testimoni = $this->input->post('testimoni');
        $foto = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/frontend/img/upload/testimoni/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          upload gambar gagal cek file anda !.</div>');
                redirect('home');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'testimoni' => $testimoni,
            'foto' => $foto,
            'activasi' => 0,
        );
        $this->home->inputtesti($data, 'testimoni');
        redirect(base_url('home'));
    }
}
