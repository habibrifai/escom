<?php 
 
class M_perusahaan extends CI_Model{	

	function get_data($table){	
		$this->db->select("foto,kategori,nama_perusahaan,deskripsi,tahun_berdiri,alamat_perusahaan,user.email,user.status,no_tlp,user.id_user,perusahaan.id_perusahaan");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		return $this->db->get()->result_array();
	}	

	function detail($table,$id){	
		$this->db->select("foto,kategori,nama_perusahaan,deskripsi,tahun_berdiri,alamat_perusahaan,user.email,user.status,no_tlp,user.id_user,perusahaan.id_perusahaan");
		$this->db->from($table);
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		$this->db->where('id_perusahaan', $id);
		return $this->db->get()->result_array();
	}	

	function get_data_kategori($table,$kategori){	
		$this->db->select("foto,deskripsi,kategori,nama_perusahaan, id_user, id_perusahaan");
		$this->db->from($table);
		$this->db->where('kategori', $kategori);	
		return $this->db->get()->result_array();
	}	

	function get_data_id($table,$id){	
		$this->db->select("nama_perusahaan,id_perusahaan");
		$this->db->from($table);
		$this->db->where('id_perusahaan', $id);	
		return $this->db->get()->result_array();
	}

	function do_verif($table,$where){
		$this->db->where('id_user', $where);
		$this->db->update($table, array('status' => 'terverifikasi'));
	}

	function hapus($table,$where){
		$this->db->where('id_user', $where);
		$this->db->delete($table);
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

	function update_jml_proposal($table,$jml,$where){
		$this->db->where('id_perusahaan', $where);
		$this->db->update($table, array('jml_proposal_ahir' => $jml));
	}

	function get_jumlah($where){
		$this->db->select('perusahaan.jml_proposal_awal, perusahaan.jml_proposal_ahir');
		$this->db->from('perusahaan');
		$this->db->join('user', 'user.id_user = perusahaan.id_user');	
		$this->db->where('username', $where);
		return $this->db->get()->result_array();
	}

	function reset_jml($table,$jml,$where){
		$this->db->where('id_perusahaan', $where);
		$this->db->update($table, array('jml_proposal_ahir' => $jml));
	}

	function get_nama($id){	
		$this->db->select("nama_perusahaan");
		$this->db->from('perusahaan');
		$this->db->where('id_perusahaan', $id);
		return $this->db->get()->result_array();
	}

	function jml_proposal_disetujui($username){	
		$this->db->select('proposal.proposal, proposal.id_perusahaan');
		$this->db->from('perusahaan');
		$this->db->join('user', 'perusahaan.id_user = user.id_user');
		$this->db->join('proposal', 'proposal.id_perusahaan = perusahaan.id_perusahaan');
		$this->db->where(array('username' => $username, 'status_proposal' => 'Disetujui'));
		return $this->db->get()->num_rows();
	}

	function jml_proposal_diterima($username){	
		$this->db->select('proposal.proposal, proposal.id_perusahaan');
		$this->db->from('perusahaan');
		$this->db->join('user', 'perusahaan.id_user = user.id_user');
		$this->db->join('proposal', 'proposal.id_perusahaan = perusahaan.id_perusahaan');
		$this->db->where(array('username' => $username));
		return $this->db->get()->num_rows();
	}

	function jml_spj($username){	
		$this->db->select('proposal.proposal, proposal.id_perusahaan');
		$this->db->from('perusahaan');
		$this->db->join('user', 'perusahaan.id_user = user.id_user');
		$this->db->join('proposal', 'proposal.id_perusahaan = perusahaan.id_perusahaan');
		$this->db->join('spj', 'proposal.id_proposal = spj.id_proposal');
		$this->db->where(array('username' => $username));
		return $this->db->get()->num_rows();
	}
}

