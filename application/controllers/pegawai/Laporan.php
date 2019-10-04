<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') == NULL) {
      redirect('homepage');
    }
    $this->load->model('laporan_model');
    $this->load->model('komentar_model');
    $this->load->model('user_model');
    
  }

  function show_laporan_mk()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $parameter = 'Menunggu Konfirmasi';
    $data['title'] = "Laporan Menunggu Konfirmasi";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('pegawai/show_laporan_v.php', $data);
  }

  function show_laporan_dk()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $parameter = 'Sedang Dikerjakan';
    $data['title'] = "Laporan Sedang Dikerjakan";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('pegawai/show_laporan_v.php', $data);
  }

  function show_laporan_s()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $parameter = 'Selesai';
    $data['title'] = "Laporan Selesai";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('pegawai/show_laporan_v.php', $data);
  }

  function show_laporan_semua()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    //laporan selesai
    $parameter_s = 'Selesai';
    $data['laporan_air_s'] = $this->laporan_model->get_laporan_air($parameter_s);
    $data['laporan_bangunan_s'] = $this->laporan_model->get_laporan_bangunan($parameter_s);
    $data['laporan_furnitur_s'] = $this->laporan_model->get_laporan_furnitur($parameter_s);
    $data['laporan_listrik_s'] = $this->laporan_model->get_laporan_listrik($parameter_s);
    $data['laporan_peralatan_s'] = $this->laporan_model->get_laporan_peralatan($parameter_s);

    //laporan menunggu konfirmasi
    $parameter_mk = 'Menunggu Konfirmasi';
    $data['laporan_air_mk'] = $this->laporan_model->get_laporan_air($parameter_mk);
    $data['laporan_bangunan_mk'] = $this->laporan_model->get_laporan_bangunan($parameter_mk);
    $data['laporan_furnitur_mk'] = $this->laporan_model->get_laporan_furnitur($parameter_mk);
    $data['laporan_listrik_mk'] = $this->laporan_model->get_laporan_listrik($parameter_mk);
    $data['laporan_peralatan_mk'] = $this->laporan_model->get_laporan_peralatan($parameter_mk);

    //laporan sedang dikerjakan
    $parameter_sd = 'Sedang Dikerjakan';
    $data['laporan_air_sd'] = $this->laporan_model->get_laporan_air($parameter_sd);
    $data['laporan_bangunan_sd'] = $this->laporan_model->get_laporan_bangunan($parameter_sd);
    $data['laporan_furnitur_sd'] = $this->laporan_model->get_laporan_furnitur($parameter_sd);
    $data['laporan_listrik_sd'] = $this->laporan_model->get_laporan_listrik($parameter_sd);
    $data['laporan_peralatan_sd'] = $this->laporan_model->get_laporan_peralatan($parameter_sd);

    $this->load->view('pegawai/show_semua_laporan_v.php', $data);
  }

  function show_laporan()
  {
    $data['data_user'] = $this->user_model->get_user();
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $nomor_laporan = $this->input->get('id');
    $jenis_laporan = $this->input->get('jenis_laporan');
    $data['laporan'] = $this->laporan_model->get_laporan($jenis_laporan, $nomor_laporan);
    $data['pesan'] = $this->komentar_model->get_pesan($nomor_laporan);
    $this->load->view('pegawai/show_detail_laporan_v.php', $data);
  }

  function show_laporan_and_read()
  {
    $data['data_user'] = $this->user_model->get_user();
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $nomor_laporan = $this->input->get('id');
    $jenis_laporan = $this->input->get('jenis_laporan');
    $data['laporan'] = $this->laporan_model->get_laporan($jenis_laporan, $nomor_laporan);
    $id_komentar = $this->input->get('id_komentar');
    $this->komentar_model->read_notif($id_komentar);
    $data['pesan'] = $this->komentar_model->get_pesan($nomor_laporan);
    $this->load->view('pegawai/show_detail_laporan_v.php', $data);
  }


  function input_komentar()
  {
    $nomor_laporan = $this->input->post('nomor_laporan');
    $tanggal = date('Ymd');
    $id_user = $this->input->post('id_user');
    $pelapor = $this->input->post('pelapor');
    $divisi_user = $this->input->post('divisi_user');
    $komentar = $this->input->post('komentar');
    $jenis_laporan = $this->input->post('jenis_laporan');

    //generate id komentar
    $result = $this->komentar_model->count($nomor_laporan);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }
    $id_komentar = 'K-' . $nomor_laporan . "-" . $index;

    $this->komentar_model->input($id_komentar, $id_user, $pelapor, $divisi_user, $tanggal, $komentar, $nomor_laporan);
    redirect('pegawai/laporan/show_laporan?id=' . $nomor_laporan . '&&jenis_laporan=' . $jenis_laporan);
  }
}


/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
