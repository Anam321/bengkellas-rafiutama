<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      if (!$this->ion_auth->logged_in()) {
         redirect('auth');
      }
      $this->load->model('Testimoni_model', 'testi_m');
      $this->user = $this->ion_auth->user()->row();
   }

   public function index()
   {
      $data = [
         'user' => $this->user,
         'judul' => 'Halaman Testimoni',
      ];

      $this->load->view('_template/header', $data);
      $this->load->view('_template/topbar', $data);
      $this->load->view('_template/sidebar', $data);

      $this->load->view('admin/testimoni_v');
      $this->load->view('js/testimoni_js');

      $this->load->view('_template/footer');
   }



   public function ajax_listacc()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $status = "Not Acc";

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
            $row[] = '<a class="btn btn-sm btn-icon btn-primary" href="javascript:void(0)" onclick="edit(' . "'" . $dd->id_testi . "'" . ')"><i class="fa fa-pencil-alt"></i></a>
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

   public function ajax_add()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $config['upload_path'] = './assets/uploads/testimoni/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['file_name'] = $this->input->post('nama_pelanggan') . time();
         $config['overwrite'] = true;
         $config['max_size'] = 3024; // 1MB

         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         if (!$this->upload->do_upload('foto')) {
            $insert['status'] = '01';
            $insert['type'] = 'error';
            $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
            echo json_encode($insert);
         } else {
            $image_data = $this->upload->data();

            // $config['source_image'] = $image_data['full_path'];
            // $config['wm_text'] = 'Manunggal-Jaya.com || WA : +6285793742404';
            // $config['wm_type'] = 'text';
            // $config['wm_font_path'] = './system/fonts/texb.ttf';
            // $config['wm_font_size'] = '16';
            // $config['wm_font_color'] = 'ffffff';
            // $config['wm_vrt_alignment'] = 'bottom';
            // $config['wm_hor_alignment'] = 'center';
            // $config['wm_padding'] = '20';

            // $this->load->library('image_lib', $config);
            // $this->image_lib->initialize($config);
            // $this->image_lib->watermark();

            $data = array(
               'nama_produk' => $this->input->post('nama_produk'),
               'kategori' => $this->input->post('kategori'),
               'deskripsi' => $this->input->post('deskripsi'),
               'harga' => $this->input->post('harga'),
               'foto' => $image_data['file_name'],
            );

            $insert = $this->produk_m->save($data);
            echo json_encode($insert);
         }
      }
   }

   public function ajax_update()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         if (!empty($_FILES["foto"]["name"])) {

            $config['upload_path'] = './assets/uploads/produk/';
            $config['file_name'] = $this->input->post('nama_produk') . time();
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
               $insert['status'] = '01';
               $insert['type'] = 'error';
               $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
               echo json_encode($insert);
            } else {
               $image_data = $this->upload->data();
               //direktori file
               $path = 'assets/uploads/produk/';
               $filename = $this->input->post('foto_old');
               //hapus file
               if (file_exists($path . $filename)) {
                  unlink($path . $filename);
               }
               $data = array(
                  'nama_produk' => $this->input->post('nama_produk'),
                  'kategori' => $this->input->post('kategori'),
                  'deskripsi' => $this->input->post('deskripsi'),
                  'harga' => $this->input->post('harga'),
                  'foto' => $image_data['file_name'],
               );
            }
         } else {
            $data = array(
               'nama_produk' => $this->input->post('nama_produk'),
               'kategori' => $this->input->post('kategori'),
               'deskripsi' => $this->input->post('deskripsi'),
               'harga' => $this->input->post('harga'),
               'foto' => $this->input->post('old_foto'),
            );
         }

         $update = $this->testi_m->update(array('id_hero' => $this->input->post('id_hero')), $data);
         echo json_encode($update);
      }
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
