<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users060 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth060/login');
		if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');

		$this->load->model('Users060_model');
	}

	public function index()
	{
		$data['users']=$this->Users060_model->read();
		$this->load->view('user060/user_list_060',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			// if($this->Users060_model->validation()) {
				$this->Users060_model->create();
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('msg','<p style="color:green">User successfully added !</p>');
				} else {
					$this->session->set_flashdata('msg','<p style="color:red">User add failed !</p>');
				}
				redirect('users060');
			// }
		}
		$this->load->view('user060/user_form_060');
	}

	public Function edit($id)
	{
		if($this->input->post('submit')){
		$data['user']=$this->Users060_model->read_by($id);
			$this->Users060_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">User successfully updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">User update failed !</p>');
			}
			redirect('users060');
		}
		$data['user']=$this->Users060_model->read_by($id);
		$this->load->view('user060/user_form_060', $data);
	}

	public function delete($id)
	{
		$this->Users060_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">User successfully deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">User delete failed !</p>');
		}
		redirect('users060');
	}

	public function reset($id)
	{
		$user = $this->Users060_model->read_by($id);
		$this->Users060_model->resetpass($id, $user);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Password successfully reseted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Password reset failed !</p>');
		}
		redirect('users060');
	}
}