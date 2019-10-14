<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->db->join('tb_kabupaten', 'tb_kabupaten.id_kabupaten = tb_sarana.id_kabupaten');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$data['sarana']=$this->db->get('tb_sarana');
		$this->load->view('header');
		$this->load->view('perusahaan', $data);
	}
	public function tambah_perusahaan()
	{
		$data['jenis_sarana']	  = $this->db->get('tb_jenis_sarana')->result();
		$data['kabupaten']		  = $this->db->get('tb_kabupaten');

		$this->load->view('header');
		$this->load->view('perusahaan_baru',$data);
	}
	public function edit($id='')
	{
		$this->db->where('id_sarana', $id);
		$data['sarana']=$this->db->get('tb_sarana');
		$data['jenis_sarana']	  = $this->db->get('tb_jenis_sarana')->result();
		$data['kabupaten']		  = $this->db->get('tb_kabupaten');
		$this->load->view('header');
		$this->load->view('perusahaan_edit',$data);	
	}
	public function edit_process($id='')
	{
		$edit = array(
			'nama_sarana' => $this->input->post('nama_perusahaan'),
			'alamat_sarana' => $this->input->post('alamat_perusahaan'),
			'tlp_sarana'=> $this->input->post('telepon_perusahaan'),
			'email'=> $this->input->post('email_perusahaan'),
			'id_jenis_sarana'=> $this->input->post('jenis_sarana'),
			'id_detail_jenis_sarana'=> $this->input->post('detail_jenis_sarana'),
			'id_kabupaten'=> $this->input->post('kabupaten'),
		);
		$this->db->where('id_sarana', $id);
		$this->db->update('tb_sarana', $edit);
		redirect('perusahaan');
	}
	public function add()
	{
		$tambah = array(
			'nama_sarana' => $this->input->post('nama_perusahaan'),
			'alamat_sarana' => $this->input->post('alamat_perusahaan'),
			'tlp_sarana'=> $this->input->post('telepon_perusahaan'),
			'email'=> $this->input->post('email_perusahaan'),
			'id_jenis_sarana'=> $this->input->post('jenis_sarana'),
			'id_detail_jenis_sarana'=> $this->input->post('detail_jenis_sarana'),
			'id_kabupaten'=> $this->input->post('kabupaten'),
		);
		$this->db->insert('tb_sarana', $tambah);
		redirect('perusahaan');
	}
	public function delete($id='')
	{
		$this->db->where('id_sarana',$id);
		$this->db->delete('tb_sarana');
		redirect('perusahaan');
	}

}

/* End of file Perusahaan.php */
/* Location: ./application/controllers/Perusahaan.php */