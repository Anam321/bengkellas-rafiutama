<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_m', 'kontak');
        $this->load->library('form_validation');
        $this->load->library('session');
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

        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('pages/contact_v', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $this->kontak->submitContact();

            $this->session->set_flashdata('flash', 'Di Tambahkan');
            redirect(base_url('contact'));
        }
    }
}
