<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_peralatan_model extends CI_Model
{

  function count($nolap)
  {
    $this->db->like('nomor_laporan', $nolap);
    return $this->db->count_all_results('laporan_peralatan');
  }

  function input($nolap, $tgl, $ruangan, $bagian, $pelapor, $nama_peralatan, $jenis_keluhan, $tambahan, $id_pelapor)
  {
    $data = array(
      'nomor_laporan' => $nolap,
      'tanggal' => $tgl,
      'ruangan' => $ruangan,
      'bagian' => $bagian,
      'pelapor' => $pelapor,
      'nama_peralatan' => $nama_peralatan,
      'jenis_keluhan' => $jenis_keluhan,
      'tambahan' => $tambahan,
      'id_pelapor' => $id_pelapor
    );
    $this->db->insert('laporan_peralatan', $data);
  }
}

/* End of file Laporan_bangunan_model.php */
/* Location: ./application/models/Laporan_bangunan_model.php */
