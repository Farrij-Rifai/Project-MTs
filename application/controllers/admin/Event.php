<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Event extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
        $this->load->library('upload');
        if($this->session->userdata('nama') == null){
      		redirect('loginadmin');
    	}
	}

	public function index() 
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['foto'] = $this->session->userdata('foto_admin');
		$data['judul'] = 'Data Event MTs Bima Bhakti Pertiwi';
		$data['event'] = $this->event_model->getAllEvent();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/event/index');
		$this->load->view('admin/footer');
	}

	public function tambah_event()
	{
		$data['judul'] = 'Data Event';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/event/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/event/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config); 
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/event/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 4679;
	            $config['height']= 1067;
	            $config['new_image']= './assets/foto/event/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul', TRUE);
                $desk=$this->input->post('deskripsi', TRUE);

				$this->event_model->simpan_event($jdl,$desk,$gambar);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('event');
		}else{
			redirect('admin/event');
	    } 
	                 
	    }else{
			redirect('admin/event');
		}		
	}

	public function hapus($id)
	{
		$this->event_model->hapusDataEvent($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/event');
	} 

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Carousel';
		$data['event'] = $this->event_model->getCarouselById($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/event/detail', $data);
		$this->load->view('admin/footer');
	}

	public function ubah_data($id)
	{
		$config['upload_path'] = './assets/foto/event/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){

	        	//Unlink atau hapus Gambar yang sebelumnya
	        	$row = $this->db->where('berita_id',$id)->get('tbl_berita')->row();
        		unlink('assets/foto/event/'.$row->berita_image);

	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library'] = 'gd2';
	            $config['source_image'] = './assets/foto/event/'.$gbr['file_name'];
	            $config['create_thumb'] = FALSE;
	            $config['maintain_ratio'] = FALSE;
	            $config['quality'] = '60%';
	            $config['width']= 4679;
	            $config['height']= 1067;
	            $config['new_image'] = './assets/foto/event/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul', TRUE);
                $desk=$this->input->post('deskripsi', TRUE);

				$this->event_model->updateEventFoto($jdl,$desk,$gambar,$id);
				$this->session->set_flashdata('flash', 'Diubah');
				redirect('admin/event');
			}else{
				redirect('admin/event');
	    	}             
	    }else{
			$jdl=$this->input->post('judul', TRUE);
            $desk=$this->input->post('deskripsi', TRUE);

            $this->event_model->updateEvent($jdl,$desk,$id);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/event');
		}		
	}
}