<?php

class M_proposal extends CI_Model{

	function upload_proposal($data){
		$this->db->insert('proposal', $data);
	}

	function jumlah($where){
		$this->db->from('proposal');
		$this->db->where('id_perusahaan', $where);
		return $this->db->get();
	}
		
}
