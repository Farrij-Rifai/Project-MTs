<?php  
class Nilai_model extends CI_Model
{

	public function simpan($data)
	{
		return $this->db->INSERT('tbl_nilai', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('tbl_nilai', ['id' => $id]);
	    return true;
	}

	public function edit($data,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_nilai', $data);
	}

//Kelas 7

		//----PTS 1----//
		public function getNilaiPts1_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			$this->db->where('kelas_siswa', '7');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		public function getNilaiPts2_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			$this->db->where('kelas_siswa', '7');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 2----//

		//----PAT----//
		public function getNilaiPat_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			$this->db->where('kelas_siswa', '7');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		public function getNilaiPas_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			$this->db->where('kelas_siswa', '7');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAS----//

//End Kelas 7

//Kelas 8

		//----PTS 1----//
		function getNilaiPts1_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			$this->db->where('kelas_siswa', '8');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		function getNilaiPts2_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			$this->db->where('kelas_siswa', '8');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 2----//

		//----PAT----//
		function getNilaiPat_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			$this->db->where('kelas_siswa', '8');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		function getNilaiPas_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			$this->db->where('kelas_siswa', '8');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAS----//

//End Kelas 8

//Kelas 9

		//----PTS 1----//
		function getNilaiPts1_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			$this->db->where('kelas_siswa', '9');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		function getNilaiPts2_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			$this->db->where('kelas_siswa', '9');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PTS 2----//

		//----PAT----//
		function getNilaiPat_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			$this->db->where('kelas_siswa', '9');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		function getNilaiPas_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			$this->db->where('kelas_siswa', '9');
			return $this->db->get('tbl_nilai')->result_array();
		}

		//----End PAS----//

//End Kelas 9
}
