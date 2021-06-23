<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();

        $this->load->model('admin/Dashboard_model', 'dashboard_m');
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
        $this->load->view('js/dashboard_js');

        $this->load->view('admin/template/footer');
    }

    public function count_status()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo $this->dashboard_m->count_status();
        }
    }
}
