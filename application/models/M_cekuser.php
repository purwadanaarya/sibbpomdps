<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_cekuser extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	function cek_admin(){
		if ($this->session->userdata('si_idrole')!=1) {
			redirect('home');
		}
	}
	function cek_struktural(){
		if ($this->session->userdata('si_idrole')!=2) {
			redirect('home');
		}
	}
	function cek_infokom(){
		if ($this->session->userdata('si_idrole')!=3) {
			redirect('home');
		}
	}
	function cek_sertifikasi(){
		if ($this->session->userdata('si_idrole')!=4) {
			redirect('home');
		}
	}

	function cek_user($id_bidang){
		$role = $this->session->userdata('si_idrole');
		if (($id_bidang==3)||($id_bidang==4)) {
			if (($role!=3)&&($role!=4)) redirect('home');
		}
		elseif ($id_bidang!=$role) redirect('home');
	}
}

/* End of file M_checkuser */
/* Location: ./application/models/M_checkuser */