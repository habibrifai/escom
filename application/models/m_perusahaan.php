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

	function get_data_home($table){	
		$this->db->select("perusahaan.id_user,foto,nama_perusahaan");
		$this->db->where('status', 'terverifikasi');
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		return $this->db->get()->result_array();
	}	

	function get_data_home_jumlah($table){	
		$this->db->where('status', 'terverifikasi');
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		return $this->db->get()->num_rows();
	}

	function get_data_detail($table){	
		$this->db->select("foto,nama_perusahaan,deskripsi,tahun_berdiri,alamat_perusahaan,user.email,user.status,no_tlp,user.id_user,perusahaan.id_perusahaan");
		$this->db->where('status', 'terverifikasi');
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		return $this->db->get()->result_array();
	}	

	function tampil_perusahaan($table,$id_user){	
		$this->db->select("foto,nama_perusahaan,deskripsi,tahun_berdiri,alamat_perusahaan,user.email,user.status,no_tlp,user.id_user,perusahaan.id_perusahaan");
		$this->db->join('user', 'user.id_user = perusahaan.id_user');
		$this->db->where(array('status'=>'terverifikasi', 'perusahaan.id_user' => $id_user));
		$this->db->from($table);
		return $this->db->get()->result_array();
	}
}

