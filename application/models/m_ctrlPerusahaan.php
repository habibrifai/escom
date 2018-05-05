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
		$this->db->select('id_perusahaan, username')
						 ->from('perusahaan')
						 ->join('user', 'user.id_user = perusahaan.id_user')
						 ->where('username', $username);

		$hasil = $this->db->get()->row();

		$this->db->select('id_proposal, id_perusahaan, nama_organisasi, proposal, tanggal_pengajuan, , status');
    $this->db->from('proposal');
    $this->db->join('organisasi', 'organisasi.id_organisasi = proposal.id_organisasi');
    $this->db->where('id_perusahaan', $hasil->id_perusahaan)
						 ->where('status', 'belum disetujui');
    $proposal = $this->db->get();
    return $proposal->result();
	}

	function get_spj($username){

	}
}
