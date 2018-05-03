<?php

class m_ctrlPerusahaan extends CI_Model{

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
}
