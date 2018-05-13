<?php

class M_organisasi extends CI_Model{

	function get_data($table){
		$this->db->select("foto,nama_organisasi,deskripsi,tahun_berdiri,alamat_organisasi,user.email,user.status,no_tlp,user.id_user,organisasi.id_organisasi");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		return $this->db->get()->result_array();
	}

	function detail($table,$id){
		$this->db->select("foto,nama_organisasi,deskripsi,tahun_berdiri,alamat_organisasi,user.email,user.status,no_tlp,user.id_user,organisasi.id_organisasi");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		$this->db->where('id_organisasi', $id);
		return $this->db->get()->result_array();
	}

	function get_id($table,$username){
		$this->db->select("organisasi.id_organisasi");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		$this->db->where('username', $username);
		return $this->db->get()->result_array();
	}

	function do_verif($table,$where){
		$this->db->where('id_user', $where);
		$this->db->update($table, array('status' => 'terverifikasi'));
	}

	function jumlah_data($table){
		$this->db->where(array('status' => 'terverifikasi', 'role' => 'organisasi'));
		return $this->db->get($table)->num_rows();
	}

	function get_data_home($table){
		$this->db->select("organisasi.id_user,foto,nama_organisasi");
		$this->db->where('status', 'terverifikasi');
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		return $this->db->get()->result_array();
	}

	function get_data_home_jumlah($table){
		$this->db->where('status', 'terverifikasi');
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		return $this->db->get()->num_rows();
	}

	function get_data_detail($table){
		$this->db->select("jumlah_proposal,jml_proposal_awal,foto,nama_organisasi,deskripsi,tahun_berdiri,alamat_organisasi,user.email,user.status,no_tlp,user.id_user,organisasi.id_organisasi,organisasi.status_notif_admin");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		// $this->db->join('proposal', 'organisasi.id_organisasi = proposal.id_organisasi');
		$this->db->where('status', 'terverifikasi');

		return $this->db->get()->result_array();
	}

	function get_status_notif_admin($table){
		$this->db->select("proposal.status_notif_admin, organisasi.id_organisasi");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		$this->db->join('proposal', 'organisasi.id_organisasi = proposal.id_organisasi');
		$this->db->where('status', 'terverifikasi');

		return $this->db->get()->result_array();
	}

	function tampil_organisasi($table,$id_user){
		$this->db->select("id_organisasi,foto,nama_organisasi,deskripsi,tahun_berdiri,alamat_organisasi,user.email,user.status,no_tlp,user.id_user,organisasi.id_organisasi");
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		$this->db->where(array('status'=>'terverifikasi', 'organisasi.id_user' => $id_user));
		$this->db->from($table);
		return $this->db->get()->result_array();
	}

	function upload_spj($data){
		$this->db->insert('spj', $data);
	}

	function reset_jml_proposal($id_organisasi, $table){
		$this->db->select('jumlah_proposal');
		$this->db->from($table);
		$this->db->where('id_organisasi', $id_organisasi);
		$jml = $this->db->get()->row();
		// var_dump($jml);

		$data = array('jml_proposal_awal' => $jml->jumlah_proposal);
		$this->db->where('id_organisasi', $id_organisasi);
		$this->db->update($table, $data);
		
	}

	function set_status_notif_admin($id_organisasi, $data){
		$this->db->where('id_organisasi', $id_organisasi);
		$this->db->update('organisasi', $data);
	}

	function reset_status_notif_admin($id,$table){

		$data = array('status_notif_admin' => '-');

		$this->db->where('id_organisasi', $id);
		$this->db->update($table, $data);
	}
}
