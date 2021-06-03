<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();

        // $this->load->model('Dashboard_model', 'dashboard_m');
        // $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {

        $data = [
            // 'user' => $this->user,
            'judul' => 'Admin Dashborad',
        ];

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/pages/dashboard_v');
        $this->load->view('admin/template/footer');
    }
}
