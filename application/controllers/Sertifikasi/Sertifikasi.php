<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sertifikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cekuser');
		
	}

	public function index()
	{
		$id_bidang=4;
		$this->M_cekuser->cek_user($id_bidang);
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana=tb_data.id_sarana');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_data.id_kategori');
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$this->db->where('status !=', 'Konsultasi');
		$data['sertifikasi'] = $this->db->get('tb_data');

		$this->load->view('header');
		$this->load->view('sertifikasi/sertifikasi',$data);
	}
	public function edit($id='')
	{
		if($id==''){
			redirect('sertifikasi/sertifikasi');
		}
		//$this->db->join('tb_detail_jenis_sarana', 'table.column = table.column', 'left');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana=tb_data.id_sarana');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_data.id_kategori');
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$this->db->where('tb_data.id_data', $id);
		$data['data']=$this->db->get('tb_data');
		$this->db->where('id_role', '4');
		$data['petugas']=$this->db->get('tb_user');
		$this->load->view('header');
		$this->load->view('sertifikasi/edit_sertifikasi', $data);
	}
	public function edit_process()
	{
		$id_data=$this->input->post('id_data');
		$update = array(
			'tgl_surat_terima' => $this->input->post('tgl_surat_terima'),
			'tindak_lanjut' => $this->input->post('tindak_lanjut'),
			'petugas_1' => $this->input->post('petugas1'),
			'petugas_2' => $this->input->post('petugas2'),
			'tanggal_audit' => $this->input->post('tgl_audit'),
			'tanggal_audit_selesai' => $this->input->post('tgl_audit_selesai'),
			'batas_waktu_perbaikan' => $this->input->post('batas_waktu_perbaikan'), 
			'tanggal_perbaikan' => $this->input->post('tgl_perbaikan'),
			'keterangan' => $this->input->post('keterangan'),
			'terbit_rekomendasi' => $this->input->post('terbit_rekomendasi'),
			'status_dokumen' => $this->input->post('status_dokumen'),
		);
		$this->db->where('id_data', $id_data);
		$this->db->update('tb_data', $update);
		redirect('sertifikasi/sertifikasi');
	}

}

/* End of file Sertifikasi.php */
/* Location: ./application/controllers/Sertifikasi.php */