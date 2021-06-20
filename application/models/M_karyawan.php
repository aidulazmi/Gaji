<?php 

class M_karyawan extends CI_Model{

	function tampil_data_gaji(){
		return $this->db->get('gaji');
	}
	
	function edit_data_gaji($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function tampil_data_gaji2(){
		$query = $this->db->query("SELECT user.id_user,user.alamat,user.hp, user.jk, user.nama_lengkap,user.email, gaji.id_gaji,sum(gaji.gdasar) as gdasar ,sum(gaji.tdasar) as tdasar, sum(gaji.tkemahalan) as tkemahalan, sum(gaji.hkerja) as hkerja, sum(gaji.ttransport) as ttransport, sum(gaji.totransport) as totransport, sum(gaji.tprestasi) as tprestasi, sum(gaji.toprestasi) as toprestasi, (gaji.tjabatan) as tjabatan ,gaji.bulan, gaji.tahun, sum(gaji.hluar) as hluar,sum( gaji.tluar) AS tluar, sum(gaji.toluar) as toluar, sum(gaji.potong) as potong from user JOIN gaji on gaji.id_user = user.id_user WHERE user.id_user = '".$this->session->id_user."' GROUP BY gaji.bulan & gaji.tahun");
        return $query->result();
	}
	function tampil_data_gaji4(){
		$query = $this->db->query("SELECT user.id_user,user.alamat,user.hp, user.jk, user.nama_lengkap,user.email, gaji.id_gaji,sum(gaji.gdasar) as gdasar ,sum(gaji.tdasar) as tdasar, sum(gaji.tkemahalan) as tkemahalan, sum(gaji.hkerja) as hkerja, sum(gaji.ttransport) as ttransport, sum(gaji.totransport) as totransport, sum(gaji.tprestasi) as tprestasi, sum(gaji.toprestasi) as toprestasi, (gaji.tjabatan) as tjabatan ,gaji.bulan, gaji.tahun, sum(gaji.hluar) as hluar,sum( gaji.tluar) AS tluar, sum(gaji.toluar) as toluar, sum(gaji.potong) as potong from user JOIN gaji on gaji.id_user = user.id_user WHERE user.id_user = '".$this->session->id_user."' GROUP BY gaji.bulan & gaji.tahun");
		return $query->result();
	}
	function tampil_data_gaji3($id_gaji){
		$query = $this->db->query("SELECT user.id_user,user.alamat,user.hp, user.jk, user.nama_lengkap,user.email, gaji.id_gaji,sum(gaji.gdasar) as gdasar ,sum(gaji.tdasar) as tdasar, sum(gaji.tkemahalan) as tkemahalan, sum(gaji.hkerja) as hkerja, sum(gaji.ttransport) as ttransport, sum(gaji.totransport) as totransport, sum(gaji.tprestasi) as tprestasi, sum(gaji.toprestasi) as toprestasi, (gaji.tjabatan) as tjabatan ,gaji.bulan, gaji.tahun, sum(gaji.hluar) as hluar,sum( gaji.tluar) AS tluar, sum(gaji.toluar) as toluar, sum(gaji.potong) as potong from user JOIN gaji on gaji.id_user = user.id_user WHERE gaji.id_gaji = '".$id_gaji."' GROUP BY gaji.bulan & gaji.tahun");
		return $query->result();
	}
}



