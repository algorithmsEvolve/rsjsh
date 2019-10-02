<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index()
  {
    $data['divisi'] = $this->input->get('divisi');
    $this->load->view('login_page_v.php', $data);
  }

  function login_user()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $divisi = $this->input->get('divisi');
    $status = 'online';
    $data['user'] = $this->user_model->get_user();
    $masuk = 0;
    foreach ($data['user']->result() as $user) :
      if ($user->NIP == $username && $user->password == $password && $user->divisi == $divisi) {
        $masuk++;
        $arraydata = array(
          'id_user' => $user->NIP,
          'divisi' => $user->divisi,
          'ruangan' => $user->ruangan,
          'instalasi' => $user->instalasi,
          'nama_user' => $user->nama_user,
          'status' => $status
        );
        $this->session->set_userdata($arraydata);
      }
    endforeach;

    if ($masuk > 0) {
      redirect($divisi . '/dashboard');
    } else {
      // redirect('welcome/login');
      redirect('login?divisi=' . $divisi . '&&masuk=0');
    }
  }

  function log_out()
  {
    $arraydata = array(
      'id_user',
      'divisi',
      'nama_user',
      'status'
    );
    $this->session->unset_userdata($arraydata);
    redirect('homepage');
  }

  function register()
  {
    $data['divisi'] = $this->input->get('divisi');
    $this->load->view('register_v.php', $data);
  }

  function register_user()
  {
    $nip = $this->input->post('nip');
    $nama_user = $this->input->post('nama');
    $divisi = $this->input->post('divisi');
    if ($divisi == 'pegawai') {
      $ruangan = $this->input->post('ruangan');
      $instalasi = $this->input->post('instalasi');
    }
    $password = $this->input->post('password');
    if($divisi == "pegawai"){
      $this->user_model->_pegawai($nip, $nama_user, $divisi, $ruangan, $instalasi, $password);
    }
    if($divisi == "teknisi"){
      $this->user_model->input_teknisi($nip, $nama_user, $divisi, $password);
    }
    
    redirect('login?divisi='.$divisi);

  }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
