<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// public function index()
	// {
	// 	$username = $this->session->userdata('username');
	// 	$this->db->where('username', $username);
	// 	$data['total'] = $this->db->get('tb_kegiatan')->num_rows();
		
	// 	$max = date('Y').'-'.date('m').'-31';
	// 	$min = date('Y').'-'.date('m').'-01';
	// 	$this->db->where('tb_kegiatan.tgl BETWEEN "'. date('Y-m-d', strtotime($min)). '" and "'. date('Y-m-d', strtotime($max)).'"');
	// 	$this->db->where('username', $username);
	// 	$data['jumlah_tanggal'] = $this->db->get('tb_kegiatan')->num_rows();	
		
	// 	$this->load->view('Header');
	// 	$this->load->view('Beranda',$data);
	// }
	public function index()
	{
		if($this->session->userdata('si_username')==''){
			redirect('user');
		} else {
			if($this->session->userdata('si_idrole')==1){
				$data['alluser']=$this->db->get('tb_user')->num_rows();
				$data['allkategori']=$this->db->get('tb_kategori')->num_rows();
				$data['allsub']=$this->db->get('tb_detail_kategori')->num_rows();
				$data['allkonsultasi']=$this->db->get('tb_jeniskonsultasi')->num_rows();
			} elseif ($this->session->userdata('si_idrole')==2) {
				$this->db->where('id_kategori', '1');
				$data['konsultasi_pangan']=$this->db->get('tb_data')->num_rows();
				$this->db->where('id_kategori', '2');
				$data['konsultasi_kosmetik']=$this->db->get('tb_data')->num_rows();
				$this->db->where('id_kategori', '3');
				$data['konsultasi_obattradisional']=$this->db->get('tb_data')->num_rows();
				$this->db->where('id_kategori', '5');
				$data['konsultasi_pbf']=$this->db->get('tb_data')->num_rows();
			} elseif ($this->session->userdata('si_idrole')==3) {
				$this->db->where('status','Konsultasi');
				$data['jumlah_konsultasi']=$this->db->get('tb_data')->num_rows();
				$data['jumlah_sarana']=$this->db->get('tb_sarana')->num_rows();
			} elseif ($this->session->userdata('si_idrole')==4) {
				$this->db->where('status_dokumen', 'TMK');
				$data['jumlah_tmk']=$this->db->get('tb_data')->num_rows();
				$this->db->where('status_dokumen', 'MK');
				$data['jumlah_mk']=$this->db->get('tb_data')->num_rows();
				$this->db->where('status_dokumen', 'CAPA');
				$data['jumlah_capa']=$this->db->get('tb_data')->num_rows();
				$this->db->where('status','PSB');
				$data['jumlah_sertifikasi']=$this->db->get('tb_data')->num_rows();
				$data['jumlah_sarana']=$this->db->get('tb_sarana')->num_rows();
			}
			$this->load->view('Header');
			$this->load->view('Beranda',$data);
		}
		// $this->session->set_userdata('link','https://digidev.id');
		// $data['banyak']=$this->db->query('SELECT COUNT(id_barang) as banyak FROM tb_barang');
		// $this->load->view('Header');
		// $this->load->view('Beranda');
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */