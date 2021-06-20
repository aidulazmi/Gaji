<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
		$this->load->model('M_login');
	}

	public function index()
	{
			if($this->M_login->logged_id2() == 'admin')
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/das/das');
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

		//data

	public function jabatan()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_jabatan()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/jabatan',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function gaji()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_gaji2();
		$data['user2'] = $this->M_admin->tampil_data_user()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/gaji',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}

	public function user()
	{
		if($this->M_login->logged_id2() == 'admin')
	{
		$data['user'] = $this->M_admin->tampil_data_user2();
		$data['user2'] = $this->M_admin->tampil_data_jabatan()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}


	}


	//simpan

	function simpan_jabatan(){

		if($this->M_login->logged_id2() == 'admin')
	{

		//$id_jabatan = $this->input->post('id_jabatan');
		$jabatan = $this->input->post('jabatan');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			
			//'id_jabatan' => $id_jabatan,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
			);
		$this->M_admin->input_data_jabatan($data,'jabatan');
		redirect('C_admin/jabatan');
	}
	else
	{
		redirect("C_login");

	}

		
	}

	function simpan_gaji(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_gaji = $this->input->post('id_gaji');
		$id_user = $this->input->post('id_user');
		$gdasar = $this->input->post('gdasar');
		$tdasar = $this->input->post('tdasar');
		$tkemahalan = $this->input->post('tkemahalan');
		$hkerja = $this->input->post('hkerja');
		$ttransport = $this->input->post('ttransport');
		$totransport = $this->input->post('totransport');
		$tprestasi = $this->input->post('tprestasi');
		$toprestasi = $this->input->post('toprestasi');
		$tjabatan = $this->input->post('tjabatan');
		$hluar = $this->input->post('hluar');
		$tluar = $this->input->post('tluar');
		$toluar = $this->input->post('toluar');
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulan');
		$potong = $this->input->post('potong');

		$data = array(
			
			//'id_gaji' => $id_gaji,
			'id_user' => $id_user,
			'gdasar' => $gdasar,
			'tdasar' => $tdasar,
			'tkemahalan' => $tkemahalan,
			'hkerja' => $hkerja,
			'ttransport' => $ttransport,
			'totransport' => $totransport,
			'tprestasi' => $tprestasi,
			'toprestasi' => $toprestasi,
			'tjabatan' => $tjabatan,
			'hluar' => $hluar,
			'tluar' => $tluar,
			'toluar' => $toluar,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'potong' => $potong
			);
		$this->M_admin->input_data_gaji($data,'gaji');
		redirect('C_admin/gaji');
	}
	else
	{
		redirect("C_login");

	}

		
	}

	function simpan_user(){

		if($this->M_login->logged_id2() == 'admin')
	{
		//$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$id_jabatan = $this->input->post('id_jabatan');
		$bagian = $this->input->post('bagian');
		$jk = $this->input->post('jk');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$password = $this->input->post('password');
		$status = 'karyawan';

		$data = array(
			
			//'id_user' => $id_user,
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'id_jabatan' => $id_jabatan,
			'bagian' => $bagian,
			'jk' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'hp' => $hp,
			'password' => $password,
			'status' => $status
			);
		$this->M_admin->input_data_user($data,'user');
		redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}

		
	}

//delete 

	function hapus_jabatan($id_jabatan){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_jabatan' => $id_jabatan);
	$this->M_admin->hapus_data_jabatan($where,'jabatan');
	redirect('C_admin/jabatan');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	function hapus_gaji($id_gaji){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_gaji' => $id_gaji);
	$this->M_admin->hapus_data_gaji($where,'gaji');
	redirect('C_admin/gaji');
	}
	else
	{
		redirect("C_login");

	}
	
	}
	function hapus_user($id_user){

		if($this->M_login->logged_id2() == 'admin')
	{
	$where = array('id_user' => $id_user);
	$this->M_admin->hapus_data_user($where,'user');
	redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}
	
	}


