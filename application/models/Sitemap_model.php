<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap_model extends CI_Model
{

    function create()
    {
        return $this->db->order_by('id_kategori', 'desc')->get('ref_kategori')->result_array();
    }
}
