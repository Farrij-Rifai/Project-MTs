<?php
class Output_nilai_model extends CI_Model
{
	public function validationNIS($nis)
	{
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('tbl_nilai');
	}

	public function getPts1($nis)
	{
		$this->db->where('kategori', 'PTS1');
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('tbl_nilai')->row_array();
	}

	public function getPas($nis)
	{
		$this->db->where('kategori', 'PAS');
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('tbl_nilai')->row_array();
	}

	public function getPts2($nis)
	{
		$this->db->where('kategori', 'PTS2');
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('tbl_nilai')->row_array();
	}

	public function getPat($nis)
	{
		$this->db->where('kategori', 'PAT');
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('tbl_nilai')->row_array();
	}




	//Modal nilai kelas 7

	public function getPts1_7($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPas_7($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPts2_7($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPat_7($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}

	//End modal nilai kelas 7

	//Modal nilai kelas 8

	public function getPts1_8($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPas_8($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPts2_8($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPat_8($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}

	//End modal nilai kelas 8

	//Modal nilai kelas 9

	public function getPts1_9($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPas_9($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPts2_9($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}
	public function getPat_9($value)
	{
		$this->db->where('nis_siswa',$value);
		return $this->db->get('tbl_nilai')->result_array();
	}

	//End modal nilai kelas 9
}