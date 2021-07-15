<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Nilai extends CI_Controller 
{ 
	public function __construct() 
	{
		parent::__construct(); 
		$this->load->model('nilai_model');
		if($this->session->userdata('nama') == null){
      		redirect('loginadmin');
    	}
	}

	public function simpan_data()
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$kelas = $this->input->post('kelas', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);
		$prakarya = $this->input->post('prakarya', true);
		$barab = $this->input->post('barab', true);
		$akidah = $this->input->post('akidah', true);
		$akhlak = $this->input->post('akhlak', true);
		$quran_hadits = $this->input->post('quran_hadits', true);
		$ski = $this->input->post('ski', true);
		$pesantren = $this->input->post('pesantren', true);
		$fiqih = $this->input->post('fiqih', true);
		$tahfidz = $this->input->post('tahfidz', true);
		$pramuka = $this->input->post('pramuka', true);
		$hadroh = $this->input->post('hadroh', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kelas_siswa' => $kelas,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik,
			'prakarya' => $prakarya,
			'bhs_arab' => $barab,
			'akidah' => $akidah,
			'akhlak' => $akhlak,
			'quran_hadits' => $quran_hadits,
			'ski' => $ski,
			'pesantren' => $pesantren,
			'fiqih' => $fiqih,
			'tahfidz' => $tahfidz,
			'pramuka' => $pramuka,
			'hadroh' => $hadroh,
		);

        $this->nilai_model->simpan($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		if ($kategori == 'PTS1' && $kelas == '7') {
			redirect('admin/nilai/pts17');
		} else if ($kategori == 'PTS2' && $kelas == '7') {
			redirect('admin/nilai/pts27');
		} else if ($kategori == 'PAT' && $kelas == '7') {
			redirect('admin/nilai/pat7');
		} else if ($kategori == 'PAS' && $kelas == '7') {
			redirect('admin/nilai/pas7');
		} 
		//kelas 8
		else if ($kategori == 'PTS1' && $kelas == '8') {
			redirect('admin/nilai/pts18');
		} else if ($kategori == 'PTS2' && $kelas == '8') {
			redirect('admin/nilai/pts28');
		} else if ($kategori == 'PAT' && $kelas == '8') {
			redirect('admin/nilai/pat8');
		} else if ($kategori == 'PAS' && $kelas == '8') {
			redirect('admin/nilai/pas8');
		} 
		//kelas 9
		else if ($kategori == 'PTS1' && $kelas == '9') {
			redirect('admin/nilai/pts19');
		} else if ($kategori == 'PTS2' && $kelas == '9') {
			redirect('admin/nilai/pts29');
		} else if ($kategori == 'PAT' && $kelas == '9') {
			redirect('admin/nilai/pat9');
		} else if ($kategori == 'PAS' && $kelas == '9') {
			redirect('admin/nilai/pas9');
		}
	}

	public function edit_data($id)
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$kelas = $this->input->post('kelas', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);
		$prakarya = $this->input->post('prakarya', true);
		$barab = $this->input->post('barab', true);
		$akidah = $this->input->post('akidah', true);
		$akhlak = $this->input->post('akhlak', true);
		$quran_hadits = $this->input->post('quran_hadits', true);
		$ski = $this->input->post('ski', true);
		$pesantren = $this->input->post('pesantren', true);
		$fiqih = $this->input->post('fiqih', true);
		$tahfidz = $this->input->post('tahfidz', true);
		$pramuka = $this->input->post('pramuka', true);
		$hadroh = $this->input->post('hadroh', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kelas_siswa' => $kelas,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik,
			'prakarya' => $prakarya,
			'bhs_arab' => $barab,
			'akidah' => $akidah,
			'akhlak' => $akhlak,
			'quran_hadits' => $quran_hadits,
			'ski' => $ski,
			'pesantren' => $pesantren,
			'fiqih' => $fiqih,
			'tahfidz' => $tahfidz,
			'pramuka' => $pramuka,
			'hadroh' => $hadroh,
		);

        $this->nilai_model->edit($data,$id);
		$this->session->set_flashdata('flash', 'Diubah');
		if ($kategori == 'PTS1' && $kelas == '7') {
			redirect('admin/nilai/pts17');
		} else if ($kategori == 'PTS2' && $kelas == '7') {
			redirect('admin/nilai/pts27');
		} else if ($kategori == 'PAT' && $kelas == '7') {
			redirect('admin/nilai/pat7');
		} else if ($kategori == 'PAS' && $kelas == '7') {
			redirect('admin/nilai/pas7');
		} 
		//kelas 8
		else if ($kategori == 'PTS1' && $kelas == '8') {
			redirect('admin/nilai/pts18');
		} else if ($kategori == 'PTS2' && $kelas == '8') {
			redirect('admin/nilai/pts28');
		} else if ($kategori == 'PAT' && $kelas == '8') {
			redirect('admin/nilai/pat8');
		} else if ($kategori == 'PAS' && $kelas == '8') {
			redirect('admin/nilai/pas8');
		} 
		//kelas 9
		else if ($kategori == 'PTS1' && $kelas == '9') {
			redirect('admin/nilai/pts19');
		} else if ($kategori == 'PTS2' && $kelas == '9') {
			redirect('admin/nilai/pts29');
		} else if ($kategori == 'PAT' && $kelas == '9') {
			redirect('admin/nilai/pat9');
		} else if ($kategori == 'PAS' && $kelas == '9') {
			redirect('admin/nilai/pas9');
		}
	}

