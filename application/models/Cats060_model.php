<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats060_model extends CI_Model {
	public function create()
	{
		$data = array (
            'name_060'      => $this->input->post('name_060'),
            'type_060'      => $this->input->post('type_060'),
            'gender_060'    => $this->input->post('gender_060'),
            'age_060'       => $this->input->post('age_060'),
            'price_060'     => $this->input->post('price_060')
        );
        $this->db->insert('cats060',$data);
	}

	public function read($limit, $start)
	{
        $this->db->limit($limit, $start);
		$query=$this->db->get('cats060');
        return $query->result();
        // OR
        // return $this->db->get('cats060')->result();
    }

    public function read_by($id)
	{
        $this->db->where('id_060',$id);
		$query=$this->db->get('cats060');
        return $query->row();
    }
    
    public function update($id)
    {
        $data = array (
            'name_060'      => $this->input->post('name_060'),
            'type_060'      => $this->input->post('type_060'),
            'gender_060'    => $this->input->post('gender_060'),
            'age_060'       => $this->input->post('age_060'),
            'price_060'     => $this->input->post('price_060')
        );
        $this->db->where('id_060',$id);
        $this->db->update('cats060',$data);
    }

    public function uploadphoto($id, $photo)
    {
        $this->db->where('id_060', $id);
        $query = $this->db->get('cats060');
        $last_photo = $query->row()->photo_060;
        if($last_photo !== 'default.png')
            unlink('./uploads/cats/'.$last_photo); //hapus photo lama
        
        $this->db->set('photo_060', $photo);
        $this->db->where('id_060', $id);
        return $this->db->update('cats060');

        // $this->db->set('photo_060', );
        // $this->db->where('id_060',$id);
        // $this->db->update('cats060');

        // $data = array (
        //     'name_060'      => $this->input->post('name_060'),
        //     'type_060'      => $this->input->post('type_060'),
        //     'gender_060'    => $this->input->post('gender_060'),
        //     'age_060'       => $this->input->post('age_060'),
        //     'price_060'     => $this->input->post('price_060')
        // );
        // $this->db->where('id_060',$id);
        // $this->db->update('cats060',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_060',$id);
        $this->db->delete('cats060');
    }
	
    public function validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name_060','Cat name','required');
		$this->form_validation->set_rules('type_060','Cat type','required');
		$this->form_validation->set_rules('gender_060','Cat gender','required');
		$this->form_validation->set_rules('age_060','Cat age','required');
		$this->form_validation->set_rules('price_060','Cat price','required');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

    public function sale ($id)
    {
        $data = array (
            'costumer_name_060'       => $this->input->post('costumer_name_060'),
            'costumer_address_060'    => $this->input->post('costumer_address_060'),
            'costumer_phone_060'      => $this->input->post('costumer_phone_060'),
            'cat_id_060'              => $id
        );
        $this->db->insert('catsales060',$data);

        $this->db->set('sold_060','1');
        $this->db->where('id_060',$id);
        $this->db->update('cats060');
    }

    public function sales()
	{
        $this->db->select('*');
        $this->db->from('catsales060');
        $this->db->join('cats060', 'catsales060.cat_id_060 = cats060.id_060');
		$query=$this->db->get();
        return $query->result();
        // OR
        // return $this->db->get('cats060')->result();
    }
}
