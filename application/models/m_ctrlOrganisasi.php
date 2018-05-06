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

	function get_balasan_proposal($id, $username){
		$this->db->select('id_organisasi, username')
						 ->from('organisasi')
						 ->join('user', 'user.id_user = organisasi.id_user')
						 ->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_organisasi, nama_perusahaan, proposal, isi_balasan');
    $this->db->from('proposal');
    $this->db->join('perusahaan', 'perusahaan.id_perusahaan = proposal.id_perusahaan');
    $this->db->where('id_organisasi', $hasil->id_organisasi);
		$this->db->where('id_proposal', $id);
						 // ->where('status_proposal', 'belum disetujui');
    $balasan = $this->db->get();
    return $balasan->row();
	}
}