//KELAS 7

	//Controller PTS 1
	public function pts17()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 1 Kelas 7';
		$data['nilai'] = $this->nilai_model->getNilaiPts1_7();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pts1', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts17($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts17');
	}

	//End Controller PTS 1

	//Controller PTS 2
	public function pts27()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 2 Kelas 7';
		$data['nilai'] = $this->nilai_model->getNilaiPts2_7();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pts2', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts27($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts27');
	}

	//End Controller PTS 2

	//Controller PAT
	public function pat7()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAT Kelas 7';
		$data['nilai'] = $this->nilai_model->getNilaiPat_7();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pat', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspat7($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pat7');
	}

	//End Controller PAT

	//Controller PAS
	public function pas7()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAS Kelas 7';
		$data['nilai'] = $this->nilai_model->getNilaiPas_7();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pas', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspas7($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pas7');
	}

//End KELAS 7

//KELAS 8

	//Controller PTS 1
	public function pts18()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 1 Kelas 8';
		$data['nilai'] = $this->nilai_model->getNilaiPts1_8();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas8/pts1', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts18($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts18');
	}

	//End Controller PTS 1

	//Controller PTS 2
	public function pts28()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 2 Kelas 8';
		$data['nilai'] = $this->nilai_model->getNilaiPts2_8();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas8/pts2', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts28($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts28');
	}

	//End Controller PTS 2

	//Controller PAT
	public function pat8()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAT Kelas 8';
		$data['nilai'] = $this->nilai_model->getNilaiPat_8();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas8/pat', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspat8($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pat8');
	}

	//End Controller PAT

	//Controller PAS
	public function pas8()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAS Kelas 8';
		$data['nilai'] = $this->nilai_model->getNilaiPas_8();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas8/pas', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspas8($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pas8');
	}

//End KELAS 8

//KELAS 9

	//Controller PTS 1
	public function pts19()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 1 Kelas 9';
		$data['nilai'] = $this->nilai_model->getNilaiPts1_9();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pts1', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts19($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts19');
	}

	//End Controller PTS 1

	//Controller PTS 2
	public function pts29()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PTS 2 Kelas 9';
		$data['nilai'] = $this->nilai_model->getNilaiPts2_9();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pts2', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspts29($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pts29');
	}

	//End Controller PTS 2

	//Controller PAT
	public function pat9()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAT Kelas 9';
		$data['nilai'] = $this->nilai_model->getNilaiPat_9();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pat', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspat9($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pat9');
	}

	//End Controller PAT

	//Controller PAS
	public function pas9()
	{
		$data['admin'] = $this->session->userdata('nama');
		$data['judul'] = 'Data Nilai PAS Kelas 9';
		$data['nilai'] = $this->nilai_model->getNilaiPas_9();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pas', $data);
		$this->load->view('admin/footer');
	}

	public function hapuspas9($id)
	{
		$this->nilai_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/nilai/pas9');
	}

//End KELAS 9
}