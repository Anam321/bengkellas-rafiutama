<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_m', 'kontak');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->load->model('kontak_m');
        // $data = $this->kontak_m->proyek()->result();
        // var_dump($data);
        $data = [
            //title Page
            'judul' => 'Contact | ' . $this->kontak->get_profile('nama_perusahaan'),
            'perusahaan' => $this->kontak->get_profile('nama_perusahaan'),
            'telpon' => $this->kontak->get_profile('no_telpon'),
            'telpon2' => $this->kontak->get_profile('no_telpon2'),
            'email' => $this->kontak->get_profile('email'),
            'alamat' => $this->kontak->get_profile('alamat'),
            'logo' => $this->kontak->get_profile('logo'),
            'tittle' => $this->kontak->get_profile('tittle'),
            'deskripsi' => $this->kontak->get_profile('deskripsi'),

        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/contact_v', $data);
        $this->load->view('layout/footer', $data);
    }
    public function inputContact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $data = array(
                'nama' => $nama,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
            );
            // var_dump($data);

            $insert = $this->countact->submitContact($data);
            // echo json_encode($insert);
            $this->load->view('pages/contact', $insert);
        }
    }
}
