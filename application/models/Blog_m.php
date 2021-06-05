<?php
defined('BASEPATH') or exit('No direct script access allowed');

class blog_m extends CI_Model
{

    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }


    public function get_blog()
    {
        $query = $this->db->query('select * from blog');

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_blog' => $row->id_blog,
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

    public function get_blogLimit($limit, $start)
    {
        return $this->db->get('blog', $limit, $start)->result_array();
    }

    public function get_countblogLimit()
    {
        return $this->db->get('blog')->num_rows();
    }



    // DATA blog DETAIL


    public function get_kategori()
    {
        $query = $this->db->query('select * from ref_kategori');

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_kategori' => $row->id_kategori,
                'kategori' => $row->kategori,
                'slug' => $row->slug,
                'harga' => $row->harga,
                'foto' => $row->foto,

            );
        }
        return $data;
    }

    public function get_blog_by_id($id_artikel)
    {
        return $this->db->get_where('blog', ['id_artikel' => $id_artikel])->row_array();
    }

    public function get_blog_detail($idkat)
    {
        $query = $this->db->query("select * from blog");



        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_blog' => $row->id_blog,
                'judul_artikel' => $row->judul_artikel,

                'konten' => $row->konten,
                'gambar' => $row->gambar,
                'id_kometar' => $row->id_kometar,

            );
        }
        return $data;
    }


    public function get_product_by_id($id)
    {
        return $this->db->get_where('ref_blog', ['nama_p' => $id])->row_array();
    }
}
