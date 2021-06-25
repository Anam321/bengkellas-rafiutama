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

    public function getKategoriProduk()
    {
        $sql = $this->db->query("select * from ref_kategori");
        $query = $sql->result_array();
        return $query;
    }

    public function get_produk($limit, $start)
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

    public function get_produkLimit($limit, $start)
    {
        return $this->db->order_by('id_produk', 'DESC')->get('ref_produk', $limit, $start)->result_array();
    }

    public function get_blogLimit($limit, $start)
    {
        return $this->db->get('blog', $limit, $start)->result_array();
    }


    // public function get_profile($varams)
    // {
    //     if ($varams == 'deskripsi2') {
    //         $query = $this->db->query('select * from set_profile where id_profil=2');
    //         $data = $query->row();
    //     } else {
    //         $query = $this->db->get('set_profile')->row();
    //         // $result = $query;
    //         $data = $query->$varams;
    //     }

    //     return $data;
    // }





    public function get_testimoni()
    {
        $query = $this->db->query('select * from testimoni where activasi=1');

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








    public function get_blog_by_id($id_artikel)
    {
        return $this->db->get_where('blog', ['id_artikel' => $id_artikel])->row_array();
    }




    // Input data Testi


    public function inputtesti($data)
    {
        return $this->db->insert('testimoni', $data);
    }
    public function inputproduk($data)
    {
        return $this->db->insert('ref_produk', $data);
    }

    // END INPUT DATA TESTI
}
