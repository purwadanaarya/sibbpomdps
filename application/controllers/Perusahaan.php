<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$data['sarana']=$this->db->get('tb_sarana');
		$this->load->view('header');
		$this->load->view('perusahaan', $data);
	}

}

/* End of file Perusahaan.php */
/* Location: ./application/controllers/Perusahaan.php */