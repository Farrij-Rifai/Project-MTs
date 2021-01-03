<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Guru extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model');
        $this->load->library('upload');
	}

	public function index() 
	{
		$data['judul'] = 'Data Guru';
		$data['guru'] = $this->guru_model->getAllBerita();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/guru/index');
		$this->load->view('admin/footer');
	}

	public function tambah_guru()
	{
		$data['judul'] = 'Tambah Data Guru';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/guru/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/guru/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['fotoguru']['name'])){
	        if ($this->upload->do_upload('fotoguru')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/guru/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 400;
	            $config['height']= 400;
	            $config['new_image']= './assets/foto/guru/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar = $gbr['file_name'];
                $nama = $this->input->post('nama', TRUE);
                $nip = $this->input->post('nip', TRUE);
                $email = $this->input->post('email', TRUE);
                $nomor = $this->input->post('nomor', TRUE);

				$this->guru_model->simpan_guru($nama,$nip,$email,$nomor,$gambar);
				redirect('guru');
		}else{
			redirect('admin/tambah_guru');
	    } 
	                 
	    }else{
			redirect('admin/tambah_guru');
		}		
	}

	public function hapus($id)
	{
		$this->guru_model->hapusDataGuru($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('guru');
	} 
}