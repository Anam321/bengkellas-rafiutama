<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_m extends CI_Model
{

    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }
    public function submitContact($data)
    {
        // var_dump($data);
        $r = $this->db->insert('set_contact', $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Terimakasih Sudah Memberi Testimoni';
        } else {
            $res['status'] = '01';
            $res['type'] = 'error';
            $res['mess'] = 'Gagal Simpan Data';
        }
        return $res;
    }
}
