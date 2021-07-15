<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Form extends CI_Controller {

	//Model di load disini karena ada lebih dari 1 function yang pake
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('pendaftaran_model');
		$this->load->library('upload');
	}

	public function get_kabupaten()
	{
		$id_prov=$this->input->post('id_prov');
		$data=$this->pendaftaran_model->get_kabupaten($id_prov);
		echo json_encode($data);
	}

	public function get_kecamatan()
	{
		$id_kab=$this->input->post('id_kab');
		$data=$this->pendaftaran_model->get_kecamatan($id_kab);
		echo json_encode($data);
	}

	public function index()
	{
		$data['judul'] = 'Daftar PPDB Online';
		$x['data']=$this->pendaftaran_model->get_provinsi();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
		$this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required|numeric');
		$this->form_validation->set_rules('nilai_raport', 'Nilai Raport', 'required');
		$this->form_validation->set_rules('nisn', 'NISN', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pendaftaran/form_daftar', $x);
			$this->load->view('templates/footer');
		} else { 
			$this->_simpan(); 
		}
	}

	//private function _simpan()
	//{
       // $this->pendaftaran_model->tambahDataPendaftaran();
		//$this->session->set_flashdata('flash', 'Pendaftaran Berhasil');
		//redirect('form');
	//}

	private function _simpan()
	{
		//$data = array();
	    $config['upload_path'] = './assets/foto/document/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan 
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	   	if(!empty($_FILES['pasfoto']['name'])){
	   		$this->upload->initialize($config);
	        if ($this->upload->do_upload('pasfoto')){
	        	$gbr1 = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/document/'.$gbr1['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/document/'.$gbr1['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}           
	    }else{
			redirect('form');
		}

		if(!empty($_FILES['fotoijazah']['name'])){
			$this->upload->initialize($config);
	        if ($this->upload->do_upload('fotoijazah')){
	        	$gbr2 = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/document/'.$gbr2['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/document/'.$gbr2['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}           
	    }else{
			redirect('form');
		}

		if(!empty($_FILES['fotokk']['name'])){
			$this->upload->initialize($config);
	        if ($this->upload->do_upload('fotokk')){
	        	$gbr3 = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/document/'.$gbr3['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/document/'.$gbr3['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}           
	    }else{
			redirect('form');
		}

		$nama = htmlspecialchars($this->input->post('nama', true));
		$nik = htmlspecialchars($this->input->post('nik', true));
		$tmp_lahir = htmlspecialchars($this->input->post('tempat_lahir', true));
		$tt_lahir = $this->input->post('tanggal_lahir', true);
		$jenis_kelamin = $this->input->post('jk', true);
		$kewarganegaraan = $this->input->post('kewarganegaraan', true);
		$agama = $this->input->post('agama', true);
		$nama_wali = htmlspecialchars($this->input->post('nama_wali', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$no_tlp = htmlspecialchars($this->input->post('no_telp', true));
		$alamat_pendaftar = htmlspecialchars($this->input->post('alamat', true));
		$id_provinsi = $this->input->post('provinsi', true);
		$id_kabupaten = $this->input->post('kabupaten', true);
		$id_kecamatan = $this->input->post('kecamatan', true);
		$pos = htmlspecialchars($this->input->post('kode_pos', true));
		$pend_akhir = $this->input->post('pendidikan', true);
		$nama_sekolah = htmlspecialchars($this->input->post('nama_sekolah', true));
		$nilai_raport = htmlspecialchars($this->input->post('nilai_raport', true));
		$nisn = htmlspecialchars($this->input->post('nisn', true));

		$pasfoto = $gbr1['file_name'];
		$ijazah = $gbr2['file_name'];
		$kk = $gbr3['file_name'];

		//array dari data diatas
		$data = array(
			'nama' => $nama,
			'nik' => $nik,
			'tmp_lahir' => $tmp_lahir,
			'tt_lahir' => $tt_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'kewarganegaraan' => $kewarganegaraan,
			'agama' => $agama,
			'nama_wali' => $nama_wali,
			'email' => $email,
			'no_tlp' => $no_tlp,
			'alamat_pendaftar' => $alamat_pendaftar,
			'id_provinsi' => $id_provinsi,
			'id_kabupaten' => $id_kabupaten,
			'id_kecamatan' => $id_kecamatan,
			'pos' => $pos,
			'pend_akhir' => $pend_akhir,
			'nama_sekolah' => $nama_sekolah,
			'nilai_raport' => $nilai_raport,
			'nisn' => $nisn,
			'pas_foto' => $pasfoto,
			'ijazah_foto' => $ijazah,
			'kk_foto' => $kk
		);

		$this->pendaftaran_model->simpan($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		$this->session->set_flashdata('flash1', $no_tlp);
		redirect('form');
	}
} 
