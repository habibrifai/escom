<?php

class M_spj extends CI_Model{

	function get($table){
		$this->db->select("spj.spj, perusahaan.nama_perusahaan, organisasi.nama_organisasi, spj.status_spj, spj.id_spj");
		$this->db->from($table);
		$this->db->join('proposal', 'spj.id_proposal = proposal.id_proposal', 'left');
		$this->db->join('perusahaan', 'proposal.id_perusahaan = perusahaan.id_perusahaan', 'left');
		$this->db->join('organisasi', 'proposal.id_organisasi = organisasi.id_organisasi', 'left');

		$hasil = $this->db->get()->result_array();
		return $hasil;
	}

	function update_status($id_spj, $data){
		$this->db->where('id_spj', $id_spj);
		$this->db->update('spj', $data);
	}

	function jumlah_data($status){
		$this->db->where('status_spj', $status);
		$this->db->from('spj');
		return $this->db->get()->num_rows();
	}

	function cek_spj_cleared($username){
		$this->db->select('spj.status_notif');
		$this->db->from('user');
		$this->db->join('perusahaan', 'perusahaan.id_user = user.id_user');
		$this->db->join('proposal', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->join('spj', 'proposal.id_proposal = spj.id_proposal');
		$this->db->where('username', $username);
		return $this->db->get()->row();
	}

	function reset_status_notif($username){
		$this->db->join('user', 'user.username = '.$username);
		$this->db->join('organisasi', 'organisasi.id_user = user.id_user');
		$this->db->join('proposal', 'organisasi.id_organisasi = proposal.id_organisasi');
		$this->db->join('spj', 'proposal.id_proposal = spj.id_proposal');

		$data = array('status_notif' => '-');
		$this->db->update('spj', $data);
	}
}
?>