<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero_model extends CI_Model
{

    public function get_hero()
    {
        $query = $this->db->query('select * from set_hero LEFT JOIN ref_image ON set_hero.id_image=ref_image.id_image');

        $data = array();
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_hero' => $row->id_hero,
                'judul' => $row->judul,
                'deskripsi' => $row->deskripsi,
                'urutan' => $row->urutan,
                'is_active' => $row->is_active,
                'file' => $row->file,
            );
        }
        return $data;
    }

    public function get_list_hero()
    {
        $this->db->start_cache();
        $this->db->from('set_hero');
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->result();
    }

    public function save($data)
    {
        // var_dump($data);
        $r = $this->db->insert('set_hero', $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Simpan Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Simpan Data';
        }
        return $res;
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_hero', $id);
        $r = $this->db->delete('set_hero');

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

    public function get_by_id($id)
    {
        $this->db->start_cache();
        $this->db->from('set_hero');
        $this->db->where('id_hero', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function update($where, $data)
    {
        $r = $this->db->update('set_hero', $data, $where);
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
}
