<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_buku extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	function get_kegiatan($username){
		$this->db->where('username', $username);
		return $this->db->get('tb_kegiatan');
	}
	function add_kegiatan(){

		$insert = array(
			'tgl' 				=> $this->input->post('tanggal_kegiatan'),
			'dasar_pekerjaan' 	=> $this->input->post('dasar_kegiatan'),
			'kode' 				=> $this->input->post('kode_kegiatan'),
			'kegiatan' 			=> $this->input->post('kegiatan_kegiatan'),
			'waktu' 			=> $this->input->post('waktu_kegiatan'),
			'volume' 			=> $this->input->post('volume_kegiatan'),
			'hasil' 			=> $this->input->post('satuan_hasil_kegiatan'),
			'angka_kredit' 		=> $this->input->post('angka_kredit_kegiatan'),
			'bukti' 			=> $this->input->post('bukti_kegiatan'),
			'ket' 				=> $this->input->post('keterangan_kegiatan'),
			'username' 			=> $this->session->userdata('username')	
		);
		if($this->db->insert('tb_kegiatan', $insert)){
			return 'ok';
		} else {
			return 'fail';
		}

	}
	function delete_kegiatan($id){
		$this->db->where('id_kegiatan', $id);
		if($this->db->delete('tb_kegiatan')){
			return 'ok';
		} else {
			return 'fail';
		}

	}
	function edit_kegiatan(){
		$id_kegiatan=$this->input->post('id_kegiatan');
		$edit = array(
			'tgl' 				=> $this->input->post('tanggal_kegiatan'),
			'dasar_pekerjaan' 	=> $this->input->post('dasar_kegiatan'),
			'kode' 				=> $this->input->post('kode_kegiatan'),
			'kegiatan' 			=> $this->input->post('kegiatan_kegiatan'),
			'waktu' 			=> $this->input->post('waktu_kegiatan'),
			'volume' 			=> $this->input->post('volume_kegiatan'),
			'hasil' 			=> $this->input->post('satuan_hasil_kegiatan'),
			'angka_kredit' 		=> $this->input->post('angka_kredit_kegiatan'),
			'bukti' 			=> $this->input->post('bukti_kegiatan'),
			'ket' 				=> $this->input->post('keterangan_kegiatan'),
			'username' 			=> $this->session->userdata('username')	
		);
		$this->db->where('id_kegiatan', $id_kegiatan);
		if($this->db->update('tb_kegiatan', $edit)){
			return 'ok';
		} else {
			return 'fail';
		}

	}

}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */