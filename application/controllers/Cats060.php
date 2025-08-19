<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats060 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('username')) redirect('auth060/login');
		if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$this->load->model('Cats060_model');
		$this->load->model('Categories060_model');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] 		= site_url('cats060/index');
		$config['total_rows'] 		= $this->db->count_all('cats060');
		$config['per_page']         = 5;
		// $choice = $config["total_rows"]/$config["per_page"];
		
		$config['next_link'] = '>>';
        $config['prev_link'] = '<<';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);

		$limit = $config['per_page'];
		$start = $this->uri->segment(3)?$this->uri->segment(3):0;

		$data['i']		= $start + 1;
		$data["links"] = $this->pagination->create_links();
		$data['cats']	= $this->Cats060_model->read($limit, $start);
		$this->load->view('cats060/cats_list_060',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			// if($this->Cats060_model->validation()) {
				$this->Cats060_model->create();
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('msg','<p style="color:green">Cat successfully added !</p>');
				} else {
					$this->session->set_flashdata('msg','<p style="color:red">Cat add failed !</p>');
				}
				redirect('cats060');
			// }
		}
		$data['category']=$this->Categories060_model->read();
		$this->load->view('cats060/cat_form_060', $data);
	}

	public Function edit($id)
	{
		if($this->input->post('submit')){
			$data['cat']=$this->Cats060_model->read_by($id);
			$this->Cats060_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Cat successfully updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Cat update failed !</p>');
			}
			redirect('cats060');
		}
		$data['category']=$this->Categories060_model->read();
		$data['cat']=$this->Cats060_model->read_by($id);
		$this->load->view('cats060/cat_form_060', $data);
	}

	public Function changephoto($id)
	{
		if($this->input->post('upload')){
			$data['cat']=$this->Cats060_model->read_by($id);
			
			if($this->upload()) {
				if ($this->db->affected_rows() > 0) {
					$this->Cats060_model->uploadphoto($id, $this->upload->data('file_name')); //ubah data foto didatabase
					$this->session->set_flashdata('msg', '<p style="color:green">Photo successfully changed !</p>');
				} else {
					$this->session->set_flashdata('msg','<p style="color:red">Cat update failed !</p>');
				}
			}
		}
		$data['cat']=$this->Cats060_model->read_by($id);
		$this->load->view('cats060/cat_change_photo_060', $data);
	}

	private function upload()
    {
        $config['upload_path']  = './uploads/cats/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']  = 100;
        $config['min_size']  = 1024;
        $config['max_height']  = 768;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('cat_photo');
    }

	public function delete($id)
	{
		$this->Cats060_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:green">Cat successfully deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Cat delete failed !</p>');
		}
		redirect('cats060');
	}

	public function sale($id)
	{
		if ($this->input->post('submit')) {
			$this->Cats060_model->sale($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">Cat successfully sold !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Cat sale failed !</p>');
			}
			redirect('cats060');
		}
		$data['cat']=$this->Cats060_model->read_by($id);
		$this->load->view('cats060/cat_sale_060', $data);
	}

	public function sales()
	{
		if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$data['sales']=$this->Cats060_model->sales();
		$this->load->view('cats060/sale_list_060',$data);
	}
}