<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Akun extends CI_Controller 
{ 
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('akun_model');
        if($this->session->userdata('nama') == null){
      		redirect('loginadmin'); 
    	}
	}

	public function index()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'List Data Akun Admin'; 
		$data['akun'] = $this->akun_model->getAllData();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/data_admin/index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah_akun()
	{
		$nama = $this->input->post('nama', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'nama_admin' => $nama,
			'username' => $username,
			'password' => $password_hash,
		);

		$this->akun_model->simpan($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('admin/akun');
	}

	public function hapus($id)
	{
		$this->akun_model->hapusDataAkun($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/akun');
	}
}