<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cekuser');
	}
	public function index()
	{
		$this->M_cekuser->cek_admin();
		redirect('home');
	}
	public function produk()
	{
		$this->M_cekuser->cek_admin();
		$this->db->join('tb_status_kategori', 'tb_status_kategori.id_status_kategori = tb_kategori.status_kategori');
		$data['kategori'] = $this->db->get('tb_kategori');
		$this->db->join('tb_status_kategori', 'tb_status_kategori.id_status_kategori = tb_detail_kategori.status_detail');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_detail_kategori.id_kategori');
		$data['sub_kategori'] = $this->db->get('tb_detail_kategori');
		$this->load->view('header');
		$this->load->view('admin/kategori_produk',$data);
	}
	public function konsultasi()
	{
		$this->M_cekuser->cek_admin();
		$this->db->join('tb_status_kategori', 'tb_status_kategori.id_status_kategori = tb_jeniskonsultasi.status_konsultasi');
		$data['konsultasi'] = $this->db->get('tb_jeniskonsultasi');
		$this->load->view('header');
		$this->load->view('admin/kategori_konsultasi',$data);
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */