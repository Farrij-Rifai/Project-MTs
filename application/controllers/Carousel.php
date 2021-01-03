<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Carousel extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carousel_model');
        $this->load->library('upload');
	}

	public function index() 
	{
		$data['judul'] = 'Data Carousel';
		$data['carousel'] = $this->carousel_model->getAllCarousel();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/carousel/index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah_carousel()
	{
		$data['judul'] = 'Data Carousel';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/carousel/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/carousel/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/carousel/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/foto/carousel/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul', TRUE);

				$this->carousel_model->simpan_carousel($jdl,$gambar);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('carousel');
		}else{
			redirect('carousel/tambah');
	    } 
	                 
	    }else{
			redirect('carousel/tambah');
		}		
	}

	public function hapus($id)
	{
		$this->carousel_model->hapusDataCarousel($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('carousel');
	} 

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Carousel';
		$data['carousel'] = $this->carousel_model->getCarouselById($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/carousel/detail', $data);
		$this->load->view('admin/footer');
	}
}