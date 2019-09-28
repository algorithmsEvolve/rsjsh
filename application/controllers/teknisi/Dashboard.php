<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') == NULL) {
      redirect('homepage');
    }
    $this->load->model('komentar_model');
    $this->load->model('laporan_model');
    
  }

  public function index()
  {
    //jumlah komentar baru
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    //notif
    $data['notif'] = $this->komentar_model->get_notif();

    //count
    $nip = $this->session->userdata('id_user');
    $totalA = $this->laporan_model->count_laporan_ditangani('laporan_air', $nip);
    $totalF = $this->laporan_model->count_laporan_ditangani('laporan_furnitur', $nip);
    $totalB = $this->laporan_model->count_laporan_ditangani('laporan_bangunan', $nip);
    $totalL = $this->laporan_model->count_laporan_ditangani('laporan_listrik', $nip);
    $totalP = $this->laporan_model->count_laporan_ditangani('laporan_peralatan', $nip);

    //total laporan yang ditangani
    $data['total_laporan'] = $totalA+$totalB+$totalF+$totalL+$totalP;
    //diterima yang ditangani
    $air = 'laporan_air';
    $furnitur = 'laporan_furnitur';
    $bangunan = 'laporan_bangunan';
    $listrik = 'laporan_listrik';
    $peralatan = 'laporan_peralatan';
    $hasilA = $this->laporan_model->get_laporan_ditangani($air, $nip, 'Sedang Dikerjakan');
    $hasilF = $this->laporan_model->get_laporan_ditangani($furnitur, $nip, 'Sedang Dikerjakan');
    $hasilB = $this->laporan_model->get_laporan_ditangani($bangunan, $nip, 'Sedang Dikerjakan');
    $hasilP = $this->laporan_model->get_laporan_ditangani($peralatan, $nip, 'Sedang Dikerjakan');
    $hasilL = $this->laporan_model->get_laporan_ditangani($listrik, $nip, 'Sedang Dikerjakan');

    $countA = 0;
    $countB = 0;
    $countF = 0;
    $countL = 0;
    $countP = 0;

    foreach($hasilA->result() as $hA){
      $countA++;
    }
    $hasilA = $countA;
    foreach($hasilB->result() as $hA){
      $countB++;
    }
    $hasilB = $countB;
    foreach($hasilF->result() as $hA){
      $countF++;
    }
    $hasilF = $countF;
    foreach($hasilL->result() as $hA){
      $countL++;
    }
    $hasilL = $countL;
    foreach($hasilP->result() as $hA){
      $countP++;
    }
    $hasilP = $countP;

    $data['laporan_diterima'] = $hasilA+$hasilB+$hasilF+$hasilL+$hasilP;

    //selesai yang ditangani
    $hasilA = $this->laporan_model->get_laporan_ditangani($air, $nip, 'Selesai');
    $hasilF = $this->laporan_model->get_laporan_ditangani($furnitur, $nip, 'Selesai');
    $hasilB = $this->laporan_model->get_laporan_ditangani($bangunan, $nip, 'Selesai');
    $hasilP = $this->laporan_model->get_laporan_ditangani($peralatan, $nip, 'Selesai');
    $hasilL = $this->laporan_model->get_laporan_ditangani($listrik, $nip, 'Selesai');

    $countA = 0;
    $countB = 0;
    $countF = 0;
    $countL = 0;
    $countP = 0;

    foreach($hasilA->result() as $hA){
      $countA++;
    }
    $hasilA = $countA;
    foreach($hasilB->result() as $hA){
      $countB++;
    }
    $hasilB = $countB;
    foreach($hasilF->result() as $hA){
      $countF++;
    }
    $hasilF = $countF;
    foreach($hasilL->result() as $hA){
      $countL++;
    }
    $hasilL = $countL;
    foreach($hasilP->result() as $hA){
      $countP++;
    }
    $hasilP = $countP;
    $data['laporan_selesai'] = $hasilA+$hasilB+$hasilF+$hasilL+$hasilP;


    
    $this->load->view('teknisi/dashboard_v.php', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */