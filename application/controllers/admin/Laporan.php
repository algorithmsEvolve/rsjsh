<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Laporan
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laporan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('laporan_model');
  }

  function semua_laporan()
  {

  }

  function dikerjakan()
  {

  }

  function show_laporan_mk()
  {
    $parameter = 'Menunggu Konfirmasi';
    $data['title'] = "Laporan Menunggu Konfirmasi";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_dk()
  {
    $parameter = 'Sedang Dikerjakan';
    $data['title'] = "Laporan Sedang Dikerjakan";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_s()
  {
    $parameter = 'Selesai';
    $data['title'] = "Laporan Selesai";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_semua()
  {
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

    $this->load->view('admin/show_semua_laporan_v.php', $data);
  }

  function selesai()
  {

  }

}


/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */