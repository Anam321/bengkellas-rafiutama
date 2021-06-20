<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    var $table = 'ref_produk';
    var $column_order = array('', 'nama_produk', 'harga', 'kategori');
    var $column_search = array('nama_produk', 'harga', 'kategori');
    var $order = array('id_produk' => 'desc'); // default order 

    public function get_list_produk()
    {
        $this->db->start_cache();
        $this->db->from('ref_produk')
            ->order_by('id_produk', 'desc');
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
        $r = $this->db->insert('ref_produk', $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Data produk berhasil di simpan';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Data produk gagal di simpan';
        }
        return $res;
    }

    public function get_by_id($id)
    {
        $this->db->start_cache();
        $this->db->from('ref_produk');
        $this->db->where('id_produk', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function get_foto_produk($id)
    {
        $this->db->from('foto_produk');
        $this->db->where('id_produk', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update($where, $data)
    {
        $r = $this->db->update('ref_kategori', $data, $where);
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
        $q = $this->db->query("select foto from ref_produk where id_produk = '$id'")->row();
        $foto = $q->foto;

        // var_dump($foto);
        $path = 'assets/uploads/produk/kategori/';
        //hapus file
        if (file_exists($path . $foto)) {
            unlink($path . $foto);
        }
        $this->db->where('id_produk', $id);
        $r = $this->db->delete('ref_produk');

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Hapus Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Hapus Data';
        }
        return json_encode($res);
    }
}
