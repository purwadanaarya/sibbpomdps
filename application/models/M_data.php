<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function periode(){
    if (!empty($this->session->userdata('periode'))) $tahun = $this->session->userdata('periode');
    else $tahun = '2019';

    $this->db->like('tgl_surat_terima', $tahun, 'both');
  }

}
