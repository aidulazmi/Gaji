<?php 

class M_admin extends CI_Model{

	function tampil_data_jabatan(){
		return $this->db->get('jabatan');
	}
	function input_data_jabatan($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_jabatan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_jabatan($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_jabatan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_gaji(){
		return $this->db->get('gaji');
	}
	function input_data_gaji($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_gaji($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_gaji($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_gaji($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_gaji2(){
		$query = $this->db->query("SELECT user.id_user, user.nama_lengkap,user.email, gaji.id_gaji,gaji.gdasar, gaji.tdasar, gaji.tkemahalan, gaji.hkerja, gaji.ttransport, gaji.totransport, gaji.tprestasi, gaji.toprestasi, gaji.tjabatan,gaji.bulan, gaji.tahun, gaji.hluar, gaji.tluar, gaji.toluar, gaji.potong from user JOIN gaji on gaji.id_user = user.id_user");
        return $query->result();
	}

	function tampil_data_user(){
		return $this->db->get('user');
	}
	
	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_data_user2(){
		$query = $this->db->query("SELECT user.id_user, user.nama_lengkap,user.email, user.username,user.bagian, user.jk, user.agama, user.alamat, user.hp, user.password, user.status, jabatan.id_jabatan, jabatan.jabatan, jabatan.keterangan from jabatan JOIN user on user.id_jabatan = jabatan.id_jabatan where status = 'karyawan'");
        return $query->result();
	}

	function tampil_data_gaji3($id_gaji){
		$query = $this->db->query("SELECT user.id_user,user.alamat,user.hp, user.jk, user.nama_lengkap,user.email, gaji.id_gaji,sum(gaji.gdasar) as gdasar ,sum(gaji.tdasar) as tdasar, sum(gaji.tkemahalan) as tkemahalan, sum(gaji.hkerja) as hkerja, sum(gaji.ttransport) as ttransport, sum(gaji.totransport) as totransport, sum(gaji.tprestasi) as tprestasi, sum(gaji.toprestasi) as toprestasi, (gaji.tjabatan) as tjabatan ,gaji.bulan, gaji.tahun, sum(gaji.hluar) as hluar,sum( gaji.tluar) AS tluar, sum(gaji.toluar) as toluar, sum(gaji.potong) as potong from user JOIN gaji on gaji.id_user = user.id_user WHERE gaji.id_gaji = '".$id_gaji."' GROUP BY gaji.bulan & gaji.tahun");
		return $query->result();
	}
}