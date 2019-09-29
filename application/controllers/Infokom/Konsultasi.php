<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cekuser');
	}

	public function index()
	{
		$id_bidang=3;
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_data.id_kategori');
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
		$data['konsultasi'] = $this->db->get('tb_data');
		$this->load->view('header');
		$this->load->view('infokom/Konsultasi',$data);
	}
	public function baru()
	{
		$this->M_cekuser->cek_infokom();
		$this->db->where('status_konsultasi', '1');
		$data['jenis_konsultasi'] = $this->db->get('tb_jeniskonsultasi');
		$data['sarana'] 		  = $this->db->get('tb_sarana');
		$data['kategori'] 		  = $this->db->get('tb_kategori');
		$data['jenis_sarana']	  = $this->db->get('tb_jenis_sarana')->result();
		$data['kabupaten']		  = $this->db->get('tb_kabupaten');
		$this->load->view('header');
		$this->load->view('infokom/new_konsultasi',$data);
	}
	public function new_sarana()
	{
		$sarana = array(
			'nama_sarana' => $this->input->post('nama_sarana'),
			'alamat_sarana' => $this->input->post('alamat'),
			'tlp_sarana' => $this->input->post('tlp'),
			'email' => $this->input->post('email'),
			'id_jenis_sarana' => $this->input->post('jenis_sarana'),
			'id_detail_jenis_sarana' => $this->input->post('detail_jenis_sarana'),
			'id_kabupaten' => $this->input->post('id_kabupaten'),
		);
		//print_r($sarana);
		if($this->db->insert('tb_sarana', $sarana)){
			$this->session->set_flashdata('success','Berhasil Menambah Data Perusahaan!');
			redirect('infokom/konsultasi/baru');
		} else {
			$this->session->set_flashdata('error','Gagal Menambah Data Perusahaan!');
			redirect('infokom/konsultasi/baru');
		}

	}
	public function new_konsultasi()
	{
		date_default_timezone_set("Asia/Makassar");
		$date = date('Y-m-d h:m');
		$konsultasi = array(
			'nama_konsumen' => $this->input->post('nama_konsumen'),
			'id_sarana' => $this->input->post('sarana'),
			'tgl_konsultasi' => $date,
			'id_jeniskonsultasi' => $this->input->post('konsultasi'),
			'id_kategori' => $this->input->post('kategori'),
			'id_detail_kategori' => $this->input->post('detail_kategori'),
			'detail_produk' => $this->input->post('detail_produk'),
			'status' => $this->input->post('status'),
		);
		if($this->db->insert('tb_data', $konsultasi)){
			$this->session->set_flashdata('success','Berhasil Menambah Data Konsultasi!');
			redirect('infokom/konsultasi');
		} else {
			$this->session->set_flashdata('error','Gagal Menambah Data Konsultasi!');
			redirect('infokom/konsultasi/baru');
		}
	}
	function ajax_get_detail_jenis_sarana(){
		$id_jenis_sarana = $this->input->post('id_jenis_sarana');
		$this->db->where('id_jenis_sarana', $id_jenis_sarana);
		$data = $this->db->get('tb_detail_jenis_sarana')->result_array();
		echo json_encode($data);
	}
	function ajax_get_detail_kategori(){
		$id_kategori = $this->input->post('id_kategori');
		$this->db->where('id_kategori', $id_kategori);
		$data = $this->db->get('tb_detail_kategori')->result_array();
		echo json_encode($data);
	}

}

/* End of file Konsultasi.php */
/* Location: ./application/controllers/Konsultasi.php */
