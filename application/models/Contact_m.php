<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_m extends CI_Model
{


    // SET DATA HEADER AND FOOTER

    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }

    //  END SET DATA HEADER AND FOOTER



    // SET DATA CONTACT


    public function submitContact()
    {
        $data = [
            "message" => $this->input->post('message', true),
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "subject" => $this->input->post('subject', true),
        ];

        $this->db->insert('set_contact', $data);
    }
}
