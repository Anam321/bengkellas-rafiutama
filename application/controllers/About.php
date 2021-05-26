<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('pages/about_v');
        $this->load->view('layout/footer');
    }
}
