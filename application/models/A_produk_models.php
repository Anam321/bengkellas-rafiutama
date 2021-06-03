<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_produk_models extends CI_Model
{
    var $table = 'ref_produk';
    var $column_order = array('', 'nama_produk', 'harga', 'kategori');
    var $column_search = array('nama_produk', 'harga', 'kategori');
    var $order = array('id_produk' => 'desc'); // default order 

    // private function _get_datatables_query()
    // {

    //     $this->db->from('ref_kategori');

    //     $i = 0;

    //     if (!empty($_POST['search']['value'])) {
    //         foreach ($this->column_search as $item) // loop column 
    //         {

    //             if ($i === 0) // first loop
    //             {
    //                 // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    //                 $this->db->like($item, $_POST['search']['value']);
    //             } else {
    //                 $this->db->or_like($item, $_POST['search']['value']);
    //             }

    //             if (count($this->column_search) - 1 == $i); //last loop
    //             // $this->db->group_end(); //close bracket
    //             $i++;
    //         }
    //     }


    //     if (isset($_POST['order'])) // here order processing
    //     {
    //         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } else if (isset($this->order)) {
    //         $order = $this->order;
    //         $this->db->order_by(key($order), $order[key($order)]);
    //     }
    // }

    // function get_datatables()
    // {

    //     $this->_get_datatables_query();
    //     $this->db->select("ref_produk.*,ref_kategori.deskripsi as kategori", false);
    //     $this->db->join('ref_kategori', 'ref_produk.id_kategori=ref_kategori.id_kategori');

    //     if ($_POST['length'] != -1)
    //         $this->db->limit($_POST['length'], $_POST['start']);

    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $this->db->select("ref_produk.*,ref_kategori.deskripsi as kategori", false);
    //     $this->db->join('ref_kategori', 'ref_produk.id_kategori=ref_kategori.id_kategori');
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }

    // public function count_all()
    // {
    //     $this->_get_datatables_query();
    //     $this->db->select("ref_produk.*,ref_kategori.deskripsi as kategori", false);
    //     $this->db->join('ref_kategori', 'ref_produk.id_kategori=ref_kategori.id_kategori');
    //     return $this->db->count_all_results();
    // }

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

    public function get_foto_produk($id)
    {
        $this->db->start_cache();
        $this->db->from('ref_produk');
        $this->db->where('id_produk', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->result();
    }

    public function save($data)
    {
        // var_dump($data);
        $r = $this->db->insert('ref_kategori', $data);

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

    public function save_foto($data)
    {
        // var_dump($data);
        $r = $this->db->insert('ref_produk', $data);

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

    public function ajax_delete_foto($id)
    {
        $q = $this->db->query("select foto from ref_produk where id_produk = '$id'")->row();
        $foto = $q->foto;

        // var_dump($foto);
        $path = 'assets/uploads/produk/';
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

    public function get_by_id_produk($id)
    {
        $this->db->start_cache();
        $this->db->from('ref_produk');
        $this->db->where('id_produk', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function get_thumb_produk($id)
    {
        $query = $this->db->query("select * from ref_produk where id_kategori = '$id' order by id_produk asc");

        // $data = array();
        // foreach ($query->result() as $row) {
        //     $data =  $row->foto;
        // };

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

    public function update_foto($where, $data)
    {
        $r = $this->db->update('ref_produk', $data, $where);
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

    // public function get_kategori()
    // {

    //     $query = $this->db->query("select * from ref_kategori");
    //     $data = array();
    //     foreach ($query->result() as $row) {
    //         $data[] = array(
    //             'id' => $row->id_kategori,
    //             'nama' => $row->deskripsi,
    //         );
    //     }
    //     return json_encode($data);
    // }
}
