<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{

    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }

    public function get_hero_f($f_hero)
    {
        $query = $this->db->get('set_hero')->row();
        // $result = $query;
        $data = $query->$f_hero;

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


            );
        }
        return $data;
    }

    public function get_testimoni()
    {
        $query = $this->db->query('select * from testimoni');

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_testi' => $row->id_testi,
                'nama' => $row->nama,
                'testimoni' => $row->testimoni,
                'foto' => $row->foto,

            );
        }
        return $data;
    }
}
