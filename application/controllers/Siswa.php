<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
        $this->load->library('upload');
	}

	public function index() 
	{
		$data['judul'] = 'Data Siswa';
		$data['siswa'] = $this->siswa_model->getAllSiswa();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa/index', $data);
		$this->load->view('admin/footer');
	}

	public function kelas7() 
	{
		$data['judul'] = 'Data Siswa';
		$data['siswa'] = $this->siswa_model->getSiswaVII();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa/index', $data);
		$this->load->view('admin/footer');
	}

	public function kelas8() 
	{
		$data['judul'] = 'Data Siswa';
		$data['siswa'] = $this->siswa_model->getSiswaVIII(); 
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa/index', $data);
		$this->load->view('admin/footer');
	}

	public function kelas9() 
	{
		$data['judul'] = 'Data Siswa';
		$data['siswa'] = $this->siswa_model->getSiswaIX();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa/index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah_siswa()
	{
		$data['judul'] = 'Tambah Siswa';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/siswa/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$nama=$this->input->post('nama_siswa', TRUE);
        $nis=$this->input->post('nis_siswa', TRUE);
        $kls=$this->input->post('kelas', TRUE);
        $no=$this->input->post('nomor', TRUE);

        $this->siswa_model->tambahDataSiswa($nama,$nis,$kls,$no);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('siswa');
	}

	public function hapus($id)
	{
		$this->siswa_model->hapusDataSiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('siswa');
	}
}