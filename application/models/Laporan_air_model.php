<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_air_model extends CI_Model
{

  function count($nolap)
  {
    $this->db->like('nomor_laporan', $nolap);
    return $this->db->count_all_results('laporan_air');
  }

  function input($nolap, $tgl, $ruangan, $bagian, $pelapor, $keluhan, $tambahan)
  {
    $data = array(
      'nomor_laporan' => $nolap,
      'tanggal' => $tgl,
      'ruangan' => $ruangan,
      'bagian' => $bagian,
      'pelapor' => $pelapor,
      'keluhan' => $keluhan,
      'tambahan' => $tambahan
    );
    $this->db->insert('laporan_air', $data);
  }
}

/* End of file Laporan_bangunan_model.php */
/* Location: ./application/models/Laporan_bangunan_model.php */
