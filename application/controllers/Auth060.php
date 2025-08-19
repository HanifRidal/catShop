<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth060 extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth060_model');	
	}

    public function login()
	{
		if ($this->input->post('login') && $this->validation('login')) {
            $login=$this->Auth060_model->getuser($this->input->post('username_060'));
            if ($login != NULL) {
                if (password_verify($this->input->post('password_060'), $login->password_060)){
                    $data = array (
                        'username' => $login->username_060,
                        'usertype' => $login->usertype_060,
                        'fullname' => $login->fullname_060,
                        'photo'    => $login->photo_060
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');
                }
            }
            $this->session->set_flashdata('msg', '<p style="color:red">Invalid username or password !</p>');
        }
        $this->load->view('auth060/form_login_060');
	}

    public function logout()
	{
        $this->session->sess_destroy();
		redirect('auth060/login');
    }

    public function changepass()
	{
		if(! $this->session->userdata('username')) redirect('auth060/login'); //FILTER LOGIN
        if($this->input->post('change') && $this->validation('change')){
            $change=$this->Auth060_model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'), $change->password_060)) {
                if ($this->Auth060_model->changepass())
                    $this->session->set_flashdata('msg', '<p style="color:green">Password successfully changed !</p>');
                else
                    $this->session->set_flashdata('msg', '<p style="color:red">Change password failed !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p style="color:red">Wrong old password !</p>');
            }
        }
		$this->load->view('auth060/form_password_060');
	}

    public function changeprofile()
	{
		if(! $this->session->userdata('username')) redirect('auth060/login'); //FILTER LOGIN
        $data['error']='';
        if($this->input->post('upload')){
            if($this->upload()) { //jika sukses upload
                $this->Auth060_model->changeprofile($this->upload->data('file_name')); //ubah data foto didatabase
                $this->session->set_userdata('photo', $this->upload->data('file_name')); //update data session
                $this->session->set_flashdata('msg', '<p style="color:green">Photo successfully changed !</p>'); //pesan sukses
            } else {
                $data['error'] = $this->upload->display_errors(); //jika gagal upload
            }
        }
		$this->load->view('auth060/user_profile_060', $data);
	}

    private function upload()
    {
        $config['upload_path']  = './uploads/users/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']  = 100;
        $config['min_size']  = 1024;
        $config['max_height']  = 768;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    public function validation($type)
	{
		$this->load->library('form_validation');

        if($type=='login'){
            $this->form_validation->set_rules('username_060','Username','required');
            $this->form_validation->set_rules('password_060','Password','required');
        }else{
            $this->form_validation->set_rules('oldpassword','Old Password','required');
            $this->form_validation->set_rules('newpassword','New Password','required');
        }
		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
        // return $this->form_validation->run()?TRUE:FALSE;
	}
}