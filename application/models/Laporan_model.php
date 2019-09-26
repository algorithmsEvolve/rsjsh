<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Laporan_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laporan_model extends CI_Model
{

  // laporan air
  function get_laporan_air($kode)
  {
    $result = $this->db->get_where('laporan_air', array('status' => $kode));
    return $result;
  }

  function get_laporan_listrik($kode)
  {
    $result = $this->db->get_where('laporan_listrik', array('status' => $kode));
    return $result;
  }

  function get_laporan_bangunan($kode)
  {
    $result = $this->db->get_where('laporan_bangunan', array('status' => $kode));
    return $result;
  }

  //laporan listrik
  function get_laporan_furnitur($kode)
  {
    $result = $this->db->get_where('laporan_furnitur', array('status' => $kode));
    return $result;
  }

  function get_laporan_peralatan($kode)
  {
    $result = $this->db->get_where('laporan_peralatan', array('status' => $kode));
    return $result;
  }

  function get_laporan($jenis_laporan,$nomor_laporan)
  {
    $result = $this->db->get_where($jenis_laporan, array('nomor_laporan' => $nomor_laporan));
    return $result;
  }
}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
