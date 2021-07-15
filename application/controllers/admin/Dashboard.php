<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('nama') == null){
      		redirect('loginadmin');
    	}
	}


	public function index() 
	{

	// if($this->session->userdata('akses')=='1'){	
		$data['judul'] = 'Dashboard';
		$data['admin'] = $this->session->userdata('nama');
		$this->data['count_admin']=$this->db->query("SELECT * FROM admin")->num_rows();
		$this->data['count_guru']=$this->db->query("SELECT * FROM tbl_guru")->num_rows();
		$this->data['count_ppdb']=$this->db->query("SELECT * FROM pendaftar")->num_rows();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard/index',$this->data);
		$this->load->view('admin/footer');

	// }else{
	// 	redirect('dashboard');
	// }



	}


}