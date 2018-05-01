<?php 
 
class M_perusahaan extends CI_Model{	

	function get_data($table){	
		$this->db->select("foto,nama_perusahaan,deskripsi,tahun_berdiri,alamat_perusahaan,user.email,user.status,no_tlp,user.id_user,perusahaan.id_perusahaan");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		return $this->db->get()->result_array();
	}	

	function do_verif($table,$where){
		$this->db->where('id_user', $where);
		$this->db->update($table, array('status' => 'terverifikasi'));
	}

	function jumlah_data($table){
		$this->db->where(array('status' => 'terverifikasi', 'role' => 'perusahaan'));
		return $this->db->get($table)->num_rows();
	}
}