//edit

	function edit_jabatan($id_jabatan){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_jabatan' => $id_jabatan);
		$data['user'] = $this->M_admin->edit_data_jabatan($where,'jabatan')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/jabatan',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

	function edit_gaji($id_gaji){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_gaji' => $id_gaji);
		$data['user'] = $this->M_admin->edit_data_gaji($where,'gaji')->result();
		$data['user2'] = $this->M_admin->tampil_data_user()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/gaji',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

	function edit_user($id_user){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_admin->edit_data_user($where,'user')->result();
		$data['user2'] = $this->M_admin->tampil_data_jabatan()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}



	function update_data_jabatan(){

			if($this->M_login->logged_id2() == 'admin')
	{
		$id_jabatan = $this->input->post('id_jabatan');
		$jabatan = $this->input->post('jabatan');
		$keterangan = $this->input->post('keterangan');



		$data = array(
			//'id_jabatan' => $id_jabatan,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
			);

	$where = array(
		'id_jabatan' => $id_jabatan
	);

	$this->M_admin->update_data_jabatan($where,$data,'jabatan');
		redirect('C_admin/jabatan');
	}

	else
	{
		redirect("C_login");

	}
}

	function update_data_gaji(){

			if($this->M_login->logged_id2() == 'admin')
	{

		$id_gaji = $this->input->post('id_gaji');
		$id_user = $this->input->post('id_user');
		$gdasar = $this->input->post('gdasar');
		$tdasar = $this->input->post('tdasar');
		$tkemahalan = $this->input->post('tkemahalan');
		$hkerja = $this->input->post('hkerja');
		$ttransport = $this->input->post('ttransport');
		$totransport = $this->input->post('totransport');
		$tprestasi = $this->input->post('tprestasi');
		$toprestasi = $this->input->post('toprestasi');
		$tjabatan = $this->input->post('tjabatan');
		$hluar = $this->input->post('hluar');
		$tluar = $this->input->post('tluar');
		$toluar = $this->input->post('toluar');
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulan');
		$potong = $this->input->post('potong');



		$data = array(
			//'id_gaji' => $id_gaji,
			'id_user' => $id_user,
			'gdasar' => $gdasar,
			'tdasar' => $tdasar,
			'tkemahalan' => $tkemahalan,
			'hkerja' => $hkerja,
			'ttransport' => $ttransport,
			'totransport' => $totransport,
			'tprestasi' => $tprestasi,
			'toprestasi' => $toprestasi,
			'tjabatan' => $tjabatan,
			'hluar' => $hluar,
			'tluar' => $tluar,
			'toluar' => $toluar,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'potong' => $potong
			);

	$where = array(
		'id_gaji' => $id_gaji
	);

	$this->M_admin->update_data_gaji($where,$data,'gaji');
		redirect('C_admin/gaji');
	}

	else
	{
		redirect("C_login");

	}
}
	function update_data_user(){

			if($this->M_login->logged_id2() == 'admin')
	{

		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$id_jabatan = $this->input->post('id_jabatan');
		$bagian = $this->input->post('bagian');
		$jk = $this->input->post('jk');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$password = $this->input->post('password');
		$status = 'karyawan';



		$data = array(
			//'id_user' => $id_user,
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'id_jabatan' => $id_jabatan,
			'bagian' => $bagian,
			'jk' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'hp' => $hp,
			'password' => $password,
			'status' => $status
			);

	$where = array(
		'id_user' => $id_user
	);

	$this->M_admin->update_data_gaji($where,$data,'user');
		redirect('C_admin/user');
	}

	else
	{
		redirect("C_login");

	}
}

function cetak_gaji($id_gaji){
			if($this->M_login->logged_id2() == 'admin')
	{

		
		$data['user2'] = $this->M_admin->tampil_data_gaji3($id_gaji);
		$this->load->view('karyawan/cetak/cetak',$data);
	}
	else
	{
		redirect("C_login");

	}



	}

}
