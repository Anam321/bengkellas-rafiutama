<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_m extends CI_Model
{

    public function get_profile($varams)
    {
        if ($varams == 'deskripsi2') {
            $query = $this->db->query('select * from set_profile where id_profil=2');
            $data = $query->row();
        } else {
            $query = $this->db->get('set_profile')->row();
            // $result = $query;
            $data = $query->$varams;
        }

        return $data;
    }
}
