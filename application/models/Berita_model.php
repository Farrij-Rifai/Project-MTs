<?php  
class Berita_model extends CI_Model
{ 
 
	public function simpan_berita($jdl,$berita,$gambar) 
	{
		//$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		//return $hsl;
		//Insert Menggunakan Modul CODEIGNITER 
		$data = array(
			'berita_judul' => $jdl, 
			'berita_isi' =>  $berita,
			'berita_image' => $gambar
		);
		return $this->db->INSERT('tbl_berita', $data);
	}
 
	public function get_berita_by_kode($kode)
	{
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
		return $hsl;
	}

	public function getAllBerita() 
	{
		$this->db->order_by('berita_id', 'DESC');
		return $this->db->get('tbl_berita')->result_array();
	}

	//PAGINATION QUERY UNTUK HALAMAN USER BESOK!!!//
	public function getBerita($limit, $start) 
	{
		$this->db->ORDER_BY("berita_id", "DESC");
		$query = $this->db->get('tbl_berita', $limit, $start);
		return $query->result_array();
	}

	public function countAllBerita()
	{
		return $this->db->get('tbl_berita')->num_rows();
	}

	public function hapusDataBerita($id)
	{
		$row = $this->db->where('berita_id',$id)->get('tbl_berita')->row();
        unlink('assets/foto/berita/'.$row->berita_image);
        $this->db->where('berita_id', $id);
        $this->db->delete('tbl_berita', ['berita_id' => $id]);
        return true; 
		//tanda [] bisa diartikan where dan array
		//$this->db->where('berita_id', $id);
		//$this->db->delete('tbl_berita', ['berita_id' => $id]);

	}

	public function getBeritaById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_berita', ['berita_id' => $id])->row_array();
	}

	public function updateBeritaFoto($jdl,$berita,$gambar,$id)
	{
		$this->db->where('berita_id', $id);
		$data = array(
			'berita_judul' => $jdl, 
			'berita_isi' =>  $berita,
			'berita_image' => $gambar
		);
		return $this->db->update('tbl_berita', $data);
	}

	public function updateBerita($jdl,$berita,$id)
	{
		$this->db->where('berita_id', $id);
		$data = array(
			'berita_judul' => $jdl,
			'berita_isi' =>  $berita,
		);
		return $this->db->update('tbl_berita', $data);
	}
}