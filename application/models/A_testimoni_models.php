<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model
{
    var $table = 'testimoni';
    var $column_order = array('', 'nama_pelanggan', 'komentar', 'foto');
    var $column_search = array('nama_pelanggan', 'komentar', 'foto');
    var $order = array('id_testi' => 'desc'); // default order 

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        if (!empty($_POST['search']['value'])) {
            foreach ($this->column_search as $item) // loop column 
            {

                if ($i === 0) // first loop
                {
                    // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i); //last loop
                // $this->db->group_end(); //close bracket
                $i++;
            }
        }


        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    function get_datatables($status)
    {

        $this->_get_datatables_query();
        $this->db->select("*", false);
        $this->db->where('status', $status);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);

        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($status)
    {
        $this->_get_datatables_query();
        $this->db->select("*", false);
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($status)
    {
        $this->_get_datatables_query();
        $this->db->select("*", false);
        $this->db->where('status', $status);
        return $this->db->count_all_results();
    }

    public function save($data)
    {
        // var_dump($data);
        $r = $this->db->insert($this->table, $data);

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
        $q = $this->db->query("select foto from $this->table where id_testi = $id")->row();
        $foto = $q->foto;

        // var_dump($foto);
        $path = 'assets/uploads/testimoni/';
        //hapus file
        if (file_exists($path . $foto)) {
            unlink($path . $foto);
        }
        $this->db->where('id_testimoni', $id);
        $r = $this->db->delete($this->table);

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
        $this->db->from($this->table);
        $this->db->where('id_testi', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function update($where, $data)
    {
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
}
