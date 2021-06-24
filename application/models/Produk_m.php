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

        // $this->db->where('main_image =', 1);
        // $this->db->group_by('group_image');
        return $this->db->get('ref_produk', $limit, $start)->result_array();
    }

    public function get_countProdukLimit()
    {
        return $this->db->get('ref_produk')->num_rows();
    }



    // DATA PRODUK DETAIL


    // public function get_kategori()
    // {
    //     $query = $this->db->query('select * from ref_kategori');

    //     $data = array();
    //     foreach ($query->result() as $row) {
    //         $data[] = array(
    //             'id_kategori' => $row->id_kategori,
    //             'kategori' => $row->kategori,
    //             'slug' => $row->slug,
    //             'harga' => $row->harga,
    //             'foto' => $row->foto,

    //         );
    //     }
    //     return $data;
    // }

    public function get_produk_by_slug($slug)
    {
        return $this->db->get_where('ref_produk', ['slug' => $slug])->row_array();
    }

    public function get_produk_detail($idkat)
    {
        $query = $this->db->query("select * from ref_produk");



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

    // public function get_group_image($group_image)
    // {
    //     return $this->db->get_where('ref_produk', ['group_image' => $group_image])->result_array();
    // }






    public function get_image($id_produk)
    {
        $query = $this->db->query("select * from ref_produk a left join foto_produk b on a.id_produk=b.id_produk where slug = '$id_produk'");

        $data = $query->result();
        return $data;
    }
    // public function get_kategori($id_kategori)
    // {
    //     $query = $this->db->query("select * from ref_produk a left join ref_kategori b on a.id_kategori=b.id_kategori where slug = '$id_kategori'");

    //     $data = $query->result();
    //     return $data;
    // }









    public function get_product_by_id($id)
    {
        return $this->db->get_where('ref_produk', ['nama_p' => $id])->row_array();
    }
    public function get_blog_by_id($id_artikel)
    {
        return $this->db->get_where('blog', ['id_artikel' => $id_artikel])->row_array();
    }

    public function get_blog_detail($idkat)
    {
        $query = $this->db->query("select * from blog");
    }

    public function get_blogLimit($limit, $start)
    {
        return $this->db->get('blog', $limit, $start)->result_array();
    }

    public function get_countblogLimit()
    {
        return $this->db->get('blog')->num_rows();
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
}
