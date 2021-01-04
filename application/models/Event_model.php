<?php 
class Event_model extends CI_Model{ 
 
	function simpan_event($jdl,$gambar)
	{
		$data = array(
			'jdl_event' => $jdl,
			'event_image' =>  $gambar
		);
		return $this->db->INSERT('tbl_event', $data);
	}

	function getCarouselKode($kode)
	{
		$hsl=$this->db->query("SELECT * FROM tbl_event WHERE id_event='$kode'");
		return $hsl;
	}

	function getAllEvent() 
	{
		$this->db->order_by('id_event', 'DESC');
		return $this->db->get('tbl_event')->result_array();
	}

	public function hapusDataEvent($id)
	{
		$row = $this->db->where('id_event',$id)->get('tbl_event')->row();
        unlink('assets/foto/event/'.$row->event_image);
        $this->db->where('id_event', $id);
        $this->db->delete('tbl_event', ['id_event' => $id]);
        return true; 
		//tanda [] bisa diartikan where dan array
		//$this->db->where('berita_id', $id);
		//$this->db->delete('tbl_berita', ['berita_id' => $id]);

	}

	public function getEventById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_event', ['id_event' => $id])->row_array();
	}
}