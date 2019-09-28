<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->join('tb_role', 'tb_role.id_role=tb_user.id_role');
		$hasil = $this->db->get('tb_user')->result();
		// echo $username;
		// echo $password;
		// print_r($hasil);
		if(sizeof($hasil)==1){
			$arr_session=[
				'si_username' => $hasil[0]->username,
				'si_nama'=>$hasil[0]->nama,
				'si_idrole'=>$hasil[0]->id_role,
				'si_role'=>$hasil[0]->role,	
			];
			$this->session->set_userdata($arr_session);
			redirect('home');
		} else {
			$this->session->set_flashdata('error','Data Login Invalid!');
			redirect('user');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */