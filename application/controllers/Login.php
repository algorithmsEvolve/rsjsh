<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('login_page_v.php');
    
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */