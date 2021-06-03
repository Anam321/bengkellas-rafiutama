<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/auth_v');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  Login gagal, password tidakk valid !.</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  Login gagal, silahkan cek email dan password !.</div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>');
        redirect('admin/auth');
    }

    //     public function registrasi()
    //     {


    //         $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    //         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
    //         $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');


    //         if ($this->form_validation->run() == false) {

    //             $this->load->view('admin/regist');
    //         } else {
    //             $data = [

    //                 'email' => htmlspecialchars($this->input->post('email', true)),
    //                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //                 'role_id' => 2,
    //                 'is_active' => 1,

    //             ];
    //             $this->db->insert('user', $data);
    //             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //   A simple success alert—check it out!
    // </div>');
    //             redirect('admin/auth');
    //         }
    //     }
}
