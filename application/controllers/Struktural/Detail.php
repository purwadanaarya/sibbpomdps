<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cekuser');
	}
	public function pangan()
	{
		$this->M_cekuser->cek_struktural();
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_data.id_kategori');
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
		$this->db->where('tb_data.id_kategori', '1');
		$data['sertifikasi']=$this->db->get('tb_data');
		$data['jenis']='Pangan';
		$this->load->view('header');
		$this->load->view('struktural/detail',$data);
	}
	public function kosmetik()
	{
		$this->M_cekuser->cek_struktural();
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_data.id_kategori');
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
		$this->db->where('tb_data.id_kategori', '2');
		$data['sertifikasi']=$this->db->get('tb_data');
		$data['jenis']='Kosmetik';
		$this->load->view('header');
		$this->load->view('struktural/detail',$data);
	}
	public function ot()
	{
		$this->M_cekuser->cek_struktural();
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_data.id_kategori');
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
		$this->db->where('tb_data.id_kategori', '3');
		$data['sertifikasi']=$this->db->get('tb_data');
		$data['jenis']='Obat Tradisional';
		$this->load->view('header');
		$this->load->view('struktural/detail',$data);
	}
	public function pbf()
	{
		$this->M_cekuser->cek_struktural();
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_data.id_kategori');
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
		$this->db->where('tb_data.id_kategori', '4');
		$data['sertifikasi']=$this->db->get('tb_data');
		$data['jenis']='PBF';
		$this->load->view('header');
		$this->load->view('struktural/detail',$data);
	}
	public function sarana()
	{
		$this->M_cekuser->cek_struktural();
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$data['sarana']=$this->db->get('tb_sarana');
		$this->load->view('header');
		$this->load->view('struktural/sarana');
	}

}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */