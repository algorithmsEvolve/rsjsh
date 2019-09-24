<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buat_laporan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  function bangunan() {
    $this->load->view('admin/form_laporan_bangunan_v');
  }

  function furnitur() {
    $this->load->view('admin/form_laporan_furnitur_v');
  }

  function air() {
    $this->load->view('admin/form_laporan_air_v');
  }

  function listrik() {
    $this->load->view('admin/form_laporan_listrik_v');
  }

  function peralatan() {
    $this->load->view('admin/form_laporan_peralatan_v');
  }

}


/* End of file Buat_laporan.php */
/* Location: ./application/controllers/Buat_laporan.php */