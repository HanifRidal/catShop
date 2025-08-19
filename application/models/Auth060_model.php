<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth060_model extends CI_Model {

	public function getuser($username)
	{
        $this->db->where('username_060',$username);
        return $this->db->get('users060')->row();
	}

    public function changepass()
    {
        $this->db->set('password_060', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_060', $this->session->userdata('username'));
        return $this->db->update('users060');
    }

    public function changeprofile($photo)
    {
        if($this->session->userdata('photo') !== 'default.png')
            unlink('./uploads/users/'.$this->session->userdata('photo')); //hapus photo lama
        
        $this->db->set('photo_060', $photo);
        $this->db->where('username_060', $this->session->userdata('username'));
        return $this->db->update('users060');
    }

}