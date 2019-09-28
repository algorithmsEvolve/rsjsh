<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buat_laporan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') == NULL) {
      redirect('homepage');
    }
    $this->load->model('laporan_bangunan_model');
    $this->load->model('laporan_air_model');
    $this->load->model('laporan_listrik_model');
    $this->load->model('laporan_furnitur_model');
    $this->load->model('laporan_peralatan_model');
    $this->load->model('komentar_model');
    
  }

  function bangunan()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $this->load->view('pegawai/form_laporan_bangunan_v', $data);
  }

  function furnitur()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $this->load->view('pegawai/form_laporan_furnitur_v', $data);
  }

  function air()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $this->load->view('pegawai/form_laporan_air_v', $data);
  }

  function listrik()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $this->load->view('pegawai/form_laporan_listrik_v', $data);
  }

  function peralatan()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $data['notif'] = $this->komentar_model->get_notif();
    $this->load->view('pegawai/form_laporan_peralatan_v', $data);
  }

  //input
  function proses_input_bangunan()
  {
    $tglDB = date('Y-m-d');
    $tgl = date('dmY');
    $ruangan = $this->input->post('ruangan');
    $bagian = $this->input->post('bagian');
    $pelapor = $this->input->post('pelapor');
    $id_pelapor = $this->input->post('id');
    $c1 = $this->input->post('c1');
    $c2 = $this->input->post('c2');
    $c3 = $this->input->post('c3');
    $keluhan = $c1." ".$c2." ".$c3;
    $tambahan = $this->input->post('tambahan');

    //generate nolap
    $bagianEdit = str_replace(' ', '', $bagian);
    $nolap = 'L-b/' . $ruangan . '/' . $bagianEdit . '/' . $tgl.'/';
    $result = $this->laporan_bangunan_model->count($nolap);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }

    $nolap = $nolap.$index;

    $this->laporan_bangunan_model->input($nolap, $tglDB, $ruangan, $bagian, $pelapor, $keluhan, $tambahan, $id_pelapor);
    redirect('pegawai/buat_laporan/bangunan?id=1');
  }

  function proses_input_air()
  {
    $tglDB = date('Y-m-d');
    $tgl = date('dmY');
    $ruangan = $this->input->post('ruangan');
    $bagian = $this->input->post('bagian');
    $pelapor = $this->input->post('pelapor');
    $id_pelapor = $this->input->post('id');
    $c1 = $this->input->post('c1');
    $c2 = $this->input->post('c2');
    $c3 = $this->input->post('c3');
    $c4 = $this->input->post('c4');
    $keluhan = $c1." ".$c2." ".$c3." ".$c4;
    $tambahan = $this->input->post('tambahan');

    //generate nolap
    $bagianEdit = str_replace(' ', '', $bagian);
    $nolap = 'L-a/' . $ruangan . '/' . $bagianEdit . '/' . $tgl.'/';
    $result = $this->laporan_air_model->count($nolap);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }

    $nolap = $nolap.$index;

    $this->laporan_air_model->input($nolap, $tglDB, $ruangan, $bagian, $pelapor, $keluhan, $tambahan, $id_pelapor);
    redirect('pegawai/buat_laporan/air?id=1');
  }

  function proses_input_listrik()
  {
    $tglDB = date('Y-m-d');
    $tgl = date('dmY');
    $ruangan = $this->input->post('ruangan');
    $bagian = $this->input->post('bagian');
    $pelapor = $this->input->post('pelapor');
    $id_pelapor = $this->input->post('id');
    $c1 = $this->input->post('c1');
    $c2 = $this->input->post('c2');
    $c3 = $this->input->post('c3');
    $c4 = $this->input->post('c4');
    $keluhan = $c1." ".$c2." ".$c3." ".$c4;
    $tambahan = $this->input->post('tambahan');

    //generate nolap
    $bagianEdit = str_replace(' ', '', $bagian);
    $nolap = 'L-l/' . $ruangan . '/' . $bagianEdit . '/' . $tgl.'/';
    $result = $this->laporan_listrik_model->count($nolap);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }

    $nolap = $nolap.$index;

    $this->laporan_listrik_model->input($nolap, $tglDB, $ruangan, $bagian, $pelapor, $keluhan, $tambahan, $id_pelapor);
    redirect('pegawai/buat_laporan/listrik?id=1');
  }

  function proses_input_furnitur()
  {
    $tglDB = date('Y-m-d');
    $tgl = date('dmY');
    $ruangan = $this->input->post('ruangan');
    $bagian = $this->input->post('bagian');
    $pelapor = $this->input->post('pelapor');
    $id_pelapor = $this->input->post('id');
    $keluhan = $this->input->post('keluhan');
    $jenis_keluhan = $this->input->post('group-1');
    $tambahan = $this->input->post('tambahan');

    //generate nolap
    $bagianEdit = str_replace(' ', '', $bagian);
    $nolap = 'L-f/' . $ruangan . '/' . $bagianEdit . '/' . $tgl.'/';
    $result = $this->laporan_furnitur_model->count($nolap);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }

    $nolap = $nolap.$index;

    $this->laporan_furnitur_model->input($nolap, $tglDB, $ruangan, $bagian, $pelapor, $keluhan, $jenis_keluhan, $tambahan, $id_pelapor);
    redirect('pegawai/buat_laporan/furnitur?id=1');
  }

  function proses_input_peralatan()
  {
    $tglDB = date('Y-m-d');
    $tgl = date('dmY');
    $ruangan = $this->input->post('ruangan');
    $bagian = $this->input->post('bagian');
    $pelapor = $this->input->post('pelapor');
    $id_pelapor = $this->input->post('id');
    $nama_peralatan = $this->input->post('nama_peralatan');
    $jenis_keluhan = $this->input->post('group-1');
    $tambahan = $this->input->post('tambahan');

    //generate nolap
    $bagianEdit = str_replace(' ', '', $bagian);
    $nolap = 'L-p/' . $ruangan . '/' . $bagianEdit . '/' . $tgl.'/';
    $result = $this->laporan_peralatan_model->count($nolap);
    if ($result < 10) {
      $index = '00' . ($result + 1);
    } else if ($result < 100) {
      $index = '0' . ($result + 1);
    }

    $nolap = $nolap.$index;

    $this->laporan_peralatan_model->input($nolap, $tglDB, $ruangan, $bagian, $pelapor, $nama_peralatan, $jenis_keluhan, $tambahan, $id_pelapor);
    redirect('pegawai/buat_laporan/peralatan?id=1');
  }
}


/* End of file Buat_laporan.php */
/* Location: ./application/controllers/Buat_laporan.php */
