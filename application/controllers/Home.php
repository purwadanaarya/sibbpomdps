<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		if ($this->input->post('periode')) {
			$periode = $this->input->post('periode');
			$this->session->set_userdata('periode',$periode);
			redirect($this->input->post('last_link'));
		}
		if($this->session->userdata('si_username')==''){
			redirect('user');
		} else {
			if($this->session->userdata('si_idrole')==1){
				$data['alluser']=$this->db->get('tb_user')->num_rows();
				$data['allkategori']=$this->db->get('tb_kategori')->num_rows();
				$data['allsub']=$this->db->get('tb_detail_kategori')->num_rows();
				$data['allkonsultasi']=$this->db->get('tb_jeniskonsultasi')->num_rows();
			} elseif ($this->session->userdata('si_idrole')==0) {
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
			} elseif (($this->session->userdata('si_idrole')==4)||($this->session->userdata('si_idrole')==2)) {
				//Tidak Terbit
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 1);
				$this->db->where('status_dokumen', 'Tidak Terbit');
				$this->M_data->periode();
				$data['pangan_tidak']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 2);
				$this->db->where('status_dokumen', 'Tidak Terbit');
				$this->M_data->periode();
				$data['kosmetik_tidak']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 3);
				$this->db->where('status_dokumen', 'Tidak Terbit');
				$this->M_data->periode();
				$data['ot_tidak']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 4);
				$this->db->where('status_dokumen', 'Tidak Terbit');
				$this->M_data->periode();
				$data['obat_tidak']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				//Terbit
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 1);
				$this->db->where('status_dokumen', 'Terbit');
				$this->M_data->periode();
				$data['pangan_terbit']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 2);
				$this->db->where('status_dokumen', 'Terbit');
				$this->M_data->periode();
				$data['kosmetik_terbit']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 3);
				$this->db->where('status_dokumen', 'Terbit');
				$this->M_data->periode();
				$data['ot_terbit']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 4);
				$this->db->where('status_dokumen', 'Terbit');
				$this->M_data->periode();
				$data['obat_terbit']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				//Belum Terbit
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 1);
				$this->db->where('status_dokumen', 'Belum Terbit');
				$this->M_data->periode();
				$data['pangan_belum']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 2);
				$this->db->where('status_dokumen', 'Belum Terbit');
				$this->M_data->periode();
				$data['kosmetik_belum']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 3);
				$this->db->where('status_dokumen', 'Belum Terbit');
				$this->M_data->periode();
				$data['ot_belum']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
				$this->db->join('tb_sarana', 'tb_sarana.id_sarana = tb_data.id_sarana');
				$this->db->where('id_jenis_sarana', 4);
				$this->db->where('status_dokumen', 'Belum Terbit');
				$this->M_data->periode();
				$data['obat_belum']=$this->db->get('tb_data')->num_rows();
				//---------------------------------------------------------------//
			}
			$this->load->view('Header');
			$this->load->view('Beranda',$data);
		}
		// $this->session->set_userdata('link','https://digidev.id');
		// $data['banyak']=$this->db->query('SELECT COUNT(id_barang) as banyak FROM tb_barang');
		// $this->load->view('Header');
		// $this->load->view('Beranda');
	}
	public function detail(){
		$id = $this->input->get('id');
		$status = $this->input->get('status');

		$this->db->join('tb_jeniskonsultasi', 'tb_jeniskonsultasi.id_jeniskonsultasi = tb_data.id_jeniskonsultasi');
		$this->db->join('tb_sarana', 'tb_sarana.id_sarana=tb_data.id_sarana');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_data.id_kategori');
		$this->db->join('tb_detail_kategori', 'tb_detail_kategori.id_detail_kategori = tb_data.id_detail_kategori');
		$this->db->join('tb_jenis_sarana', 'tb_jenis_sarana.id_jenis_sarana = tb_sarana.id_jenis_sarana');
		$this->db->join('tb_detail_jenis_sarana', 'tb_detail_jenis_sarana.id_detail_jenis_sarana = tb_sarana.id_detail_jenis_sarana');
		//$this->db->where('status !=', 'Konsultasi');
		$this->M_data->periode();
		$this->db->where('tb_sarana.id_jenis_sarana', $id);
		$this->db->where('status_dokumen', $status);
		$data['sertifikasi'] = $this->db->get('tb_data');
		$data['petugas'] = $this->db->get('tb_user');

		$this->load->view('header');
		$this->load->view('sertifikasi/sertifikasi',$data);
	}


}

/* End of file  */
/* Location: ./application/controllers/ */
