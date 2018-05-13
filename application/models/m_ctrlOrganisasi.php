<?php

class M_ctrlOrganisasi extends CI_Model{

	function get_profile($username){
		$this->db->select('nama_perusahaan, tahun_berdiri, alamat_perusahaan, deskripsi, kategori, foto, no_tlp');
		$this->db->from('perusahaan');
		$this->db->join('user', 'user.id_user = perusahaan.id_user');
		$this->db->where('username', $username);
		$hasil = $this->db->get();
		return $hasil->row();
	}

	function get_profil($username){
		$this->db->select('nama_organisasi, tahun_berdiri, alamat_organisasi, deskripsi, no_tlp, id_organisasi');
		$this->db->from('organisasi');
		$this->db->join('user', 'user.id_user = organisasi.id_user');
		$this->db->where('username', $username);
		$hasil = $this->db->get();
		return $hasil->row();
	}

	function get_profile_byID($id_organisasi){
		$this->db->select('id_organisasi, nama_organisasi, tahun_berdiri, alamat_organisasi, foto, no_tlp, deskripsi')
		->from('organisasi')
		->where('id_organisasi', $id_organisasi);
		$hasil = $this->db->get()->row();
		return $hasil;
	}

	function edit_profile($username, $profil_perusahaan){
		$this->db->select('id_perusahaan, username')
		->from('perusahaan')
		->join('user', 'user.id_user = perusahaan.id_user')
		->where('username', $username);
		$hasil = $this->db->get()->row();

		$this->db->where('id_perusahaan', $hasil->id_perusahaan)
		->update('perusahaan',$profil_perusahaan);
	}

	function get_proposal($username){
		$this->db->select('id_organisasi, username')
		->from('organisasi')
		->join('user', 'user.id_user = organisasi.id_user')
		->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_organisasi, nama_perusahaan, proposal, isi_balasan, status_proposal');
		$this->db->from('proposal');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->where('id_organisasi', $hasil->id_organisasi);
						 // ->where('status_proposal', 'belum disetujui');
		$proposal = $this->db->get();
		return $proposal->result();
	}

	function get_proposal_disetujui($username){
		$this->db->select('id_organisasi, username')
		->from('organisasi')
		->join('user', 'user.id_user = organisasi.id_user')
		->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('proposal.id_proposal, id_organisasi, nama_perusahaan, perusahaan.id_perusahaan, proposal, isi_balasan, status_proposal, spj.spj, spj.status_spj, spj.id_spj');
		$this->db->from('proposal');
		$this->db->where('status_proposal', 'Disetujui');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->join('spj', 'proposal.id_proposal = spj.id_proposal', 'left');
		$this->db->where('id_organisasi', $hasil->id_organisasi);
						 // ->where('status_proposal', 'belum disetujui');
		$proposal = $this->db->get();
		return $proposal->result();
	}

	function get_balasan_proposal($id, $username){
		$this->db->select('id_organisasi, username')
		->from('organisasi')
		->join('user', 'user.id_user = organisasi.id_user')
		->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_organisasi, nama_perusahaan, proposal, isi_balasan, proposal.id_perusahaan');
		$this->db->from('proposal');
		$this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
		$this->db->where('id_organisasi', $hasil->id_organisasi);
		$this->db->where('id_proposal', $id);
						 // ->where('status_proposal', 'belum disetujui');
		$balasan = $this->db->get();
		return $balasan->row();
	}

	function update_profil($id_organisasi,$data){
		$this->db->where('id_organisasi', $id_organisasi);
		$this->db->update('organisasi', $data);
	}

	function cek_spj($username){
		$this->db->select('spj.spj');
		$this->db->from('organisasi');
		$this->db->join('user', 'organisasi.id_user = user.id_user');
		$this->db->join('proposal', 'organisasi.id_organisasi = proposal.id_organisasi');
		$this->db->join('spj', 'proposal.id_proposal = spj.id_proposal');
		$this->db->where(array('username' => $username, 'status_spj' => 'Cleared'));
		return $this->db->get()->result();

	}
}
