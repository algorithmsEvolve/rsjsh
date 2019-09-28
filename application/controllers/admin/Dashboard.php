<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('komentar_model');
    $this->load->model('laporan_model');
    
  }

  public function index()
  {
    //jumlah komentar baru
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    //notif
    $data['notif'] = $this->komentar_model->get_notif();
    //total laporan
    $data['total_laporan'] = $this->laporan_model->total_laporan();
    //diterima
    $data['laporan_diterima'] = $this->laporan_model->laporan_diterima();
    //selesai
    $data['laporan_selesai'] = $this->laporan_model->laporan_selesai();
    
    $this->load->view('admin/dashboard_v.php', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */