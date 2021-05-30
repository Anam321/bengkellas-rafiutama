<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_m extends CI_Model
{

    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }


    public function get_produk()
    {
        $query = $this->db->query('select * from ref_produk');

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_produk' => $row->id_produk,
                'nama_p' => $row->nama_p,
                'slug' => $row->slug,
                'kategori' => $row->kategori,
                'filter' => $row->filter,
                'jenis_p' => $row->jenis_p,
                'ukuran' => $row->ukuran,
                'spesifikasi' => $row->spesifikasi,
                'deskripsi' => $row->deskripsi,
                'harga' => $row->harga,
                'foto' => $row->foto,
            );
        }
        return $data;
    }

    public function get_produkLimit($limit, $start)
    {
        return $this->db->get('ref_produk', $limit, $start)->result_array();
    }

    public function get_countProdukLimit()
    {
        return $this->db->get('ref_produk')->num_rows();
    }
}
