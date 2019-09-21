<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('admin/dashboard_v.php');
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */