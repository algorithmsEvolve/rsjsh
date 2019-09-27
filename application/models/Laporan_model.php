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

  function get_laporan($jenis_laporan, $nomor_laporan)
  {
    $result = $this->db->get_where($jenis_laporan, array('nomor_laporan' => $nomor_laporan));
    return $result;
  }

  function total_laporan()
  {
    $la = $this->db->count_all_results('laporan_air');
    $lf = $this->db->count_all_results('laporan_furnitur');
    $lp = $this->db->count_all_results('laporan_peralatan');
    $ll = $this->db->count_all_results('laporan_listrik');
    $lb = $this->db->count_all_results('laporan_bangunan');

    $result = $la + $lf + $lp + $ll + $lb;
    return $result;
  }

  function laporan_diterima()
  {
    $this->db->like('status', 'Sedang Dikerjakan');
    $la = $this->db->count_all_results('laporan_air');
    $this->db->like('status', 'Sedang Dikerjakan');
    $lf = $this->db->count_all_results('laporan_furnitur');
    $this->db->like('status', 'Sedang Dikerjakan');
    $lp = $this->db->count_all_results('laporan_peralatan');
    $this->db->like('status', 'Sedang Dikerjakan');
    $ll = $this->db->count_all_results('laporan_listrik');
    $this->db->like('status', 'Sedang Dikerjakan');
    $lb = $this->db->count_all_results('laporan_bangunan');

    $result = $la + $lf + $lp + $ll + $lb;;
    return $result;
  }

  function laporan_selesai()
  {
    $this->db->like('status', 'Selesai');
    $la = $this->db->count_all_results('laporan_air');
    $this->db->like('status', 'Selesai');
    $lf = $this->db->count_all_results('laporan_furnitur');
    $this->db->like('status', 'Selesai');
    $lp = $this->db->count_all_results('laporan_peralatan');
    $this->db->like('status', 'Selesai');
    $ll = $this->db->count_all_results('laporan_listrik');
    $this->db->like('status', 'Selesai');
    $lb = $this->db->count_all_results('laporan_bangunan');

    $result = $la + $lf + $lp + $ll + $lb;;
    return $result;
  }
}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
