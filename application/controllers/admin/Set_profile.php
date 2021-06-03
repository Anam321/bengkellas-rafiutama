<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (!$this->ion_auth->logged_in()) {
        //     redirect('auth');
        // }
        $this->load->model('Set_profile_models', 'profile_m');
        // $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {
        $data = [
            // 'user' => $this->user,
            'judul' => 'Setting Profile Perusahaan',
            'id_profil' => $this->profile_m->get_profile('id_profil'),
            'profile' => $this->profile_m->get_profile('nama_perusahaan'),
            'alamat' => $this->profile_m->get_profile('alamat'),
            'no' => $this->profile_m->get_profile('no_perusahaan'),
        ];

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/template/sidebar', $data);

        $this->load->view('admin/pages/profile_v', $data);
        $this->load->view('js/profile_js');

        $this->load->view('admin/template/footer');
    }

    public function ajax_edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $this->input->post('id_profil');
            $data = $this->profile_m->get_by_id($id);
            echo json_encode($data);
        }
    }

    public function _UploadImage()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $config['upload_path'] = './assets/uploads/logo/';
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['max_size'] = 1024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $datafile = $this->upload->data('file_name');
            }
            return $datafile;
        }
    }

    public function ajax_update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_FILES["logo"]["name"])) {

                //direktori file
                $path = 'assets/backend/dashboard/brand/';
                $filename = $this->input->post('logo_old');
                //hapus file
                if (file_exists($path . $filename)) {
                    unlink($path . $filename);
                }
                //simpan file baru
                $logo =  $this->_UploadImage('file_name');
            } else {
                $logo = $this->input->post('logo_old');
            }

            $data = array(
                'logo' => $logo,
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'no_perusahaan' => $this->input->post('no_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'about' => $this->input->post('about'),
                'kontak' => $this->input->post('no_telpon'),
                'kontak2' => $this->input->post('no_telpon2'),
                'email' => $this->input->post('email'),
            );

            $data_sosmed = array(
                'Facebook' => $this->input->post('facebook'),
                'Twitter' => $this->input->post('twitter'),
                'Instagram' => $this->input->post('instagram'),
                'YouTube' => $this->input->post('youtube'),
            );
            // var_dump($data);
            $insert = $this->profile_m->update(array('id' => $this->input->post('id')), $data);
            $insert_sosmed = $this->profile_m->update_sosmed(array('id_sosmed' => $this->input->post('id_sosmed')), $data_sosmed);
            echo json_encode($insert);
        }
    }

    public function get_sosmed()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_sosmed = $this->input->post('id_sosmed');
            $data = $this->profile_m->get_sosmed($id_sosmed);
            echo json_encode($data);
        }
    }
}
