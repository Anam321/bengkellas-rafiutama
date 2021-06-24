<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('admin/testi_model', 'testi_m');
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

   function waktu_lalu($timestamp)
   {
      $selisih = time() - strtotime($timestamp);
      $detik = $selisih;
      $menit = round($selisih / 60);
      $jam = round($selisih / 3600);
      $hari = round($selisih / 86400);
      $minggu = round($selisih / 604800);
      $bulan = round($selisih / 2419200);
      $tahun = round($selisih / 29030400);
      if ($detik <= 60) {
         $waktu = $detik . ' detik yang lalu';
      } else if ($menit <= 60) {
         $waktu = $menit . ' menit yang lalu';
      } else if ($jam <= 24) {
         $waktu = $jam . ' jam yang lalu';
      } else if ($hari <= 7) {
         $waktu = $hari . ' hari yang lalu';
      } else if ($minggu <= 4) {
         $waktu = $minggu . ' minggu yang lalu';
      } else if ($bulan <= 12) {
         $waktu = $bulan . ' bulan yang lalu';
      } else {
         $waktu = $tahun . ' tahun yang lalu';
      }
      return $waktu;
   }

   public function ajax_list()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $status = $this->input->post('filterby');

         $list = $this->testi_m->ajax_list($status);
         $data = array();
         foreach ($list as $dd) {

            if ($dd->activasi == '1') {
               $badge = '<span class="badge badge-success">Sudah Acc</span>';
               $button = '';
            } else {
               $badge = '<span class="badge badge-warning">Belum Acc</span>';
               $button = '<button class="btn btn-sm btn-icon btn-light mr-2" onclick="acc(' . "'" . $dd->id_testi . "'" . ')" title="Acc testimoni"><i class="oi oi-check text-success"></i></a>';
            }

            $data[] = '<div class="feed">
                        <div class="feed-post card">
                           <div class="card-header card-header-fluid">
                              <a href="#" class="btn-account" role="button">
                                 <div class="user-avatar user-avatar-lg">
                                    <img src="' . base_url() . 'assets/frontend/img/upload/testimoni/' . $dd->foto . '">
                                 </div>
                                 <div class="account-summary">
                                    <p class="account-name"> ' . $dd->nama . ' </p>
                                    <p class="account-description"> ' . $badge . ' · ' . date("M-d-Y H:i", strtotime($dd->date_post)) . ' <span class="mx-1"> · </span> <span class="due-date"><i class="far fa-fw fa-clock"></i> ' . $this->waktu_lalu($dd->date_post) . '</span></p>
                                 </div>
                              </a>
                              <div class="dropdown align-self-start ml-auto">
                                 ' . $button . '
                                 <button class="btn btn-sm btn-icon btn-light mr-2" onclick="hapus(' . "'" . $dd->id_testi . "'" . ')" title="Delete testimoni"><i class="oi oi-trash text-danger"></i></a>
                              </div>
                           </div>
                           <div class="card-body">
                              <a href="#" class="outbound-link">
                                 <p class="outbound-text"> ' . $dd->testimoni . ' </p>
                              </a>
                           </div>
                        </div>
                     </div>';
         }
         echo json_encode($data);
      }
   }

   public function count_status()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
         echo $this->testi_m->count_status();
      }
   }

   public function ajax_delete($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         echo $this->testi_m->delete_by_id($id);
      }
   }

   public function ajax_acc()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $data = array(
            'activasi'  => '1',
         );

         $update = $this->testi_m->acc(array('id_testi' => $this->input->post('id_testi')), $data);
         echo json_encode($update);
      }
   }
}
