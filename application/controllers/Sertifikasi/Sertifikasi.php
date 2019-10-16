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
		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana=tb_data.id_sarana');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_data.id_kategori');
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$this->db->where('status !=', 'Konsultasi');
		$this->M_data->periode();
		$data['sertifikasi'] = $this->db->get('tb_data');
		$this->db->where('id_role', '4');
		$data['petugas']=$this->db->get('tb_user');
		$data['kategori']=$this->db->get('tb_kategori');

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
			'nama_konsumen' => $this->input->post('nama_konsumen'),
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
	public function baru()
	{
		//$this->db->get('', limit, offset);
		$data['sarana']=$this->db->get('tb_sarana');
		$data['kabupaten']=$this->db->get('tb_kabupaten');
		$data['kategori']=$this->db->get('tb_kategori');
		$data['jenis_sarana']=$this->db->get('tb_jenis_sarana');
		$this->db->where('id_role', '4');
		$data['petugas']=$this->db->get('tb_user');
		$this->load->view('header');
		$this->load->view('sertifikasi/baru_sertifikasi',$data);
	}
	public function baru_process()
	{
		$insert_sarana = array(
			'nama_sarana' => $this->input->post('nama_perusahaan'),
			'alamat_sarana' => $this->input->post('alamat_perusahaan'),
			'tlp_sarana' => $this->input->post('telepon_perusahaan'),
			'email' => $this->input->post('email_perusahaan'),
			'id_jenis_sarana' => $this->input->post('jenis_sarana'),
			'id_detail_jenis_sarana' => $this->input->post('detail_jenis_sarana'),
			'id_kabupaten' => $this->input->post('kabupaten'),
		);
		$this->db->insert('tb_sarana', $insert_sarana);
		$insert_id=$this->db->insert_id();
		$insert_data = array(
			'nama_konsumen' => $this->input->post('nama_konsumen'),
			'id_sarana' => $insert_id,
			'id_jeniskonsultasi' => 4,
			'id_kategori' => $this->input->post('kategori'),
			'id_detail_kategori' => $this->input->post('detail_kategori'),
			'detail_produk' => $this->input->post('detail_produk'),
		);
		$this->db->insert('tb_data', $insert_data);
		$insert_id=$this->db->insert_id();
		$redir = 'sertifikasi/sertifikasi/edit/'.$insert_id;
		redirect($redir);
	}

	public function tambah()
	{
		$insert = array(
			'nama_konsumen' => $this->input->post('nama_konsumen'),
			'id_sarana' => $this->input->post('sarana'),
			'id_kategori' => $this->input->post('kategori'),
			'id_detail_kategori' => $this->input->post('detail_kategori'),
			'detail_produk' => $this->input->post('detail_produk'),
		);
		$this->db->insert('tb_data', $insert);
		$insert_id=$this->db->insert_id();
		$redir = 'sertifikasi/sertifikasi/edit/'.$insert_id;
		redirect($redir);
	}
	public function edit_kategori()
	{
		$id_data = $this->input->post('id_data');
		$update = array(
			'id_kategori'=> $this->input->post('kategori'),
			'id_detail_kategori' =>$this->input->post('detail_kategori'),
			'detail_produk' =>$this->input->post('detail_produk')
		);
		$this->db->where('id_data', $id_data);
		$this->db->update('tb_data', $update);
		redirect('sertifikasi/sertifikasi');
	}
}

/* End of file Sertifikasi.php */
/* Location: ./application/controllers/Sertifikasi.php */
