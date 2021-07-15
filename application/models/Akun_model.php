<?php  
class Akun_model extends CI_Model
{
	public function getAllData() 
	{
		$this->db->order_by('id_admin', 'ASC');
		return $this->db->get('admin')->result_array();
	} 

	public function simpan($data)
	{
		return $this->db->INSERT('admin', $data);
	}

	public function hapusDataAkun($id)
	{
        $this->db->where('id_admin', $id);
        $this->db->delete('admin', ['id_admin' => $id]);
        return true;
	}
}