<?php
class Ppdb_model extends CI_Model {
    
    public function getAllDataPendaftaran()
    {
    	$this->db->select('*');
		$this->db->from('pendaftar');
		$this->db->order_by('id_pendaftar', 'ASC');
 		$this->db->join('wilayah_provinsi','wilayah_provinsi.id=pendaftar.id_provinsi');
 		$this->db->join('wilayah_kabupaten','wilayah_kabupaten.id=pendaftar.id_kabupaten');
 		$this->db->join('wilayah_kecamatan','wilayah_kecamatan.id=pendaftar.id_kecamatan');
 		$query = $this->db->get();
 		return $query->result_array();


        //$this->db->order_by('id_pendaftar', 'ASC');
        //return $this->db->get('pendaftar')->result_array();
    }

    public function hapusDataPPDB($id)
	{
		//besok kalau memakai foto
		//$row = $this->db->where('berita_id',$id)->get('tbl_berita')->row();
        //unlink('assets/foto/berita/'.$row->berita_image);
        //$this->db->where('berita_id', $id);
        //$this->db->delete('tbl_berita', ['berita_id' => $id]);
        //return true;
        
		//tanda [] bisa diartikan where dan array
		$this->db->where('id_pendaftar', $id);
		$this->db->delete('pendaftar', ['id_pendaftar' => $id]);
        return true;
	}

    public function getDataPendaftaranBy($id)
    {
        //tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
        return $this->db->get_where('pendaftar', ['id_pendaftar' => $id])->row_array();
    }
} 