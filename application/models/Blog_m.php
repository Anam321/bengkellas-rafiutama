<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_m extends CI_Model
{
    public function get_profile($varams)
    {
        $query = $this->db->get('set_profile')->row();
        // $result = $query;
        $data = $query->$varams;

        return $data;
    }

    public function get_produkLimit($limit, $start)
    {

        // $this->db->where('main_image =', 1);
        // $this->db->group_by('group_image');
        // return $this->db->get('ref_produk', $limit, $start)->result_array();
        $sql = $this->db->query("select * from ref_produk a left join ref_kategori b on a.id_kategori=b.id_kategori order by id_produk desc");
        $query = $sql->result_array();
        return $query;
    }

    public function get_blog_by_slug($slug)
    {
        $this->db->query("update blog set views = views + 1 where slug = '$slug'");
        return $this->db->get_where('blog', ['slug' => $slug])->row_array();
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

        return $query->result();
    }

    public function getKategoriProduk()
    {
        $sql = $this->db->query("select * from ref_kategori");
        $query = $sql->result_array();
        return $query;
    }
}
