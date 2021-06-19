<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_karyawan');
		$this->load->model('M_login');
	}
	public function index()
	{

		$this->load->view('karyawan/inc/head');
		$this->load->view('karyawan/inc/sidebar');
		$this->load->view('karyawan/das/das');
		$this->load->view('karyawan/inc/footer');
	}
	public function gaji()
	{
		if($this->M_login->logged_id2() == 'karyawan')
	{
			$data['user'] = $this->M_karyawan->tampil_data_gaji2();
		$this->load->view('karyawan/inc/head');
		$this->load->view('karyawan/inc/sidebar');
		$this->load->view('karyawan/data/gaji',$data);
		$this->load->view('karyawan/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}


		function cetak_gaji($id_gaji){
			if($this->M_login->logged_id2() == 'karyawan')
	{

		
		$where = array('id_gaji' => $id_gaji);
		$data['user'] = $this->M_karyawan->edit_data_gaji($where,'gaji')->result();
		$data['user2'] = $this->M_karyawan->tampil_data_gaji3();
		$this->load->view('karyawan/cetak/cetak',$data);
	}
	else
	{
		redirect("C_login");

	}



	}
	
}
