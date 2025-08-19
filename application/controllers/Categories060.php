<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories060 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth060/login');
		$this->load->model('Categories060_model');	
	}

	public function index()
	{
		$data['categories']=$this->Categories060_model->read();
		$this->load->view('categories060/category_list_060',$data);
	}

	public function add()
	{
		if($this->input->post('submit')){
			$this->Categories060_model->create();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Category successfully added !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Category add failed !</p>');
			}
			redirect('categories060');
		}
		$this->load->view('categories060/category_form_060');
	}

	public Function edit($id)
	{
		if($this->input->post('submit')){
		$data['cat']=$this->Categories060_model->read_by($id);
			$this->Categories060_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Category successfully updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Category update failed !</p>');
			}
			redirect('categories060');
		}
		$data['cat']=$this->Categories060_model->read_by($id);
		$this->load->view('categories060/category_form_060', $data);
	}

	public function delete($id)
	{
		$this->Categories060_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Category successfully deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Category delete failed !</p>');
		}
		redirect('categories060');
	}
}