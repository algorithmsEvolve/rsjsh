<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('komentar_model');
  }

  public function index()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $this->load->view('admin/dashboard_v.php', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */