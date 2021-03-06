<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function cek_role($table,$where){
		$this->db->select('role, status');
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	function cek_cek($table,$where,$role){
		$this->db->select('status');
		$this->db->from($table);
		$this->db->where('status',$where);
		$this->db->where('role',$role);
		return $this->db->get()->row();
	}
}

