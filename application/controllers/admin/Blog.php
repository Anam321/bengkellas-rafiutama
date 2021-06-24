<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('admin/Blog_model', 'blog_m');
      // $this->user = $this->ion_auth->user()->row();
   }

   public function index($label = null)
   {
      $data = [
         // 'user' => $this->user,
         'judul' => 'Posting artikel/blog',
      ];

      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/topbar', $data);
      $this->load->view('admin/template/sidebar', $data);

      $this->load->view('admin/pages/blog_v', $data);
      // $this->load->view('js/produk_js');
      $this->load->view('js/blog_js');

      $this->load->view('admin/template/footer', $data);
   }

   public function post($id = null)
   {
      if ($id == "") {
         $judul = "New post";
      } else {
         $judul = "Edit post";
      }
      $data = [
         // 'user' => $this->user,
         'judul' => 'Posting : ' . $judul,
      ];

      $this->load->view('admin/template/header', $data);
      $this->load->view('admin/template/topbar', $data);
      // $this->load->view('admin/template/sidebar', $data);

      $this->load->view('admin/pages/blog_add_v', $data);
      $this->load->view('js/blog_add_js');

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
         $list =  $this->blog_m->ajax_list();
         $data = array();
         foreach ($list as $dd) {

            $data_list = '<div class="list-group-item mb-2">
                        <div class="list-group-item-figure">
                           <a href="javascript:void(0)" class="tile tile-circle bg-indigo text-white mr-1">' . strtoupper(substr($dd->judul, 0, 1)) . '</a>
                        </div>
                        <div class="list-group-item-body">
                           <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                              <div class="team">
                                 <h4 class="list-group-item-title">
                                    <a href="' . base_url() . 'admin/blog/post/' . $dd->id_artikel . '">' . $dd->judul . '</a> 
                                 </h4>
                                 <span class="timeline-date">
                                    <span class="text-muted">' . date("M d, Y H:i", strtotime($dd->created_at)) . ' </span> <span class="mx-1">·</span> <span class="due-date"><i class="far fa-fw fa-clock"></i> ' . $this->waktu_lalu($dd->created_at) . '</span>';

            $src = explode(",", $dd->id_label);
            for ($x = 0; $x < sizeof($src); $x++) {

               $result = $this->blog_m->get_by_id_label($src[$x]);
               $label = "";
               if (count($result)) {
                  $row = $result->label;
                  $data_list .= '<a href="' . base_url() . 'admin/blog/index/' . $result->label . '" class="mention ml-1">' . $result->label . '</a>';
               }
            }

            $data_list .=  '</span>
                              </div>
                              <ul class="list-inline text-muted mb-0">
                                 <li class="list-inline-item mr-3">
                                    <i class="oi oi-eye"></i> ' . $dd->views . '
                                 </li>
                                 <li class="list-inline-item">
                                    <i class="oi oi-comment-square"></i> 15 
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="list-group-item-figure">
                           <a href="' . base_url() . 'admin/blog/post/' . $dd->id_artikel . '" class="btn btn-sm btn-icon btn-light mr-2" data-todoid="1"><i class="oi oi-pencil text-primary"></i></a>
                           <button class="btn btn-sm btn-icon btn-light mr-2" onclick="hapus(' . "'" . $dd->id_artikel . "'" . ')" data-todoid="1"><i class="oi oi-trash text-danger"></i></a>
                        </div>
                     </div>';

            $data[] = $data_list;
         }
         echo json_encode($data);
      }
   }

   public function ajax_list_label()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $list =  $this->blog_m->ajax_list_label();
         $data = array();
         $value = "";
         $id = $this->input->post('id');
         if ($id) {
            $rsc = $this->blog_m->get_by_id($id);
            $src = explode(",", $rsc->id_label);
            for ($x = 0; $x < sizeof($src); $x++) {
               $value = $src[$x];
            }
         }

         foreach ($list as $dd) {
            $checked = "";
            if ($dd->id == $value) {
               $checked = "checked";
            }
            $data[] = '<div class="todo">
                           <div class="custom-control custom-checkbox">
                                 <input type="checkbox" name="id_labels[]" value="' . $dd->id . '" class="custom-control-input" id="ckb' . $dd->id . '" ' . $checked . '>
                                 <label class="custom-control-label" for="ckb' . $dd->id . '"><span> ' . $dd->label . '</span></label>
                           </div>
                           <div class="todo-actions d-block">
                                 <a onclick="hapus_label(' . "'" . $dd->id . "'" . ')" class="btn btn-sm btn-icon btn-light" data-todoid="2"><i class="fa fa-trash-alt"></i></a>
                           </div>
                        </div>';
         }
         echo json_encode($data);
      }
   }

   public function getKategori()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
         echo $this->blog_m->getKategori();
      }
   }

   public function ajax_save()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $checbok = "";
         $input_cebok = $this->input->post('id_labels');
         if ($input_cebok !== NULL) {
            $checbok = implode(",", $input_cebok);
         }
         $data = array(
            'judul'        => $this->input->post('judul'),
            'konten'       => $this->input->post('konten'),
            'slug'         => strtolower($this->input->post('slug')),
            'created_at'   => date("Y-m-d H:i:s"),
            'user_post'    => 'Admin',
            'views'        => '0',
            'id_label'     => $checbok,

         );
         // echo "<pre>";
         // print_r($data);
         $insert = $this->blog_m->save($data);
         echo json_encode($insert);
      }
   }

   public function ajax_update()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $checbok = "";
         $input_cebok = $this->input->post('id_labels');
         if ($input_cebok !== NULL) {
            $checbok = implode(",", $input_cebok);
         }
         $data = array(
            'judul'        => $this->input->post('judul'),
            'konten'       => $this->input->post('konten'),
            // 'slug'         => strtolower($this->input->post('slug')),
            'update_at'   => date("Y-m-d H:i:s"),
            'user_post'    => 'Admin',
            'views'        => '0',
            'id_label'     => $checbok,

         );
         // echo "<pre>";
         // print_r($data);
         $update = $this->blog_m->update(array('id_artikel' => $this->input->post('id_artikel')), $data);
         echo json_encode($update);
      }
   }

   public function ajax_add_label()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $data = array(
            'label' => $this->input->post('nama_label'),
         );
         // print_r($data);
         $insert = $this->blog_m->save_label($data);
         echo json_encode($insert);
      }
   }

   public function ajax_delete($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         echo $this->blog_m->delete_by_id($id);
      }
   }

   public function ajax_delete_label($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         echo $this->blog_m->ajax_delete_label($id);
      }
   }

   public function ajax_edit($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
         $data = $this->blog_m->get_by_id($id);
         echo json_encode($data);
      }
   }
}
