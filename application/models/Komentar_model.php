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

  function count($nomor_laporan)
  {
    $this->db->like('nomor_laporan', $nomor_laporan);
    return $this->db->count_all_results('komentar');
  }

  function input($id_komentar, $id_user, $nama_user, $divisi_user, $tanggal, $komentar, $nomor_laporan)
  {
    $data = array(
      'id_komentar' => $id_komentar,
      'id_user' => $id_user,
      'nama_user' => $nama_user,
      'divisi_user' => $divisi_user,
      'tanggal' => $tanggal,
      'komentar' => $komentar,
      'nomor_laporan' => $nomor_laporan
    );
    $this->db->insert('komentar', $data);
  }

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
