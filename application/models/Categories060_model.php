<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories060_model extends CI_Model {
	public function create()
	{
		$data = array (
            'cate_name_060'      => $this->input->post('cate_name_060'),
            'description_060'      => $this->input->post('description_060')
        );
        $this->db->insert('categories060',$data);
	}

	public function read()
	{
		$query=$this->db->get('categories060');
        return $query->result();
        // OR
        // return $this->db->get('categories060')->result();
    }

    public function read_by($id)
	{
        $this->db->where('cate_id_060',$id);
		$query=$this->db->get('categories060');
        return $query->row();
    }
    
    public function update($id)
    {
        $data = array (
            'cate_name_060'      => $this->input->post('cate_name_060'),
            'description_060'    => $this->input->post('description_060')
        );
        $this->db->where('cate_id_060',$id);
        $this->db->update('categories060',$data);
    }

    public function delete($id)
    {
        $this->db->where('cate_id_060',$id);
        $this->db->delete('categories060');
    }
	
}
