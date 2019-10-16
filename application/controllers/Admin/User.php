<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_user');
		$this->load->model('M_cekuser');
	}

	public function index()
	{
		$this->M_cekuser->cek_admin();
		$data['role']=$this->db->get('tb_role');
		$this->db->join('tb_role', 'tb_user.id_role = tb_role.id_role');
		$data['user']=$this->db->get('tb_user');
		$this->load->view('header');
		$this->load->view('admin/user',$data);
	}
	public function add()
	{
		$this->M_cekuser->cek_admin();
		$insert = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'id_role' => $this->input->post('id_role'), 
		);
		$data = $this->M_user->add($insert);
		if($data=='ok'){
			$this->session->set_flashdata('success','success create user!');
			redirect('admin/user');
		} elseif ($data=='fail') {
			$this->session->set_flashdata('error','Data sudah ada!');
			redirect('admin/user');
		} elseif ($data=='usernametaken') {
			$this->session->set_flashdata('error','username already taken!');
			redirect('admin/user');
		}
	}
	public function edit()
	{
		$this->M_cekuser->cek_admin();
		if ($this->input->post('old_password')==$this->input->post('password')) {
			$edit=array(
				'id_user'=>$this->input->post('id_user'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('old_password'),
				'nama'=>$this->input->post('nama'),
				'id_role'=>$this->input->post('id_role'),
			);
		} else {
			$edit=array(
				'id_user'=>$this->input->post('id_user'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				'nama'=>$this->input->post('nama'),
				'id_role'=>$this->input->post('id_role'),
			);
		}
		$data = $this->M_user->edit($edit);
		if($data=='ok'){
			$this->session->set_flashdata('success','success update user!');
			redirect('admin/user');
		} elseif ($data=='fail') {
			$this->session->set_flashdata('error','failed update user!');
			redirect('admin/user');
		} elseif ($data=='usernametaken') {
			$this->session->set_flashdata('error','username already taken!');
			redirect('admin/user');
		}
	}
	public function delete($id='')
	{
		$this->M_cekuser->cek_admin();
		$data = $this->M_user->delete($id);
		if($data=='ok'){
			$this->session->set_flashdata('success','success delete user!');
			redirect('admin/user');
		} elseif ($data=='fail') {
			$this->session->set_flashdata('error','failed delete user!');
			redirect('admin/user');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */