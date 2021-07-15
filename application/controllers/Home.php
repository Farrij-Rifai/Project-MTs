<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('galeri_model');
		$this->load->model('carousel_model');
        $this->load->model('guru_model');
        $this->load->model('event_model');
        $this->load->library('upload');
        $this->load->library("pagination"); 
	}
 
	public function index()
	{
		//Config berita
		$config['base_url'] = 'http://localhost/magang/home/index';
		$config['total_rows'] = $this->berita_model->countAllBerita();
		$config['per_page'] = 4;

		//Config carousel
		$config['total_rows_c'] = $this->carousel_model->countAllCarousel();
		$config['per_page_c'] = 3;

		//Config event
		$config['total_rows_e'] = $this->event_model->countAllEvent();
		$config['per_page_e'] = 1; 

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['berita'] = $this->berita_model->getBerita($config['per_page'], $data['start']);
		$data['carousel'] = $this->carousel_model->getCarousel($config['per_page_c'], $data['start']);
		$data['event'] = $this->event_model->getEvent($config['per_page_e'], $data['start']);
		$data['guru'] = $this->guru_model->getAllDataGuru();


		$data['judul'] = 'MTS Bima Bhakti';
		$this->load->view('templates/header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('templates/footer');
	}


	public function info_ppdb()
	{
		$data['berita'] = $this->berita_model->getAllBerita();
		$data['judul'] = 'MTS Bima Bhakti';
		$this->load->view('templates/header', $data);
		$this->load->view('user/info_ppdb', $data);
		$this->load->view('templates/footer');
	}

	public function nilai_siswa()
	{
		$data['judul'] = 'Login Nilai Siswa';
		$this->load->view('login/login_header', $data);
		$this->load->view('login/login_siswa');
		$this->load->view('login/login_footer');
	}

	public function loginadmin()
	{
		$data['judul'] = 'Login Admin';
		$this->load->view('login/login_header', $data);
		$this->load->view('login/index');
		$this->load->view('login/login_footer');
	}

	public function profil() 
	{
		$data['judul'] = 'Profil MTS Bima Bhakti';
		$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('templates/header', $data);
		$this->load->view('user/profil', $data);
		$this->load->view('templates/footer');
	}

	public function akademik()
	{
		$data['judul'] = 'Ekskul MTS Bima Bhakti';
		$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('templates/header', $data);
		$this->load->view('user/akademik', $data);
		$this->load->view('templates/footer');
	}

	public function galeri()
	{
		$data['judul'] = 'Galeri MTS Bima Bhakti';
		$data['galeri'] = $this->galeri_model->getAllGaleri();
		$this->load->view('templates/header', $data);
		$this->load->view('user/galeri', $data);
		$this->load->view('templates/footer');

	}

	public function kontak()
	{
		$data['judul'] = 'Kontak Us';
		$this->load->view('templates/header', $data);
		$this->load->view('user/kontak');
		$this->load->view('templates/footer');
	}

	public function allberita()
	{
		$data['judul'] = 'Semua Informasi MTS';
		$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('templates/header', $data);
		$this->load->view('home/allberita', $data);
		$this->load->view('templates/footer');
	}


//DIPERBAIKI DETAIL INI (REFERENSI ADA DI PROJECT LAMA)//

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Berita';
		$data['berita'] = $this->berita_model->getBeritaById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('home/detail_berita', $data);
		$this->load->view('templates/footer');
	}
} 
