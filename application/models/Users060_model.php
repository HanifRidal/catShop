<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users060_model extends CI_Model {
	public function create()
	{
		$data = array (
            'username_060'      => $this->input->post('username_060'),
            'password_060'      => password_hash($this->input->post('usertype_060'), PASSWORD_DEFAULT),
            'usertype_060'      => $this->input->post('usertype_060'),
            'fullname_060'      => $this->input->post('fullname_060')
        );
        $this->db->insert('users060',$data);
	}

	public function read()
	{
		$query=$this->db->get('users060');
        return $query->result();
        // OR
        // return $this->db->get('users060')->result();
    }

    public function read_by($id)
	{
        $this->db->where('user_id_060',$id);
		$query=$this->db->get('users060');
        return $query->row();
    }
    
    public function update($id)
    {
        $data = array (
            'username_060'      => $this->input->post('username_060'),
            'password_060'      => password_hash($this->input->post('usertype_060'), PASSWORD_DEFAULT),
            'usertype_060'      => $this->input->post('usertype_060'),
            'fullname_060'      => $this->input->post('fullname_060')
        );
        $this->db->where('user_id_060',$id);
        $this->db->update('users060',$data);
    }

    public function delete($id)
    {
        $this->db->where('user_id_060',$id);
        $this->db->delete('users060');
    }

    public function resetpass($id, $user)
	{
        

        $this->db->set('password_060',password_hash($user->usertype_060, PASSWORD_DEFAULT));
        $this->db->where('user_id_060',$id);
        $this->db->update('users060');
        // $data = $this->db->query("SELECT usertype_060 FROM users060 where user_id_060=$id");
        // return $data->row();
        
        // $query=$this->db->select('usertype_060')->where('user_id_060', $id)->get('users060');
        // $num_row = $query->num_rows();
        // $result=$query->row();

        // $data = array (
        //     'password_060'      => password_hash($this->input->post('usertype_060'), PASSWORD_DEFAULT)
        // );
        // $this->db->update('users060', $data);
        // return $this->db->get('users060')->row();
        
	}
}
