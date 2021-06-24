<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function ajax_list()
    {
        $this->db->from('blog')
            ->order_by('id_artikel', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id_label($id = null)
    {
        $this->db->from('blog_label');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function ajax_list_label()
    {
        $this->db->start_cache();
        $this->db->from('blog_label')
            ->order_by('id', 'desc');
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->result();
    }

    public function getKategori()
    {

        $query = $this->db->query("select * from ref_kategori");
        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id' => $row->id_kategori,
                'nama' => $row->nama_kategori,
            );
        }
        return json_encode($data);
    }

    public function save($data)
    {
        // var_dump($data);
        $r = $this->db->insert('blog', $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Blog berhasil di posting';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Blog gagal di posting. Kesalahan saat menyimpan data !';
        }
        return $res;
    }

    public function save_label($data)
    {
        // var_dump($data);
        $r = $this->db->insert('blog_label', $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Data label berhasil di simpan';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Data label gagal di simpan';
        }
        return $res;
    }

    public function get_by_id($id)
    {
        $this->db->start_cache();
        $this->db->from('blog');
        $this->db->where('id_artikel', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function get_foto_produk($id)
    {
        $this->db->from('foto_produk');
        $this->db->where('id_artikel', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update($where, $data)
    {
        $r = $this->db->update('blog', $data, $where);
        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Update Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Update Data';
        }
        return $res;
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_artikel', $id);
        $r = $this->db->delete('blog');

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Postingan berhasil dihapus';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Postingan gagal dihapus';
        }
        return json_encode($res);
    }

    public function ajax_delete_label($id)
    {
        $this->db->where('id', $id);
        $r = $this->db->delete('blog_label');

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Hapus label';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Hapus label';
        }
        return json_encode($res);
    }
}
