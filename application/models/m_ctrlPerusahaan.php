<?php

class M_ctrlPerusahaan extends CI_Model{

	function get_profile($username){
		$this->db->select('nama_perusahaan, tahun_berdiri, alamat_perusahaan, deskripsi, kategori, foto, no_tlp');
    $this->db->from('perusahaan');
    $this->db->join('user', 'user.id_user = perusahaan.id_user');
    $this->db->where('username', $username);
    $hasil = $this->db->get();
    return $hasil->row();
	}

	function count_spj($username){
		$this->db->select('id_perusahaan, username')
						 ->from('perusahaan')
						 ->join('user', 'user.id_user = perusahaan.id_user')
						 ->where('username', $username);
		$hasil = $this->db->get()->row();

		$this->db->select('spj, proposal, id_perusahaan, status_spj');
    $this->db->from('spj');
    $this->db->join('proposal', 'proposal.id_proposal = spj.id_proposal');
    $this->db->where('id_perusahaan', $hasil->id_perusahaan);
    $spj = $this->db->get();
		return $spj->num_rows();
	}

	function get_spj($username){
		$this->db->select('id_perusahaan, username')
						 ->from('perusahaan')
						 ->join('user', 'user.id_user = perusahaan.id_user')
						 ->where('username', $username);
		$hasil = $this->db->get()->row();

		$this->db->select('spj, proposal, id_perusahaan, status_spj');
    $this->db->from('spj');
    $this->db->join('proposal', 'proposal.id_proposal = spj.id_proposal');
    $this->db->where('id_perusahaan', $hasil->id_perusahaan);
		// $this->db->where('status_spj', 'Cleared');
    $spj = $this->db->get();
    return $spj->result();
	}

	function count_proposal($username){
		$this->db->select('id_perusahaan, username')
						 ->from('perusahaan')
						 ->join('user', 'user.id_user = perusahaan.id_user')
						 ->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_perusahaan, nama_organisasi, proposal, tanggal_pengajuan, , status_proposal');
    $this->db->from('proposal');
    $this->db->join('organisasi', 'organisasi.id_organisasi = proposal.id_organisasi');
    $this->db->where('id_perusahaan', $hasil->id_perusahaan)
						 ->where('status_proposal', 'belum disetujui');
    $proposal = $this->db->get();
		return $proposal->num_rows();
	}

	function get_proposal($username){
		$this->db->select('id_perusahaan, username')
						 ->from('perusahaan')
						 ->join('user', 'user.id_user = perusahaan.id_user')
						 ->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_perusahaan, nama_organisasi, proposal, tanggal_pengajuan, , status_proposal');
    $this->db->from('proposal');
    $this->db->join('organisasi', 'organisasi.id_organisasi = proposal.id_organisasi');
    $this->db->where('id_perusahaan', $hasil->id_perusahaan)
						 ->where('status_proposal', 'belum disetujui');
    $proposal = $this->db->get();
    return $proposal->result();
	}

	function get_detail_proposal($id){
		$this->db->select('id_proposal, proposal, tanggal_pengajuan')
						 ->from('proposal')
						 ->where('id_proposal', $id);
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

	function balas_proposaldb($id, $balasan){
		$this->db->where('id_proposal', $id)
						 ->update('proposal', $balasan);
	}

	function tolak_proposaldb($id, $balasan){
		$this->db->where('id_proposal', $id)
						 ->update('proposal', $balasan);
	}

}
