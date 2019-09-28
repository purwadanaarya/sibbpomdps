<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	function add($add)
	{
		$this->db->where('username',$add['username']);
		$rows = $this->db->get('tb_user')->num_rows();
		if($rows>0){
			return 'usernametaken';
		} else {
			if($this->db->insert('tb_user', $add)){
				return 'ok';
			} else {
				return 'fail';
			}	
		}
	}
	function edit($edit)
	{
		$this->db->where('id_user',$edit['id_user']);
		if($this->db->update('tb_user', $edit)){
			return 'ok';
		} else {
			return 'fail';
		}	
	}
	function delete($id_user)
	{
		$this->db->where('id_user', $id_user);
		if($this->db->delete('tb_user')){
			return 'ok';
		} else {
			return 'fail';
		}	
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */