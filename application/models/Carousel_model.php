<?php 
class Carousel_model extends CI_Model{ 
 
	function simpan_carousel($jdl,$gambar)
	{
		$data = array(
			'jdl_carousel' => $jdl,
			'carousel_image' =>  $gambar
		);
		return $this->db->INSERT('tbl_carousel', $data);
	}

	function getCarouselKode($kode)
	{
		$hsl=$this->db->query("SELECT * FROM tbl_carousel WHERE id_carousel='$kode'");
		return $hsl;
	}

	function getAllCarousel() 
	{
		$this->db->order_by('id_carousel', 'DESC');
		return $this->db->get('tbl_carousel')->result_array();
	}

	public function hapusDataCarousel($id)
	{
		$row = $this->db->where('id_carousel',$id)->get('tbl_carousel')->row();
        unlink('assets/foto/carousel/'.$row->carousel_image);
        $this->db->where('id_carousel', $id);
        $this->db->delete('tbl_carousel', ['id_carousel' => $id]);
        return true; 
		//tanda [] bisa diartikan where dan array
		//$this->db->where('berita_id', $id);
		//$this->db->delete('tbl_berita', ['berita_id' => $id]);
	}

	public function getCarouselById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_carousel', ['id_carousel' => $id])->row_array();
	}
}