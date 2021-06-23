<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testi_model extends CI_Model
{

    public function ajax_list($filterby = null)
    {
        if ($filterby == "") {
            $sql = $this->db->query("select * from testimoni order by id_testi desc");
        } else {
            $sql = $this->db->query("select * from testimoni where activasi ='$filterby' order by id_testi desc");
        }

        $query = $sql->result();
        return $query;
    }

    public function count_status()
    {
        $all = $this->db->query("select * from testimoni")->num_rows();
        $acc = $this->db->query("select * from testimoni where activasi ='1'")->num_rows();
        $notacc = $this->db->query("select * from testimoni where activasi ='0'")->num_rows();
        $data = array();

        $data = array(
            "all" => $all,
            "acc" => $acc,
            "notacc" => $notacc,
        );

        return json_encode($data);
    }

    public function delete_by_id($id)
    {
        $q = $this->db->query("select foto from testimoni where id_testi = $id")->row();
        $foto = $q->foto;

        // var_dump($foto);
        $path = './assets/frontend/img/upload/testimoni/';
        //hapus file
        if (file_exists($path . $foto)) {
            unlink($path . $foto);
        }
        $this->db->where('id_testi', $id);
        $r = $this->db->delete('testimoni');

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

    public function acc($where, $data)
    {
        $r = $this->db->update('testimoni', $data, $where);
        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Testimoni berhasil di ACC';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Testimoni gagal di ACC';
        }
        return $res;
    }
}
