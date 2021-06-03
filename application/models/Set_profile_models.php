<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_profile_models extends CI_Model
{
    public $table = 'set_profile'; // variable table from database
    public $column_order = array('');
    public $column_search = array('');
    public $order = array('' => ''); // default order

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('Excel');
    //     // $this->load->database();
    // }

    public function get_profile($var)
    {
        // $this->db->select('title, content, date');
        $query = $this->db->get($this->table)->row();
        $data = $query->$var;
        // $data = array();
        // foreach ($query->result() as $row) {
        //     $data[] = array(
        //         'logo' => $row->logo,
        //         'nama_perusahaan' => $row->nama_perusahaan,
        //         'no_perusahaan' => $row->no_perusahaan,
        //         'alamat' => $row->alamat,
        //         'kontak' => $row->kontak,
        //         'email' => $row->email,
        //     );
        // }
        return $data;
    }

    public function save($data)
    {

        $this->db->insert('prk_jasa_mat', $data);
        $r = $this->db->insert_id();
        if ($r) {
            $res['status'] = '00';
            $res['mess'] = 'Berhasil Simpan Data';
        } else {
            $res['status'] = '01';
            $res['mess'] = 'Gagal Simpan Data';
        }
        return $res;
    }

    public function get_by_id($id_profil)
    {
        $this->db->start_cache();
        $this->db->from($this->table);
        $this->db->where('id_profil', $id_profil);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function update($where, $data)
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        $r = $this->db->update($this->table, $data, $where);

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

    public function update_sosmed($where, $data)
    {

        $r = $this->db->update('ref_sosmed', $data, $where);

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

    public function get_sosmed($id_sosmed)
    {
        $this->db->start_cache();
        $this->db->from('ref_sosmed');
        $this->db->where('id_sosmed', $id_sosmed);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }
    public function get_allsosmed($var)
    {
        // $this->db->select('title, content, date');
        $query = $this->db->get($this->table)->row();
        $data = $query->$var;
        // $data = array();
        // foreach ($query->result() as $row) {
        //     $data[] = array(
        //         'logo' => $row->logo,
        //         'nama_perusahaan' => $row->nama_perusahaan,
        //         'no_perusahaan' => $row->no_perusahaan,
        //         'alamat' => $row->alamat,
        //         'kontak' => $row->kontak,
        //         'email' => $row->email,
        //     );
        // }
        return $data;
    }
}
