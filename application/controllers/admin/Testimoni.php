<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('admin/Testi_model', 'testi_m');
   }

   public function index()
   {
      $data = [
         'judul' => 'Halaman Testimoni',
      ];

      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/topbar', $data);
      $this->load->view('admin/template/sidebar', $data);

      $this->load->view('admin/pages/testimoni_v', $data);
      $this->load->view('js/testimoni_js');

      $this->load->view('admin/template/footer', $data);
   }

   public function ajax_list()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $status = "Acc";

         $list = $this->testi_m->get_datatables($status);
         $data = array();
         $no = $_POST['start'];

         foreach ($list as $dd) {
            $no++;
            $row = array();

            $row[] = $no;
            $row[] = '<a href="javascript:void(0)" onclick="detail(' . "'" . $dd->id_testi . "'" . ')">' . $dd->nama_pelanggan . ' <i class="fas fa-external-link-alt"></i></a>';
            $row[] = $dd->komentar;
            $row[] = $dd->foto;
            $row[] = $dd->status;


            $row[] = '
                          <a class="btn btn-sm btn-icon btn-secondary" href="javascript:void(0)" onclick="delete_data(' . "'" . $dd->id_testi . "'" . ')"><i class="far fa-trash-alt text-red"></i></a>';

            $data[] = $row;
         }

         $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->testi_m->count_all($status),
            "recordsFiltered" => $this->testi_m->count_filtered($status),
            "data" => $data,
         );
      } else {
         $output = array(
            "draw" => "",
            "recordsTotal" => "",
            "recordsFiltered" => "",
            "data" => 'Not Allowed',
         );
      }
      echo json_encode($output);
   }

   public function ajax_delete($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         echo $this->testi_m->delete_by_id($id);
      }
   }

   public function ajax_edit($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
         $data = $this->testi_m->get_by_id($id);
         echo json_encode($data);
      }
   }
}
