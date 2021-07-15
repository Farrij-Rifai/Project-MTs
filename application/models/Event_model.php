<?php 
class Event_model extends CI_Model{
 
	public function simpan_event($jdl,$desk,$gambar)
	{
		$data = array(
			'jdl_event' => $jdl,
			'desk_event' => $desk,
			'event_image' =>  $gambar
		);
		return $this->db->INSERT('tbl_event', $data);
	}

	//PAGINATION QUERY UNTUK HALAMAN USER BESOK!!!//
	public function getEvent($limit, $start) 
	{
		$this->db->ORDER_BY("id_event", "DESC");
		$query = $this->db->get('tbl_event', $limit, $start);
		return $query->result_array();
	}

	public function countAllEvent()
	{
		return $this->db->get('tbl_event')->num_rows();
	}

	public function getAllEvent() 
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
		//$this->db->delete('tbl_event', ['id_event' => $id]);

	}

	public function getEventById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_event', ['id_event' => $id])->row_array();
	}

	public function updateEventFoto($jdl,$desk,$gambar,$id)
	{
		$this->db->where('id_event', $id);
		$data = array(
			'jdl_event' => $jdl, 
			'desk_event' =>  $desk_event,
			'event_image' => $gambar
		);
		return $this->db->update('tbl_event', $data);
	}

	public function updateEvent($jdl,$desk,$id)
	{
		$this->db->where('id_event', $id);
		$data = array(
			'jdl_event' => $jdl,
			'desk_event' =>  $desk,
		);
		return $this->db->update('tbl_event', $data);
	}
}