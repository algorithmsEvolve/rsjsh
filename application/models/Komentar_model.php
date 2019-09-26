<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar_model extends CI_Model
{

  // laporan air
  function get_pesan($nomor_laporan)
  {
    $result = $this->db->get_where('komentar', array('nomor_laporan' => $nomor_laporan));
    return $result;
  }

  function jumlah_komentar_0()
  {
    $this->db->like('status_komentar', '0');
    return $this->db->count_all_results('komentar');
  }

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
