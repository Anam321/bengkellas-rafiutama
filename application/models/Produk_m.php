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

    // DETAIL PRODUK




    // public function get_detailProduk($slug = null)
    // {

    //     $query = $this->db->query("select * from ref_produk WHERE slug = '$slug'");

    //     $data = array();
    //     foreach ($query->result() as $row) {
    //         $data[] = array(
    //             'id_produk' => $row->id_produk,
    //             'nama_p' => $row->nama_p,
    //             'deskripsi' => $row->deskripsi,
    //             'harga' => $row->harga,
    //             'ukuran' => $row->ukuran,
    //             'kategori' => $row->kategori,
    //             'filter' => $row->filter,
    //             'foto' => $row->foto,
    //             'slug' => $row->slug,
    //             'pembuatan' => $row->pembuatan,
    //             'pemasangan' => $row->pemasangan,


    //         );
    //     }
    //     return $data;
    // }

    public function get_kategori_by_slug($slug)
    {
        return $this->db->get_where('ref_kategori', ['slug' => $slug])->row_array();
    }

    public function get_produk_detail($idkat)
    {
        $query = $this->db->query("select * from ref_produk where id_kategori= $idkat");

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_produk' => $row->id_produk,
                'nama_produk' => $row->nama_produk,
                'foto' => $row->foto,
            );
        }
        return $data;
    }


    public function get_product_by_id($id)
    {
        return $this->db->get_where('ref_produk', ['nama_produk' => $id])->row_array();
    }
}
