<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function count_status()
    {
        $produk = $this->db->query("select * from ref_produk")->num_rows();
        $testi = $this->db->query("select * from testimoni")->num_rows();
        $blog = $this->db->query("select * from blog")->num_rows();
        $data = array();

        $data = array(
            "produk" => $produk,
            "testi" => $testi,
            "blog" => $blog,
        );

        return json_encode($data);
    }
}
