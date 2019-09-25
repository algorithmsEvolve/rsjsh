<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_furnitur_model extends CI_Model
{

  function count($nolap)
  {
    $this->db->like('nomor_laporan', $nolap);
    return $this->db->count_all_results('laporan_furnitur');
  }

  function input($nolap, $tgl, $ruangan, $bagian, $pelapor, $keluhan, $jenis_keluhan, $tambahan)
  {
    $data = array(
      'nomor_laporan' => $nolap,
      'tanggal' => $tgl,
      'ruangan' => $ruangan,
      'bagian' => $bagian,
      'pelapor' => $pelapor,
      'keluhan' => $keluhan,
      'jenis_keluhan' => $jenis_keluhan,
      'tambahan' => $tambahan
    );
    $this->db->insert('laporan_furnitur', $data);
  }
}

/* End of file Laporan_bangunan_model.php */
/* Location: ./application/models/Laporan_bangunan_model.php */
